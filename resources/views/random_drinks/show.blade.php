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
                    <div class="text-center">
                    <div class="col-md-10 btn-group">
                    <button type="button"  onclick='window.location.href = "/random-drinks"' class="btn btn-info">Back</button>
                    @auth 
                    @if(Auth::user()->role_id==1)
                    <button type="button" class="btn btn-primary"  onclick='window.location.href = "/random-drink/{{ $random_drink->id }}/edit"'>Edit Drink</button>
                    <form action="/random-drink/{{ $random_drink->id }}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger"  onclick='window.location.href = "/random-drink/{{ $random_drink->id }}"'>Delete Drink</button>
                    @endif
                    @endauth
                    </form>
                    </div>
                    </div>
                    <br>
                
                </div>
            </div>
    </div>
</div>
@endsection