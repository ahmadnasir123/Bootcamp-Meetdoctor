<?php

namespace App\Http\Controllers\Frontsite;

use Auth;

// use library here
use App\Models\User;
use Illuminate\Http\Request;

// user everything here
// use Gate;
use App\Models\Operational\Doctor;

// model here
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Storage;
use App\Models\MastterData\Consultation;
use Symfony\Component\HttpFoundation\Response;

// thirdparty packages here

class AppointmentController extends Controller
{
    /**
     * create a new controller instance
     *
     * @return void
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('pages.frontsite.appointment.index');

    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return abort(404);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return abort(404);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return abort(404);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return abort(404);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return abort(404);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return abort(404);
    }
}
