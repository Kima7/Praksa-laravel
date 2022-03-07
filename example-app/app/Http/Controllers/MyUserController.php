<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Http\Requests\MyUserRequest;
use App\Services\MyUserService;

class MyUserController extends Controller
{

    //display all users
    public function index()
    {
        $service = new MyUserService();
        return $service->displayAll();
    }

    public function store(MyUserRequest $request)
    {
        $service = new MyUserService();
        $service->store($request);
    }

    // Get user profile data for a given user id.
    public function show($id)
    {
        $service = new MyUserService();
        return $service->show($id);
    }

    public function update(MyUserRequest $request,$id)
    {
        $service = new MyUserService();
        $service->update($request,$id);
    }

    //delete user with given user id
    public function destroy($id)
    {
        $service = new MyUserService();
        $service->destroy($id);
    }

}