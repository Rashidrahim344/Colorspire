<section id="contact" class="py-20 sm:py-32 relative bg-slate-50 border-t border-slate-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-3xl mx-auto mb-16">
            <div class="mb-4">
                <x-badge variant="amber" :pulse="true">Get In Touch</x-badge>
            </div>
            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight mb-4">
                Let's Build Something <span class="text-amber-500">Meaningful</span>
            </h2>
            <p class="text-slate-600 text-base sm:text-lg leading-relaxed">
                Tell us about your project goals, technical scope, and timelines. We will review your requirements and provide a strategic architectural proposal within 24 hours.
            </p>
        </div>

        <div class="grid grid-cols-1 lg:grid-cols-12 gap-10 lg:gap-14 items-start">
            <!-- Left Form: Crisp White Card -->
            <div class="lg:col-span-7">
                <div class="sf-card p-6 sm:p-10 bg-white border border-slate-200/80 shadow-sm rounded-2xl">
                    <div class="mb-8">
                        <h3 class="text-2xl font-bold text-slate-900 mb-1">Fill in the form below</h3>
                        <p class="text-sm text-slate-500">
                            Fill out the details below to start the conversation.
                        </p>
                    </div>

                    @if(isset($errors) && $errors->any())
                        <div class="mb-6 p-4 rounded-xl bg-red-50 border border-red-200 text-red-800 text-sm" role="alert">
                            <div class="font-bold mb-1">Please correct the following:</div>
                            <ul class="list-disc list-inside space-y-1 text-xs">
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
                                <label for="section-name" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                    Your Name <span class="text-amber-500">*</span>
                                </label>
                                <input type="text" 
                                       id="section-name" 
                                       name="name" 
                                       value="{{ old('name') }}" 
                                       required
                                       placeholder="e.g. Mwila Chanda" 
                                       class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 text-sm focus:bg-white focus:border-amber-500 focus:outline-none transition-colors">
                            </div>

                            <!-- Email -->
                            <div>
                                <label for="section-email" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                    Work Email <span class="text-amber-500">*</span>
                                </label>
                                <input type="email" 
                                       id="section-email" 
                                       name="email" 
                                       value="{{ old('email') }}" 
                                       required
                                       placeholder="mwila@company.com" 
                                       class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 text-sm focus:bg-white focus:border-amber-500 focus:outline-none transition-colors">
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-6">
                            <!-- Service Needed -->
                            <div>
                                <label for="section-service" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                    Primary Service
                                </label>
                                <select id="section-service" 
                                        name="service" 
                                        class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-sm focus:bg-white focus:border-amber-500 focus:outline-none transition-colors">
                                    <option value="custom_app" {{ old('service') == 'custom_app' ? 'selected' : '' }}>Custom Laravel Application</option>
                                    <option value="brand_platform" {{ old('service') == 'brand_platform' ? 'selected' : '' }}>High-Conversion Brand Platform</option>
                                    <option value="ecommerce" {{ old('service') == 'ecommerce' ? 'selected' : '' }}>E-Commerce & Payments</option>
                                    <option value="audit" {{ old('service') == 'audit' ? 'selected' : '' }}>Architecture & Performance Audit</option>
                                    <option value="brand_identity" {{ old('service') == 'brand_identity' ? 'selected' : '' }}>Brand Identity & Systems</option>
                                    <option value="web_dev" {{ old('service') == 'web_dev' ? 'selected' : '' }}>Website Design & Development</option>
                                </select>
                            </div>

                            <!-- Budget / Timeline -->
                            <div>
                                <label for="section-budget" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                    Estimated Timeline / Scope
                                </label>
                                <select id="section-budget" 
                                        name="budget" 
                                        class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 text-sm focus:bg-white focus:border-amber-500 focus:outline-none transition-colors">
                                    <option value="sprint" {{ old('budget') == 'sprint' ? 'selected' : '' }}>Sprint (2 - 3 Weeks)</option>
                                    <option value="custom" {{ old('budget') == 'custom' ? 'selected' : '' }}>Full Custom Platform (4 - 6 Weeks)</option>
                                    <option value="enterprise" {{ old('budget') == 'enterprise' ? 'selected' : '' }}>Enterprise Architecture (Ongoing)</option>
                                    <option value="flexible" {{ old('budget') == 'flexible' ? 'selected' : '' }}>Flexible / Exploratory</option>
                                </select>
                            </div>
                        </div>

                        <!-- Project Details Textarea -->
                        <div>
                            <label for="section-message" class="block text-xs font-bold uppercase tracking-wider text-slate-700 mb-2">
                                Project Details <span class="text-amber-500">*</span>
                            </label>
                            <textarea id="section-message" 
                                      name="message" 
                                      rows="4" 
                                      required
                                      placeholder="Briefly describe your objectives, current challenges, or features needed..." 
                                      class="w-full px-4 py-3 rounded-xl bg-slate-50 border border-slate-200 text-slate-900 placeholder-slate-400 text-sm focus:bg-white focus:border-amber-500 focus:outline-none transition-colors">{{ old('message') }}</textarea>
                        </div>

                        <!-- Submit Button -->
                        <div>
                            <x-button type="submit" variant="primary" size="lg" class="w-full shadow-sm">
                                <span>Send Message</span>
                                <svg class="w-5 h-5 ml-2" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                                </svg>
                            </x-button>
                        </div>

                        <p class="text-center text-xs text-slate-500 font-medium">
                            We'll get back to you in 1-2 business days.
                        </p>
                    </form>
                </div>
            </div>

            <!-- Right Information Stack: 4 Horizontal Link Cards -->
            <div class="lg:col-span-5 space-y-4">
                <!-- Card 1: Knowledgebase / The Hub -->
                <a href="{{ route('hub') }}" class="sf-card sf-card-hover p-5 bg-white border border-slate-200/80 rounded-2xl flex items-center justify-between group transition-all">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-amber-50 border border-amber-200/80 flex items-center justify-center text-amber-600 shrink-0 group-hover:bg-amber-100 transition-colors">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.042A8.967 8.967 0 006 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 016 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 016-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 0018 18a8.967 8.967 0 00-6 2.292m0-14.25v14.25" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs text-slate-500 font-mono uppercase">Knowledgebase</div>
                            <div class="text-base font-bold text-slate-900 group-hover:text-amber-600 transition-colors">The Hub</div>
                            <div class="text-xs text-slate-500 mt-0.5">Explore child brands & guides →</div>
                        </div>
                    </div>
                    <svg class="w-5 h-5 text-slate-400 group-hover:text-amber-500 group-hover:translate-x-1 transition-all shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </a>

                <!-- Card 2: FAQ -->
                <a href="#faq" class="sf-card sf-card-hover p-5 bg-white border border-slate-200/80 rounded-2xl flex items-center justify-between group transition-all">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-700 shrink-0 group-hover:bg-slate-200/70 transition-colors">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs text-slate-500 font-mono uppercase">Answers</div>
                            <div class="text-base font-bold text-slate-900 group-hover:text-amber-600 transition-colors">Frequently Asked Questions</div>
                            <div class="text-xs text-slate-500 mt-0.5">Quick delivery & engagement answers</div>
                        </div>
                    </div>
                    <svg class="w-5 h-5 text-slate-400 group-hover:text-amber-500 group-hover:translate-x-1 transition-all shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M8.25 4.5l7.5 7.5-7.5 7.5" />
                    </svg>
                </a>

                <!-- Card 3: Studio Coordinates -->
                <div class="sf-card p-5 bg-white border border-slate-200/80 rounded-2xl flex items-center justify-between">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-amber-50 border border-amber-200/80 flex items-center justify-center text-amber-600 shrink-0">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M15 10.5a3 3 0 11-6 0 3 3 0 016 0z" />
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 10.5c0 7.142-7.5 11.25-7.5 11.25S4.5 17.642 4.5 10.5a7.5 7.5 0 1115 0z" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs text-slate-500 font-mono uppercase">Headquarters</div>
                            <div class="text-base font-bold text-slate-900">Studio Coordinates</div>
                            <div class="text-xs text-slate-600 font-medium mt-0.5">Lusaka, Zambia • Delivering to clients worldwide</div>
                        </div>
                    </div>
                </div>

                <!-- Card 4: Direct Inquiries -->
                <a href="mailto:hello@colorspirecreations.com" class="sf-card sf-card-hover p-5 bg-white border border-slate-200/80 rounded-2xl flex items-center justify-between group transition-all">
                    <div class="flex items-center gap-4">
                        <div class="w-12 h-12 rounded-xl bg-slate-100 border border-slate-200 flex items-center justify-center text-slate-700 shrink-0 group-hover:bg-slate-200/70 transition-colors">
                            <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M21.75 6.75v10.5a2.25 2.25 0 01-2.25 2.25h-15a2.25 2.25 0 01-2.25-2.25V6.75m19.5 0A2.25 2.25 0 0019.5 4.5h-15a2.25 2.25 0 00-2.25 2.25m19.5 0v.243a2.25 2.25 0 01-1.07 1.916l-7.5 4.615a2.25 2.25 0 01-2.36 0L3.32 8.91a2.25 2.25 0 01-1.07-1.916V6.75" />
                            </svg>
                        </div>
                        <div>
                            <div class="text-xs text-slate-500 font-mono uppercase">Email Direct</div>
                            <div class="text-base font-bold text-slate-900 group-hover:text-amber-600 transition-colors">Direct Inquiries</div>
                            <div class="text-xs text-slate-600 font-mono mt-0.5">hello@colorspirecreations.com</div>
                        </div>
                    </div>
                    <svg class="w-5 h-5 text-slate-400 group-hover:text-amber-500 group-hover:translate-x-1 transition-all shrink-0" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</section>
