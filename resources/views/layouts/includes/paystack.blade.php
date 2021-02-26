{{-- <input type="hidden" name="email" value="adebajo.oluwaseyi@gmail.com"> required --}}
{{-- <input type="hidden" name="orderID" value="89898898945"> --}}
<input type="hidden" name="encrypted_amount" value="{{$freight->encrypted_total}}" > {{-- required in kobo --}}
<input type="hidden" name="quantity" value="1">
<input type="hidden" name="currency" value="NGN">
<input type="hidden" name="metadata" value="{{ json_encode($array = $freight) }}" > {{-- For other necessary things you want to add to your payload. it is optional though --}}
<input type="hidden" name="reference" value="{{ Paystack::genTranxRef() }}"> {{-- required --}}
@csrf