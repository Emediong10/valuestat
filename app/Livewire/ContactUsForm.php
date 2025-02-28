<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\ContactUs;

class ContactUsForm extends Component
{

    public $firstname, $lastname, $email, $phone, $subject, $comment;
    public $successMsg;

    public function save()
    {
       // dd($this->save);
        $this->validate([
            'firstname' => 'required|max:255',
            'lastname' => 'required|max:255',
            'email' => 'required|max:255|email',
            'phone' => 'required',
            'subject' => 'required',
            'comment' => 'required'
        ]);

        ContactUs::create([
            'firstname' => $this->firstname,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
            'subject' => $this->subject,
            'comment' => $this->comment,


        ]);
        $this->successMsg = 'Your message has been sent successfully!';


       


    }
    public function clearForm()
    {
        $this->firstname = '';
        $this->lastname = '';
        $this->email = '';
        $this->phone = '';
        $this->subject = '';
        $this->comment = '';
    }




    public function render()
    {
        return view('livewire.contact-us-form');
    }
}
