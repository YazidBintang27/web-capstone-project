<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Mother extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'nik',
        'birthdate',
        'address',
    ];

    public function childs()
    {
        return $this->hasMany(Child::class, 'mother_id');
    }
}
