<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Career extends Model
{
    use HasFactory;

    protected $fillable= ['title'];
    /*= [
        'name',
        'email',
        'password',
    ];*/

    public function qualification() {
        return $this->HasMany(Qualification::class);
    }
}
