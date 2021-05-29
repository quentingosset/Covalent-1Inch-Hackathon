<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Pool
 * @package App\Models
 * @mixin Eloquent
 */
class Pool extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'address',
        'network',
        'dex',
        'token_0',
        'token_1',
    ];
}
