<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Qualification extends Model
{
    use HasFactory;

    protected $fillable=[
        'name',
        'level',
        'career',
        'date_available_from',
        'date_available_to',
    ];

    /*public function career() {
        return $this->belongsTo(Career::class);
    }*/
}
