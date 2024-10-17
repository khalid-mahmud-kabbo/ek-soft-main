<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SliderController extends Controller
{





    
    public function store(Request $request)
    {
        $request->validate([
            'slider_image' => 'required|image',
            'title' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|url',
        ]);

        if (!empty($request->slider_image)) {
            $imagePath = fileUpload($request['slider_image'], SliderImage());
        } else {
            return redirect()->back()->with('error', __('Image is  required'));
        }

        Slider::create([
            'slider_image' => $imagePath,
            'sub_title' => $request->sub_title,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
        ]);

        return redirect()->back()->with('success', 'Slider created successfully!');
    }

    // Fetch and return all sliders
    public function index()
    {
        $sliders = Slider::all();
        return view('sliders.index', compact('sliders'));
    }

    // Show the form for editing a specific slider
    public function edit(Slider $slider)
    {
        $data['edit'] = Brand::where('id', $id)->first();
        return view('admin.pages.slider.edit', $data);
    }

    // Update a specific slider
    public function update(Request $request, Slider $slider)
    {
        $request->validate([
            'slider_image' => 'nullable|image',
            'title' => 'required|string|max:255',
            'short_description' => 'nullable|string',
            'button_text' => 'nullable|string|max:255',
            'button_link' => 'nullable|url',
        ]);


        $sliders = Slider::whereId($id)->first();

        if (!empty($request->slider_image)) {
            $image = fileUpload($request['slider_image'], SliderImage());
        } else {
            $image = $sliders->SliderImage;
        }

        $slider->update([
            'sub_title' => $request->sub_title,
            'title' => $request->title,
            'short_description' => $request->short_description,
            'button_text' => $request->button_text,
            'button_link' => $request->button_link,
        ]);

        return redirect()->back()->with('success', 'Slider updated successfully!');
    }

    // Delete a specific slider
    public function destroy(Slider $slider)
    {
        $slider->delete();
        return redirect()->back()->with('success', 'Slider deleted successfully!');
    }
}
