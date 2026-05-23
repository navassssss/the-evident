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
    <link rel="icon" type="image/png" href="{{ asset('favicon-96x96.png') }}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{ asset('favicon.svg') }}" />
    <link rel="shortcut icon" href="{{ asset('favicon.ico') }}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon.png') }}" />
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">


    <meta name="description"
        content="The Evident – An English monthly magazine exploring faith, theology, philosophy, history, and Muslim culture. Insightful articles from the Department of Civilizational Studies, Darul Hasanath Islamic College." />
    <meta property="og:locale" content="en" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="The Evident – English Monthly Magazine" />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:description"
        content="The Evident – An English monthly magazine exploring faith, theology, philosophy, history, and Muslim culture. Insightful articles from the Department of Civilizational Studies, Darul Hasanath Islamic College." />
    <meta property="og:site_name" content="The Evident – English Monthly Magazine" />
    <meta property="og:image" content="{{ asset('logocolor.png') }}" />

    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="The Evident – English Monthly Magazine" />
    <meta name="twitter:description"
        content="The Evident – An English monthly magazine exploring faith, theology, philosophy, history, and Muslim culture. Insightful articles from the Department of Civilizational Studies, Darul Hasanath Islamic College." />
    <meta name="twitter:image" content="{{ asset('logocolor.png') }}" />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet"
        media="print" onload="this.media='all'">



    <link rel="preload" href="{{ asset('style.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="{{ asset('style.css') }}">

    @php
        $feedData = \Illuminate\Support\Facades\Cache::get('homepage_sections');
        if (empty($feedData)) {
            app(\App\Http\Controllers\HomeController::class)->generateHomeFeed();
            $feedData = \Illuminate\Support\Facades\Cache::get('homepage_sections', []);
        }
        $firstSlideId = $feedData['slide'][0] ?? null;
        $firstSlideImage = null;
        
        if ($firstSlideId) {
            $firstSlidePost = \App\Models\Post::find($firstSlideId);
            if ($firstSlidePost && $firstSlidePost->thumbnail_url) {
                $firstSlideImage = asset(\Illuminate\Support\Facades\Storage::url($firstSlidePost->thumbnail_url));
            }
        }
    @endphp

    @if($firstSlideImage)
        <link rel="preload" as="image" href="{{ $firstSlideImage }}" fetchpriority="high">
    @endif


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
@php
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
@endphp

