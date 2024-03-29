<?php

namespace App\Http\Controllers\Backsite;

use App\Http\Controllers\Controller;


// use library here
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\DB;
use Symfony\Component\HttpFoundation\Response;

// request
use App\Http\Requests\User\StoreUserRequest;
use App\Http\Requests\User\UpdateUserRequest;

// use everything here
// use Gate;
use Auth;

// use model here
use App\Models\User;
use App\Models\ManagementAccess\DetailUser;
use App\Models\ManagementAccess\Permission;
use App\Models\ManagementAccess\Role;
use App\Models\MasterData\TypeUser;

class UserController extends Controller
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
        return view('pages.backsite.management-access.user.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return abort('404');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        return abort('404');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        return abort('404');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return abort('404');
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        return abort('404');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        return abort('404');
    }
}
