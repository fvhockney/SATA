<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Post extends Model
{
  //

  protected $fillable = [
    'id', 'user_id', 'title', 'subtitle','slug', 'content', 'author', 'author_email', 'display_img', 'created_at', 'modified_at'
  ];


  public function user(){

    return $this->belongsTo(User::class);

  }

  public function tags(){

    return $this->belongsToMany(Tag::class);

  }

  public function scopeFilter($query, $filters){

    if(isset($filters['month'])){
      $month=$filters['month'];
      $query->whereMonth('created_at', Carbon::parse($month)->month);
    }
    if(isset($filters['year'])){
      $year=$filters['year'];
      $query->whereYear('created_at', $year);
    }
  }

  public static function archives(){
    return static::selectRaw('year(created_at) year, monthname(created_at) month, count(*) published')
    ->groupBy('year', 'month')
    ->orderByRaw('min(created_at) desc')
    ->get()
    ->toArray();
  }

  public function getRouteKeyName(){

    return 'slug';

  }

}
