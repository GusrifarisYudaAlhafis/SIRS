<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Prescription extends Model
{
    use HasFactory, LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'medicine',
        'patient_id',
    ];

    protected static $logAttributes = [
        'medicine',
        'patient_id',
    ];

    public function patient2()
    {
        return $this->hasMany(Patient::class,'id','patient_id');
    }
}
