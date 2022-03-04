<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Models\MyUser;
 
class MyUserController extends Controller
{

    //display all users
    public function index()
    {
        return MyUser::all();
    }

    public function store(MyUser $user)
    {
        $s = new MyUser();
        $s->name = $user->name;
        $s->nickname = $user->nickname;
        $s->password = $user->password;
        $s->save();
    }

    // Get user profile data for a given user id.
    public function show($id)
    {
        return MyUser::where('id','=',$id)->first();
    }

    public function edit(MyUser $user)
    {
        //
    }

    public function update(MyUser $user)
    {
        //
    }

    //delete user with given user id
    public function destroy($id)
    {
        //User::destroy($id);
        //User::where('id','=',$id)->destroy;

        $user = MyUser::find($id);
        $user->delete();
        //return redirect('/')->with('success', 'User deleted');
    }

}