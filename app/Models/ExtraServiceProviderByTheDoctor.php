<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ExtraServiceProviderByTheDoctor extends Model
{
    use HasFactory;
    protected $table = "extra_service_provider_by_the_doctors";
    protected $fillable = [
        'doctor_id',
        'name',
        'description',
        'cost'
    ];
}
