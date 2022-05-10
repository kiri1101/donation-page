<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'amount',
        'card_name',
        'card_number',
        'expiration_month',
        'expiration_year',
        'cvc',
        'surname',
        'lastname',
        'email',
        'phone',
        'address',
        'address2',
        'city',
        'country',
        'state',
        'zip',
    ];
}
