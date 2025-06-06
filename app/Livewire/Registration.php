<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\ValidationException;


class Registration extends Component
{
    public $titles;
    public $delegates;

    public $title="0";
    public $delegate="0";
    public $forenames;
    public $surname;
    public $phone;
    public $email;

    public function updated($propertyName)
    {
        $this->resetErrorBag($propertyName);
    }
    
    public function register()
    {
        //$this->beforeSubmit();  // Trigger the pre-submit function
        $this->validate([
            'title' => [
                'required',
                'integer',
                'in:1,2,3,4,5',
            ],
            'delegate' => [
                'required',
                'integer',
                'in:1,2',
            ],
             'phone' => [
                'required',
                'string',
                'regex:/^\+?[0-9\s\-()]{7,20}$/',
            ],
            'forenames' => 'required|string|min:2|max:100',
            'surname' => 'required|string|min:2|max:100',
            'email' => [
                'required',
                'email',
                'max:255',
                function ($attribute, $value, $fail) {
                    if (str_contains($value, 'example.com')) {
                        $fail("The :attribute using example.com is not allowed.");
                    }
                },
            ],
        ], [
            // Custom messages
            'title.required' => 'Please select your title.',
            'title.integer' => 'Invalid title selected.',
            'delegate.required' => 'Please select your delegate type',
            'delegate.integer' => 'Invalid delegate type.',

            'forenames.required' => 'Forenames are required.',
            'forenames.min' => 'Forenames must be at least 2 characters.',
            'forenames.max' => 'Forenames cannot exceed 100 characters.',

            'surname.required' => 'Surname  is required.',
            'surname.min' => 'Surname must be at least 2 characters.',
            'surname.max' => 'Surname cannot exceed 100 characters.',

            'email.required' => 'Please enter your email address.',
            'email.email' => 'Please enter a valid email address.',
            'email.max' => 'Email must not exceed 255 characters.',
            
             'phone.required' => 'Phone number is required.',
            'phone.regex' => 'Please enter a valid phone number (e.g. +1 234 567 890).',
        ]);

        
        try {
            // Use Query Builder to insert the user data into the database
            $userId = DB::table('_registertable')->insertGetId([
                'titleID' => $this->title,
                'foreNames' => $this->forenames,
                'surName' => $this->surname,
                'delegateTypeID' => $this->delegate,
                'phone' => $this->phone,
                'email' =>$this->email
            ]);

            //success
            $this->reset();
            $this->resetValidation();
            $this->dispatch('endRegister');

        } catch (\Exception $e) {
            throw ValidationException::withMessages([
                'email' => 'There was an error with your registration. Please try again.' . $e->getMessage(),
            ]);
        }
        
    }


    public function render()
    {
        $this->titles = DB::table('_titletable')->get();
        $this->delegates = DB::table('_delegatetable')->get();
        return view('livewire.registration');
    }
}
