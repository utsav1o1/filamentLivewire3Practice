<?php

namespace App\Livewire;

use App\Models\AboutUs;
use App\Models\Teams;
use Livewire\Component;

class ShowAboutUs extends Component
{
    public function render()
    { 
        $teams = Teams::get();
        $aboutus = AboutUs::first();
        return view('livewire.show-about-us',[
            'teams'=>$teams,
            'aboutus' => $aboutus
        ]);
    }
}
