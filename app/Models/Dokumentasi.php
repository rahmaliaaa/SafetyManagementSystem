<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Dokumentasi extends Model
{
    use HasFactory;

    protected $fillable = ['invitation_id', 'judul', 'file_path'];

    public function invitation()
    {
        return $this->belongsTo(Invitation::class);
    }
}
