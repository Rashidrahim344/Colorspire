<?php
$metaDescription = $post['data']['description'];
$ogTitle = "{$post['data']['title']} | Insights | {$site['title']}";
$pageTitle = "{$post['data']['title']} | {$site['title']}";

$cardImg = str_starts_with($post['data']['cardImage'], 'http')
    ? $post['data']['cardImage']
    : asset($post['data']['cardImage']);
?>

<?php if (isset($component)) { $__componentOriginal5863877a5171c196453bfa0bd807e410 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal5863877a5171c196453bfa0bd807e410 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.layouts.app','data' => ['title' => $pageTitle,'customDescription' => $metaDescription,'customOgTitle' => $ogTitle,'lang' => $locale]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('layouts.app'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['title' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($pageTitle),'customDescription' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($metaDescription),'customOgTitle' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($ogTitle),'lang' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($locale)]); ?>
  <section class="py-6 sm:py-8 lg:py-12">
    <div class="mx-auto max-w-(--breakpoint-xl) px-4 md:px-8">
      <div class="grid gap-8 md:grid-cols-2 lg:gap-12">
        <div>
          <div class="h-64 overflow-hidden rounded-lg shadow-lg md:h-auto">
            <img
              class="h-full w-full object-cover object-center"
              src="<?php echo e($cardImg); ?>"
              alt="<?php echo e($post['data']['cardImageAlt']); ?>"
              draggable="false"
            />
          </div>
          <div
            id="progress-mobile"
            class="fixed top-0 left-0 h-2 w-full bg-linear-to-r from-orange-400/30 to-orange-400 md:hidden"
          >
          </div>
          <div id="pin" class="mt-10 hidden space-y-4 md:block">
            <div
              class="h-px w-full overflow-hidden bg-neutral-300 dark:bg-neutral-700"
            >
              <div
                id="progress"
                class="h-px w-full bg-linear-to-r from-orange-400/30 to-orange-400"
              >
              </div>
            </div>
            <p class="text-sm text-pretty text-neutral-500">
              <?php echo e($locale === 'fr' ? 'Table des matières :' : 'Table of Contents:'); ?>

            </p>
            <div id="toc">
              <ul
                class="space-y-2 text-base text-pretty text-neutral-700 transition duration-300 dark:text-neutral-400"
              >
              </ul>
            </div>
          </div>
        </div>

        <div class="md:pt-8">
          <h1
            class="mb-4 text-center text-2xl font-bold text-balance text-neutral-800 sm:text-3xl md:mb-6 md:text-left dark:text-neutral-200"
          >
            <?php echo e($post['data']['title']); ?>

          </h1>

          <article
            class="text-lg text-pretty text-neutral-700 dark:text-neutral-300"
          >
            <?php echo $post['content']; ?>

          </article>
        </div>
      </div>
    </div>
  </section>

  <style>
    article h2,
    article h3,
    article h4,
    article h5,
    article h6 {
      font-weight: bold;
      margin-top: 2.5rem;
      scroll-margin-top: 3rem;
    }
    article h2 {
      font-size: 1.5rem;
      line-height: 2rem;
    }
    article h3 {
      font-size: 1.25rem;
      line-height: 1.75rem;
    }
    article h4 {
      font-size: 1.125rem;
      line-height: 1.75rem;
    }
    article p {
      margin-top: 1.5rem;
    }
    #toc li {
      display: flex;
      align-items: center;
      opacity: 0.8;
      transition: all 300ms cubic-bezier(0.165, 0.84, 0.44, 1);
    }
    #toc li.selected {
      opacity: 1;
    }
    #toc li svg {
      width: 0;
      height: 0;
      transition: height 400ms cubic-bezier(0.165, 0.84, 0.44, 1), width 400ms cubic-bezier(0.165, 0.84, 0.44, 1);
    }
    #toc li.selected svg {
      width: 1.25rem;
      height: 1.25rem;
      margin-right: 0.3rem;
    }
  </style>

  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const onScroll = () => {
        const article = document.querySelector('article');
        if (!article) return;
        const articleHeight = article.offsetHeight;
        const articleOffsetTop = article.offsetTop;
        const scrollTop = window.scrollY || document.documentElement.scrollTop;

        if (articleHeight && articleOffsetTop && scrollTop) {
          const progress = ((scrollTop - articleOffsetTop) / (articleHeight - window.innerHeight)) * 100;
          const progressBar = document.getElementById('progress');
          const progressBarMobile = document.getElementById('progress-mobile');
          if (progressBar && progressBarMobile) {
            progressBar.style.width = `${Math.min(100, Math.max(0, progress))}%`;
            progressBarMobile.style.width = `${Math.min(100, Math.max(0, progress))}%`;
          }
        }
      };

      window.addEventListener('scroll', onScroll);

      const SVG_HTML_STRING =
        '<svg class="w-0 h-0 flex-none" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#fa5a15"><path stroke-linecap="round" stroke-linejoin="round" d="m12.75 15 3-3m0 0-3-3m3 3h-7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z"></svg>';

      function setActiveLinkById(id) {
        const listItems = document.querySelectorAll('#toc li');
        listItems.forEach(item => item.classList.remove('selected'));
        if (!id) return;
        const activeLink = document.querySelector(`#toc a[href="#${id}"]`);
        if (!activeLink) return;
        const listItem = activeLink.parentElement;
        listItem?.classList.add('selected');
      }

      const article = document.querySelector('article');
      const tocList = document.querySelector('#toc ul');
      const headings = article ? article.querySelectorAll('h1, h2, h3, h4, h5, h6') : [];

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
      });

      if (headings.length > 0) {
        setActiveLinkById(headings[0].id);
      }
    });
  </script>
 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $attributes = $__attributesOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__attributesOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal5863877a5171c196453bfa0bd807e410)): ?>
<?php $component = $__componentOriginal5863877a5171c196453bfa0bd807e410; ?>
<?php unset($__componentOriginal5863877a5171c196453bfa0bd807e410); ?>
<?php endif; ?>
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Documents\GitHub\Colorspire\Colorspire-Creations\resources\views/pages/insights/show.blade.php ENDPATH**/ ?>