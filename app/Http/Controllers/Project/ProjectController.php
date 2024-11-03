<?php

namespace App\Http\Controllers\Project;

use App\Http\Controllers\Controller;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{


    public function store(Request $request)
    {

        $request->validate([
            'cover_photo' => 'required|image|mimes:jpg,png,jpeg,gif|max:10240',
            'project_images.*' => 'image|mimes:jpg,png,jpeg,gif|max:10240',
            'job_skills' => 'required|string',
            'work_description' => 'required|string',
        ]);

        // Store the cover photo
        $coverPhotoPath = $request->file('cover_photo')->store('cover_photos', 'public');

        // Store multiple project images
        $projectImagesPaths = [];
        if ($request->hasFile('project_images')) {
            foreach ($request->file('project_images') as $image) {
                $path = $image->store('project_images', 'public');
                $projectImagesPaths[] = $path;
            }
        }

        // Save data to the database
        Project::create([
            'cover_photo' => $coverPhotoPath,
            'project_images' => $projectImagesPaths,
            'job_skills' => $request->input('job_skills'),
            'work_description' => $request->input('work_description'),
        ]);

        return redirect()->back()->with('success', 'Project created successfully!');
    }
}
