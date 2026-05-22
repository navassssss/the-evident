<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
<!-- Google tag (gtag.js) -->
<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1814859848368118"
     crossorigin="anonymous"></script>
<script async src="https://www.googletagmanager.com/gtag/js?id=G-LLJKV8WGKS"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'G-LLJKV8WGKS');
</script>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KZCZ3H88');</script>
<!-- End Google Tag Manager -->
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />
    <meta content='width=device-width, initial-scale=1'
        name='viewport' />
    <title>
    <?php echo e(ucwords(
        $category->term
        ?? $section->name
        ?? $query
        ?? "The Evident"
    )); ?> | The Evident
</title>

 <link rel="icon" type="image/png" href="<?php echo e(asset('favicon-96x96.png')); ?>" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="<?php echo e(asset('favicon.svg')); ?>" />
<link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('apple-touch-icon.png')); ?>" />
<link rel="manifest" href="<?php echo e(asset('site.webmanifest')); ?>">

    <link href='<?php echo e(url()->current()); ?>' rel='canonical' />
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1814859848368118"
     crossorigin="anonymous"></script>
    <meta
        content='The Evident is an English monthly magazine by the Department of Civilizational Studies, Darul Hasanath Islamic College, Kannadipparamba. It explores topics in religion, faith, theology, philosophy, history, and the culture of the Muslim Ummah.'
        name='description' />
    <link href='<?php echo e(asset('logocolor.png')); ?>' rel='image_src' />
    <!-- Metadata for Open Graph protocol. See http://ogp.me/. -->
    <meta content='en' property='og:locale' />
    <meta content='website' property='og:type' />
    <meta content='The Evident' property='og:title' />
    <meta content='<?php echo e(url()->current()); ?>' property='og:url' />
    <link rel="alternate" href="<?php echo e(url()->current()); ?>" hreflang="en" />
    <meta
        content='The Evident is an English monthly magazine by the Department of Civilizational Studies, Darul Hasanath Islamic College, Kannadipparamba. It explores topics in religion, faith, theology, philosophy, history, and the culture of the Muslim Ummah.'
        property='og:description' />
    <meta content='The Evident' property='og:site_name' />
    <meta content='<?php echo e(asset('logocolor.png')); ?>' property='og:image' />
    <meta content='<?php echo e(asset('logocolor.png')); ?>' property='twitter:image' />
    <meta content='summary_large_image' name='twitter:card' />
    <meta content='The Evident' name='twitter:title' />
    <meta content='<?php echo e(url()->current()); ?>' name='twitter:domain' />
    <meta
        content='The Evident is an English monthly magazine by the Department of Civilizational Studies, Darul Hasanath Islamic College, Kannadipparamba. It explores topics in religion, faith, theology, philosophy, history, and the culture of the Muslim Ummah.'
        name='twitter:description' />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet"
        media="print" onload="this.media='all'">



    <link rel="preload" href="<?php echo e(asset('style.css')); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">

</head>

<?php
    $schemaData = [
        '@context' => 'https://schema.org',
        '@graph' => [
            // Breadcrumb
            [
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    [
                        '@type' => 'ListItem',
                        'position' => 1,
                        'name' => 'Home',
                        'item' => url('/')
                    ],
                    [
                        '@type' => 'ListItem',
                        'position' => 2,
                        'name' => $category->term?? $section->name ?? $query ?? 'search',

                        'item' => url()->current()
                    ]
                ]
            ],
            // Website
            [
                '@type' => 'WebSite',
                'url' => url('/'),
                'name' => config('app.name'),
                'publisher' => [
                    '@type' => 'Organization',
                    'name' => config('app.name'),
                    'logo' => [
                        '@type' => 'ImageObject',
                        'url' => asset('logocolor.png') // Change path if different
                    ]
                ]
            ],
            // Organization
            [
                '@type' => 'Organization',
                'name' => config('app.name'),
                'url' => url('/'),
                'logo' => asset('logocolor.png')
            ]
        ]
    ];
?>

<script type="application/ld+json">
<?php echo json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>

</script>



