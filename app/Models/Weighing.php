<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Weighing extends Model
{
    use HasFactory;

    protected $table = 'weighings';

    protected $fillable = [
        'mother_id',
        'child_id',
        'weight',
        'height',
        'lingkar_kepala',
        'lingkar_badan',
        'weighing_date',
    ];

    public function mother()
    {
        return $this->belongsTo(Mother::class, 'mother_id');
    }

    public function child()
    {
        return $this->belongsTo(Child::class, 'child_id');
    }
}
