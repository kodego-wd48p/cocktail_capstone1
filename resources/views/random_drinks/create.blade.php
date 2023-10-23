@extends('layouts.app')

@section('content')

<div class="card-body">
                    
                    <form action="/random_drink" method="POST" enctype="multipart/form-data">
                        @csrf

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Coctail Name</label>
                    <input type="text" class="form-control" name="name"  value="{{ old('name') }}">
                    <br>
                    @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                </div>
                <div class="card">
                    <select class="form-select" name="category_id" aria-label="Default select example">
                    <option value="" disabled selected>Select a Category</option>
                    <option value="1" @if(old('category_id') == 1) selected @endif>Classic</option>
                    <option value="2" @if(old('category_id') == 2) selected @endif>Ordinary</option>
                    <option value="3" @if(old('category_id') == 3) selected @endif>Non Alcoholic</option>
                    <option value="4" @if(old('category_id') == 4) selected @endif>Champagne</option>
                    <option value="5" @if(old('category_id') == 5) selected @endif>Vodka</option>
                    <option value="6" @if(old('category_id') == 6) selected @endif>Gin</option>
                    </select>
                    <br>
                    @error('category_id')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                </div>
                <br>
                <div class="mb-3">
                    <label for="image">Upload Image</label>
                    <input type="file" name="image" id="image" accept="image/*">
                             @error('image')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Ingredients</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="ingredients" rows="3" >{{ old('ingredients') }}</textarea>
                    <br>
                    @error('ingredients')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Instructions</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="instructions" rows="3">{{ old('instructions') }}</textarea>
                    <br>
                    @error('instructions')
                            <div class="alert alert-danger">{{ $message }}</div>
                            @enderror
                </div>
                <div class="mb-3">
                    <button type="button"  onclick='window.location.href = "/home"' class="btn btn-danger">Cancel</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
            </div>
            @if($errors->any())
                <div class="alert alert-danger mt-4">
                    Please fix the errors above and try again.
                </div>
            @endif

            @if(session('success'))
                <h6 class="alert alert-success">
                    {{ session('success')}}
                </h6>
                @endif
            </div>
        </div>
    </div>
</div>

@endsection

