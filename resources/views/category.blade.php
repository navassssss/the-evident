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
    {{ ucwords(
        $category->term
        ?? $section->name
        ?? $query
        ?? "The Evident"
    ) }} | The Evident
</title>

 <link rel="icon" type="image/png" href="{{asset('favicon-96x96.png')}}" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="{{asset('favicon.svg')}}" />
<link rel="shortcut icon" href="{{asset('favicon.ico')}}" />
<link rel="apple-touch-icon" sizes="180x180" href="{{asset('apple-touch-icon.png')}}" />
<link rel="manifest" href="{{ asset('site.webmanifest') }}">

    <link href='{{ url()->current() }}' rel='canonical' />
    <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1814859848368118"
     crossorigin="anonymous"></script>
    <meta
        content='The Evident is an English monthly magazine by the Department of Civilizational Studies, Darul Hasanath Islamic College, Kannadipparamba. It explores topics in religion, faith, theology, philosophy, history, and the culture of the Muslim Ummah.'
        name='description' />
    <link href='{{ asset('logocolor.png') }}' rel='image_src' />
    <!-- Metadata for Open Graph protocol. See http://ogp.me/. -->
    <meta content='en' property='og:locale' />
    <meta content='website' property='og:type' />
    <meta content='The Evident' property='og:title' />
    <meta content='{{ url()->current() }}' property='og:url' />
    <link rel="alternate" href="{{ url()->current() }}" hreflang="en" />
    <meta
        content='The Evident is an English monthly magazine by the Department of Civilizational Studies, Darul Hasanath Islamic College, Kannadipparamba. It explores topics in religion, faith, theology, philosophy, history, and the culture of the Muslim Ummah.'
        property='og:description' />
    <meta content='The Evident' property='og:site_name' />
    <meta content='{{ asset('logocolor.png') }}' property='og:image' />
    <meta content='{{ asset('logocolor.png') }}' property='twitter:image' />
    <meta content='summary_large_image' name='twitter:card' />
    <meta content='The Evident' name='twitter:title' />
    <meta content='{{ url()->current() }}' name='twitter:domain' />
    <meta
        content='The Evident is an English monthly magazine by the Department of Civilizational Studies, Darul Hasanath Islamic College, Kannadipparamba. It explores topics in religion, faith, theology, philosophy, history, and the culture of the Muslim Ummah.'
        name='twitter:description' />

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet"
        media="print" onload="this.media='all'">



    <link rel="preload" href="{{ asset('style.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="{{ asset('style.css') }}">

</head>

@php
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
@endphp

