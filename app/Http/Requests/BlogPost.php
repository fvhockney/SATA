<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogPost extends FormRequest
{

  protected $redirect;
  /**
  * Determine if the user is authorized to make this request.
  *
  * @return bool
  */
  public function authorize()
  {
    return true;
  }

  /**
  * Get the validation rules that apply to the request.
  *
  * @return array
  */
  public function rules()
  {
    $redirect = redirect()->back()->withErrors($this)->withInput();



    return [
      'title' => 'required',
      'subtitle' => 'required',
      'author' => 'required_if:otherAuthor,yes',
      'authorEmail' => 'required_if:otherAuthor,yes',
      'displayImage' => 'nullable|image|dimensions:ratio=1',
      'content' => 'required',
      'tags' => 'nullable'
    ];
  }

  /**
  * Configure the validator instance.
  *
  * @param  \Illuminate\Validation\Validator  $validator
  * @return void
  */
  public function withValidator($validator)
  {
    $validator->sometimes('authorEmail', 'email', function ($request) {
      return $request->otherAuthor == 'yes';
    });
  }
}
