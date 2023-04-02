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
        'attended',
    ];

    public function patient()
    {
        return $this->belongsTo(Patient::class);
    }

    public function medicalServiceCost()
    {
        return $this->belongsTo(MedicalServiceCost::class);
    }

    // TODO: VER DESPUES ESTA RELACION
    public function location()
    {
        return $this->belongsTo(LocationOfThePatient::class, 'location_id');
    }

    public function qualifications()
    {
        return $this->hasMany(MedicalAppointmentsQualification::class);
    }

    public function reports()
    {
        return $this->hasMany(MedicalAppointmentsReport::class);
    }

    public function treatments()
    {
        return $this->hasMany(MedicalAppointmentsTreatment::class);
    }
}
