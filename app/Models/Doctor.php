<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Doctor extends Model
{
    use HasFactory, LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'specialist',
    ];

    protected static $logAttributes = [
        'specialist',
    ];

    public function schedule2()
    {
        return $this->hasMany(Schedule::class,'user_id','user_id');
    }

    public function user2()
    {
        return $this->hasMany(User::class,'id','user_id');
    }

    public function patient3()
    {
        return $this->belongsTo(Patient::class);
    }
}
