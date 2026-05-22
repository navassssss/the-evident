<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />
    <meta content='width=device-width, initial-scale=1' name='viewport' />
    <link rel="canonical" href="https://evidentmonthly.in/" />
    <title>The Evident</title>
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1814859848368118"
     crossorigin="anonymous"></script>
    <!-- Google tag (gtag.js) -->
    <script async custom-element="amp-auto-ads"
        src="https://cdn.ampproject.org/v0/amp-auto-ads-0.1.js">
</script>
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LLJKV8WGKS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-LLJKV8WGKS');
    </script>
    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({
                'gtm.start': new Date().getTime(),
                event: 'gtm.js'
            });
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l != 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src =
                'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KZCZ3H88');
    </script>
    <!-- End Google Tag Manager -->
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1814859848368118"
        crossorigin="anonymous"></script>
    <link rel="icon" type="image/png" href="<?php echo e(asset('favicon-96x96.png')); ?>" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="<?php echo e(asset('favicon.svg')); ?>" />
    <link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>" />
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('apple-touch-icon.png')); ?>" />
    <link rel="manifest" href="<?php echo e(asset('site.webmanifest')); ?>">


    <meta name="description"
        content="The Evident – An English monthly magazine exploring faith, theology, philosophy, history, and Muslim culture. Insightful articles from the Department of Civilizational Studies, Darul Hasanath Islamic College." />
    <meta property="og:locale" content="en" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="The Evident – English Monthly Magazine" />
    <meta property="og:url" content="<?php echo e(url()->current()); ?>" />
    <meta property="og:description"
        content="The Evident – An English monthly magazine exploring faith, theology, philosophy, history, and Muslim culture. Insightful articles from the Department of Civilizational Studies, Darul Hasanath Islamic College." />
    <meta property="og:site_name" content="The Evident – English Monthly Magazine" />
    <meta property="og:image" content="<?php echo e(asset('logocolor.png')); ?>" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="The Evident – English Monthly Magazine" />
    <meta name="twitter:description"
        content="The Evident – An English monthly magazine exploring faith, theology, philosophy, history, and Muslim culture. Insightful articles from the Department of Civilizational Studies, Darul Hasanath Islamic College." />
    <meta name="twitter:image" content="<?php echo e(asset('logocolor.png')); ?>" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet"
        media="print" onload="this.media='all'">



    <link rel="preload" href="<?php echo e(asset('style.css')); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">

    <style>
        .evident-confetti-wrapper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            z-index: 999999;
            /* Very high z-index to appear above everything */
            pointer-events: none;
            /* Allows clicks to pass through */
            overflow: hidden;
        }

        /* Individual confetti particle - unique class name */
        .evident-confetti-particle {
            position: absolute;
            width: 10px;
            height: 10px;
            bottom: -20px;
            opacity: 0;
            /* Animation for rising effect */
            animation: evidentConfettiRise 2s ease-out forwards;
        }

        /* Keyframe animation with unique name to prevent conflicts */
        @keyframes evidentConfettiRise {
            0% {
                bottom: -20px;
                opacity: 0;
                transform: translateX(0) rotate(0deg) scale(1);
            }

            10% {
                opacity: 1;
            }

            50% {
                opacity: 1;
            }

            100% {
                bottom: 110vh;
                opacity: 0;
                transform: translateX(var(--evident-drift)) rotate(720deg) scale(0.5);
            }
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .evident-confetti-particle {
                width: 8px;
                height: 8px;
            }
        }
    </style>
