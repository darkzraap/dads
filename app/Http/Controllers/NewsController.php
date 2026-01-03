<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Cache;

class NewsController extends Controller
{
    public function index()
    {
        // cache to avoid hitting API too often
        $news = Cache::remember('internet_news', now()->addMinutes(30), function () {
$response = Http::get(config('services.newsapi.url'), [
    'q' => '"fiber optic" OR "kabel optik" OR ISP OR broadband OR wifi OR modem',
    'language' => 'id',
    'sortBy' => 'publishedAt',
    'pageSize' => 15,
    'apiKey' => config('services.newsapi.key'),
]);


            if ($response->failed()) {
                return [];
            }

            return $response->json()['articles'] ?? [];
        });

        return view('news.index', compact('news'));
    }
}
