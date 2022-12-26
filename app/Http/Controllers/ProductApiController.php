<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use App\Models\Product;
use App\Http\Requests\StoreProductRequest;
use Exception;

class ProductApiController extends Controller
{
    public function index()
    {          
        $product = Product::all();
        return response()->json($users,Response::HTTP_OK,[], JSON_PRETTY_PRINT);           
    }

    public function store(StoreProductRequest $request)
    {    
        $product=Product::create($request->validated());
        return response()->json($user,status:201);     
    }
   
    public function update(StoreProductRequest $request,$id)
    {     
        $product=Product::findorFail($id);
        $product->forceFill($request->validated())->save();
        return response()->json($user,status:200);  
    }

    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        $product->delete();
        return response()->json(['message' => 'User Deleted successfully']);
    }
}
