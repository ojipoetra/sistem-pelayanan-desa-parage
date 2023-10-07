<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Categori extends Model
{
    use HasFactory;
    protected $table = 'categori';
    // protected $primaryKey = 'nama';
    protected $guarded = ['id'];

    // public function getRouteKeyName()
    // {
    //     return 'nama';
    // }

    public function berita()
    {
        return $this->hasMany(Berita::class);
    }
}
