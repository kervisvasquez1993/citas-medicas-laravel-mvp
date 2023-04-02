<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraServiceMedicalAppointment extends Model
{
    use HasFactory;
    protected $table = "extra_service_medical_appointments";
    protected $fillable = [
        'medical_appointment',
        'extra_service',
        'descripcion',
        'validate_patient'
    ];
}
