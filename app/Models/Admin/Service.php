<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    protected $fillable = ['ServiceImage', 'service_slug', 'IconImage', 'title', 'description', 'package', 'Status', 'pricing'];
}

