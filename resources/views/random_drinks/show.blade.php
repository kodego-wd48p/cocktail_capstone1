@extends('layouts.app')

@section('content')
<div class="container label">
    <div class="row justify-content-center">
            <div class="col-md-4">
                <div class="card">
                    
                    <div class="card-body label">
                        <h5 class="card-title label">{{ $random_drink->name }}</h5>
                    </div>
                    <img src="{{ asset($random_drink->image) }}" class="card-img-top show-image" alt="Cocktail-image">
                    <br>
                    <p class="label">Ingredients</p>
                    <p class="label">{{ $random_drink->ingredients }}</p>
                    <p class="label">Instuctions</p>
                    <p class="label">{{ $random_drink->instructions }}</p>
                    <div class="col-md-6 btn-group mx-3">
                    <button type="button" class="btn btn-primary"  onclick='window.location.href = "/random-drink/{{ $random_drink->id }}/edit"'>Edit Drink</button>
                    <button type="button"  onclick='window.location.href = "/random-drinks"' class="btn btn-info">Back</button>
                    </div>
                    <br>
                
                </div>
            </div>
    </div>
</div>
@endsection