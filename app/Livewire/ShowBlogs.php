<?php

namespace App\Livewire;

use App\Models\Blogs;
use App\Models\Categories;
use Livewire\Component;

class ShowBlogs extends Component
{
    public function render()
    { $categories = Categories::get();
        $blogs = Blogs::get();
        return view('livewire.show-blogs',[
            'categories'=>$categories,
            'blogs'=> $blogs
        ]);
    }
}
