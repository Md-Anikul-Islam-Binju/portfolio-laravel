<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'father_name',
        'mother_name',
        'birthday',
        'nationality',
        'religion',
        'hobby',
        'blood_group',
        'nid',
    ];
}
