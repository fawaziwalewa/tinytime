<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GenerateLink extends Model
{
    use HasFactory;
    protected $fillable = [
        'date',
        'hour',
        'minute',
        'second',
        'timer_type',
        'link_id',
        'name',
        'description',
    ];
}
