<?php $attributes ??= new \Illuminate\View\ComponentAttributeBag;

$__newAttributes = [];
$__propNames = \Illuminate\View\ComponentAttributeBag::extractPropNames(([
    'title' => null,
    'meta' => null,
    'structuredData' => null,
    'customDescription' => null,
    'customOgTitle' => null,
]));

foreach ($attributes->all() as $__key => $__value) {
    if (in_array($__key, $__propNames)) {
        $$__key = $$__key ?? $__value;
    } else {
        $__newAttributes[$__key] = $__value;
    }
}

$attributes = new \Illuminate\View\ComponentAttributeBag($__newAttributes);

unset($__propNames);
unset($__newAttributes);

foreach (array_filter(([
    'title' => null,
    'meta' => null,
    'structuredData' => null,
    'customDescription' => null,
    'customOgTitle' => null,
]), 'is_string', ARRAY_FILTER_USE_KEY) as $__key => $__value) {
    $$__key = $$__key ?? $__value;
}

$__defined_vars = get_defined_vars();

foreach ($attributes->all() as $__key => $__value) {
    if (array_key_exists($__key, $__defined_vars)) unset($$__key);
}

unset($__defined_vars); ?>

<?php
$site = \App\Services\ContentService::getSite();
$og = \App\Services\ContentService::getOg();
$seo = \App\Services\ContentService::getSeo();

$description = $customDescription ?: ($meta ?: $site['description']);
$ogTitle = $customOgTitle ?: $og['title'];
$ogDescription = $customDescription ?: $og['description'];
$siteURL = config('app.url', url('/'));
$canonical = url()->current();
$basePath = request()->path();
$socialImage = asset($og['image']);
$jsonLd = $structuredData ?: $seo['structuredData'];
?>

<?php if($jsonLd): ?>
  <script type="application/ld+json">
    <?php echo json_encode($jsonLd, JSON_UNESCAPED_SLASHES | JSON_PRETTY_PRINT); ?>

  </script>
<?php endif; ?>

<meta charset="utf-8" />
<meta content="<?php echo e($description); ?>" name="description" />
<meta name="web_author" content="<?php echo e($site['author']); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<meta http-equiv="X-UA-Compatible" content="ie=edge" />
<link rel="canonical" href="<?php echo e($canonical); ?>" />

<link rel="alternate" hreflang="en" href="<?php echo e(url('/')); ?>" />
<link rel="alternate" hreflang="fr" href="<?php echo e(url('/fr')); ?>" />

<!-- Facebook Meta Tags -->
<meta property="og:locale" content="<?php echo e(str_starts_with($basePath, 'fr') ? 'fr_FR' : 'en_US'); ?>" />
<meta property="og:url" content="<?php echo e($siteURL); ?>" />
<meta property="og:type" content="website" />
<meta property="og:title" content="<?php echo e($ogTitle); ?>" />
<meta property="og:site_name" content="<?php echo e($site['title']); ?>" />
<meta property="og:description" content="<?php echo e($ogDescription); ?>" />
<meta property="og:image" content="<?php echo e($socialImage); ?>" />
<meta content="1200" property="og:image:width" />
<meta content="600" property="og:image:height" />
<meta content="image/png" property="og:image:type" />

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image" />
<meta property="twitter:domain" content="<?php echo e(parse_url($siteURL, PHP_URL_HOST)); ?>" />
<meta property="twitter:url" content="<?php echo e($siteURL); ?>" />
<meta name="twitter:title" content="<?php echo e($ogTitle); ?>" />
<meta name="twitter:description" content="<?php echo e($ogDescription); ?>" />
<meta name="twitter:image" content="<?php echo e($socialImage); ?>" />

<!-- Links to webmanifest -->
<link rel="manifest" href="/manifest.json" />

<!-- Favicons -->
<link href="/favicon.ico" rel="icon" sizes="any" type="image/x-icon" />
<link href="/images/icon.svg" rel="icon" type="image/svg+xml" sizes="any" />
<meta name="mobile-web-app-capable" content="yes" />
<link href="/images/icon.png" rel="apple-touch-icon" />
<link href="/images/icon.png" rel="shortcut icon" />
<meta name="theme-color" content="#facc15" />
<?php /**PATH C:\Users\ORI STUDIO LIMITED\Desktop\Colorspire\screwfast-1.0.0\resources\views/components/meta.blade.php ENDPATH**/ ?>