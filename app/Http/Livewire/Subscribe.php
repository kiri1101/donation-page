<?php

namespace App\Http\Livewire;

use App\Models\Subscribe as SubscribeModel;
use Livewire\Component;

class Subscribe extends Component
{
    public $success;

    #Form properties
    public $email;

    protected $rules = [
        'email' => 'required|email'
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function resetSuccess()
    {
        $this->reset('success');
    }

    public function submit()
    {
        $this->validate();
        SubscribeModel::create([
            'account' => $this->email
        ]);

        $this->reset();
        $this->resetValidation();

        $this->success = 'Sent';
    }

    public function render()
    {
        return view('livewire.subscribe')->layout('layouts.app')->slot('subscription');
    }
}

