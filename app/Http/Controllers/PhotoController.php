<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photo;
use App\Http\Requests\PhotoRequest;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\PhotoResource;
use Illuminate\Http\Resources\Json\JsonResource;

class PhotoController extends Controller
{

    public function index():JsonResource
    {
        return PhotoResource::collection(Photo::all());
    }

   
    public function store(PhotoRequest $request):JsonResponse
    {
        $photo = Photo::create($request->all());
        return response()->json([
            'success'=>true,
            'data' => new PhotoResource($photo)
        ], 201);
    }

    
    public function show(string $id):JsonResource
    {
        $photo = Photo::find($id);
        return new PhotoResource($photo);
    }

    
    public function update(Request $request, string $id):JsonResponse
    {
        $photo = Photo::find($id);
        $photo -> description = $request ->description;
        $photo -> gallery_id = $request ->gallery_id;
        $photo -> url = $request ->url;
        $photo -> save();
        return response()->json([
            'success' =>true,
            'data' => new PhotoResource($photo)],
            200);
    }

    
    public function destroy(string $id):JsonResponse
    {
        Photo::find($id)->delete();
        return response()->json([
            'success' => true], 
            200);
    }
}
