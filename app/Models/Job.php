<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [
        'company_id',
        'position',
        'salary',
        'schedule',
        'featured',
        'url',
    ];
    public function company()
    {
        return $this->belongsTo(Company::class);
    }
}
