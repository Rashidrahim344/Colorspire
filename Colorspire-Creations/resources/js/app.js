import 'preline';
import Lenis from 'lenis';
import { gsap } from 'gsap';
import { ScrollTrigger } from 'gsap/ScrollTrigger';

// Register GSAP plugins
gsap.registerPlugin(ScrollTrigger);

// Initialize Lenis smooth scroll
const lenis = new Lenis({
  autoRaf: true,
});

// Auto-initialize Preline UI
const initPreline = () => {
  if (window.HSStaticMethods && typeof window.HSStaticMethods.autoInit === 'function') {
    window.HSStaticMethods.autoInit();
  }
};

if (document.readyState === 'loading') {
  document.addEventListener('DOMContentLoaded', initPreline);
} else {
  initPreline();
}

// HSThemeAppearance definition
const HSThemeAppearance = {
  init() {
    const defaultTheme = 'default';
    let theme = localStorage.getItem('hs_theme') || defaultTheme;

    if (document.querySelector('html').classList.contains('dark')) return;
    this.setAppearance(theme);
  },
  _resetStylesOnLoad() {
    const $resetStyles = document.createElement('style');
    $resetStyles.innerText = `*{transition: unset !important;}`;
    $resetStyles.setAttribute('data-hs-appearance-onload-styles', '');
    document.head.appendChild($resetStyles);
    return $resetStyles;
  },
  setAppearance(theme, saveInStore = true, dispatchEvent = true) {
    const $resetStylesEl = this._resetStylesOnLoad();

    if (saveInStore) {
      localStorage.setItem('hs_theme', theme);
    }

    if (theme === 'auto') {
      theme = window.matchMedia('(prefers-color-scheme: dark)').matches
        ? 'dark'
        : 'default';
    }

    document.querySelector('html').classList.remove('dark');
    document.querySelector('html').classList.remove('default');
    document.querySelector('html').classList.remove('auto');

    document
      .querySelector('html')
      .classList.add(this.getOriginalAppearance());

    setTimeout(() => {
      $resetStylesEl.remove();
    });

    if (dispatchEvent) {
      window.dispatchEvent(
        new CustomEvent('on-hs-appearance-change', { detail: theme })
      );
    }
  },
  getAppearance() {
    let theme = this.getOriginalAppearance();
    if (theme === 'auto') {
      theme = window.matchMedia('(prefers-color-scheme: dark)').matches
        ? 'dark'
        : 'default';
    }
    return theme;
  },
  getOriginalAppearance() {
    const defaultTheme = 'default';
    return localStorage.getItem('hs_theme') || defaultTheme;
  },
};

HSThemeAppearance.init();

window
  .matchMedia('(prefers-color-scheme: dark)')
  .addEventListener('change', () => {
    if (HSThemeAppearance.getOriginalAppearance() === 'auto') {
      HSThemeAppearance.setAppearance('auto', false);
    }
  });

window.addEventListener('load', () => {
  const $clickableThemes = document.querySelectorAll(
    '[data-hs-theme-click-value]'
  );
  const $switchableThemes = document.querySelectorAll(
    '[data-hs-theme-switch]'
  );

  $clickableThemes.forEach($item => {
    $item.addEventListener('click', () =>
      HSThemeAppearance.setAppearance(
        $item.getAttribute('data-hs-theme-click-value'),
        true,
        $item
      )
    );
  });

  $switchableThemes.forEach($item => {
    $item.addEventListener('change', e => {
      HSThemeAppearance.setAppearance(e.target.checked ? 'dark' : 'default');
    });

    $item.checked = HSThemeAppearance.getAppearance() === 'dark';
  });

  window.addEventListener('on-hs-appearance-change', e => {
    $switchableThemes.forEach($item => {
      $item.checked = e.detail === 'dark';
    });
  });
});

