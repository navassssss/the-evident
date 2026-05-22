<!DOCTYPE html>
<html class="ltr" dir="ltr" lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />

    <title>Privacy Policy | The Evident</title>

    <link rel="icon" type="image/png" href="{{asset('favicon-96x96.png')}}" sizes="96x96" />
    <link rel="icon" type="image/svg+xml" href="{{asset('favicon.svg')}}" />
    <link rel="shortcut icon" href="{{asset('favicon.ico')}}" />
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset('apple-touch-icon.png')}}" />
    <link rel="manifest" href="{{ asset('site.webmanifest') }}">
    <link rel="canonical" href="{{ url()->current() }}" />

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-LLJKV8WGKS"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){ dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-LLJKV8WGKS');
    </script>

    <!-- Google Tag Manager -->
    <script>
        (function(w, d, s, l, i) {
            w[l] = w[l] || [];
            w[l].push({'gtm.start': new Date().getTime(), event: 'gtm.js'});
            var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s),
                dl = l !== 'dataLayer' ? '&l=' + l : '';
            j.async = true;
            j.src = 'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
            f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-KZCZ3H88');
    </script>
    <!-- End Google Tag Manager -->

    <!-- Primary Meta -->
    <meta name="description"
          content="Read the Privacy Policy of The Evident — an English monthly magazine. Learn how we collect, use, and protect your data when you access evidentmonthly.in." />

    <meta name="keywords"
          content="Privacy Policy, The Evident privacy, data protection, user privacy, evidentmonthly.in policy" />

    <meta name="author" content="The Evident Editorial Board" />
    <meta name="robots" content="index, follow" />

    <link rel="image_src" href="{{ asset('logocolor.png') }}" />

    <!-- Open Graph -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="Privacy Policy | The Evident" />
    <meta property="og:description"
          content="Learn how The Evident collects, uses, and secures user data. Read our complete privacy policy for evidentmonthly.in." />
    <meta property="og:url" content="{{ url()->current() }}" />
    <meta property="og:site_name" content="The Evident" />
    <meta property="og:image" content="{{ asset('logocolor.png') }}" />
    <meta property="og:image:secure_url" content="{{ asset('logocolor.png') }}" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="The Evident Magazine Logo" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="Privacy Policy | The Evident" />
    <meta name="twitter:description"
          content="Understand how The Evident handles your data. Read our complete Privacy Policy on evidentmonthly.in." />
    <meta name="twitter:image" content="{{ asset('logocolor.png') }}" />
    <meta name="twitter:site" content="@TheEvidentMagazine" />

    <!-- Alternate -->
    <link rel="alternate" href="{{ url()->current() }}" hreflang="en" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
          rel="stylesheet" media="print" onload="this.media='all'">

    <!-- Styles -->

    <link rel="preload" href="{{ asset('style.css') }}" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="{{ asset('style.css') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Poppins', sans-serif;
            line-height: 1.7;
            color: #2d2d2d;
            background: #ffffff;
            padding: 0;
        }

        .contact-container {
            max-width: 900px;
            margin: 0 auto;
            padding: 80px 40px;
        }

        .page-title {
            font-size: 2.5rem;
            font-weight: 700;
            color: #1a1a1a;
            margin-bottom: 50px;
            letter-spacing: -0.5px;
        }

        .intro-text {
            font-size: 1rem;
            color: #4a4a4a;
            line-height: 1.8;
            margin-bottom: 20px;
        }

        .contact-section {
            margin: 45px 0;
            padding: 25px 0;
            border-top: 1px solid #e5e5e5;
            border-bottom: 1px solid #e5e5e5;
        }

        .contact-label {
            font-size: 0.9rem;
            color: #666;
            font-weight: 500;
            margin-bottom: 8px;
        }

        .contact-email {
            font-size: 1.15rem;
            font-weight: 500;
        }

        .contact-email a {
            color: #E85D54;
            text-decoration: none;
            transition: opacity 0.2s ease;
        }

        .contact-email a:hover {
            opacity: 0.8;
        }

        .section-title {
            font-size: 1.8rem;
            font-weight: 700;
            color: #1a1a1a;
            margin: 60px 0 35px 0;
        }

        .guideline-item {
            margin-bottom: 30px;
        }

        .guideline-label {
            font-size: 1rem;
            font-weight: 600;
            color: #1a1a1a;
            margin-bottom: 8px;
            display: block;
        }

        .guideline-text {
            font-size: 0.95rem;
            color: #4a4a4a;
            line-height: 1.7;
        }

        .guideline-text a {
            color: #E85D54;
            text-decoration: none;
        }

        .guideline-text a:hover {
            text-decoration: underline;
        }

        .note-section {
            margin-top: 40px;
            padding: 20px 0 0 20px;
            border-left: 3px solid #E85D54;
        }

        .note-section strong {
            font-weight: 600;
            color: #1a1a1a;
            display: block;
            margin-bottom: 6px;
        }

        .note-section p {
            color: #4a4a4a;
            line-height: 1.7;
            font-size: 0.95rem;
        }

        @media (max-width: 768px) {
            .contact-container {
                padding: 60px 30px;
            }

            .page-title {
                font-size: 2rem;
                margin-bottom: 40px;
            }

            .section-title {
                font-size: 1.5rem;
                margin: 50px 0 30px 0;
            }

            .contact-section {
                margin: 35px 0;
            }
        }

        @media (max-width: 480px) {
            .contact-container {
                padding: 50px 20px;
            }

            .page-title {
                font-size: 1.75rem;
            }

            .section-title {
                font-size: 1.35rem;
            }
        }
    
        
        
        h1 {
            font-size: 1.8rem;
            font-weight: 600;
            margin-bottom: 0.5rem;
            color: #000;
        }
        
        .last-updated {
            color: #666;
            font-size: 0.9rem;
            margin-bottom: 2rem;
        }
        
        h2 {
            font-size: 1.1rem;
            font-weight: 600;
            margin-top: 2rem;
            margin-bottom: 0.8rem;
            color: #000;
        }
        
        p {
            margin-bottom: 1rem;
        }
        
       
        
       
        
       
        
        .contact {
            margin-top: 0.5rem;
        }
        
        @media (max-width: 600px) {
            body {
                padding: 1.5rem 1rem;
            }
            
            h1 {
                font-size: 1.5rem;
            }
        }
   
    </style>

