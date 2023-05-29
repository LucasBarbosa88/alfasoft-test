<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Contact extends Model
{
    use HasFactory, SoftDeletes;

    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id', 'name', 'contact', 'email'
    ];

    public static function create($data)
    {
        $contact = new Contact;
        $contact->name  		= $data->name;
        $contact->contact  		= $data->contact;
        $contact->email  		= $data->email;
        if($contact->save()){
            return $contact;
        }

        return false;
    }

    public static function updateContact($data)
    {
        $contact = Contact::find($data->id);
        if($contact){
            $contact->name  		= $data->name;
            $contact->contact  		= $data->contact;
            $contact->email  		= $data->email;
            if($contact->save()){
                return $contact;
            }
        }
        return false;
    }
}
