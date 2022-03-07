<?php
 
namespace App\Services;
 
use App\Http\Requests\MyUserRequest;
use App\Models\MyUser;

class MyUserService
{
    public function displayAll()
    {
        return MyUser::all();
    }

    public function store(MyUserRequest $request)
    {
        // MyUser::create(['name'=>$request->name, 'nickname'=> $request->nickname,'password'=>$request->password]);
        MyUser::create($request->validated());
    }

    // Get user profile data for a given user id.
    public function show($id)
    {
        return MyUser::where('id','=',$id)->first();
    }

    public function update(MyUserRequest $request,$id)
    {
        $user = MyUser::where('id','=',$id)->first();
        $user->update($request->validated());
    }

    //delete user with given user id
    public function destroy($id)
    {
        $user = MyUser::find($id);
        $user->delete();
    }
}