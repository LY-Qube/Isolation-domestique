<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Call extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = ['name', 'email', 'phone', 'day', 'time', 'identity_id'];

    public function identity()
    {
        return $this->belongsTo(Identity::class);
    }

}
