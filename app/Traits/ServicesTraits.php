<?php

namespace App\Traits;

use App\Booking;
use App\Contact;
use App\Note;

trait ServicesTraits
{
    public function contact() {
        return $this->morphToMany(Contact::class, 'contactable');
    }

    public function booking() {
        return $this->morphMany(Booking::class, 'bookable');
    }

    public function note() {
        return $this->morphMany(Note::class, 'noteable');
    }

    public function associateOrDissasociateContact($request) {
        if ($request->action === 'remove contact') {
            $this->contact()->detach($request->contact['id']);
        }

        if ($request->action === 'add contact') {
            if ( $request->contact['id'] === null ) {
                $this->contact()->create($request->contact);
            }
            $this->contact()->attach($request->contact[ 'id' ]);
        }
    }

    public function addContactsToNewService($request) {
        if ( $request->filled('contacts') ) {
            $contacts = $request->contacts;
            foreach ( $contacts as $contact ) {
                $contact = collect($contact)->except([
                    'notes',
                ])->all();
                if ( $contact['id'] === null ) {
                    $contact = Contact::create($contact);
                }
                $this->contact()->attach($contact[ 'id' ]);
            }
        }
    }
}