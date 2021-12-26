@extends('layouts.site')

@section('title','Checkout')

@section('content')
<!-- new collection section start -->
<div class="layout_padding collection_section">
    <div class="container">
        <div class="collection_section_2 mb-4">
            <h1>Shipping Address</h1>
            <hr/>
            <form action="{{ route('shipping-address.create') }}" method="POST">
                @csrf
                <div class="mb-3">
                  <label for="address1" class="form-label">Address 1</label>
                  <input value="{{old('address_1') ? old('address_1') : ''}}" name="address_1" type="text" class="form-control" id="address1" aria-describedby="emailHelp">
                  @if($errors->has('address_1'))
                    <div class="text-danger">{{ $errors->first('address_1') }}</div>
                  @endif
                </div>
                <div class="mb-3">
                    <label for="address2" class="form-label">Address 2</label>
                    <input value="{{old('address_2') ? old('address_2') : ''}}" name="address_2" type="text" class="form-control" id="address2" aria-describedby="emailHelp">
                    @if($errors->has('address_2'))
                        <div class="text-danger">{{ $errors->first('address_2') }}</div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="state" class="form-label">County/State</label>
                    <input value="{{old('state') ? old('state') : ''}}" name="state" type="text" class="form-control" id="state" aria-describedby="emailHelp">
                    @if($errors->has('state'))
                        <div class="text-danger">{{ $errors->first('state') }}</div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="country" class="form-label">Country</label>
                    <input value="{{old('country') ? old('country') : ''}}" name="country" type="text" class="form-control" id="country" aria-describedby="emailHelp">
                    @if($errors->has('country'))
                        <div class="text-danger">{{ $errors->first('country') }}</div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="pin" class="form-label">Pin/Zip Code.</label>
                    <input value="{{old('pincode') ? old('pincode') : ''}}" name="pincode" type="text" class="form-control" id="pin" aria-describedby="emailHelp">
                    @if($errors->has('pincode'))
                        <div class="text-danger">{{ $errors->first('pincode') }}</div>
                    @endif
                </div>
                <div class="mb-3">
                    <label for="contact" class="form-label">Contact No.</label>
                    <input value="{{old('contact') ? old('contact') : ''}}" name="contact" type="text" class="form-control" id="contact" aria-describedby="emailHelp">
                    @if($errors->has('contact'))
                        <div class="text-danger">{{ $errors->first('contact') }}</div>
                    @endif
                </div>
                <div class="d-flex justify-content-end">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                
              </form>

        </div>
    </div>
</div>

@endsection