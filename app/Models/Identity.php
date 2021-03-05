<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Identity extends Model
{
    use HasFactory;

    protected $fillable = ['identity'];

    public function call()
    {
        return $this->hasOne(Call::class);
    }

    public function contact()
    {
        return $this->hasOne(Contact::class);
    }
}
