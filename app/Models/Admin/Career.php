<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Career extends Model
{
    protected $fillable = ['title', 'career_slug', 'description', 'deadline', 'CareerImage', 'Status'];
}
