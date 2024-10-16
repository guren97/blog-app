<?php

namespace App\Http\Controllers;
 
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Retrieve all users, ordering by the latest created_at timestamp
        $users = User::orderBy('created_at', 'desc')->get();
 
        return view('users.index', [
            'users' => $users
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(){
        $users = User::all(); // retrried all users for adding feature on create form
         return view('users.create',[
            'users'=>$users
         ]);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request){ 
        // Validate the request
        $request->validate([
            'username'=> 'required|string|min:3|unique:users',
            'first_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6', 
        ]);
    
        // Create the user
        User::create([
            'username' => $request->username,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => bcrypt($request->password),
        ]);
    
        return redirect()->route('users.index')->with('success', 'User created successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $user = User::find($id);

        return view('users.show', [
            'user' => $user
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    { 
        $user = User::findOrFail($id); 
        $user->delete();
 
        return redirect()
            ->route('users.index')
            ->with('success', 'User deleted successfully.'); 
    }
}
