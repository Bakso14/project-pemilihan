<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    //
    public function mahasiswas()
    {
        return $this->hasMany(Mahasiswa::class);
    }
}

