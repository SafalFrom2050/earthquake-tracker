<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Earthquake extends Model
{
    use SoftDeletes, HasFactory;

    protected $guarded = ["id"];

    protected $casts = [
        'incident_date' => 'datetime',
    ];
}
