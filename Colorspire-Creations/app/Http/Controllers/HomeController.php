<?php

namespace App\Http\Controllers;

use App\Http\Requests\ContactRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class HomeController extends Controller
{
    /**
     * Display the ColorSpire Creations strategic homepage.
     */
    public function index(): View
    {
        return view('home', [
            'metaTitle' => 'Colorspire Creations — Strategic Web Design & High-Performance Engineering',
            'metaDescription' => 'From Zambia to the World — ColorSpire Creations engineers high-converting digital platforms, custom Laravel web applications, and enterprise UI/UX systems.',
        ]);
    }

    /**
     * Handle project consultation inquiries with validated input and feedback.
     */
    public function inquiry(ContactRequest $request): RedirectResponse
    {
        // Retrieve validated payload
        $validated = $request->validated();

        // In production, an inquiry notification Mailable or database job would be dispatched here:
        // Mail::to(config('mail.from.address'))->send(new NewInquiryNotification($validated));

        $redirectUrl = strtok(url()->previous(), '#') . '#contact';

        return redirect()->to($redirectUrl)
            ->with('success', 'Thank you, ' . e($validated['name']) . '! Your project brief has been received. A ColorSpire strategist will review your requirements and respond within 24 hours.');
    }
}
