<?php

namespace App\Http\Controllers;

use App\Models\Tag;
use Illuminate\Http\Request;

class TagController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Tag $tag)
    {
        // dd($tag->jobs);
        return view('job.results', ['jobs' => $tag->jobs]);
    }
}
