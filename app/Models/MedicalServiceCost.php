<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MedicalServiceCost extends Model
{
    use HasFactory;
    protected $table = "medical_service_costs";
    protected $fillable = [
        'type_of_medical_appointment_id',
        'medical_service_id',
        'specialty_id',
        'cost',
    ];
    public function getMedicalService()
    {
        return $this->belongsTo(MedicalService::class, 'medical_service_id');
    }

    public function getSpecialty()
    {
        return $this->belongsTo(Specialty::class, 'specialty_id');
    }

    public function getTypeOfMedicalAppointment()
    {
        return $this->belongsTo(TypeOfMedicalAppointment::class, 'type_of_medical_appointment_id');
    }
}
