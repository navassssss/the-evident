<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
    <title>About Us | The Evident</title>
    <link rel="icon" type="image/png" href="<?php echo e(asset('favicon-96x96.png')); ?>" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="<?php echo e(asset('favicon.svg')); ?>" />
<link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('apple-touch-icon.png')); ?>" />
<link rel="manifest" href="<?php echo e(asset('site.webmanifest')); ?>">
    <link rel="canonical" href="<?php echo e(url()->current()); ?>" />
<!-- Google tag (gtag.js) -->
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
    <!-- Primary Meta -->
    <meta name="description" content="Learn about The Evident — an English monthly magazine by the Department of Civilizational Studies, Darul Hasanath Islamic College, Kannadipparamba. Discover our mission to explore faith, philosophy, history, and culture in the Muslim Ummah." />
    <meta name="keywords" content="The Evident, About The Evident, Darul Hasanath Islamic College, Islamic magazine, faith, philosophy, theology, Muslim culture, Islamic civilization, religion, Islamic thought" />
    <meta name="author" content="The Evident Editorial Board" />
    <meta name="robots" content="index, follow" />
    <link rel="image_src" href="<?php echo e(asset('logocolor.png')); ?>" />

    <!-- Open Graph (Facebook / WhatsApp / LinkedIn) -->
    <meta property="og:locale" content="en_US" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="About The Evident | English Monthly Magazine by Darul Hasanath Islamic College" />
    <meta property="og:description" content="The Evident is a monthly magazine exploring religion, faith, theology, philosophy, and Muslim culture. Learn about our mission, vision, and journey." />
    <meta property="og:url" content="<?php echo e(url()->current()); ?>" />
    <meta property="og:site_name" content="The Evident" />
    <meta property="og:image" content="<?php echo e(asset('logocolor.png')); ?>" />
    <meta property="og:image:secure_url" content="<?php echo e(asset('logocolor.png')); ?>" />
    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="og:image:alt" content="The Evident Magazine Logo" />

    <!-- Twitter Card -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="About The Evident | English Monthly Magazine" />
    <meta name="twitter:description" content="Discover The Evident — a magazine exploring Islam, philosophy, and culture. Learn more about our story, mission, and vision." />
    <meta name="twitter:image" content="<?php echo e(asset('logocolor.png')); ?>" />
    <meta name="twitter:site" content="@TheEvidentMagazine" />

    <!-- Alternate -->
    <link rel="alternate" href="<?php echo e(url()->current()); ?>" hreflang="en" />

    <!-- JSON-LD Schema -->
    

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap"
          rel="stylesheet" media="print" onload="this.media='all'">

    <!-- Styles -->
    <link rel="preload" href="<?php echo e(asset('style.css')); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="<?php echo e(asset('style.css')); ?>">


<style>


/*.content-wrapper {
            max-width: 1200px;
            padding: 40px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 60px;
            align-items: center;
        }
        .intro-text-h{
        font-size: large;}
        */
        /* Left side - Magazine cover */
        .cover-section {
            text-align: center;
            animation: slideInLeft 0.8s ease 3.5s forwards;
            opacity: 1;
        }

        .cover-image {
            width: 100%;
            max-width: 400px;
            height: auto;
            box-shadow: 0 20px 60px rgba(0, 0, 0, 0.3);
            border-radius: 8px;
            margin-bottom: 20px;
        }

        /* Right side - Introduction text */
        .intro-section {
            animation: slideInRight 0.8s ease 3.5s forwards;
            opacity: 1;
        }

        .intro-logo {
            margin-bottom: 30px;
        }

        .intro-logo-text {
            font-size: 3.5rem;
            font-weight: 900;
            color: #1a1a1a;
            letter-spacing: -2px;
            line-height: 1;
        }

        .intro-logo-text .the {
            display: block;
            font-size: 1.8rem;
            font-weight: 400;
            margin-bottom: -5px;
        }
         .page-title {
            font-size: 2rem;
            font-weight: 700;
            color: #1a1a1a;
            text-align: center;
            margin-bottom: 30px;
            letter-spacing: -0.5px;
        }

        .intro-logo-text .evident .d-letter {
            color: #E85D54;
        }

        .tagline {
            font-size: 0.9rem;
            color: #666666;
            letter-spacing: 2px;
            text-transform: uppercase;
            margin-bottom: 30px;
            font-family: 'Arial', sans-serif;
        }

        .intro-text {
            font-size: 1rem;
            line-height: 1.8;
            color: #333333;
            margin-bottom: 20px;
        }

        .intro-text strong {
            color: #E85D54;
            font-weight: 600;
        }

        .intro-highlights {
            list-style: none;
            margin: 25px 0;
        }

        .intro-highlights li {
            padding: 10px 0;
            padding-left: 30px;
            position: relative;
            color: #555555;
            font-size: 1rem;
        }

        .intro-highlights li::before {
            content: '→';
            position: absolute;
            left: 0;
            color: #E85D54;
            font-weight: bold;
        }

        .redirect-notice {
            margin-top: 30px;
            padding: 15px 20px;
            background: #f5f5f5;
            border-left: 4px solid #E85D54;
            font-size: 0.9rem;
            color: #666666;
            font-family: 'Arial', sans-serif;
        }

        .redirect-notice .countdown {
            color: #E85D54;
            font-weight: bold;
        }

        /* Confetti/particle container */
        .confetti-container {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            z-index: 10000;
            pointer-events: none;
            overflow: hidden;
        }
        .editorial-section {
    max-width: 600px;
    margin: 40px auto;
    background: #fff;
    border: 1px solid #eee;
    border-radius: 12px;
    box-shadow: 0 4px 12px rgba(0,0,0,0.08);
    padding: 25px;
    font-family: "Poppins", "Noto Sans Malayalam", sans-serif;
  }

  .editorial-badge {
    display: inline-block;
    background: #c62828;
    color: #fff;
    padding: 6px 16px;
    border-radius: 25px;
    font-weight: 600;
    text-decoration: none;
    font-size: 16px;
  }

  .editorial-content {
    margin-top: 20px;
    line-height: 1.8;
    color: #333;
    font-size: 15px;
  }

  .editorial-content strong {
    color: #c62828;
  }

  .editorial-content .name {
    color: #111;
    font-weight: 500;
  }

  .editorial-content .contact {
    color: #c62828;
    text-decoration: none;
  }

  .editorial-content .contact:hover {
    text-decoration: underline;
  }
