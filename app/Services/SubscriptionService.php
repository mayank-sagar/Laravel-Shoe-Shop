<?php
namespace App\Services;
use App\Models\Subscription;

class SubscriptionService {

    public function create($inputs) {
      Subscription::create($inputs);
    }

    public function isAlreadyExists($email) {
         return Subscription::whereRaw('lower(email) = lower("'.$email.'")')->first();
    }

}
?>