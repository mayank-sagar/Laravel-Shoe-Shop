<?php
namespace App\Services;
use App\Models\Address;

class AddressService {

    public function createAddress($inputs) {
        return Address::create($inputs);
    }
}

?>