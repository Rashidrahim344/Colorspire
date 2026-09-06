<section id="faq" class="py-16 sm:py-24 bg-white border-b border-slate-200/80">
    <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
        <!-- Section Header -->
        <div class="text-center mb-16">
            <div class="inline-flex items-center gap-2 px-3 py-1 rounded-full text-xs font-semibold tracking-wide border border-amber-200 bg-amber-50 text-amber-700 mb-4">
                <span>Frequently Asked Questions</span>
            </div>
            <h2 class="text-3xl sm:text-5xl font-extrabold text-slate-900 tracking-tight leading-tight mb-4">
                Frequently Asked Questions
            </h2>
            <p class="text-base sm:text-lg text-slate-600 leading-relaxed">
                Clear and direct responses about our creative services, project timelines, and collaboration process.
            </p>
        </div>

        <!-- FAQ List (ScrewFast style accordions using <x-accordion />) -->
        <div class="space-y-4">
            <x-accordion 
                id="faq-panel-1"
                question="What services does ColorSpire Creations offer?"
                answer="ColorSpire Creations provides end-to-end creative and digital solutions including Graphic Design, Branding and Brand Identity, Website Design and Development (Laravel), Social Media Content Creation & Management, Digital Marketing, and Creative Digital Solutions through The ColorSpire Hub."
                :open="true"
            />

            <x-accordion 
                id="faq-panel-2"
                question="How do I start a project?"
                answer="Starting a project is simple: click 'Start a Project' or navigate to our Contact page. Fill out our brief inquiry form with your primary objectives, timeline, and budget. Our team will review your brief and schedule an initial discovery consultation within 24 hours."
            />

            <x-accordion 
                id="faq-panel-3"
                question="Do you work with businesses outside Zambia?"
                answer="Yes. Our slogan is 'From Zambia to the World — Designed to Inspire.' We work seamlessly with international clients, startups, and organizations across Africa, Europe, North America, and beyond using modern collaborative workflows and clear milestones."
            />

            <x-accordion 
                id="faq-panel-4"
                question="How long does a website project take?"
                answer="Timelines vary depending on project scope. A standard brand website typically takes between 2 to 4 weeks, while comprehensive web applications and custom platforms generally take 4 to 8 weeks. We provide exact delivery milestones before kickoff."
            />

            <x-accordion 
                id="faq-panel-5"
                question="Can ColorSpire help with both branding and websites?"
                answer="Yes, in fact this is our greatest strength. Having a unified studio handle both your brand identity and your digital engineering ensures perfect consistency, seamless typography and design token translation, and higher conversion rates."
            />

            <x-accordion 
                id="faq-panel-6"
                question="How do I request a quote?"
                answer="You can request a quote directly through our Contact form by selecting your desired service package (Creative Essentials, Brand Builder, or Digital Presence) and describing your scope, or by emailing us directly at hello@colorspirecreations.com."
            />
        </div>
    </div>
</section>
