<?php

namespace App\Livewire;

use App\Models\Blogs;
use App\Models\Categories;
use Livewire\Attributes\Url;
use Livewire\Component;

class ShowBlogs extends Component
{ 
    #[Url]
    public $categorySlug= null;

    public function render()
    { 
        if (!empty($this->categorySlug)) {
            $category = Categories::where('slug',$this->categorySlug)->first();
            $blogs = Blogs::where('categories_id', $category->id)->paginate(2);
        }
        else
        {
            $blogs = Blogs::paginate(2);
        }
        
        $categories = Categories::get();
      
        return view('livewire.show-blogs',[
            'categories'=>$categories,
            'blogs'=> $blogs,
            'categorySlug'=>$this->categorySlug
        ]);
    }
}
