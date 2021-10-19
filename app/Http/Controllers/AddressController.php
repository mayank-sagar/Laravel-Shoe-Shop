<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;
use App\Services\AddressService;
use Illuminate\Support\Facades\Session;
class AddressController extends Controller
{
    private $addressService = null;

    public function __construct(AddressService $addressService) {
        $this->addressService = $addressService;
    }

    public function createShippingAddress(Request $request) {
        $request->validate([
            'address_1' => 'required|max:40',
            'address_2'  => 'max:40',
            'state'=> 'required|max:40',
            'country' => 'required|max:40',
            'pincode'=> 'required|max:20',
            'contact' => 'required|numeric|digits_between:6,15',
        ]);
        $address = $this->addressService->createAddress($request->only(['address_1','address_2','state','country','pincode','contact']));
        Session::put('shipping_address_id',$address->id);
        return redirect()->route('checkout');
    }

    public function getShippingAddress() {
        $shippingAddressId  = Session::get('shipping_address_id');
        $shippingAddress = null;
        if($shippingAddressId) {
            $shippingAddress = Address::findOrFail($shippingAddressId);
        }
        return view('shipping-address')->with(['shippingAddress' => $shippingAddress]);
    }
}
