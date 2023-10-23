<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RandomDrink;

class RandomDrinkController extends Controller
{
    
   public function __construct()
   {
       $this->middleware('auth');
   }

    public function index(Request $request){
        $random_drinks = RandomDrink::when($request->get('category'), function ($query, $category) {
            $query->where('category_id', $category);
        })->get();
    
        return view('random_drinks.index', [
            'random_drinks' => $random_drinks
        ]);
    }

    public function show( $id){
        $random_drink = RandomDrink::find($id);

        return view('random_drinks.show', [
            'random_drink' => $random_drink
        ]);
    }

    public function create(){


            return view('random_drinks.create');

    }

        public function store(Request $request)
    {
        $validatedInputs = $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|integer|min:1',
            'ingredients' => 'required',
            'instructions' => 'required',
        ]);

        
        $imagePath = $request->file('image')->store('public/images');

        $imageFilename = str_replace('public/', 'storage/', $imagePath);

        $random_drink = new RandomDrink([
            'name' => $validatedInputs['name'],
            'image' => $imageFilename,
            'category_id' => $validatedInputs['category_id'],
            'ingredients' => $validatedInputs['ingredients'],
            'instructions' => $validatedInputs['instructions'],
        ]);

        $random_drink->save();

        return redirect('/random-drinks')->with('success', 'Drink created successfully!');
    }

    public function edit($id){
        $random_drink = RandomDrink::find($id);
       
        return view('random_drinks.edit', [
            'random_drink' => $random_drink
        ]);
    }
    

    public function update($id, Request $request) {
        $validatedData = $request->validate([
            'name' => 'required',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'category_id' => 'required|integer|min:1',
            'ingredients' => 'required',
            'instructions' => 'required',
        ]);
    
        // Find the RandomDrink record by its ID
        $random_drink = RandomDrink::find($id);
    
        if (!$random_drink) {
            return redirect('/random-drinks')->with('error', 'Drink not found');
        }
    
        // Handle file upload
        $imagePath = $request->file('image')->store('public/images');
        $imageFilename = str_replace('public/', 'storage/', $imagePath);
    
        // Update the record with the new data
        $random_drink->name = $validatedData['name'];
        $random_drink->image = $imageFilename;
        $random_drink->category_id = $validatedData['category_id'];
        $random_drink->ingredients = $validatedData['ingredients'];
        $random_drink->instructions = $validatedData['instructions'];
    
        $random_drink->save();
    
        return redirect('/random-drinks')->with('success', 'Drink updated successfully!');
    }
    

    public function destroy($id){
        
    }

}
