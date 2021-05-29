<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Token extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'network',
        'contract_address',
        'status',
        'logo_url',
        'contract_name',
        'contract_ticker_symbol',
        'contract_decimals'
    ];
}
