@extends('layouts.app')

@section('content')
<div class="container-fluid hero-section d-flex align-items-center">
    <div class="col-4 text-center m-auto bg-black bg-opacity-50 text-white p-5">
        <h1>Our dedication to sustainability</h1>
        <p>Lorem ipsum dolor sit amet consectetur. Commodo pulvinar tortor nunc lectus. Vitae vitae tortor urna sodales mi. </p>
        <button class="btn-dark-green">Shop Now</button>
    </div>
</div>
<x-product-list></x-product-list>
@endsection
