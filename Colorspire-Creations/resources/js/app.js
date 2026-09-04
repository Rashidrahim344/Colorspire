import './bootstrap';

document.addEventListener('DOMContentLoaded', () => {
    // 1. Mobile Navigation Toggle
    const mobileMenuBtn = document.getElementById('mobile-menu-toggle');
    const mobileMenu = document.getElementById('mobile-menu-drawer');
    const mobileMenuBackdrop = document.getElementById('mobile-menu-backdrop');
    const mobileCloseBtn = document.getElementById('mobile-menu-close');

    function openMobileMenu() {
        if (!mobileMenu || !mobileMenuBackdrop) return;
        mobileMenu.classList.remove('translate-x-full');
        mobileMenuBackdrop.classList.remove('opacity-0', 'pointer-events-none');
        mobileMenuBtn?.setAttribute('aria-expanded', 'true');
        document.body.style.overflow = 'hidden';
    }

    function closeMobileMenu() {
        if (!mobileMenu || !mobileMenuBackdrop) return;
        mobileMenu.classList.add('translate-x-full');
        mobileMenuBackdrop.classList.add('opacity-0', 'pointer-events-none');
        mobileMenuBtn?.setAttribute('aria-expanded', 'false');
        document.body.style.overflow = '';
    }

    mobileMenuBtn?.addEventListener('click', openMobileMenu);
    mobileCloseBtn?.addEventListener('click', closeMobileMenu);
    mobileMenuBackdrop?.addEventListener('click', closeMobileMenu);

    // Close on navigation click
    document.querySelectorAll('.mobile-nav-link').forEach(link => {
        link.addEventListener('click', closeMobileMenu);
    });

    // Close on Escape key
    document.addEventListener('keydown', (e) => {
        if (e.key === 'Escape') {
            closeMobileMenu();
        }
    });

    // 2. FAQ Accordion Logic with ARIA
    const accordionTriggers = document.querySelectorAll('.accordion-trigger');
    accordionTriggers.forEach(trigger => {
        trigger.addEventListener('click', () => {
            const targetId = trigger.getAttribute('aria-controls');
            const targetPanel = document.getElementById(targetId);
            const icon = trigger.querySelector('.accordion-icon');
            const isExpanded = trigger.getAttribute('aria-expanded') === 'true';

            // Close all others
            accordionTriggers.forEach(otherTrigger => {
                if (otherTrigger !== trigger) {
                    otherTrigger.setAttribute('aria-expanded', 'false');
                    const otherId = otherTrigger.getAttribute('aria-controls');
                    const otherPanel = document.getElementById(otherId);
                    const otherIcon = otherTrigger.querySelector('.accordion-icon');
                    if (otherPanel) otherPanel.classList.add('hidden');
                    if (otherIcon) otherIcon.style.transform = 'rotate(0deg)';
                }
            });

            // Toggle current
            if (isExpanded) {
                trigger.setAttribute('aria-expanded', 'false');
                targetPanel?.classList.add('hidden');
                if (icon) icon.style.transform = 'rotate(0deg)';
            } else {
                trigger.setAttribute('aria-expanded', 'true');
                targetPanel?.classList.remove('hidden');
                if (icon) icon.style.transform = 'rotate(180deg)';
            }
        });
    });

    // 3. Flash alert auto-dismiss or manual close
    const alertCloseBtn = document.getElementById('flash-alert-close');
    const alertBanner = document.getElementById('flash-alert');
    if (alertCloseBtn && alertBanner) {
        alertCloseBtn.addEventListener('click', () => {
            alertBanner.remove();
        });
    }
});
