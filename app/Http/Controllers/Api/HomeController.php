<?php

namespace App\Http\Controllers\Api;

use App\Models\Home;
use App\Http\Resources\HomeResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return HomeResource::collection(Home::all());
        
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
        $home = $request->validate([
          'name'  => 'required|string|max:255',
          'email' => 'required|email|max:255',
          'price' => 'required|numeric',
          'phone' => 'required|string|max:20',
        ]);

        $hassan= Home::create($home);
        return new HomeResource($hassan);

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //

        $home = Home::find($id);
        if(!$home){
           return response()->json([
              "Messge => Not Found"
           ],404);
        }
        return new HomeResource($home);
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $hassan = Home::find($id);
        $home = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'price' => 'required|numeric',
            'phone' => 'required|string|max:20',
          ]);
  
          $hassan->update($home);

          return new HomeResource($hassan);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $home = Home::find($id);
        
        if(!$home){
            return response()->json(["messge => Error Not Found"]);
        }
        $home->delete();
        return response()->json(['messge => delete Data yes']);
    }
}
