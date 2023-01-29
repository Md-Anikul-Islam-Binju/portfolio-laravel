<?php

namespace App\Models\admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SocialLink extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'facebook',
        'linkedin',
        'instagram',
        'github',
        'gitlab',
        'twitter',
        'youtube',
        'website',
    ];
}