<script type="application/ld+json">
{!! json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>



<body class='multiple noSide hasIE hasTE' data-category='{{ $category->term ?? $section->name ?? $query }}'>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZCZ3H88"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    @include('partials.header')
    <div class='layouts wrapper'>
        <div class='layouts-inner'>
            <div class='col-2'>
                <main class='main wrapper'>
                    <div class='layout-3 section' id='layout-3' name='Main Layout'>
                        <div class='widget Blog' data-version='2' id='Blog1'>
                            <div class='widget-heading'>
                                @if (isset($query))
                                    <p style="margin-right: 5px;">Search results for </p>

                                @endif
                                <h1 class='queryInfo queryLabel querySuccess'>
                                    {{ strtoupper($category->term ?? $section->name ?? $query) }}</h3>
                                    <span style="margin-left: 5px" hidden> ( Page {{ $posts->currentPage() }} of
                                        {{ $posts->lastPage() }})</span>
                                    <hr>
                            </div>
                            <div class='widget-content grid-2 gridView'>
                                <div class='posts'>
                                    @foreach ($posts as $post)
                                        <article class='post postOuter item-{{ $loop->index }}'>
                                            <div class='postImage'>
                                                <a href='{{ route('home.show', ['category' => $post->category->scheme ?? 'uncategorized', 'post' => $post->slug ?? $post->id]) }}'
                                                    title='{{ $post->title }}'>
                                                    <span class='hasImage '
                                                        data-style='{{ Storage::url($post->thumbnail_url) }}'
                                                        style='background-image: url({{ Storage::url($post->thumbnail_url) }});'>

                                                    </span>
                                                </a>
                                            </div>
                                            <div class='postDetails'>
                                                <span class='postCat'
                                                    data-cat='{{ $post->category->term ?? 'uncategorized' }}'>
                                                    <a
                                                        href='{{ route('category.show', ['category' => $post->category->term ?? 'uncategorized']) }}'>{{strtoupper($post->category->term)}}</a>
                                                </span>
                                                <h3 class='postTitle'>
                                                    <a href='{{ route('home.show', ['category' => $post->category->scheme ?? 'uncategorized', 'post' => $post->slug ?? $post->id]) }}'
                                                        rel='bookmark' title='{{ $post->title }}'>
                                                        {{ $post->title}}
                                                    </a>
                                                </h3>
                                                <p class='postSnippet'>
                                                    {{ \Illuminate\Support\Str::limit(strip_tags($post->content), 150) }}
                                                </p>
                                                <div class='postMeta'>
                                                    <div class='postAuthorAndTimestamp'>
                                                        <span class='authorImage'>
                                                            <span class='hasImage lazy'
                                                                data-style='{{ Storage::url($post->author->image_url) }}'
                                                                style='background-image: url({{ Storage::url($post->author->image_url) }});'></span>
                                                        </span>
                                                        <span class='postAuthorAndDate'>
                                                            <span class='postAuthor'>
                                                                {{ $post->author->name ?? 'Civilization Hasanath' }}
                                                            </span>
                                                            <span class='postDate'>
                                                                <time class='published'
                                                                    datetime='{{ $post->created_at->toISOString() }}'>{{ $post->created_at->diffForHumans() }}</time>
                                                            </span>
                                                        </span>
                                                    </div>
                                                    <span class='postReadMore'><a
                                                            href='{{ route('home.show', ['category' => $post->category->scheme ?? 'uncategorized', 'post' => $post->slug ?? $post->id]) }}'>Keep
                                                            reading</a></span>
                                                </div>
                                            </div>
                                        </article>
                                        
                                    @endforeach
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
                                    @if ($posts->hasMorePages())
                                        <a class='loadMore' data-link='{{ $posts->nextPageUrl() }}'
                                            href='{{ $posts->nextPageUrl() }}' role='button'>
                                            More posts
                                        </a>
                                    @else
                                        <span class='noMore visible'>
                                            That's All

                                        </span>
                                    @endif
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
            viewAll: "View all",
            noResults: "No results found",
            noTitle: "No title",
            readMore: "Keep reading",
            lnDir: !1,
            lang: "en"
        }
    </script>
    <!-- Main Script -->
    {{--
    <script src="{{ asset('timeago.js') }}"></script>
    <script src="{{ asset('locals.js') }}"></script>
    <script src="{{ asset('sticky.js') }}"></script>
    <script src="{{ asset('lazyload.js') }}"></script>
    <script src="{{ asset('submenu.js') }}"></script>
    <script src="{{ asset('ticker.js') }}"></script>
    <script src="{{ asset('currdate.js') }}"></script>
    <script src="{{ asset('category.js') }}"></script> --}}
    <script src="{{ asset('output.min.js') }}"></script>
    <script src="{{ asset('category.js') }}"></script>
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

    {{--
    <script type="text/javascript" src="https://www.blogger.com/static/v1/widgets/3000588928-widgets.js"></script> --}}
    {{--
    <script type='text/javascript'>
        window['__wavt'] = 'AOuZoY6_19SQuFdSmqNEjbJn_6hqMaug9Q:1753894518229'; _WidgetManager._Init('//www.blogger.com/rearrange?blogID\x3d6110379639549342881', '//atlas-home2.blogspot.com/search/label/Style', '6110379639549342881');
        _WidgetManager._SetDataContext([{ 'name': 'blog', 'data': { 'blogId': '6110379639549342881', 'title': 'Atlas - home 2', 'url': 'https://atlas-home2.blogspot.com/search/label/Style', 'canonicalUrl': 'https://atlas-home2.blogspot.com/search/label/Style', 'homepageUrl': 'https://atlas-home2.blogspot.com/', 'searchUrl': 'https://atlas-home2.blogspot.com/search', 'canonicalHomepageUrl': 'https://atlas-home2.blogspot.com/', 'blogspotFaviconUrl': 'https://atlas-home2.blogspot.com/favicon.ico', 'bloggerUrl': 'https://www.blogger.com', 'hasCustomDomain': false, 'httpsEnabled': true, 'enabledCommentProfileImages': true, 'gPlusViewType': 'FILTERED_POSTMOD', 'adultContent': false, 'analyticsAccountNumber': '', 'encoding': 'UTF-8', 'locale': 'en', 'localeUnderscoreDelimited': 'en', 'languageDirection': 'ltr', 'isPrivate': false, 'isMobile': false, 'isMobileRequest': false, 'mobileClass': '', 'isPrivateBlog': false, 'isDynamicViewsAvailable': true, 'feedLinks': '\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22Atlas - home 2 - Atom\x22 href\x3d\x22https://atlas-home2.blogspot.com/feeds/posts/default\x22 /\x3e\n\x3clink rel\x3d\x22alternate\x22 type\x3d\x22application/rss+xml\x22 title\x3d\x22Atlas - home 2 - RSS\x22 href\x3d\x22https://atlas-home2.blogspot.com/feeds/posts/default?alt\x3drss\x22 /\x3e\n\x3clink rel\x3d\x22service.post\x22 type\x3d\x22application/atom+xml\x22 title\x3d\x22Atlas - home 2 - Atom\x22 href\x3d\x22https://www.blogger.com/feeds/6110379639549342881/posts/default\x22 /\x3e\n', 'meTag': '', 'adsenseHostId': 'ca-host-pub-1556223355139109', 'adsenseHasAds': false, 'adsenseAutoAds': false, 'boqCommentIframeForm': true, 'loginRedirectParam': '', 'view': '', 'dynamicViewsCommentsSrc': '//www.blogblog.com/dynamicviews/4224c15c4e7c9321/js/comments.js', 'dynamicViewsScriptSrc': '//www.blogblog.com/dynamicviews/3f6b3721b20e96c4', 'plusOneApiSrc': 'https://apis.google.com/js/platform.js', 'disableGComments': true, 'interstitialAccepted': false, 'sharing': { 'platforms': [{ 'name': 'Get link', 'key': 'link', 'shareMessage': 'Get link', 'target': '' }, { 'name': 'Facebook', 'key': 'facebook', 'shareMessage': 'Share to Facebook', 'target': 'facebook' }, { 'name': 'BlogThis!', 'key': 'blogThis', 'shareMessage': 'BlogThis!', 'target': 'blog' }, { 'name': 'X', 'key': 'twitter', 'shareMessage': 'Share to X', 'target': 'twitter' }, { 'name': 'Pinterest', 'key': 'pinterest', 'shareMessage': 'Share to Pinterest', 'target': 'pinterest' }, { 'name': 'Email', 'key': 'email', 'shareMessage': 'Email', 'target': 'email' }], 'disableGooglePlus': true, 'googlePlusShareButtonWidth': 0, 'googlePlusBootstrap': '\x3cscript type\x3d\x22text/javascript\x22\x3ewindow.___gcfg \x3d {\x27lang\x27: \x27en\x27};\x3c/script\x3e' }, 'hasCustomJumpLinkMessage': true, 'jumpLinkMessage': 'Latest', 'pageType': 'index', 'searchLabel': 'Style', 'pageName': 'Style', 'pageTitle': 'Atlas - home 2: Style' } }, { 'name': 'features', 'data': {} }, { 'name': 'messages', 'data': { 'edit': 'Edit', 'linkCopiedToClipboard': 'Link copied to clipboard!', 'ok': 'Ok', 'postLink': 'Post Link' } }, { 'name': 'template', 'data': { 'name': 'custom', 'localizedName': 'Custom', 'isResponsive': true, 'isAlternateRendering': false, 'isCustom': true } }, { 'name': 'view', 'data': { 'classic': { 'name': 'classic', 'url': '?view\x3dclassic' }, 'flipcard': { 'name': 'flipcard', 'url': '?view\x3dflipcard' }, 'magazine': { 'name': 'magazine', 'url': '?view\x3dmagazine' }, 'mosaic': { 'name': 'mosaic', 'url': '?view\x3dmosaic' }, 'sidebar': { 'name': 'sidebar', 'url': '?view\x3dsidebar' }, 'snapshot': { 'name': 'snapshot', 'url': '?view\x3dsnapshot' }, 'timeslide': { 'name': 'timeslide', 'url': '?view\x3dtimeslide' }, 'isMobile': false, 'title': 'Atlas - home 2', 'description': 'Creative Magazine \x26amp; News Blogger Premium Theme, With many new features and fully Customizble, Powerfull Admin Panel and High Quality Design.', 'url': 'https://atlas-home2.blogspot.com/search/label/Style', 'type': 'feed', 'isSingleItem': false, 'isMultipleItems': true, 'isError': false, 'isPage': false, 'isPost': false, 'isHomepage': false, 'isArchive': false, 'isSearch': true, 'isLabelSearch': true, 'search': { 'label': 'Style', 'resultsMessage': 'Showing posts with the label Style', 'resultsMessageHtml': 'Showing posts with the label \x3cspan class\x3d\x27search-label\x27\x3eStyle\x3c/span\x3e' } } }, { 'name': 'widgets', 'data': [{ 'title': 'Contact Form', 'type': 'ContactForm', 'sectionId': 'settings', 'id': 'ContactForm1' }, { 'title': 'Color filter', 'type': 'LinkList', 'sectionId': 'settings', 'id': 'LinkList200' }, { 'title': 'Web Icons', 'type': 'LinkList', 'sectionId': 'settings', 'id': 'LinkList201' }, { 'title': 'Custom Data', 'type': 'LinkList', 'sectionId': 'settings', 'id': 'LinkList202' }, { 'title': '', 'type': 'Image', 'sectionId': 'canvas-1', 'id': 'Image1' }, { 'title': '', 'type': 'LinkList', 'sectionId': 'canvas-1', 'id': 'LinkList5' }, { 'title': 'Latest', 'type': 'HTML', 'sectionId': 'canvas-2', 'id': 'HTML10' }, { 'title': '', 'type': 'LinkList', 'sectionId': 'header-mainbar', 'id': 'LinkList2' }, { 'title': 'Atlas - home 2 (Header)', 'type': 'Header', 'sectionId': 'header-mainbar', 'id': 'Header1' }, { 'title': '', 'type': 'LinkList', 'sectionId': 'header-mainbar', 'id': 'LinkList1' }, { 'title': '', 'type': 'LinkList', 'sectionId': 'header-mainbar', 'id': 'LinkList7' }, { 'title': '', 'type': 'HTML', 'sectionId': 'layout-1', 'id': 'HTML2' }, { 'title': 'Food', 'type': 'HTML', 'sectionId': 'layout-1', 'id': 'HTML1' }, { 'title': 'Picked', 'type': 'HTML', 'sectionId': 'layout-2', 'id': 'HTML4' }, { 'title': 'Gadget', 'type': 'HTML', 'sectionId': 'layout-2', 'id': 'HTML3' }, { 'title': 'Blog Posts', 'type': 'Blog', 'sectionId': 'layout-3', 'id': 'Blog1', 'posts': [{ 'id': '1972980359283242147', 'title': 'Winter Dressing Tips When It\x26#39;s Really Cold Out', 'featuredImage': 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhsPeLaPbZ2RdY92IrwtBLy_yiXcDpS7srsxGI9j98_djcOk8ddUt2jSqW-lGuyCMgFASBSjpkRJWttBrBAWD40_GfrH6-qycERnGGlaPXF4ga0NYDUrG_infvbS2NMF0MJpcemjB7zGqUBJgBjZr3IVFT99UBFymv-p2MnIy2JazFL2SKKO1-1Z6jfGQ/w640-h426/fashion-n.jpg', 'showInlineAds': false }, { 'id': '7135916701540421164', 'title': 'Top Men\x26#39;s Fashion Trends From Spring', 'featuredImage': 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjDJmsBKXT35B0PcGpQF7nnxW9irSnHq_-a4Ej5_oGG5F9-ozVEUiGsA0uKomcCB3DoOqAOTLr5BEygSlxPQZluyXjJUfO_sBZTIVsdsPELzuBibUPEioaGvW_HjSuuo2uhuVO9JND_Jzy3T4IVXv-kfYwO4QKaaPyrf-2AKoGjE_kjXufE6462LYkw7A/w640-h426/fashion-2%20(1).jpg', 'showInlineAds': false }, { 'id': '7580919520148211545', 'title': 'Laugh, cry and learn Within Virtual Reality', 'featuredImage': 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhdsMqgFPv37HM4GXCU2pJ1N4v2zUmXMusqU2mzT1NNzrp_ITZ4gWXkWbK1lKzPsT0XijlpqKZ95X9VEyeSHNzqAs_Qa-AtbdGR6Tu3WH9sJnC3zXTTWOBjM6xUUyBSAk1m7rNC7cYVSmcCQkTlGeU-EkB2RfnJV29eN9F-ihg8Qm87C_gEp2R0fJwwJw/w640-h428/remy-gieling-Zf0mPf4lG-U-unsplash.jpg', 'showInlineAds': false }, { 'id': '7235331424869781564', 'title': 'Tips to Ensure You Always Look Stylish', 'featuredImage': 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhuMhJbYPWfqPhAJpwBtq_2B7myBD0egdQDwzJeuu8XwqTTwgjOda_Y1SgWf3-BWGWSJWEkN6wjIsYyXUQmAdVDmla-duP5xuVbGGqncxgxNXUJ9UjVHCdCw9f3hoDAe0qG-8tCnEVV-qtPbeAVfkCDri1FnL1ciPqwdo_NNHAlivgmV1_1NkhFdiIZOg/w426-h640/angel-g-vFOxv-8mONw-unsplash.jpg', 'showInlineAds': false }, { 'id': '6929964554576534634', 'title': 'Top Classic Style Inspiration ideas', 'featuredImage': 'https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEhaEwu3T9Q6bFJD_AoRPCU_nIiNwqEgZ68F13d9DlNpw-163lLzY6IWOM1088_YG2LIc1qKBCzcTXG8JvH9c6JadPd7FH8W8YRUTrNPxovKW_uLtYtWOmmmHsIL7hEclH2Pg01SbgSrpavY1zh25-JOLmD3JM58v_BD9hXA3OKaGoqJqT_WjL2GiYo13w/w640-h480/23%20(1).jpg', 'showInlineAds': false }], 'headerByline': { 'regionName': 'header1', 'items': [{ 'name': 'share', 'label': '' }, { 'name': 'author', 'label': '' }, { 'name': 'timestamp', 'label': '' }] }, 'footerBylines': [{ 'regionName': 'footer1', 'items': [{ 'name': 'comments', 'label': 'IWstudio' }] }, { 'regionName': 'footer2', 'items': [{ 'name': 'labels', 'label': '' }] }], 'allBylineItems': [{ 'name': 'share', 'label': '' }, { 'name': 'author', 'label': '' }, { 'name': 'timestamp', 'label': '' }, { 'name': 'comments', 'label': 'IWstudio' }, { 'name': 'labels', 'label': '' }] }, { 'title': 'Latest', 'type': 'HTML', 'sectionId': 'layout-4', 'id': 'HTML6' }, { 'title': 'Gadget', 'type': 'HTML', 'sectionId': 'sidebar-1', 'id': 'HTML5' }, { 'title': 'Picked', 'type': 'HTML', 'sectionId': 'sidebar-2', 'id': 'HTML7' }, { 'title': 'Join us', 'type': 'LinkList', 'sectionId': 'sidebar-2', 'id': 'LinkList3' }, { 'title': 'Gadget', 'type': 'HTML', 'sectionId': 'sidebar-2', 'id': 'HTML8' }, { 'title': 'LIVING', 'type': 'HTML', 'sectionId': 'sidebar-2', 'id': 'HTML9' }, { 'title': 'Daily', 'type': 'PopularPosts', 'sectionId': 'footer-columns', 'id': 'PopularPosts2', 'posts': [{ 'title': 'Will Humans be able to live in Mars in the future?', 'id': 1013237735166602475 }, { 'title': 'Winter Dressing Tips When It\x26#39;s Really Cold Out', 'id': 1972980359283242147 }] }, { 'title': 'Weekly', 'type': 'PopularPosts', 'sectionId': 'footer-columns', 'id': 'PopularPosts1', 'posts': [{ 'title': 'Will Humans be able to live in Mars in the future?', 'id': 1013237735166602475 }, { 'title': 'Winter Dressing Tips When It\x26#39;s Really Cold Out', 'id': 1972980359283242147 }] }, { 'title': 'Pages', 'type': 'PageList', 'sectionId': 'footer-columns', 'id': 'PageList1' }, { 'title': '', 'type': 'Text', 'sectionId': 'footer-bottombar', 'id': 'Text1' }, { 'title': 'Quotes', 'type': 'LinkList', 'sectionId': 'footer-bottombar', 'id': 'LinkList4' }, { 'title': '', 'type': 'LinkList', 'sectionId': 'sticky-list', 'id': 'LinkList6' }] }]);
        _WidgetManager._RegisterWidget('_ContactFormView', new _WidgetInfo('ContactForm1', 'settings', document.getElementById('ContactForm1'), { 'contactFormMessageSendingMsg': 'Sending...', 'contactFormMessageSentMsg': 'Your message has been sent.', 'contactFormMessageNotSentMsg': 'Message could not be sent. Please try again later.', 'contactFormInvalidEmailMsg': 'A valid email address is required.', 'contactFormEmptyMessageMsg': 'Message field cannot be empty.', 'title': 'Contact Form', 'blogId': '6110379639549342881', 'contactFormNameMsg': 'Name', 'contactFormEmailMsg': 'Email', 'contactFormMessageMsg': 'Message', 'contactFormSendMsg': 'Send', 'contactFormToken': 'AOuZoY64Q6xv_A925ahiwR5aLkCX7VSECQ:1753894518229', 'submitUrl': 'https://www.blogger.com/contact-form.do' }, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList200', 'settings', document.getElementById('LinkList200'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList201', 'settings', document.getElementById('LinkList201'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList202', 'settings', document.getElementById('LinkList202'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_ImageView', new _WidgetInfo('Image1', 'canvas-1', document.getElementById('Image1'), { 'resize': false }, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList5', 'canvas-1', document.getElementById('LinkList5'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML10', 'canvas-2', document.getElementById('HTML10'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList2', 'header-mainbar', document.getElementById('LinkList2'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HeaderView', new _WidgetInfo('Header1', 'header-mainbar', document.getElementById('Header1'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList1', 'header-mainbar', document.getElementById('LinkList1'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList7', 'header-mainbar', document.getElementById('LinkList7'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML2', 'layout-1', document.getElementById('HTML2'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML1', 'layout-1', document.getElementById('HTML1'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML4', 'layout-2', document.getElementById('HTML4'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML3', 'layout-2', document.getElementById('HTML3'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_BlogView', new _WidgetInfo('Blog1', 'layout-3', document.getElementById('Blog1'), { 'cmtInteractionsEnabled': false, 'navMessage': 'Showing posts with label \x3cb\x3eStyle\x3c/b\x3e. \x3ca href\x3d\x22https://atlas-home2.blogspot.com/\x22\x3eShow all posts\x3c/a\x3e', 'lightboxEnabled': true, 'lightboxModuleUrl': 'https://www.blogger.com/static/v1/jsbin/249874-lbx.js', 'lightboxCssUrl': 'https://www.blogger.com/static/v1/v-css/123180807-lightbox_bundle.css' }, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML6', 'layout-4', document.getElementById('HTML6'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML5', 'sidebar-1', document.getElementById('HTML5'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML7', 'sidebar-2', document.getElementById('HTML7'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList3', 'sidebar-2', document.getElementById('LinkList3'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML8', 'sidebar-2', document.getElementById('HTML8'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_HTMLView', new _WidgetInfo('HTML9', 'sidebar-2', document.getElementById('HTML9'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_PopularPostsView', new _WidgetInfo('PopularPosts2', 'footer-columns', document.getElementById('PopularPosts2'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_PopularPostsView', new _WidgetInfo('PopularPosts1', 'footer-columns', document.getElementById('PopularPosts1'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_PageListView', new _WidgetInfo('PageList1', 'footer-columns', document.getElementById('PageList1'), { 'title': 'Pages', 'links': [{ 'isCurrentPage': false, 'href': 'http://atlas-he2.blogspot.com/', 'title': 'Home' }, { 'isCurrentPage': false, 'href': '#', 'title': 'Typography' }, { 'isCurrentPage': false, 'href': '#', 'title': 'Contact us' }], 'mobile': false, 'showPlaceholder': true, 'hasCurrentPage': false }, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_TextView', new _WidgetInfo('Text1', 'footer-bottombar', document.getElementById('Text1'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList4', 'footer-bottombar', document.getElementById('LinkList4'), {}, 'displayModeFull'));
        _WidgetManager._RegisterWidget('_LinkListView', new _WidgetInfo('LinkList6', 'sticky-list', document.getElementById('LinkList6'), {}, 'displayModeFull'));
    </script> --}}
</body>

</html>