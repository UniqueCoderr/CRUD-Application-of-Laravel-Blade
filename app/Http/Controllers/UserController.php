<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function home()
    {
        return view('home');
    }
   
    public function index()
    {
        
        $user = User::paginate(4);
        return view('index', ['data' => $user]);
       
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    
    public function store(Request $req)
    {   $validatedUser = $req->validate([
                    
            'name' => 'required|alpha_num|max:200',
            'email' => 'required|email',
            'city' => 'required|alpha',
            'password' => 'required|min:3',
        
    ]);
    User::create($validatedUser);
    return redirect()->route('users.index')->with('success', 'User created successfully.');
    
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);   
        return view('show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
    
        $user = User::find($id);   
        return view('edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $req, $id)
    {
        {   $validatedUser = $req->validate([
                    
            'name' => 'required|alpha_num|max:200',
            'email' => 'required|email',
            'city' => 'required|alpha',
            'password' => 'required|min:3', 
    ]);
    
    $user = User::find($id);
    
    $user->name = $validatedUser['name'];
    $user->email = $validatedUser['email'];
    $user->city = $validatedUser['city'];
    $user->password = $validatedUser['password'];
    $user->save();
    return redirect()->route('users.show',$user->id)->with('success', 'User updated successfully.');
          }
}
                  
    

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user= User::find($id);
        $user->delete();
            return redirect()->route('users.index')->with('success', 'User deleted successfully.');
        }
    
}