</head>
<?php
    $schemaData = [
        '@context' => 'https://schema.org',
        '@graph' => [
            [
                '@type' => 'WebSite',
                'url' => url('/'),
                'name' => 'The Evident',
                'publisher' => [
                    '@type' => 'Organization',
                    'name' => 'The Evident',
                    'logo' => [
                        '@type' => 'ImageObject',
                        'url' => asset('logocolor.png'),
                        'width' => 600,
                        'height' => 60,
                    ],
                ],
                'potentialAction' => [
                    '@type' => 'SearchAction',
                    'target' => url('/search?q={search_term_string}'),
                    'query-input' => 'required name=search_term_string',
                ],
            ],
            [
                '@type' => 'Organization',
                'name' => 'The Evident',
                'url' => url('/'),
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => asset('logocolor.png'),
                    'width' => 600,
                    'height' => 60,
                ],
                'sameAs' => [
                    'https://www.facebook.com/civilizationhasanath/',
                    'https://www.instagram.com/civilization_hasanath/',
                    'https://www.youtube.com/@civilizationhasanath',
                ],
            ],
            [
                '@type' => 'BreadcrumbList',
                'itemListElement' => [
                    [
                        '@type' => 'ListItem',
                        'position' => 1,
                        'name' => 'Home',
                        'item' => url('/'),
                    ],
                ],
            ],
        ],
    ];
?>

<script type="application/ld+json">
<?php echo json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE); ?>

</script>

<body class='home multiple hasIE hasTE'>
<amp-auto-ads type="adsense"
        data-ad-client="ca-pub-1814859848368118">
</amp-auto-ads>
<div id="toTop"></div>

    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZCZ3H88" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    <div class="evident-confetti-wrapper" id="evidentConfettiContainer"></div>
    <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <div class='layouts wrapper'>
        <div class='layouts-inner'>
            <div class='layout-1 layout section' id='layout-1' name='Layout 1'>
                <div class='widget HTML' data-version='2' id='HTML2'>
                    <div class='widget-content' data-fetch='slider-2[slide]6'>
                        <span class='loader'><i></i><i></i><i></i><i></i></span>
                    </div>
                </div>
                <div class='widget HTML' data-version='2' id='HTML1'>
                    <div class='widget-heading'>
                        <h3 class='title'>
                            Latest Editions
                        </h3>
                    </div>
                    <div class='widget-content' data-fetch='slider-5[editions]3'>
                        <span class='loader'><i></i><i></i><i></i><i></i></span>
                    </div>
                </div>
            </div>
            <div class='col-2'>
                <main class='main wrapper'>
                    <div class='layout-2 layout section' id='layout-2' name='Layout 2'>
                        <div class='widget HTML' data-version='2' id='HTML4'>
                            <div class='widget-heading'>
                                <h3 class='title'>
                                    Picked
                                </h3>
                            </div>
                            <div class='widget-content' data-fetch='grid-3_2[latest]5'>
                                <span class='loader'><i></i><i></i><i></i><i></i></span>
                            </div>
                        </div>
                        <div class='widget HTML' data-version='2' id='HTML3'>
                            <div class='widget-heading'>
                                <h3 class='title'>
                                    Campus Pen
                                </h3>
                            </div>
                            <div class='widget-content' data-fetch='slider-7[slide_inpage]6'>
                                <span class='loader'><i></i><i></i><i></i><i></i></span>
                            </div>
                        </div>
                        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1814859848368118"
     crossorigin="anonymous"></script>
<ins class="adsbygoogle"
     style="display:block"
     data-ad-format="autorelaxed"
     data-ad-client="ca-pub-1814859848368118"
     data-ad-slot="2577068587"></ins>
<script>
     (adsbygoogle = window.adsbygoogle || []).push({});
