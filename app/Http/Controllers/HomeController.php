<?php

namespace App\Http\Controllers;

use App\Post;
use App\Journal;
use App\Http\Requests;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $journal_id = $request->user()->journal_id;
        $journalName = Journal::find($journal_id)->name;
        $posts = Post::all();
        return view('home', [
            'posts' => $posts,
            'journalName' => $journalName
        ]);
    }
}