</head>{{-- Schema Markup for "Privacy Policy" Page --}}
@php
$schemaData = [
    '@context' => 'https://schema.org',
    '@graph' => [

        // 🧭 Breadcrumb
        [
            '@type' => 'BreadcrumbList',
            'itemListElement' => [
                [
                    '@type' => 'ListItem',
                    'position' => 1,
                    'name' => 'Home',
                    'item' => url('/'),
                ],
                [
                    '@type' => 'ListItem',
                    'position' => 2,
                    'name' => 'Privacy Policy',
                    'item' => url()->current(),
                ],
            ],
        ],

        // 🏛️ Organization
        [
            '@type' => 'Organization',
            '@id' => url('/') . '#organization',
            'name' => 'The Evident',
            'url' => url('/'),
            'logo' => [
                '@type' => 'ImageObject',
                'url' => asset('logocolor.png'),
                'width' => 1200,
                'height' => 630,
            ],
            'description' => 'The Evident is an English monthly magazine published by the Department of Civilizational Studies, Darul Hasanath Islamic College, Kannadipparamba.',
            'sameAs' => [
                'https://www.facebook.com/TheEvidentMagazine',
                'https://www.instagram.com/TheEvidentMagazine',
                'https://twitter.com/TheEvidentMag',
            ],
            'contactPoint' => [
                '@type' => 'ContactPoint',
                'contactType' => 'Customer Support',
                'email' => 'editor@evidentmonthly.in',
            ],
        ],

        // 🌐 Website
        [
            '@type' => 'WebSite',
            '@id' => url('/') . '#website',
            'url' => url('/'),
            'name' => 'The Evident',
            'description' => 'The Evident is an English monthly magazine focusing on faith, philosophy, Islamic studies, culture, and analytical essays.',
            'publisher' => [
                '@type' => 'Organization',
                'name' => 'The Evident',
                'url' => url('/'),
                'logo' => [
                    '@type' => 'ImageObject',
                    'url' => asset('logocolor.png'),
                    'width' => 1200,
                    'height' => 630,
                ],
            ],
        ],

        // 📄 Privacy Policy Page
        [
            '@type' => 'WebPage',
            '@id' => url()->current() . '#privacy',
            'url' => url()->current(),
            'name' => 'Privacy Policy',
            'description' => 'Read The Evident Magazine’s Privacy Policy to understand how we collect, use, and protect your information.',
            'isPartOf' => [
                '@id' => url('/') . '#website',
            ],
            'publisher' => [
                '@id' => url('/') . '#organization',
            ],
            'inLanguage' => 'en',
            'primaryImageOfPage' => [
                '@type' => 'ImageObject',
                'url' => asset('logocolor.png'),
                'width' => 1200,
                'height' => 630,
            ],
        ],
    ],
];
@endphp


