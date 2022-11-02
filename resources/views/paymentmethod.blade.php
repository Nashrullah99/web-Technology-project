@extends('layouts.common')
@section('content')
<div class="container payment-procedure">
    <iframe src="{{ asset('files/payment/Payment_Procedure.pdf') }}" style="width: 90%; height: 700px;"></iframe>
</div>
@endsection