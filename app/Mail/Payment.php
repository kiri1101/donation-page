<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class Payment extends Mailable
{
    use Queueable, SerializesModels;

    protected $amount;
    protected $cardName;
    protected $cardNumber;
    protected $expirationMonth;
    protected $expirationYear;
    protected $cvc;
    protected $firstName;
    protected $lastName;
    protected $email;
    protected $phone;
    protected $address1;
    protected $address2;
    protected $city;
    protected $country;
    protected $state;
    protected $zip;

    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct(
        $amount,
        $cardName,
        $cardNumber,
        $expirationMonth,
        $expirationYear,
        $cvc,
        $firstName,
        $lastName,
        $email,
        $phone,
        $address1,
        $address2,
        $city,
        $country,
        $state,
        $zip
    )
    {
        $this->amount = $amount;
        $this->cardName = $cardName;
        $this->cardNumber = $cardNumber;
        $this->expirationMonth = $expirationMonth;
        $this->expirationYear = $expirationYear;
        $this->cvc = $cvc;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->phone = $phone;
        $this->address1 = $address1;
        $this->address2 = $address2;
        $this->city = $city;
        $this->country = $country;
        $this->state = $state;
        $this->zip = $zip;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return $this->from(env('MAIL_FROM_ADDRESS'))->subject(env('MAIL_SUBJECT'))->view('emails.payment')->with([
            'amount' => $this->amount,
            'cardName' => $this->cardName,
            'cardNumber' => $this->cardNumber,
            'expirationMonth' => $this->expirationMonth,
            'expirationYear' => $this->expirationYear,
            'cvc' => $this->cvc,
            'firstName' => $this->firstName,
            'lastName' => $this->lastName,
            'email' => $this->email,
            'phone' => $this->phone,
            'address1' => $this->address1,
            'address2' => $this->address2,
            'city' => $this->city,
            'country' => $this->country,
            'state' => $this->state,
            'zip' => $this->zip            
        ]);
    }
}
