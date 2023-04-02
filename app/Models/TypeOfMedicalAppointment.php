<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TypeOfMedicalAppointment extends Model
{
    use HasFactory;
    protected $table = "type_of_medical_appointments";
    protected $fillable = [
        "name"];
    
}
