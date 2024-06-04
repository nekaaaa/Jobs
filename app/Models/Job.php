<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'employer_id',
        'position',
        'salary',
        'schedule',
        'featured',
        'url',
    ];

    public function employer()
    {
        return $this->belongsTo(Employer::class);
    }
}
