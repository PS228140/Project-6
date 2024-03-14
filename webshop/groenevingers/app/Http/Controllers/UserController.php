<?php

namespace App\Http\Controllers;

use App\Models\Branch;
use App\Models\Role;
use App\Models\Status;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $users = User::all();

        return view("users.index", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $user = User::find($id);
        $statuses = Status::all();
        $branches = Branch::all();
        $roles = Role::all();

        return view("users.edit", [
            "user" => $user,
            "statuses" => $statuses,
            "branches" => $branches,
            "roles" => $roles,
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            "name" => "required|string|max:255",
            "email" => "required|email|max:255",
            "phone" => "required",
            "status" => "required",
            "branch" => "required",
        ]);

        $user = User::findOrFail($id);

        if ($request->role !== null) {
            $user->update([
                "name" => $request->input("name"),
                "email" => $request->input("email"),
                "phone" => $request->input("phone"),
                "status_id" => $request->status,
                "branch_id" => $request->branch,
                "role_id" => $request->role,
                "updated_at" => Carbon::now(),
            ]);
        } else {
            $user->update([
                "name" => $request->input("name"),
                "email" => $request->input("email"),
                "phone" => $request->input("phone"),
                "status_id" => $request->status,
                "branch_id" => $request->branch,
                "updated_at" => Carbon::now(),
            ]);
        }

        $user->save();

        return redirect()->route("users.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()
            ->route("users.index")
            ->with("succes", "User succesfully deleted");
    }
}
