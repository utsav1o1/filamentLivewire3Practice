<?php

namespace App\Livewire;

use App\Models\Service;
use Livewire\Component;

class ShowServiceDetail extends Component
{
    public $service;
    public function mount($id)
    {
        $this->service = Service::findOrFail($id);
    }
    public function render()
    {
        return view('livewire.show-service-detail', [
            'service' => $this->service
        ]);
    }
}
