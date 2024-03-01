<?php

namespace App\Livewire;

use App\Mail\ContactEmail;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class ShowContactPage extends Component
{
    public $name = '';
    public $email = '';
    public $message = '';
    public function submit()
    {

        $mailData = [
            'subject' => 'You you received a email form xyz website',
            'name' => $this->name,
            'email' => $this->email,
            'message' => $this->message
        ];
        Mail::to('admin@example.com')->send(new ContactEmail($mailData));
        session()->flash('success','Thanks for contacting us, we will get in touch with You soon');
        $this->redirect('/contactus');
    }
    public function render()
    {
        return view('livewire.show-contact-page');
    }
}
