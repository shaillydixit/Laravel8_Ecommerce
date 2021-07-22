<?php

namespace App\Models;

use App\Http\Controllers\Backend\CategoryController;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SubCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'subcategory_name',
        'subcategory_slug'
    ];

    public function Category()
    {
        return $this->belongsTo(Category::class, 'category_id', 'id');
    }
}
