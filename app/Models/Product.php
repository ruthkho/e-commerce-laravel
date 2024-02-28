<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table="products";

    public function category(){
        return $this->belongsTo(Category::class, 'category_id');
    }

    public function occasion(){
        return $this->belongsTo(Occasion::class, 'occasion_id');
    }

    public function flower(){
        return $this->belongsTo(Flower::class, 'flower_id');
    }

}
