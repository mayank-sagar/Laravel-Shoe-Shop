<?php
namespace App\Services;
use App\Models\Contact;

class ContactService {

    function create($inputs) {
        return Contact::create($inputs);
    }

}