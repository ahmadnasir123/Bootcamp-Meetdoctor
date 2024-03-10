<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PermissionController extends Controller
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
        return view('pages.backsite.management-access.permission.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return abort('440');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return abort('440');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return abort('440');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return abort('440');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return abort('440');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return abort('440');
    }
}
