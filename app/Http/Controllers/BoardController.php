<?php

namespace App\Http\Controllers;

use App\Models\Board;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BoardController extends Controller
{
    //

    public function __construct()
    {

    }

    public function AllBoards(): \Illuminate\Database\Eloquent\Collection
    {
        return Board::all();
    }

    public function Board(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('templates.board', ['title' => 'Board - HENRY ALEXIS',
                    'navbar' => 'board',
                    'og_description' => 'Portfolio - HENRY ALEXIS - Board',
                    'Boards' => $this->AllBoards()]);
    }

}
