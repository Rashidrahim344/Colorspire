<section id="contact" class="py-20 sm:py-32 relative bg-grid-mesh border-t border-white/5">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
            <!-- Left Column: Value Proposition & Direct Contact Details -->
            <div class="lg:col-span-5">
                <div class="mb-4">
                    <x-badge variant="emerald" :pulse="true">Get In Touch</x-badge>
                </div>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-white tracking-tight leading-tight mb-6">
                    Ready to Build a Digital System that <span class="gradient-text-emerald">Inspires and Converts</span>?
                </h2>

                <p class="text-slate-300 text-base sm:text-lg leading-relaxed mb-8">
                    Let's discuss your project goals, technical scope, and timelines. We will review your requirements and provide a strategic architectural proposal within 24 hours.
                </p>

                <div class="space-y-6 border-t border-white/5 pt-8 mb-8 text-sm">
                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 shrink-0">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs text-slate-400 font-mono">Email Direct</div>
                            <a href="mailto:hello@colorspirecreations.com" class="text-white font-semibold hover:text-emerald-400 transition-colors">
                                hello@colorspirecreations.com
                            </a>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-amber-500/10 border border-amber-500/20 flex items-center justify-center text-amber-400 shrink-0">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs text-slate-400 font-mono">Studio Headquarters</div>
                            <div class="text-white font-semibold">Lusaka, Zambia • Worldwide Delivery</div>
                        </div>
                    </div>

                    <div class="flex items-start gap-4">
                        <div class="w-10 h-10 rounded-xl bg-emerald-500/10 border border-emerald-500/20 flex items-center justify-center text-emerald-400 shrink-0">
                            <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs text-slate-400 font-mono">Response Speed</div>
                            <div class="text-white font-semibold">Under 24 Hours Guaranteed</div>
                        </div>
                    </div>
                </div>

                <div class="p-4 rounded-xl bg-[#0b0f19] border border-white/5 text-xs text-slate-400">
                    🔒 <strong class="text-slate-300">Confidentiality Assured:</strong> All project briefs and preliminary discussions are protected by non-disclosure standards.
                </div>
            </div>

            <!-- Right Column: Project Inquiry Form -->
            <div class="lg:col-span-7">
                <div class="glass-card rounded-2xl p-6 sm:p-10 border border-white/10 shadow-2xl relative">
                    <h3 class="text-2xl font-bold text-white mb-2">Request a Project Consultation</h3>
                    <p class="text-slate-300 text-sm mb-8">
                        Fill out the details below to start the conversation.
                    </p>

                    @if(isset($errors) && $errors->any())
                        <div class="mb-6 p-4 rounded-xl bg-rose-950/80 border border-rose-500/50 text-rose-200 text-sm" role="alert">
                            <div class="font-bold mb-1">Please correct the following:</div>
                            <ul class="list-disc list-inside space-y-1">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form action="{{ route('inquiry.store') }}" method="POST" class="space-y-6">
                        @csrf

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <!-- Full Name -->
                            <div>
                                <label for="name" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                                    Your Name <span class="text-emerald-400">*</span>
                                </label>
                                <input type="text" 
                                       id="name" 
                                       name="name" 
                                       value="{{ old('name') }}" 
                                       required
                                       placeholder="e.g. Mwila Chanda" 
                                       class="w-full px-4 py-3 rounded-xl bg-[#0b0f19]/80 border border-white/10 text-white placeholder-slate-500 text-sm focus:border-emerald-400 transition-colors">
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="email" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                                    Work Email <span class="text-emerald-400">*</span>
                                </label>
                                <input type="email" 
                                       id="email" 
                                       name="email" 
                                       value="{{ old('email') }}" 
                                       required
                                       placeholder="mwila@company.com" 
                                       class="w-full px-4 py-3 rounded-xl bg-[#0b0f19]/80 border border-white/10 text-white placeholder-slate-500 text-sm focus:border-emerald-400 transition-colors">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <!-- Service Needed -->
                            <div>
                                <label for="service" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                                    Primary Service
                                </label>
                                <select id="service" 
                                        name="service" 
                                        class="w-full px-4 py-3 rounded-xl bg-[#0b0f19]/80 border border-white/10 text-white text-sm focus:border-emerald-400 transition-colors">
                                    <option value="custom_app" {{ old('service') == 'custom_app' ? 'selected' : '' }}>Custom Laravel Application</option>
                                    <option value="brand_platform" {{ old('service') == 'brand_platform' ? 'selected' : '' }}>High-Conversion Brand Platform</option>
                                    <option value="ecommerce" {{ old('service') == 'ecommerce' ? 'selected' : '' }}>E-Commerce & Payments</option>
                                    <option value="audit" {{ old('service') == 'audit' ? 'selected' : '' }}>Architecture & Performance Audit</option>
                                </select>
                            </div>

                            <!-- Budget / Timeline -->
                            <div>
                                <label for="budget" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                                    Estimated Timeline / Scope
                                </label>
                                <select id="budget" 
                                        name="budget" 
                                        class="w-full px-4 py-3 rounded-xl bg-[#0b0f19]/80 border border-white/10 text-white text-sm focus:border-emerald-400 transition-colors">
                                    <option value="sprint" {{ old('budget') == 'sprint' ? 'selected' : '' }}>Sprint (2 - 3 Weeks)</option>
                                    <option value="custom" {{ old('budget') == 'custom' ? 'selected' : '' }}>Full Custom Platform (4 - 6 Weeks)</option>
                                    <option value="enterprise" {{ old('budget') == 'enterprise' ? 'selected' : '' }}>Enterprise Architecture (Ongoing)</option>
                                    <option value="flexible" {{ old('budget') == 'flexible' ? 'selected' : '' }}>Flexible / Exploratory</option>
                                </select>
                            </div>
                        </div>

                        <!-- Project Brief / Message -->
                        <div>
                            <label for="message" class="block text-xs font-bold uppercase tracking-wider text-slate-300 mb-2">
                                Tell Us About Your Project <span class="text-emerald-400">*</span>
                            </label>
                            <textarea id="message" 
                                      name="message" 
                                      rows="4" 
                                      required
                                      placeholder="Briefly describe your objectives, current challenges, or features needed..." 
                                      class="w-full px-4 py-3 rounded-xl bg-[#0b0f19]/80 border border-white/10 text-white placeholder-slate-500 text-sm focus:border-emerald-400 transition-colors">{{ old('message') }}</textarea>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <x-button type="submit" variant="primary" size="lg" class="w-full">
                                <span>Send Consultation Request</span>
                                <svg class="w-5 h-5" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6 12L3.269 3.126A59.768 59.768 0 0121.485 12 59.77 59.77 0 013.27 20.876L5.999 12zm0 0h7.5" />
                                </svg>
                            </x-button>
                        </div>

                        <p class="text-center text-xs text-slate-500">
                            By submitting, you agree to our privacy policy. No spam, ever.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
