<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

// use library here
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\Response;

// user everything here
// use Gate;
use Auth;

// model here
use App\Models\ManagementAccess\Permission;
use App\Models\ManagementAccess\Role;
use App\Models\ManagementAccess\PermissionRole;
use App\Models\ManagementAccess\RoleUser;

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
        $permission = Permission::orderBy('id', 'asc')->get();

        return view('pages.backsite.management-access.permission.index', compact('permission'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return abort(440);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return abort(440);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return abort(440);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return abort(440);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return abort(440);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return abort(440);
    }
}
