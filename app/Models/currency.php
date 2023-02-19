<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

/**
 * @property int id
 * @property string name
 * @property string driver
 * @property float price
 * @property array meta
 * @property Carbon created_at
 * @property Carbon updated_at
 */
class currency extends Model
{
    protected $fillable = [
        'id',
        'name',
        'driver',
        'price',
        'meta',
    ];

    protected $casts = [
        'id' => 'int',
        'price' => 'float',
        'meta' => 'json'
    ];
}
