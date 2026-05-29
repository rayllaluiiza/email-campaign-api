<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;

#[Fillable(['contact_list_id', 'name', 'email'])]
class Contact extends Model
{
    public function contactList()
    {
        return $this->belongsTo(ContactList::class);
    }
}
