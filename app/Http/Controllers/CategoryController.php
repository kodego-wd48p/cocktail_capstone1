<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\RandomDrink;
use Illuminate\Support\Facades\DB;



class CategoryController extends Controller
{

    public function __construct()
   {
       $this->middleware('auth');
   }
   
//     public function classic_index(Request $request)
//     {
//         $results = Category::get();

//         return view('categories.classic_index', compact('results'));
// }

//     public function show( $id){
//         $random_drink = RandomDrink::find($id);

//         return view('random_drinks.show', [
//             'random_drink' => $random_drink
//         ]);
//     }

    // public function ordinary_index()
    // {
    //     $results = Category::rightJoin('random_drinks', 'categories.category', '=', 'random_drinks.name')
    //     ->where('category_id', 2)
    //     ->get();

    //     return view('categories.classic_index', compact('results'));
    // }


}
