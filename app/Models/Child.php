<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Child extends Model
{
    use HasFactory;

    protected $fillable = [
        'mother_id',
        'name',
        'birthdate',
        'weight',
        'height',
        'nutritional_status',
        'gender',
    ];

    public function mother()
    {
        return $this->belongsTo(Mother::class, 'mother_id');
    }
}