</script>
                    </div>
                    <div class='layout-3 section' id='layout-3' name='Main Layout'>
                        <div class='widget Blog' data-version='2' id='Blog1'>
                            <div class='widget-heading'>
                                <h3 class='title'>Latest</h3><a class='viewAll' href='/search'>View
                                    all</a>
                            </div>
                            <div class='widget-content grid-2 gridView'>
                                <div class='posts'>

                                    <?php
                                        $feed = Cache::get('homepage_sections', []);
                                        $postIds = $feed['latest_detailed'] ?? [];
                                        $posts = \App\Models\Post::with(['author', 'category'])
                                            ->whereIn('id', $postIds)
                                            ->get()
                                            ->sortBy(function ($post) use ($postIds) {
                                                return array_search($post->id, $postIds);
                                            })
                                            ->values();
                                    ?>
                                    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <article class='post postOuter item-<?php echo e($loop->index); ?>'>
                                            <div class='postImage'>
                                                <a href="<?php echo e(route('home.show', ['category' => $post->category->scheme, 'post' => $post->slug ?? $post->id])); ?>"
                                                    title="<?php echo e($post->title); ?>">
                                                    <span class="hasImage"
                                                        data-style="<?php echo e(asset(Storage::url($post->thumbnail_url))); ?>"
                                                        style="background-image: url('<?php echo e(asset(Storage::url($post->thumbnail_url))); ?>');">
                                                    </span>
                                                </a>
                                            </div>
                                            <div class='postDetails'>
                                                <span class='postCat' data-cat="<?php echo e($post->category->term); ?>">
                                                    <a
                                                        href='<?php echo e(route('category.show', ['category' => $post->category->term])); ?>'><?php echo e($post->category->term); ?></a>
                                                </span>
                                                <h3 class='postTitle'>
                                                    <a href='<?php echo e(route('home.show', ['category' => $post->category->scheme, 'post' => $post->slug ?? $post->id])); ?>'
                                                        rel='bookmark' title="<?php echo e($post->title); ?>">
                                                        <?php echo e($post->title); ?>

                                                    </a>
                                                </h3>
                                                <p class='postSnippet'>
                                                    <?php echo e(Str::limit(strip_tags($post->content), 150, '...')); ?>

                                                </p>
                                                <div class='postMeta'>
                                                    <div class='postAuthorAndTimestamp'>
                                                        <span class='authorImage'>
                                                            <span class='hasImage'
                                                                data-style='<?php echo e(asset(Storage::url($post->author->image_url))); ?>'
                                                                style="background-image: url('<?php echo e(asset(Storage::url($post->author->image_url))); ?>');"></span>
                                                        </span>
                                                        <span class='postAuthorAndDate'>
                                                            <span class='postAuthor'>
                                                                <?php echo e($post->author->name); ?>

                                                            </span>
                                                            <span class='postDate'>
                                                                <time class='published'
                                                                    datetime="<?php echo e($post->published_at?->toIso8601String() ?? now()->toIso8601String()); ?>"></time>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <span class='postReadMore'><a
                                                            href='<?php echo e(route('home.show', ['category' => $post->category->scheme, 'post' => $post->slug ?? $post->id])); ?>'>Keep
                                                            reading</a></span>
                                                </div>
                                            </div>
                                        </article>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                    
                                </div>
                                <div class='blogPager' id='blogPager'>
                                    <a class='loadMore'
                                        data-link='https://atlas-home2.blogspot.com/search?updated-max=2022-09-07T02:42:00-07:00&amp;max-results=4'
                                        href='#loadMore' role='button'>
                                        More posts
                                    </a>
                                    <span class='loading'>Loading&hellip;
                                        <span class='loader'><i></i><i></i><i></i><i></i></span></span>
                                    <span class='noMore'>
                                        That's All

                                    </span>
                                </div>
                                <script type='text/javascript'>
                                    var postMeta = {
                                        date: !0,
                                        author: !0
                                    }
                                </script>
                            </div>
                        </div>
                    </div>
                    <div class='layout-4 layout section' id='layout-4' name='Layout 4'>
                        <div class='widget HTML' data-version='2' id='HTML6'>
                            <div class='widget-heading'>
                                <h3 class='title'>
                                    Latest
                                </h3>
                            </div>
                            <div class='widget-content' data-fetch='grid-5[wow]6'>
                                <span class='loader'><i></i><i></i><i></i><i></i></span>
                            </div>
                        </div>
                    </div>
                </main>
                <aside class='aside wrapper'>
                    <div class='sidebar-2 sidebar section' id='sidebar-2' name='Sidebar [Home]'>
                        <div class='widget HTML' data-version='2' id='HTML7'>
                            <div class='widget-heading'>
                                <h3 class='title'>
                                    Picked
                                </h3>
                            </div>
                            <div class='widget-content' data-fetch='sided-1[wo2]3'>
                                <span class='loader'><i></i><i></i><i></i><i></i></span>
                            </div>
                        </div>
                        <div class='widget LinkList' data-type='iconList' data-version='2' id='LinkList3'>
                            <div class='widget-heading'>
                                <h3 class='title'>
                                    Join us
                                </h3>
                            </div>
                            <div class='widget-content'>
                                <ul class='list hasIcons'>
                                    <li class='hasIcon facebook'>
                                        <a href='https://www.facebook.com/civilizationhasanath/' target='_blank'>
                                            Civilization Hasanath
                                            
                                        </a>
                                    </li>
                                    <li class='hasIcon spotify'>

                                        <a href='https://open.spotify.com/show/3bVGzJEeanxTRLjFt3J3eQ?si=ce28f3517e5a4598'
                                            target='_blank'>
                                            Civilization Hasanath
                                            
                                        </a>
                                    </li>
                                    <li class='hasIcon youtube'>
                                        <a href='https://www.youtube.com/@civilizationhasanath' target='_blank'>
                                            Civilization Hasanath
                                            
                                        </a>
                                    </li>
                                    <li class='hasIcon instagram'>
                                        <a href='https://www.instagram.com/civilization_hasanath/' target='_blank'>
                                            Dept. of Civilizational Studies
                                            
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class='widget HTML' data-version='2' id='HTML8'>
                            <div class='widget-heading'>
                                <h3 class='title'>
                                    Gadget
                                </h3>
                            </div>
                            <div class='widget-content' data-fetch='sided-3[side2]4'>
                                <span class='loader'><i></i><i></i><i></i><i></i></span>
                            </div>
                        </div>
                        <div class='widget HTML' data-version='2' id='HTML9'>
                            <div class='widget-heading'>
                                <h3 class='title'>
                                    LIVING
                                </h3>
                            </div>
                            <div class='widget-content' data-fetch='sided-2[side]3'>
                                <span class='loader'><i></i><i></i><i></i><i></i></span>
                            </div>
                        </div>
                    </div>
                    <div class='sidebar-3 sidebar no-items section' id='sidebar-3' name='Sidebar [Global]'>
                    </div>
                </aside>
            </div>
            <div class='layout-5 layout no-items section' id='layout-5' name='Layout 5'></div>
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
            viewAll: "",
            noResults: "No results found",
            noTitle: "No title",
            readMore: "Keep reading",
            lnDir: !1,
            lang: "en"
        }
    </script>
    <!-- Main Script -->
    <script src="<?php echo e(asset('timeago.js')); ?>"></script>
    <script src="<?php echo e(asset('locals.js')); ?>"></script>
    <script src="<?php echo e(asset('sticky.js')); ?>"></script>
    <script src="<?php echo e(asset('lazyload.js')); ?>"></script>
    <script src="<?php echo e(asset('submenu.js')); ?>"></script>
    <script src="<?php echo e(asset('ticker.js')); ?>"></script>
    <script src="<?php echo e(asset('currdate.js')); ?>"></script>


    <script type="text/javascript" src="https://www.blogger.com/static/v1/widgets/2726972568-widgets.js"></script>
    <script src="<?php echo e(asset('neew.js')); ?>"></script>

    <script>
        // document.addEventListener('DOMContentLoaded', function() {
        //     const elements = document.querySelectorAll('[data-cat]');
        //     const colors = {};

        //     elements.forEach(el => {
        //         const cat = el.getAttribute('data-cat');

        //         if (!colors[cat]) {
        //             // Generate a random color
        //             colors[cat] = '#' + Math.floor(Math.random() * 16777215).toString(16).padStart(6, '0');
        //         }

        //         const anchor = el.querySelector('a');
        //         if (anchor) {
        //             anchor.style.backgroundColor = colors[cat];
        //         }
        //     });
        // });
    </script>
</body>

</html>
<?php /**PATH /var/www/5a5b779e-2ce1-449e-8f4f-cde8aa60fa21/resources/views/index.blade.php ENDPATH**/ ?>