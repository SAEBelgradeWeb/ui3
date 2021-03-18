<?php

namespace App\Http\Controllers;

use App\Mail\NewOfferEmail;
use App\Models\Doctor;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DoctorController extends Controller
{
    public function index()
    {
        return Doctor::with(['department'])->get();
    }

    public function sendEmail(Request $request)
    {
        $doctor = Doctor::find($request->id);
        Mail::to($doctor->email)->send(new NewOfferEmail($doctor));
    }
}
