<?php

namespace App\Http\Controllers\Api;
use App\Models\About;
use App\Http\Resources\AboutResource;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return AboutResource::collection(About::all());
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
{
    $hassan = $request->validate([
        'name'  => 'required|string|max:255',
        'email' => 'required|email|max:255',
        'price' => 'required|numeric|min:0',
        'city'  => 'required|string|max:100',
    ]);

    $about = About::create($hassan);

    return new AboutResource($about);
}


    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
        $about = About::find($id);
        if(!$about){
          return response()->json([
            "Messge => No Data Not Found"
          ],404);
        }
        return new AboutResource($about);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
        $about = About::find($id);
        $hassan = $request->validate([
            'name'  => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'price' => 'required|numeric|min:0',
            'city'  => 'required|string|max:100',
        ]);
    
        $about->update($hassan);
    
        return new AboutResource($about);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
        $about = About::find($id);
        if(!$about){
            return response()->json([
                "Messge => No Data Not Found"
              ],404);
        }
        $about->delete();
        return response()->json("Messge => yes Date Delete");
    }
}
