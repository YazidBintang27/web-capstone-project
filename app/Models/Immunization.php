<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Immunization extends Model
{
    use HasFactory;

    protected $fillable = [
        'child_id',
        'vaksin_type',
        'immunization_date',
    ];

    public function child()
    {
        return $this->belongsTo(Child::class, 'child_id');
    }
}
