<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Team extends Model
{
    protected $fillable = ['Name', 'Designation', 'Facebook_id', 'Instagram_id', 'LinkedIn_id', 'TeamMemberImage'];
}
