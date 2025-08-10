<?php 

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
        return Post::select('id', 'title', 'created_at')->latest()->get();
    }

    public function show($id)
    {
        return Post::findOrFail($id);
    }
}

?>