<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalAppointment extends Model
{
    use HasFactory;
    protected $table = "medical_appointments";
    protected $fillable = [
        'patient_id',
        'medical_service_cost_id',
        'date-of-appointment',
        'hour-of-appointment',
        'cots',
        'is_paidp',
        'attended'
    ];
}
