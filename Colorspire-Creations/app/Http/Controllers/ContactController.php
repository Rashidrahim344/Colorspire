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
            ? 'Votre message a été envoyé avec succès. Nous vous contacterons sous peu !'
            : 'Your message has been sent successfully. We will get back to you shortly!'
        );
    }
}
