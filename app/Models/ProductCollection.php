<?php

namespace App\Models;

use App\Models\Product;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ProductCollection extends Model
{
    use HasFactory;
    protected $fillable = [
        'name','product_id','active'
    ];

    public function product()
        {
        return $this->hasMany(Product::class);
        }
}
