<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\News;
use DB;
use Illuminate\View\View;

class NewsController extends Controller
{
    public function index()
    {
        return News::all();
    }
    
    public function show($id)
    {
        $news = News::find($id);
        return response()->json($news, 200);
    }

    public function store(Request $request)
    {
        $news = News::create($request->all());
        return response()->json($news, 201);
    }

    public function update(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $news->update($request->all());

        return response()->json($news, 200);;
    }

    public function delete(Request $request, $id)
    {
        $news = News::findOrFail($id);
        $news->delete();

        return response()->json(null, 204);
    }
}
