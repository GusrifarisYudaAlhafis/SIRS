<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;

class Schedule extends Model
{
    use HasFactory, LogsActivity;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'day',
        'time_in',
        'time_out',
    ];

    protected static $logAttributes = [
        'day',
        'time_in',
        'time_out',
    ];

    public function nurse1()
    {
        return $this->belongsTo(Nurse::class);
    }

    public function doctor1()
    {
        return $this->belongsTo(Doctor::class);
    }
}
