<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Patient extends Model
{
    use HasFactory, LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'ttl',
        'gender',
        'address',
        'phone_number',
        'complaint',
        'history',
        'doctor_id',
    ];

    protected static $logAttributes = [
        'name',
        'ttl',
        'gender',
        'address',
        'phone_number',
        'complaint',
        'history',
        'doctor_id',
    ];

    public function prescription3()
    {
        return $this->belongsTo(Prescription::class);
    }

    public function doctor3()
    {
        return $this->hasMany(Doctor::class,'id','doctor_id');
    }
}