</style>
</head>

<?php
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
                        'name' => 'About Us',
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
                'description' => 'The Evident is an English monthly magazine by the Department of Civilizational Studies, Darul Hasanath Islamic College, Kannadipparamba. It explores faith, philosophy, history, and the culture of the Muslim Ummah.',
                'sameAs' => [
                    'https://www.facebook.com/TheEvidentMagazine',
                    'https://www.instagram.com/TheEvidentMagazine',
                    'https://twitter.com/TheEvidentMag',
                ],
                'contactPoint' => [
                    '@type' => 'ContactPoint',
                    'contactType' => 'Editorial Inquiries',
                    'email' => 'editor@evidentmonthly.in',
                ],
            ],

            // 🌐 Website
            [
                '@type' => 'WebSite',
                '@id' => url('/') . '#website',
                'url' => url('/'),
                'name' => 'The Evident',
                'description' => 'An English monthly magazine exploring Islam, theology, and culture — published by the Department of Civilizational Studies, Darul Hasanath Islamic College.',
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

            // 📘 About Page
            [
                '@type' => 'AboutPage',
                '@id' => url()->current() . '#about',
                'url' => url()->current(),
                'name' => 'About The Evident',
                'description' => 'Learn about The Evident — our vision, mission, and journey as an English monthly magazine by the Department of Civilizational Studies, Darul Hasanath Islamic College.',
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
?>






<body class='multiple noSide hasIE hasTE' >
<script type="application/ld+json">
<?php echo json_encode($schemaData, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT); ?>

</script>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZCZ3H88"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <div class='layouts wrapper'>
        <div class='layouts-inner'>
            <div class='col-4'>
            <div class="content-wrapper">
            <!-- Left: Magazine Cover -->
           


            <!-- Right: Introduction -->
            <div class="intro-section">
                <div class="intro-logo" style="text-align:center" hidden>
                    <div class="intro-logo-text">
                        <a class='logo' href='<?php echo e(url('/')); ?>'>
                                          <img alt='The Evident' height='100' id='Image1_img'
                                                src='<?php echo e(asset('logocolor1.png')); ?>' width='150' />
                                    </a>
                    </div>
                    <div class="tagline">Making What Matters Visible</div>
                </div>
                <h1 class="page-title">About Us</h1>

                <p class="intro-text" >
                    Welcome to <strong>The Evident</strong>, an English monthly magazine that brings clarity to the profound questions of our time.
                </p>

                <h2 class="intro-text-h">
                Introduction
                </h2>
                <p class="intro-text">
                The Evident is an English monthly magazine by the Department of Civilizational Studies, Darul Hasanath Islamic College, Kannadipparamba.
We explore themes that shape the Muslim mind and heart — religion, faith, theology, philosophy, history, and culture.
Our platform connects traditional scholarship with modern reflections, inspiring meaningful dialogue across generations.
</p>
                <h2 class="intro-text-h">
                Our Mission
                </h2>
                <p class="intro-text">
                Our mission is to deliver insightful, authentic, and thought-provoking content that reflects the rich heritage of Islamic civilization and its relevance today.
We aim to strengthen understanding of faith, encourage critical thinking, and nurture a spirit of reflection through well-researched articles, interviews, and discussions.
</p>
                <h2 class="intro-text-h">
                Our Vision
                </h2>
                <p class="intro-text">
                We envision The Evident as a beacon of intellectual and spiritual revival within the Muslim Ummah.
By linking classical wisdom to contemporary realities, we seek to build a generation of readers who are grounded in faith, open in thought, and active in purpose.
</p>
               

                <p class="intro-text" hidden>
                    Published by the Department of Civilizational Studies at Darul Hasanath Islamic College, we explore the intersections of faith, reason, and culture through thoughtful scholarship and engaging prose.
                </p>

                <ul class="intro-highlights" hidden>
                    <li>In-depth articles on theology and philosophy</li>
                    <li>Historical perspectives on Islamic civilization</li>
                    <li>Contemporary cultural analysis</li>
                    <li>Scholarly research and commentary</li>
                </ul>

             
            </div>
        </div>
                <main class='main wrapper' hidden>
                    <h1>The Evident</h1>
                    <hr>
                    <h3>Our mission</h3>
                    <p>The Evident is an English monthly magazine by the Department of Civilizational Studies, Darul Hasanath Islamic College, Kannadipparamba. It explores topics in religion, faith, theology, philosophy, history, and the culture of the Muslim Ummah.</p>
                    <p>Our mission is to provide insightful and thought-provoking content that reflects the rich heritage   of Islamic civilization and its relevance in today's world. We aim to foster a deeper understanding of our faith and its teachings through well-researched articles, interviews, and discussions.</p>
                    <h3>Our mission</h3>
                    <p>We invite you to explore our articles, engage with our content, and join
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
   
</body>

</html><?php /**PATH /var/www/5a5b779e-2ce1-449e-8f4f-cde8aa60fa21/resources/views/about.blade.php ENDPATH**/ ?>