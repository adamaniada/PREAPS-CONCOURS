<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Subcategory extends Model
{
    use SoftDeletes, HasFactory;

    protected $fillable = ['category_id' ,'name', 'description', 'designation'];

    public function category()
    {
        return $this->belongsTo(Category::class, 'category_id');
    }
}
