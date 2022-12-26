<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\User;
use App\Http\Requests\StoreUserPostRequest;
use Exception;

class UserApiController extends Controller
{
  
    public function index()
    {          
        $users = User::all();
        return response()->json($users,Response::HTTP_OK,[], JSON_PRETTY_PRINT);           
    }

    public function store(StoreUserPostRequest $request)
    {    
        $user=User::create($request->validated());
        return response()->json($user,status:201);     
    }
   
    public function update(StoreUserPostRequest $request,$id)
    {     
        $user=User::findorFail($id);
        $user->forceFill($request->validated())->save();
        return response()->json($user,status:200);  
    }

    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return response()->json(['message' => 'User Deleted successfully']);
    }

 
}
