<?php

namespace App\Http\Controllers;

use App\Helpers\Rand;
use Illuminate\Routing\Controller;

class LegalNoticeController extends Controller
{
    public function index()
    {
        return view('pages.legals', [
            'title' => 'Legals',
            'today' => now()->format('F d, Y'),
            'updated_at' => now()->subDays(25)->format('F d, Y'),
            'secret' => Rand::int()
        ]);
    }
}
