<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    protected $fillable = ['user_id', 'file_path', 'topik', 'tanggal', 'jam'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function dokumentasis()
    {
    return $this->hasMany(Dokumentasi::class);
    }

}
