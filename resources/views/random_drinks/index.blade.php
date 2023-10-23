@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row row-cols-1 row-cols-md-6 g-4">
        @foreach($random_drinks as $random_drink)
            <div class="col">
            <div class="card">
                <div class="card-body">
                <h5 class="card-title title">{{ $random_drink->name }}</h5>
                    <a href="/random-drink/{{ $random_drink->id }}"><img src="{{ asset($random_drink->image) }}" class="card-img-top index-image" alt="Cocktail-image"></a>
                </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection
