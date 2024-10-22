<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Whoweare extends Model
{
    use HasFactory;

    protected $fillable = [
        'AboutImage',
        'AboutSubImage',
        'title',
        'description',
        'point_1',
        'point_2',
        'point_3',
        'point_4',
        'satisfied_clients',
        'finished_projects',
        'skilled_experts',
        'years_of_experience',
    ];
}
