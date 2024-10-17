<?php

namespace App\Models\Admin;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    protected $fillable = ['SliderImage', 'subtitle', 'title', 'short_description', 'button_text', 'button_link'];
}

