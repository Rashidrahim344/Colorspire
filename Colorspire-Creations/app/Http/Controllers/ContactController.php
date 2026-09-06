<?php

namespace App\Http\Controllers;

use App\Services\ContentService;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class ContactController extends Controller
{
    public function index(Request $request, string $locale = 'en'): View
    {
        $site = ContentService::getSite($locale);

        return view('pages.contact', compact('locale', 'site'));
    }

    public function store(Request $request, string $locale = 'en'): RedirectResponse
    {
        $validated = $request->validate([
            'hs-firstname-contacts' => 'required|string|max:255',
            'hs-lastname-contacts' => 'required|string|max:255',
            'hs-email-contacts' => 'required|email|max:255',
            'hs-phone-number' => 'nullable|string|max:50',
            'hs-about-contacts' => 'required|string|max:2000',
        ]);

        return back()->with('success', $locale === 'fr' 
            ? 'Merci de nous avoir contactés. Votre demande de projet a bien été reçue. Nous examinerons les détails et reviendrons vers vous via les coordonnées fournies.'
            : 'Thanks for reaching out. Your project inquiry has been received. We’ll review the details and get back to you through the contact information you provided.'
        );
    }
}
