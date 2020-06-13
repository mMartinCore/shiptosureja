<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use Auth;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use Session;

class UserController extends Controller
{
    public function __construct()
    {
     //   $this->middleware(['auth', 'isAdmin']);
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users = User::paginate(3);

        return view('users.index')->with('users', $users);
    }

    public function customers()
    {
    $users = User:: paginate(3);
         $users = User::paginate(3);


       return view('users.customers')->with('users', $users);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $roles = Role::get();
        return view('users.create', ['roles'=>$roles]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            'first_name' => ['required', 'string', 'min:2','max:50'],
            'last_name' => ['required', 'string', 'min:2','max:50'],
            'email' => ['required', 'string', 'email', 'min:2', 'max:255', 'unique:users'],
            // 'phone_no'=> ['required', 'integer','min:10', 'max:11'],
            'home_address'=> ['required', 'string', 'min:2','max:200'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);

        $user =  User::create([
            'first_name' => $request['first_name'],
            'last_name' => $request['last_name'],
            'first_name' => $request['first_name'],
            'email' => $request['email'],
            'phone_no' => $request['phone_no'],
            'home_address' => $request['home_address'],
            'type_user' => 'system_user',
             'password' =>bcrypt( $request->input('password'))
        ]);
        $roles = $request['roles'];

        if (isset($roles)) {

            foreach ($roles as $role) {
            $role_r = Role::where('id', '=', $role)->firstOrFail();
            $user->assignRole($role_r);
            }
        }

        return redirect()->route('users.index')
            ->with('flash_message',
             'User successfully added.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::findOrFail(5);
        return view('users.show',compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);
        $roles = Role::get();

        return view('users.edit', compact('user', 'roles'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $this->validate($request, [
            'first_name' => ['required', 'string', 'min:2','max:50'],
            'last_name' => ['required', 'string', 'min:2','max:50'] ,
            // 'phone_no'=> ['required', 'integer','min:10', 'max:11'],
            'home_address'=> ['required', 'string', 'min:2','max:200'],
        ]);

        $input = $request->only(['first_name', 'last_name','email', 'home_address']);
        $roles = $request['roles'];
        $user->fill($input)->save();

        if (isset($roles)) {
            $user->roles()->sync($roles);
        }
        else {
            $user->roles()->detach();
        }
        return redirect()->route('users.index')
            ->with('flash_message',
             'User successfully Updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();

        return redirect()->route('users.index')
            ->with('flash_message',
             'User successfully deleted.');
    }
}
