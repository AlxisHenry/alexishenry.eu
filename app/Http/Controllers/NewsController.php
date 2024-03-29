<?php

namespace App\Http\Controllers;

use App\Helpers\Regex;
use App\Helpers\Translate;
use App\Models\News;
use DateTime;
use Exception;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Date;

class NewsController extends Controller
{

    public function index(): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {
        return view('pages.news', [
            'title' => 'News',
            'show' => false,
            'navbar' => 'news',
            'categories' => News::categories(),
        ]);
    }

    public function show(string $url): \Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Contracts\Foundation\Application
    {        
        $news = News::url($url);

        if (!$news->is_active) {
            return abort(403);
        }

        return view('pages.article', [
            'title' => 'News',
            'navbar' => 'news',
            'news' => $news,
            'unwanted_array' => Regex::characters(),
        ]);
    }

    public function search(string $key)
    {
        $newsRelatedToThisKeyword = News::keyword($key);
        $no_items = false;
        if(count($newsRelatedToThisKeyword) === 0) $no_items = true;
        return view('pages.news', [
            'title' => $key,
            'show' => true,
            'search' => $key,
            'items' => $no_items,
            'navbar' => 'news',
            'related_news' => $newsRelatedToThisKeyword,
        ]);
    }

}
