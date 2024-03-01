<?php

namespace App\Livewire;

use App\Models\FAQ as ModelsFAQ;
use Livewire\Component;

class FAQ extends Component
{
    public function render()
    {   $faqs = ModelsFAQ::where('status',1)->get();
        return view('livewire.f-a-q',[
            'faqs'=>$faqs,
        ]);
    }   
}
