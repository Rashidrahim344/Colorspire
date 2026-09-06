<?php

namespace App\Http\Controllers;

use App\Services\ContentService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InsightController extends Controller
{
    public function show(Request $request, string $id, string $locale = 'en'): View
    {
        $site = ContentService::getSite($locale);
        $post = ContentService::getInsight($id, $locale);

        if (!$post) {
            abort(404);
        }

        return view('pages.insights.show', compact('locale', 'site', 'post'));
    }
}