// Product detail interactive animations and tab switching
document.addEventListener('DOMContentLoaded', function () {
  // GSAP animations for Product detail hero
  if (document.querySelector('#fadeInUp')) {
    gsap.set('#fadeText', {
      autoAlpha: 0,
      y: 50,
      willChange: 'transform, opacity',
    });

    gsap.set('#fadeInUp', {
      autoAlpha: 0,
      y: 50,
      willChange: 'transform, opacity',
    });

    gsap.set('#fadeInMoveRight', {
      autoAlpha: 0,
      x: 300,
      willChange: 'transform, opacity',
    });

    let timeline = gsap.timeline({ defaults: { overwrite: 'auto' } });

    timeline.to('#fadeText', {
      duration: 1.5,
      autoAlpha: 1,
      y: 0,
      delay: 0.5,
      ease: 'power2.out',
    });

    timeline.to(
      '#fadeInUp',
      { duration: 1.5, autoAlpha: 1, y: 0, ease: 'power2.out' },
      '-=1.2'
    );

    timeline.to(
      '#fadeInMoveRight',
      { duration: 1.5, autoAlpha: 1, x: 0, ease: 'power2.inOut' },
      '-=1.4'
    );

    if (document.querySelector('#overlay')) {
      timeline.to('#overlay', { duration: 1, autoAlpha: 0, delay: 0.2 });
    }
  }

  // Product tab switching
  const tabButtons = document.querySelectorAll('[data-target]');
  if (tabButtons.length > 0) {
    function setButtonInactive(btn, activeButton) {
      if (btn !== activeButton) {
        btn.classList.remove(
          'active',
          'bg-neutral-100',
          'hover:border-transparent',
          'dark:bg-white/[.05]'
        );

        const tabId = btn.getAttribute('data-target');
        if (tabId) {
          const contentElement = document.querySelector(tabId);
          if (contentElement) {
            contentElement.classList.add('hidden');
          }
        }

        changeHeadingStyle(
          btn,
          ['text-neutral-800', 'dark:text-neutral-200'],
          ['text-orange-400', 'dark:text-orange-300']
        );
      }
    }

    function activateButton(button) {
      button.classList.add(
        'active',
        'bg-neutral-100',
        'hover:border-transparent',
        'dark:bg-white/[.05]'
      );

      const tabId = button.getAttribute('data-target');
      if (tabId) {
        const contentElementToShow = document.querySelector(tabId);
        if (contentElementToShow) {
          contentElementToShow.classList.remove('hidden');
        }
      }

      changeHeadingStyle(
        button,
        ['text-orange-400', 'dark:text-orange-300'],
        ['text-neutral-800', 'dark:text-neutral-200']
      );
    }

    function changeHeadingStyle(button, addClasses, removeClasses) {
      let heading = button.querySelector('span');
      if (heading) {
        heading.classList.remove(...removeClasses);
        heading.classList.add(...addClasses);
      }
    }

    changeHeadingStyle(
      tabButtons[0],
      ['text-orange-400', 'dark:text-orange-300'],
      []
    );

    tabButtons.forEach(button => {
      button.addEventListener('click', () => {
        tabButtons.forEach(btn => setButtonInactive(btn, button));
        activateButton(button);
      });
    });
  }

  // Insights progress bar and Table of Contents
  const article = document.querySelector('article');
  if (article && document.querySelector('#pin')) {
    const onScroll = () => {
      const articleHeight = article.offsetHeight;
      const articleOffsetTop = article.offsetTop;
      const scrollTop = window.scrollY || document.documentElement.scrollTop;

      if (articleHeight && articleOffsetTop && scrollTop) {
        const progress =
          ((scrollTop - articleOffsetTop) /
            (articleHeight - window.innerHeight)) *
          100;

        const progressBar = document.getElementById('progress');
        const progressBarMobile = document.getElementById('progress-mobile');

        if (progressBar && progressBarMobile) {
          progressBar.style.width = `${Math.min(100, Math.max(0, progress))}%`;
          progressBarMobile.style.width = `${Math.min(100, Math.max(0, progress))}%`;
        }
      }
    };

    window.addEventListener('scroll', onScroll);

    gsap.timeline({
      scrollTrigger: {
        scrub: 1,
        pin: true,
        trigger: '#pin',
        start: 'top 20%',
        endTrigger: 'footer',
        end: 'top bottom',
      },
    });

    const SVG_HTML_STRING =
      '<svg class="w-0 h-0 flex-none" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fa5a15"><path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></svg>';

    const tocList = document.querySelector('#toc ul');
    const headings = article.querySelectorAll('h1, h2, h3, h4, h5, h6');

    function setActiveLinkById(id) {
      const listItems = document.querySelectorAll('#toc li');
      listItems.forEach(item => item.classList.remove('selected'));
      if (!id) return;
      const activeLink = document.querySelector(`#toc a[href="#${id}"]`);
      if (!activeLink) return;
      activeLink.parentElement?.classList.add('selected');
    }

    headings.forEach((heading, i) => {
      if (!heading.id) {
        heading.id = 'heading-' + i;
      }
      const listItem = document.createElement('li');
      listItem.className = 'toc-level-' + heading.tagName.toLowerCase();

      const tempDiv = document.createElement('div');
      tempDiv.innerHTML = SVG_HTML_STRING;
      const svg = tempDiv.firstChild;
      listItem.appendChild(svg);

      const link = document.createElement('a');
      link.href = '#' + heading.id;
      link.textContent = heading.textContent;
      listItem.appendChild(link);

      tocList?.appendChild(listItem);

      gsap.timeline({
        scrollTrigger: {
          trigger: heading,
          start: 'top 20%',
          end: () =>
            `bottom top+=${i === headings.length - 1 ? 0 : headings[i + 1]?.getBoundingClientRect().height || 0}`,
          onEnter: () => setActiveLinkById(heading.id),
          onLeaveBack: () =>
            setActiveLinkById(headings[i - 1]?.id),
        },
      });
    });
  }

  // Dismiss announcement banner
  const dismissBtn = document.getElementById('dismiss-button');
  if (dismissBtn) {
    dismissBtn.addEventListener('click', () => {
      const banner = dismissBtn.closest('[role="region"]') || dismissBtn.closest('.fixed');
      if (banner) {
        banner.remove();
      }
    });
  }
});

export { HSThemeAppearance, lenis };
