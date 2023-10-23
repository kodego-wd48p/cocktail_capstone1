@extends('layouts.app')

@section('content')
    <div class="container text-center">
        <h1 class="brand">The Fizz and Smiths</h1>
            <p class="cocktail-recipes">Cocktail Recipes</p>
            <p class="cocktail-recipes">Great Cocktail Recipes You Should Try and Enjoy</p>
    </div>
        <br>
    <div class="container">
        <div class="row">
            <div class="col-4 offset-4">
                <div class="text-center square-container own-border">
                    <p class="user-recipes">"Join our vibrant cocktail community! Share your unique recipes and inspire fellow mixologists. Let's raise our glasses to creativity and connect through the art of mixology!"</p>
                    <p class="user-recipes">Share your unique recipes now.</p>
                    <p class="user-recipes">Click the Button below!!!</p>
                    <button type="button" class="btn btn-primary"  onclick='window.location.href = "/random-drink"'>Share Your Recipes</button>
                </div>
            </div>
        </div>
    </div>
         <br><br>
    <div class="container-fluid footer">
        <div class="container">
            <p>&copy; 2023 The Fizz and Smiths</p>
        </div>
    </div>
@endsection
