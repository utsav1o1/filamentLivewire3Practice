<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogs extends Model
{
    use HasFactory;

protected $fillable = ['title','short_desc','description', 'imgUrl', 'categories_id'];

    public function categories()
    {
        return $this->belongsTo(Blogs::class, 'blog_id');
    }
}
