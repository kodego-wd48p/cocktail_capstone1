<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RandomDrink extends Model
{
    use HasFactory;

    protected $table ='random_drinks';

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');

        
    }

    public $timestamps = false;

    protected $fillable = [
        'name',
        'image',
        'category_id',
        'ingredients',
        'instructions',
    ];
}
