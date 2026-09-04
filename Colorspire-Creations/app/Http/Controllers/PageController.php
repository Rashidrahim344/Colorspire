<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class PageController extends Controller
{
    /**
     * Display the ColorSpire Creations homepage (ScrewFast UI reference).
     */
    public function home(): View
    {
        return view('home');
    }

    /**
     * Display the dedicated Services page.
     */
    public function services(): View
    {
        return view('pages.services');
    }

    /**
     * Display the dedicated Portfolio page.
     */
    public function portfolio(): View
    {
        return view('pages.portfolio');
    }

    /**
     * Display The ColorSpire Hub dedicated ecosystem gateway.
     */
    public function hub(): View
    {
        return view('pages.hub');
    }

    /**
     * Display the About page.
     */
    public function about(): View
    {
        return view('pages.about');
    }

    /**
     * Display the Blog / Insights page.
     */
    public function blog(): View
    {
        return view('pages.blog');
    }

    /**
     * Display the dedicated Contact page.
     */
    public function contact(): View
    {
        return view('pages.contact');
    }

    /**
     * Handle project consultation inquiries with validation and feedback.
     */
    public function submitContact(ContactRequest $request): RedirectResponse
    {
        $validated = $request->validated();

        return redirect()->back()
            ->with('success', 'Thank you, ' . e($validated['name']) . '! Your project inquiry has been received by ColorSpire Creations. We will review your brief and reply within 24 hours.');
    }
}
