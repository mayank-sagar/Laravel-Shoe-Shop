<?php

namespace App\Http\Controllers;

use App\Services\SubscriptionService;
use Illuminate\Http\Request;

class SubscriptionController extends Controller
{
    
    private $subscriptionService;
    public function __construct(SubscriptionService $subscriptionService)
    {
            $this->subscriptionService = $subscriptionService;
    }

    public function create(Request $request) {
        $request->validate([
            'email' => 'required|email|max:30'
        ]);
        $inputs = $request->only(['email']);
        if($this->subscriptionService->isAlreadyExists($inputs['email'])) {
            return redirect()->back()->with('message',"You already subscribed to our newsletter.");
        }
        $this->subscriptionService->create($inputs);
        return redirect()->back()->with('message',"Thanks subscribing. It means lot to us.");
    }
}
