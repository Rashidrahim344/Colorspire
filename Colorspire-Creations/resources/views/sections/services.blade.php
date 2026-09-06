<section id="services" class="py-20 sm:py-32 bg-slate-50 relative border-t border-slate-200/80">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <x-section-heading 
            eyebrow="What We Build" 
            badgeVariant="amber"
            title="Strategic Engineering & Design for Modern Brands"
            description="We build robust digital solutions tailored to your operational realities, combining clean backend architecture with refined, conversion-driven interfaces."
        />

        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-2 gap-8">
            <!-- Service 1: Custom Laravel Web Applications -->
            <x-service-card 
                title="Custom Laravel Web Applications"
                description="Bespoke web applications built on Laravel 12. From customer portals and business dashboards to internal SaaS workflows and API ecosystems."
                badge="Flagship"
                badgeVariant="emerald"
                :features="[
                    'Tailored database architecture and Eloquent models',
                    'Enterprise authentication, role-based access control (RBAC)',
                    'Secure REST & GraphQL API integrations',
                    'Sub-second page speeds with optimized server query caching'
                ]"
                ctaText="Discuss an Application"
                ctaHref="#contact"
            >
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 7.5l3 2.25-3 2.25m4.5 0h3m-9 8.25h13.5A2.25 2.25 0 0021 18V6a2.25 2.25 0 00-2.25-2.25H5.25A2.25 2.25 0 003 6v12a2.25 2.25 0 002.25 2.25z" />
                </svg>
            </x-service-card>

            <!-- Service 2: High-Conversion Brand Platforms -->
            <x-service-card 
                title="High-Conversion Brand Platforms"
                description="Digital flagships designed with the ColorSpire clarity-first framework. Every headline, interaction, and visual token is tuned to convert visitors into clients."
                badge="Conversion"
                badgeVariant="copper"
                :features="[
                    'Comprehensive Information Architecture and buyer psychology',
                    'Mobile-first responsive design engineered for all viewports',
                    'Zero layout shift, 100/100 Core Web Vitals optimization',
                    'Complete search engine metadata, OpenGraph, and JSON-LD schema'
                ]"
                ctaText="Elevate Your Brand"
                ctaHref="#contact"
            >
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 3v11.25A2.25 2.25 0 006 16.5h2.25M3.75 3h-1.5m1.5 0h16.5m0 0h1.5m-1.5 0v11.25A2.25 2.25 0 0118 16.5h-2.25m-7.5 0h7.5m-7.5 0l-1 3m8.5-3l1 3m0 0l.5 1.5m-.5-1.5h-9.5m0 0l-.5 1.5" />
                </svg>
            </x-service-card>

            <!-- Service 3: E-Commerce & Monetization Systems -->
            <x-service-card 
                title="E-Commerce & Payment Systems"
                description="High-velocity shopping and checkout experiences with seamless payment gateway integration for local and international transactions."
                badge="Scalable"
                badgeVariant="emerald"
                :features="[
                    'Mobile Money, Visa/Mastercard, Stripe, Paystack integrations',
                    'Frictionless multi-step checkout with server validation',
                    'Real-time inventory sync and automated customer notifications',
                    'Defensive security standards and PCI-compliant handling'
                ]"
                ctaText="Build E-Commerce"
                ctaHref="#contact"
            >
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 3h1.386c.51 0 .955.343 1.087.835l.383 1.437M7.5 14.25a3 3 0 00-3 3h15.75m-12.75-3h11.218c1.121-2.3 2.1-4.684 2.924-7.138a60.114 60.114 0 00-16.536-1.84M7.5 14.25L5.106 5.272M6 20.25a.75.75 0 11-1.5 0 .75.75 0 011.5 0zm12.75 0a.75.75 0 11-1.5 0 .75.75 0 011.5 0z" />
                </svg>
            </x-service-card>

            <!-- Service 4: Design Systems & Architecture Refactoring -->
            <x-service-card 
                title="Design Systems & Architecture Audits"
                description="Transform fragmented codebases into unified, reusable component ecosystems. We optimize performance, improve accessibility, and modernize legacy systems."
                badge="Enterprise"
                badgeVariant="copper"
                :features="[
                    'Reusable Blade and Tailwind CSS design token libraries',
                    'Full WCAG 2.1 AA accessibility and keyboard navigation audit',
                    'Database query optimization and performance refactoring',
                    'Comprehensive documentation and developer handoff'
                ]"
                ctaText="Request an Audit"
                ctaHref="#contact"
            >
                <svg class="w-6 h-6" fill="none" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M9.75 3.104v5.714a2.25 2.25 0 01-.659 1.591L5 14.5M9.75 3.104c-.251.023-.501.05-.75.082m.75-.082a24.301 24.301 0 014.5 0m0 0v5.714c0 .597.237 1.17.659 1.591L19.8 15.3M14.25 3.104c.251.023.501.05.75.082M19.8 15.3l-1.57.523a4.5 4.5 0 01-2.83 0l-1.57-.523m5.97 0a9 9 0 01-15.6 0M4.5 15.3l1.57.523a4.5 4.5 0 002.83 0l1.57-.523" />
                </svg>
            </x-service-card>
        </div>
    </div>
</section>
