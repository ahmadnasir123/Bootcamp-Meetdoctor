<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use library here
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;

// user request 
use App\Http\Requests\Consultation\StoreConsultationRequest;
use App\Http\Requests\Consultation\UpdateConsultationRequest;

// user everything here
// use Gate;
// use Auth;

// model here
use App\Models\MasterData\Consultation;

class ConsultationController extends Controller
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
        $consulation = Consultation::orderBy('created_at', 'desc')->get();

        return view('pages.backsite.master-data.consultation.index', compact('consulation'));
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
    public function store(StoreConsultationRequest $request)
    {
        // get all request from fronsite
        $data = $request->all();

        // store to database
        $consulation = Consultation::create($data);

        alert()->success('Success Message', 'Successfully added new consulation');
        return redirect()->route('backsite.consultation.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Consultation $consulation)
    {
        return view('pages.backsite.master-data.consultation.show', compact('consulation'));
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
    public function update(UpdateConsultationRequest $request, Consultation $consulation)
    {
        $data = $request->all();

        $consulation->update($data);

        alert()->success('Success Message', 'Successfully updated consulation');
        return redirect()->route('backsite.consultation.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Consultation $consulation)
    {
        $consulation->forceDelete();

        alert()->success('Success Message', 'Successfully deleted consulation');
        return back();
    }
}
