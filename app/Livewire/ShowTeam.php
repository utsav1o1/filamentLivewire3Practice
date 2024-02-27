<?php

namespace App\Livewire;

use App\Models\Teams;
use Livewire\Component;

class ShowTeam extends Component
{
    public function render()
    {  $teams = Teams::get();
        return view('livewire.show-team',[
            'teams'=> $teams
        ]);
    }
}
