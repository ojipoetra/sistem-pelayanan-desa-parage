<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;

class Pengantarnikah extends Model
{
    use HasFactory;
    protected $table = 'suratpengantarnikah';
    protected $guarded = ['id'];
}
