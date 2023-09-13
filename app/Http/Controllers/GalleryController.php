<?php

namespace App\Http\Controllers;

use App\Http\Requests\GalleryRequest;
use App\Models\Gallery;
use Illuminate\Http\JsonResponse;
use App\Http\Resources\GalleryResource;
use Illuminate\Http\Resources\Json\JsonResource;


class GalleryController extends Controller
{
    
    public function index():JsonResource
    {
        return GalleryResource::collection(Gallery::all());
    }

    
    public function store(GalleryRequest $request):JsonResponse
    {
        $gallery = Gallery::create($request->all());
        return response()->json([
            'success'=> true,
            'data'=> new GalleryResource($gallery)
        ],201);

    }

   
    public function show(string $id):JsonResource
    {
        $gallery = Gallery::find($id);
        return new GalleryResource($gallery);
    }

    
    public function update(GalleryRequest $request, string $id):JsonResponse
    {
        $gallery = Gallery::find($id);
        $gallery -> title = $request -> title;
        $gallery -> cover_url =$request -> cover_url;
        $gallery ->save();
        return response() ->json([
            'success' => true,
            'data' => new GalleryResource($gallery)
        ],200);

    }

    
    public function destroy(string $id):JsonResponse
    {
        Gallery::find($id)->delete();
        return response()->json([
            'success'=> true,
        ],200);
    }
}
