<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Send extends Model
{
    use HasFactory;
    protected $table = 'sends';
    protected $guarded = ['id'];
    protected $casts = [
        'sends' => 'json',
    ];
}