<script type="application/ld+json">
{!! json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE) !!}
</script>





<body class='multiple noSide hasIE hasTE'>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZCZ3H88" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    @include('partials.header')
    <div class='layouts wrapper'>
        <div class='layouts-inner'>
            <div class='col-4'>
                <div class="content-wrapper">

                    <h1>Privacy Policy</h1>
                    <p class="last-updated">Last Updated: November 22, 2025</p>

                    <p>The Evident (evidentmonthly.in) is committed to protecting your privacy. This policy explains how we collect, use, and safeguard your information when you visit our website.</p>

                    <h2>1. Information We Collect</h2>
                    <p>We may collect:</p>
                    <ul>
                        <li>Information you voluntarily provide (name, email) when contacting us or submitting content.</li>
                        <li>Automatic data such as IP address, browser type, device information, and pages visited (via analytics tools).</li>
                    </ul>
                    <p>We do not collect sensitive personal information.</p>

                    <h2>2. How We Use Your Information</h2>
                    <p>We use your data to:</p>
                    <ul>
                        <li>Improve website performance and user experience</li>
                        <li>Respond to inquiries or submissions</li>
                        <li>Maintain security and analytics</li>
                        <li>Manage editorial and communication processes</li>
                    </ul>
                    <p>We never sell, rent, or trade your data.</p>

                    <h2>3. Cookies & Tracking</h2>
                    <p>We use cookies to:</p>
                    <ul>
                        <li>Improve site loading and performance</li>
                        <li>Analyze website usage</li>
                        <li>Enhance user experience</li>
                    </ul>
                    <p>See our <a href="/cookies-policy">Cookies Policy</a> for details.</p>

                    <h2>4. Third-Party Services</h2>
                    <p>We may use:</p>
                    <ul>
                        <li>Google Analytics</li>
                        <li>Social media embeds (Facebook, Instagram, Twitter)</li>
                    </ul>
                    <p>These third parties may collect information according to their privacy policies.</p>

                    <h2>5. Data Protection</h2>
                    <p>We use reasonable security measures to protect your data. While we strive to secure information, no method is 100% guaranteed.</p>

                    <h2>6. Your Rights</h2>
                    <p>You may:</p>
                    <ul>
                        <li>Request deletion of your information</li>
                        <li>Request access to the information we store</li>
                    </ul>
                    <p class="contact">Contact: <a href="mailto:editor@evidentmonthly.in">editor@evidentmonthly.in</a></p>

                    <h2>7. Updates</h2>
                    <p>We may update this policy when necessary. Changes will appear on this page.</p>



                    <aside class='aside wrapper'>
                        <div class='sidebar-3 sidebar no-items section' id='sidebar-3' name='Sidebar [Global]'></div>
                    </aside>
                </div>
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
        <script src='https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js'
            type='text/javascript'></script>
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
        --}}
        <script src="{{ asset('output.min.js') }}"></script>


        <script src="{{ asset('category.js') }}"></script>

</body>

</html>