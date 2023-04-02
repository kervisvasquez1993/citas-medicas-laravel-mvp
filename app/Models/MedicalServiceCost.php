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
}
