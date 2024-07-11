<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    use HasFactory;

    protected $fillable = [
        'tanggal',
        'judul',
        'deskripsi',
        'status',
        'user_id'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function closed_by($closed_by)
    {
        $user = User::find($closed_by);
        return $user ? $user->name : null;

    }

    public function uploadDoc()
    {
        return $this->hasMany(UploadDocTicket::class);
    }
    
    public function uploadDocTrouble()
    {
        return $this->hasMany(UploadDocTrouble::class);
    }
}
