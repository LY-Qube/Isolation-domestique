<?php

namespace App\Models;

use App\Notifications\VerificationEmailNotification;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class Contact extends Model
{
    use HasFactory, Notifiable;

    protected $fillable = [
        'name', 'phone', 'email',
        'identity_id', 'download_at',
        'you_ar', 'department', 'mode', 'persons', 'age', 'anah'
    ];

    protected $casts = [
        'created_at' => 'datetime:Y-m-d',
        'updated_at' => 'datetime:Y-m-d',
        'email_verified_at' => 'datetime',
    ];

    public function sendEmailVerificationNotification()
    {
       $this->notify(new VerificationEmailNotification());
    }

    public function identity()
    {
        return $this->belongsTo(Identity::class);
    }
}
