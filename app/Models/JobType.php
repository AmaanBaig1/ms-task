<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JobType extends Model
{
    use HasFactory;

    protected $fillable = ['title'];

    public function jobs()
    {
        return $this->hasMany(Job::class, 'id', 'type_id');
    }

}
