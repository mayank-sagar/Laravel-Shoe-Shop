@extends('layouts.site')

@section('title','Checkout')

@section('content')
<!-- new collection section start -->
<div class="layout_padding collection_section">
    <div class="container">
        <div class="collection_section_2 mb-4">
            <h1>Checkout</h1>
            <hr/>
            <h3>Choose your payment option</h3>
            <div class="mb-2"><h4>Total Amount: {{$showTotal}}$</h4></div>
<button id="rzp-button1" class="razor-paybtn">Pay with Razorpay</button>
<form id="orderForm" action="{{route('orders.create')}}" method="POST">
@csrf
<input name="amount"  value="{{$total}}" type="hidden">
<input name="cart_token"  value="{{$cartToken}}" type="hidden">
<input name="gateway"  value="razorpay" type="hidden">
</form>
<script src="https://checkout.razorpay.com/v1/checkout.js"></script>
<script>
var options = {
    "key": "{{$key}}", // Enter the Key ID generated from the Dashboard
    "amount": "{{$total}}", // Amount is in currency subunits. Default currency is INR. Hence, 50000 refers to 50000 paise
    "currency": "USD",
    "name": "Shoe Shop",
    "description": "Payment",
    "image": "{{ asset('images/logo.png') }}",
    "order_id": "{{$orderId}}", //This is a sample Order ID. Pass the `id` obtained in the response of Step 1
    "handler": function (response){
        var orderForm = document.getElementById('orderForm');
        var razorpayPaymentIdInput = document.createElement('input');
        razorpayPaymentIdInput.name = "meta[razorpay_payment_id]";
        razorpayPaymentIdInput.value = response.razorpay_payment_id;

        var razorpayOrderIdInput = document.createElement('input');
        razorpayOrderIdInput.name = "meta[razorpay_order_id]";
        razorpayOrderIdInput.value = response.razorpay_order_id;

        var razorpaySignatureInput = document.createElement('input');
        razorpaySignatureInput.name = "meta[razorpay_signature]";
        razorpaySignatureInput.value = response.razorpay_signature;
       
        orderForm.appendChild(razorpayPaymentIdInput);
        orderForm.appendChild(razorpayOrderIdInput);
        orderForm.appendChild(razorpaySignatureInput);
        orderForm.submit();
    }
};
var rzp1 = new Razorpay(options);
rzp1.on('payment.failed', function (response){
        alert(response.error.code);
        alert(response.error.description);
        alert(response.error.source);
        alert(response.error.step);
        alert(response.error.reason);
        alert(response.error.metadata.order_id);
        alert(response.error.metadata.payment_id);
});
document.getElementById('rzp-button1').onclick = function(e){
    rzp1.open();
    e.preventDefault();
}
</script>
        </div>
    </div>
</div>

@endsection