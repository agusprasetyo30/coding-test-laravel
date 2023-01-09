<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mahasiswa extends Model
{
    protected $table = 'mahasiswa';

    protected $fillable = [
        'nama',
        'tempat',
        'tanggal_lahir',
        'hobi',
        'ukt',
        'created_by',
        'updated_by'
    ];

    public function getCreatedByUserAttribute()
    {
        if ($this->created_by != null) {
            $user = json_decode($this->created_by);
            return $user->name . ', ' . date('d M Y', strtotime($this->created_at));
        } else {
            return '-';
        }
    }

    public function getUpdatedByUserAttribute()
    {
        if ($this->updated_by != null) {
            $user = json_decode($this->updated_by);
            return $user->name . ', ' . date('d M Y', strtotime($this->updated_at));
        } else {
            return '-';
        }
    }
}
