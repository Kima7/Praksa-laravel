<?php
 
namespace App\Http\Controllers;
 
use App\Http\Controllers\Controller;
use App\Http\Requests\MyUserRequest;
use App\Services\MyUserService;

class MyUserController extends Controller
{
    protected $userService;

    public function __construct(MyUserService $userService)
    {
        $this->userService = $userService;
    }

    //display all users
    public function index()
    {
        return $this->userService->displayAll();
    }

    public function store(MyUserRequest $request)
    {
        $this->userService->store($request);
    }

    // Get user profile data for a given user id.
    public function show($id)
    {
        return $this->userService->show($id);
    }

    public function update(MyUserRequest $request,$id)
    {
        $this->userService->update($request,$id);
    }

    //delete user with given user id
    public function destroy($id)
    {
        $this->userService->destroy($id);
    }

}