<body class='multiple noSide hasIE hasTE' data-category='<?php echo e($category->term ?? $section->name ?? $query); ?>'>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZCZ3H88"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <div class='layouts wrapper'>
        <div class='layouts-inner'>
            <div class='col-2'>
                <main class='main wrapper'>
                    <div class='layout-3 section' id='layout-3' name='Main Layout'>
                        <div class='widget Blog' data-version='2' id='Blog1'>
                            <div class='widget-heading'>
                                <?php if(isset($query)): ?>
                                    <p style="margin-right: 5px;">Search results for </p>

                                <?php endif; ?>
                                <h1 class='queryInfo queryLabel querySuccess'>
                                    <?php echo e(strtoupper($category->term ?? $section->name ?? $query)); ?></h3>
                                    <span style="margin-left: 5px" hidden> ( Page <?php echo e($posts->currentPage()); ?> of
                                        <?php echo e($posts->lastPage()); ?>)</span>
                                    <hr>
                            </div>
                            <div class='widget-content grid-2 gridView'>
                                <div class='posts'>
                                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <article class='post postOuter item-<?php echo e($loop->index); ?>'>
                                            <div class='postImage'>
                                                <a href='<?php echo e(route('home.show', ['category' => $post->category->scheme ?? 'uncategorized', 'post' => $post->slug ?? $post->id])); ?>'
                                                    title='<?php echo e($post->title); ?>'>
                                                    <span class='hasImage '
                                                        data-style='<?php echo e(Storage::url($post->thumbnail_url)); ?>'
                                                        style='background-image: url(<?php echo e(Storage::url($post->thumbnail_url)); ?>);'>

                                                    </span>
                                                </a>
                                            </div>
                                            <div class='postDetails'>
                                                <span class='postCat'
                                                    data-cat='<?php echo e($post->category->term ?? 'uncategorized'); ?>'>
                                                    <a
                                                        href='<?php echo e(route('category.show', ['category' => $post->category->term ?? 'uncategorized'])); ?>'><?php echo e(strtoupper($post->category->term)); ?></a>
                                                </span>
                                                <h3 class='postTitle'>
                                                    <a href='<?php echo e(route('home.show', ['category' => $post->category->scheme ?? 'uncategorized', 'post' => $post->slug ?? $post->id])); ?>'
                                                        rel='bookmark' title='<?php echo e($post->title); ?>'>
                                                        <?php echo e($post->title); ?>

                                                    </a>
                                                </h3>
                                                <p class='postSnippet'>
                                                    <?php echo e(\Illuminate\Support\Str::limit(strip_tags($post->content), 150)); ?>

                                                </p>
                                                <div class='postMeta'>
                                                    <div class='postAuthorAndTimestamp'>
                                                        <span class='authorImage'>
                                                            <span class='hasImage lazy'
                                                                data-style='<?php echo e(Storage::url($post->author->image_url)); ?>'
                                                                style='background-image: url(<?php echo e(Storage::url($post->author->image_url)); ?>);'></span>
                                                        </span>
                                                        <span class='postAuthorAndDate'>
                                                            <span class='postAuthor'>
                                                                <?php echo e($post->author->name ?? 'Civilization Hasanath'); ?>

                                                            </span>
                                                            <span class='postDate'>
                                                                <time class='published'
                                                                    datetime='<?php echo e($post->created_at->toISOString()); ?>'><?php echo e($post->created_at->diffForHumans()); ?></time>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <span class='postReadMore'><a
                                                            href='<?php echo e(route('home.show', ['category' => $post->category->scheme ?? 'uncategorized', 'post' => $post->slug ?? $post->id])); ?>'>Keep
                                                            reading</a></span>
                                                </div>
                                            </div>
                                        </article>
                                        
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                           <div style="text-align:center; margin:30px 0;">
    <ins class="adsbygoogle"
         style="display:block"
         data-ad-client="ca-pub-1814859848368118"
         data-ad-slot="5718245357"
         data-ad-format="auto"
         data-full-width-responsive="true"></ins>
    <script>
        (adsbygoogle = window.adsbygoogle || []).push({});
    </script>
</div>
                                <div class='blogPager' id='blogPager'>
                                    <?php if($posts->hasMorePages()): ?>
                                        <a class='loadMore' data-link='<?php echo e($posts->nextPageUrl()); ?>'
                                            href='<?php echo e($posts->nextPageUrl()); ?>' role='button'>
                                            More posts
                                        </a>
                                    <?php else: ?>
                                        <span class='noMore visible'>
                                            That's All

                                        </span>
                                    <?php endif; ?>
                                    <span class='loading'>Loading&hellip;
                                        <span class='loader'><i></i><i></i><i></i><i></i></span></span>

                                </div>
                                <script type='text/javascript'>
                                    var postMeta = { date: !0, author: !0 }
                                </script>
                            </div>
                        </div>
                    </div>
                </main>
                <aside class='aside wrapper'>
                    <div class='sidebar-3 sidebar no-items section' id='sidebar-3' name='Sidebar [Global]'></div>
                </aside>
            </div>
        </div>
    </div>
    <?php echo $__env->make('partials.footer', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <div class='sticky-bar'>
        <div class='sticky-list section' id='sticky-list' name='Sticky Bar'>
            <div class='widget LinkList' data-type='iconList' data-version='2' id='LinkList6'>
                <ul class='cloud'>
                    <li class='hasIcon dark'>
                        <a href='#' target='_blank'>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <span class='hasIcon totop'>
            <a href='#toTop'></a>
        </span>
    </div>
    <!-- Libraries -->
    <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js' type='text/javascript'></script>
    <script src='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js' type='text/javascript'></script>
    <!-- Custom data -->
    <script type='text/javascript'>
        var customData = {
            stickyHead: !0,
            stickyCols: !0,
            viewAll: "View all",
            noResults: "No results found",
            noTitle: "No title",
            readMore: "Keep reading",
            lnDir: !1,
            lang: "en"
        }
    </script>
    <!-- Main Script -->
    
    <script src="<?php echo e(asset('output.min.js')); ?>"></script>
    <script src="<?php echo e(asset('category.js')); ?>"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const imgSpans = document.querySelectorAll('.hasImage');

            imgSpans.forEach(span => {
                const img = new Image();
                img.src = span.style.backgroundImage.replace(/^url\(["']?/, '').replace(/["']?\)$/, '');

                img.onload = () => {
                    span.classList.add('lazy');
                };
            });
        });


        const img = document.getElementById('Image2_img');

        function updateLogoBasedOnTheme() {
            const theme = localStorage.getItem('themeColor');
            if (theme === 'dark') {
                img.src = img.dataset.dark;
            } else {
                img.src = img.dataset.light;
            }
        }

        // Override localStorage.setItem to detect changes in same tab
        (function () {
            const originalSetItem = localStorage.setItem;
            localStorage.setItem = function (key, value) {
                originalSetItem.apply(this, arguments);
                if (key === 'themeColor') {
                    updateLogoBasedOnTheme();
                }
            };
        })();

        // Initial logo check on page load
        updateLogoBasedOnTheme();

        // Still listen for changes from other tabs
        window.addEventListener('storage', (e) => {
            if (e.key === 'themeColor') {
                updateLogoBasedOnTheme();
            }
        });


    </script>

    
    
</body>

</html><?php /**PATH /var/www/5a5b779e-2ce1-449e-8f4f-cde8aa60fa21/resources/views/category.blade.php ENDPATH**/ ?>