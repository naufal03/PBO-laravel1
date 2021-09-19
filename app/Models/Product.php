<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use phpDocumentor\Reflection\Types\This;

class Product extends Model
{
    use HasFactory;

    // function category
    public function category(){
        return $this->belongsTo(Category::class, "category_id");
    }
}
