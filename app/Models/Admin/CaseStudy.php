<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CaseStudy extends Model
{
    protected $fillable = ['title', 'CaseImage', 'casestudy_slug', 'description', 'group'];
}
