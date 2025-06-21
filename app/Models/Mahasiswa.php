<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    //
    protected $fillable = ['nama', 'nim', 'angkatan', 'project_id'];

    public function project()
    {
        return $this->belongsTo(Project::class);
    }
}