<script type="application/ld+json">
{!! json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
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
    @include('partials.header')
    <div class='layouts wrapper'>
        <div class='layouts-inner'>
            <div class='layout-1 layout section' id='layout-1' name='Layout 1'>
                <div class='widget HTML' data-version='2' id='HTML2'>
                    <div class='widget-content'>
                        <div class="posts slide" id="main-slider">
                            @php
                                $feed = \Illuminate\Support\Facades\Cache::get('homepage_sections');
                                if (empty($feed)) {
                                    app(\App\Http\Controllers\HomeController::class)->generateHomeFeed();
                                    $feed = \Illuminate\Support\Facades\Cache::get('homepage_sections', []);
                                }
                                $slideIds = $feed['slide'] ?? [];
                                $slides = \App\Models\Post::with(['author', 'category'])
                                    ->whereIn('id', $slideIds)
                                    ->get()
                                    ->sortBy(function ($post) use ($slideIds) {
                                        return array_search($post->id, $slideIds);
                                    })
                                    ->values();
                            @endphp
                            @foreach ($slides as $post)
                            <div class="post item-{{ $loop->index }}">
                                <div class="postImage">
                                    <a title="{{ $post->title }}" href="{{ route('home.show', ['category' => $post->category->scheme ?? 'uncategorized', 'post' => $post->slug ?? $post->id]) }}">
                                        @if($loop->first)
                                            <span class="hasImage" style="background-image: url('{{ asset(Storage::url($post->thumbnail_url)) }}');"></span>
                                        @else
                                            <span class="hasImage lazy" data-style="{{ asset(Storage::url($post->thumbnail_url)) }}"></span>
                                        @endif
                                    </a>
                                    <svg class="progressBar" width="72" height="72"><circle r="35" cx="36" cy="36"></circle></svg>
                                </div>
                                <div class="postDetails">
                                    <span class="postCat" data-cat="{{ $post->category->term ?? '' }}">
                                        <a href="{{ route('category.show', ['category' => $post->category->term ?? 'uncategorized']) }}">{{ $post->category->term ?? '' }}</a>
                                    </span>
                                    <h3 class="postTitle">
                                        <a href="{{ route('home.show', ['category' => $post->category->scheme ?? 'uncategorized', 'post' => $post->slug ?? $post->id]) }}" title="{{ $post->title }}">
                                            {{ $post->title }}
                                        </a>
                                    </h3>
                                    <div class="postMeta">
                                        <div class="postAuthorAndTimestamp">
                                            <span class="authorImage">
                                                @if($post->author)
                                                <span class="hasImage lazy" data-style="{{ asset(Storage::url($post->author->image_url)) }}"></span>
                                                @endif
                                            </span>
                                            <span class="postAuthorAndDate">
                                                <span class="postAuthor">{{ $post->author->name ?? '' }}</span>
                                                <span class="postDate">
                                                    <time class="published" datetime="{{ $post->published_at?->toIso8601String() ?? now()->toIso8601String() }}">{{ $post->published_at?->diffForHumans() }}</time>
                                                </span>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        </div>
                        <div class="navFor">
                            <div class="posts slide" id="nav-slider">
                                @foreach ($slides as $post)
                                <div class="post item-{{ $loop->index }}">
                                    <div class="postImage">
                                        <a title="{{ $post->title }}" href="{{ route('home.show', ['category' => $post->category->scheme ?? 'uncategorized', 'post' => $post->slug ?? $post->id]) }}">
                                            <span class="hasImage lazy" data-style="{{ asset(Storage::url($post->thumbnail_url)) }}"></span>
                                        </a>
                                        <svg class="progressBar" width="72" height="72"><circle r="35" cx="36" cy="36"></circle></svg>
                                    </div>
                                    <div class="postDetails">
                                        <span class="postCat" data-cat="{{ $post->category->term ?? '' }}">
                                            <a href="{{ route('category.show', ['category' => $post->category->term ?? 'uncategorized']) }}">{{ $post->category->term ?? '' }}</a>
                                        </span>
                                        <h3 class="postTitle">
                                            <a href="{{ route('home.show', ['category' => $post->category->scheme ?? 'uncategorized', 'post' => $post->slug ?? $post->id]) }}" title="{{ $post->title }}">
                                                {{ $post->title }}
                                            </a>
                                        </h3>
                                        <div class="postMeta">
                                            <div class="postAuthorAndTimestamp">
                                                <span class="authorImage">
                                                    @if($post->author)
                                                    <span class="hasImage lazy" data-style="{{ asset(Storage::url($post->author->image_url)) }}"></span>
                                                    @endif
                                                </span>
                                                <span class="postAuthorAndDate">
                                                    <span class="postAuthor">{{ $post->author->name ?? '' }}</span>
                                                    <span class="postDate">
                                                        <time class="published" datetime="{{ $post->published_at?->toIso8601String() ?? now()->toIso8601String() }}">{{ $post->published_at?->diffForHumans() }}</time>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            if ($.fn.slick) {
                                $('#main-slider').slick({
                                    slidesToShow: 1,
                                    slidesToScroll: 1,
                                    arrows: true,
                                    fade: true,
                                    asNavFor: '#nav-slider',
                                    autoplay: true,
                                    autoplaySpeed: 5000,
                                    prevArrow: '<button type="button" class="slick-prev slick-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="10" height="10"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg></button>',
                                    nextArrow: '<button type="button" class="slick-next slick-arrow"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 40 40" width="10" height="10"><path d="m15.5 0.932-4.3 4.38 14.5 14.6-14.5 14.5 4.3 4.4 14.6-14.6 4.4-4.3-4.4-4.4-14.6-14.6z"></path></svg></button>'
                                });
                                $('#nav-slider').slick({
                                    slidesToShow: 4,
                                    slidesToScroll: 1,
                                    asNavFor: '#main-slider',
                                    dots: false,
                                    centerMode: false,
                                    focusOnSelect: true,
                                    vertical: true,
                                    verticalSwiping: true,
                                    arrows: false,
                                    responsive: [
                                        {
                                            breakpoint: 768,
                                            settings: {
                                                vertical: false,
                                                verticalSwiping: false,
                                                slidesToShow: 3
                                            }
                                        }
                                    ]
                                });
                            }
                        });
                    </script>
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

                                    @php
                                        $feed = Cache::get('homepage_sections', []);
                                        $postIds = $feed['latest_detailed'] ?? [];
                                        $posts = \App\Models\Post::with(['author', 'category'])
                                            ->whereIn('id', $postIds)
                                            ->get()
                                            ->sortBy(function ($post) use ($postIds) {
                                                return array_search($post->id, $postIds);
                                            })
                                            ->values();
                                    @endphp
                                    @foreach ($posts as $post)
                                        <article class='post postOuter item-{{ $loop->index }}'>
                                            <div class='postImage'>
                                                <a href="{{ route('home.show', ['category' => $post->category->scheme, 'post' => $post->slug ?? $post->id]) }}"
                                                    title="{{ $post->title }}">
                                                    <span class="hasImage"
                                                        data-style="{{ asset(Storage::url($post->thumbnail_url)) }}"
                                                        style="background-image: url('{{ asset(Storage::url($post->thumbnail_url)) }}');">
                                                    </span>
                                                </a>
                                            </div>
                                            <div class='postDetails'>
                                                <span class='postCat' data-cat="{{ $post->category->term }}">
                                                    <a
                                                        href='{{ route('category.show', ['category' => $post->category->term]) }}'>{{ $post->category->term }}</a>
                                                </span>
                                                <h3 class='postTitle'>
                                                    <a href='{{ route('home.show', ['category' => $post->category->scheme, 'post' => $post->slug ?? $post->id]) }}'
                                                        rel='bookmark' title="{{ $post->title }}">
                                                        {{ $post->title }}
                                                    </a>
                                                </h3>
                                                <p class='postSnippet'>
                                                    {{ Str::limit(strip_tags($post->content), 150, '...') }}
                                                </p>
                                                <div class='postMeta'>
                                                    <div class='postAuthorAndTimestamp'>
                                                        <span class='authorImage'>
                                                            <span class='hasImage'
                                                                data-style='{{ asset(Storage::url($post->author->image_url)) }}'
                                                                style="background-image: url('{{ asset(Storage::url($post->author->image_url)) }}');"></span>
                                                        </span>
                                                        <span class='postAuthorAndDate'>
                                                            <span class='postAuthor'>
                                                                {{ $post->author->name }}
                                                            </span>
                                                            <span class='postDate'>
                                                                <time class='published'
                                                                    datetime="{{ $post->published_at?->toIso8601String() ?? now()->toIso8601String() }}"></time>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <span class='postReadMore'><a
                                                            href='{{ route('home.show', ['category' => $post->category->scheme, 'post' => $post->slug ?? $post->id]) }}'>Keep
                                                            reading</a></span>
                                                </div>
                                            </div>
                                        </article>
                                    @endforeach

                                    {{-- <article class='post postOuter item-3'>
                                                            <div class='postImage'>
                                                                  <a href='https://atlas-home2.blogspot.com/2022/09/surprising-benefits-of-honeydew-melon.html'
                                                                        title='Surprising Benefits of Honeydew Melon'>
                                                                        <span class='hasImage'
                                                                              data-style='https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEiz8EwbCrR3aehkzqA9hev0akbKabiIyW7f4WvvUGP2yHZK-olossdzno_y6qKGlgNUs9iYcHIlYyTp8loDiIwnZGpcfSK_MNr59nlAQYWL-U8b7O1Z7S0snQXXWOj2o4xUvuK0wCMwuMUZQmi5PdfifZw_BBz540iybmm9ZUJEY8dFYlP1yMc5Yx6OYw/w72-h72-p-k-no-nu/isaac-n-c-K4FL5rNr9oQ-unsplash.jpg'></span>
                                                                  </a>
                                                            </div>
                                                            <div class='postDetails'>
                                                                  <span class='postCat' data-cat='Food'>
                                                                        <a
                                                                              href='https://atlas-home2.blogspot.com/search/label/Food'>Food</a>
                                                                  </span>
                                                                  <h3 class='postTitle'>
                                                                        <a href='https://atlas-home2.blogspot.com/2022/09/surprising-benefits-of-honeydew-melon.html'
                                                                              rel='bookmark'
                                                                              title='Surprising Benefits of Honeydew Melon'>
                                                                              Surprising Benefits of Honeydew Melon
                                                                        </a>
                                                                  </h3>
                                                                  <p class='postSnippet'>Lorem ipsum , or lipsum as it
                                                                        is sometimes known, is dummy text used in laying
                                                                        out print, graphic or web designs. The p&#8230;
                                                                  </p>
                                                                  <div class='postMeta'>
                                                                        <div class='postAuthorAndTimestamp'>
                                                                              <span class='authorImage'>
                                                                                    <span class='hasImage'
                                                                                          data-style='//blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjaCrj4VThWfdehT1HCxWVofWugCV_5w1cu8kxooEVym35XIeduh1ga20FulBW5nvIUzJzLPujBPbiMyjA8XhoyEFDExkfFWYeqLsGWztEUQRetTxnSotb8375fXouDQdU/w72-h72-p-k-no-nu/author-3.png'></span>
                                                                              </span>
                                                                              <span class='postAuthorAndDate'>
                                                                                    <span class='postAuthor'>
                                                                                          IW studio
                                                                                    </span>
                                                                                    <span class='postDate'>
                                                                                          <time class='published'
                                                                                                datetime='2022-09-07T02:42:00-07:00'></time>
                                                                                    </span>
                                                                              </span>
                                                                        </div>
                                                                        <span class='postReadMore'><a
                                                                                    href='https://atlas-home2.blogspot.com/2022/09/surprising-benefits-of-honeydew-melon.html'>Keep
                                                                                    reading</a></span>
                                                                  </div>
                                                            </div>
                                                      </article> --}}
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
                                            {{-- <span class='icon-meta'>200k</span> --}}
                                        </a>
                                    </li>
                                    <li class='hasIcon spotify'>

                                        <a href='https://open.spotify.com/show/3bVGzJEeanxTRLjFt3J3eQ?si=ce28f3517e5a4598'
                                            target='_blank'>
                                            Civilization Hasanath
                                            {{-- <span class='icon-meta'>50k</span> --}}
                                        </a>
                                    </li>
                                    <li class='hasIcon youtube'>
                                        <a href='https://www.youtube.com/@civilizationhasanath' target='_blank'>
                                            Civilization Hasanath
                                            {{-- <span class='icon-meta'>564</span> --}}
                                        </a>
                                    </li>
                                    <li class='hasIcon instagram'>
                                        <a href='https://www.instagram.com/civilization_hasanath/' target='_blank'>
                                            Dept. of Civilizational Studies
                                            {{-- <span class='icon-meta'>1m</span> --}}
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
    @include('partials.footer')
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
    <script src="{{ asset('timeago.js') }}"></script>
    <script src="{{ asset('locals.js') }}"></script>
    <script src="{{ asset('sticky.js') }}"></script>
    <script src="{{ asset('lazyload.js') }}"></script>
    <script src="{{ asset('submenu.js') }}"></script>
    <script src="{{ asset('ticker.js') }}"></script>
    <script src="{{ asset('currdate.js') }}"></script>


    <script type="text/javascript" src="https://www.blogger.com/static/v1/widgets/2726972568-widgets.js"></script>
    <script src="{{ asset('neew.js') }}"></script>

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
