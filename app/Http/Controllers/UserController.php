<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Auth;
use DB;

class UserController extends Controller
{
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string'/*, 'min:8'*/ , 'confirmed'],
            'role' => ['required']
        ]);
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $data['users'] = User::all();
        return view('users.index', $data);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        DB::beginTransaction();

        try {
            $user = new User([
                'name' => $request->get('name'),
                'email' => $request->get('email'),
                'password' => Hash::make($request->get('password')),
            ]);
            $user->save();
            $user->assignRole('Supplier');

            DB::commit();
            // all good
        } catch (\Exception $e) {
            DB::rollback();
            return redirect()->back()->with('success', $e->getMessage());
            // something went wrong
        }

        return redirect('/users')->with('success', 'User Created Successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $data['user']=User::find($id);
        return view('users.show',$data);
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
    public function destroy(string $id)
    {
        //
        if(Auth::user()->hasRole('Administrator')){
            User::find($id)->delete();
            return redirect()->back()->with('success', 'Resource Deleted successfully');
        }
        else{
            return redirect()->back()->with('success', 'You do not have permission to perform this action.');
        }
    }
}
