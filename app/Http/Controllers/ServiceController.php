<?php

namespace App\Http\Controllers;

use App\Mail\NewServiceRequest;
use App\Models\ServiceRequest;
use Illuminate\Http\Request;
use Mail;

class ServiceController extends Controller
{
    public function index()
    {
        return view('services');
    }

    public function showContactForm()
    {
        return view("service-contact");
    }

    public function submitContactForm(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'address' => 'required|string|max:255',
            'city' => 'required|string|max:100',
            'state' => 'required|string|max:100',
            'zip' => 'required|string|max:20',
            'event_type' => 'required|string|max:100',
            'start_date' => 'required|date',
            'end_date' => 'required|date|after_or_equal:start_date',
            'duration' => 'required|integer|min:1',
            'people_count' => 'required|integer|min:1',
            'services.drinks' => 'nullable|string|max:255',
            'services.food' => 'nullable|string|max:255',
            'services.catering_infrastructure' => 'nullable|string|max:255',
            'budget' => 'required|numeric|min:0',
            'message' => 'nullable|string',
        ]);
    
        $services = array_filter($request->input('services', []), function($value) {
            return !empty($value);
        });
        $validatedData['services'] = json_encode($services);
    
        // Store the service request in the database
        $serviceRequest = ServiceRequest::create($validatedData);
    
        // Send email notification to admin
        Mail::to('info@lebistrofoodtruck.co.at')->send(new NewServiceRequest($serviceRequest));
    
        // Redirect back with a success message
        return redirect()->route('service.contact')->with('success', 'Your service request has been submitted successfully. We will contact you shortly.');
    }
}
