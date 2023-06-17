<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Job extends Model
{
    use HasFactory;

    protected $fillable = [

        'user_id',
        'type_id',
        'title',
        'rate',
        'description',
        'deleted_at',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function jobType()
    {
        return $this->belongsTo(JobType::class, 'type_id', 'id');
    }
}
