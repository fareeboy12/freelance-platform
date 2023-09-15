<?php

namespace App\Livewire\Client;

use Livewire\Component;
use App\Models\JobPost;

class PostJob extends Component
{
    public $title;
    public $job_type;
    public $scope;
    public $budget;
    public $description;

    public function render()
    {
        return view('livewire.client.post-job');
    }

    public function postAJob()
    {
        try {
            // Validate the form data (you can use Laravel's built-in validation)
            $this->validate([
                'title' => 'required|string',
                'job_type' => 'required|in:short_term,long_term',
                'scope' => 'required|in:large,medium, small',
                'budget' => 'required|numeric',
                'description' => 'required|string',
            ], [
                'title.required' => 'The title field is required.',
                'job_type.required' => 'The job type field is required.',
                'scope.required' => 'The scope field is required.',
                'budget.required' => 'The budget field is required.',
                'budget.numeric' => 'The budget must be a number.',
                'description.required' => 'The description field is required.',
            ]);
    
            // Create a new job post and save it to the database
            JobPost::create([
                'title' => $this->title,
                'job_type' => $this->job_type,
                'scope' => $this->scope,
                'budget' => $this->budget,
                'description' => $this->description,
            ]);
    
            // Optionally, you can show a success message or redirect to another page
            session()->flash('success', 'Job post created successfully.');
            // return redirect()->route('your.route.name');
        } catch (\Exception $e) {
            dd($e->getMessage()); // Print the error message for debugging
        }
    }
}
