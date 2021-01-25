<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Nurse extends Model
{
    use HasFactory, LogsActivity;

    public function schedule1()
    {
        return $this->hasMany(Schedule::class,'user_id','user_id');
    }

    public function user1()
    {
        return $this->hasMany(User::class,'id','user_id');
    }
}
