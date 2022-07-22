<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Feature;
use Illuminate\Support\Facades\Storage;

class featuresController extends Controller
{
    public function  index()
    {
        $featureId = 0;
        $features = Feature::get();
        return view('admin.feature.index', compact('features', 'featureId'));
    }
    public function create()
    {
        $this->authorize('allFeatures', Feature::class);
        return view('admin.feature.create');
    }
    public function store(Request $request)
    {
        $this->authorize('allFeatures', Feature::class);
        $this->validator($request);

        $data = $request->except('image');
        /*
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            if ($file->isValid()) {
                $data['image'] = $file->store('image', 'public');
            }
        }*/
        $data['image'] = $request->post('image');
        $data['name'] = [
            'en' => $request->post('name'),
            'ar' => $request->post('nameArabic')
        ];
        $data['content'] = [
            'en' => $request->post('content'),
            'ar' => $request->post('contentArabic')
        ];
        Feature::create($data);
        return redirect()->route('features.index');
    }
    public function edit($id)
    {

        $feature = Feature::findOrFail($id);
        $this->authorize('allFeatures', $feature);
        return view('admin.feature.edit', compact('feature'));
    }
    public function update(Request $request, $id)
    {
        $this->validator($request);

        $feature = Feature::findOrFail($id);
        $this->authorize('allFeatures', $feature);
        $data = $request->except('image');
        $oldImage = False;
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            if ($image->valid()) {
                $data['image'] = $image->store('images', 'public');
                $oldImage = $feature->image;
            }
        }

        if ($oldImage) {
            Storage::disk('public')->delete($oldImage);
        }
        $data['name'] = [
            'en' => $request->post('name'),
            'ar' => $request->post('nameArabic')
        ];
        $data['content'] = [
            'en' => $request->post('content'),
            'ar' => $request->post('contentArabic')
        ];
        $feature->update($data);
        return redirect()->route('features.index');
    }
    public function destroy($id)
    {
        $feature = Feature::findOrFail($id);
        $this->authorize('allFeatures', $feature);
        $feature->delete();
        return redirect()->route('features.index');
    }
    public function validator($request)
    {
        $request->validate([
            "name" => "required",
            "content" => "required",

        ]);
    }
}
