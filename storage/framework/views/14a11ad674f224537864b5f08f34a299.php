<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta content='text/html; charset=UTF-8' http-equiv='Content-Type' />
    <meta content='width=device-width, initial-scale=1'
        name='viewport' />
    <title><?php echo e($post->title); ?> | The Evident</title>

    <link rel="canonical" href="<?php echo e(url()->current()); ?>" />
    <meta name="robots" content="index, follow" />
   
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
   
    <meta name="description" content="<?php echo e(Str::limit(strip_tags($post->content), 160)); ?> | The Evident" />
    <meta name="author" content="<?php echo e($post->author->name ?? 'The Evident'); ?>" />
    

    <!-- Open Graph -->
    <meta property="og:locale" content="en" />
    <meta property="og:type" content="article" />
    <meta property="og:title" content="<?php echo e($post->title); ?> | The Evident" />
    <meta property="og:description" content="<?php echo e(Str::limit(strip_tags($post->content), 160)); ?> | The Evident" />
    <meta property="og:url" content="<?php echo e(url()->current()); ?>" />
    <link rel="alternate" href="<?php echo e(url()->current()); ?>" hreflang="en" />

 <link rel="icon" type="image/png" href="<?php echo e(asset('favicon-96x96.png')); ?>" sizes="96x96" />
<link rel="icon" type="image/svg+xml" href="<?php echo e(asset('favicon.svg')); ?>" />
<link rel="shortcut icon" href="<?php echo e(asset('favicon.ico')); ?>" />
<link rel="apple-touch-icon" sizes="180x180" href="<?php echo e(asset('apple-touch-icon.png')); ?>" />
<link rel="manifest" href="<?php echo e(asset('site.webmanifest')); ?>">

    <meta property="og:site_name" content="The Evident" />
    <meta property="og:image" content="<?php echo e(asset(Storage::url($post->thumbnail_url))); ?>" />
    <meta property="og:image:secure_url" content="<?php echo e(asset(Storage::url($post->thumbnail_url))); ?>" />
    <meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />

<meta property="og:image:type" content="image/jpeg, image/png" />
<meta property="og:image:alt" content="<?php echo e($post->title); ?>" />
<meta property="og:locale" content="en_US" />

    <meta property="og:image:width" content="1200" />
    <meta property="og:image:height" content="630" />
    <meta property="article:published_time" content="<?php echo e($post->created_at->toIso8601String()); ?>" />
    <meta property="article:modified_time" content="<?php echo e($post->updated_at->toIso8601String()); ?>" />

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image" />
    <meta name="twitter:title" content="<?php echo e($post->title); ?> | The Evident" />
    <meta name="twitter:description" content="<?php echo e(Str::limit(strip_tags($post->content), 160)); ?> | The Evident" />
    <meta name="twitter:image" content="<?php echo e(asset(Storage::url($post->thumbnail_url))); ?>" />
    


 <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700;800&display=swap" rel="stylesheet" media="print" onload="this.media='all'">



    <link rel="preload" href="<?php echo e(asset('style1.css')); ?>" as="style" onload="this.onload=null;this.rel='stylesheet'">
    <link rel="stylesheet" href="<?php echo e(asset('style1.css')); ?>">
</head>

<style> 
  
</style>
<body class='single post hasIE hasTE hasLE'>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KZCZ3H88"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
    <?php echo $__env->make('partials.header', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
    <div class="layout-container">
    <div class="lookk"> 
<div class="content-area">
    <div class='layouts wrapper '>
    
        <div class='layouts-inner'>
        
            <div class='col-2'>
                <main class='main wrapper'>

                    <div class='layout-3 section' id='layout-3' name='Main Layout'>
                        <div class='widget Blog' data-version='2' id='Blog1'>
                        
                            <div class='widget-content'>
                            
                                <div class='posts'>
                                    <article class='post'>
                                        <div class='post-header'>
                                            <div class='headerDetails'>
                                                <nav class='breadcrumb'>
                                                    <span class='backHome'><a href='<?php echo e(url('/')); ?>'>Home</a></span>
                                                    <span class='postCat' data-cat='<?php echo e($category->term); ?>'><a
                                                            href='<?php echo e(route('category.show', $category->term)); ?>'><?php echo e($category->term); ?></a></span>
                                                </nav>
                                                

                                                <h1 class='postTitle'><?php echo e($post->title); ?>

                                                </h1>
                                                <div class='postMeta'>
                                                    <div class='postAuthorAndTimestamp'>
                                                        <span class='authorImage'>
                                                            <span class='hasImage'
                                                                data-style='<?php echo e(asset(Storage::url($post->author->image_url))); ?>'></span>
                                                        </span>
                                                        <span class='postAuthorAndDate'>
                                                            <span class='postAuthor'>
                                                                <?php echo e($post->author->name); ?> 
                                                            </span>
                                                            <span class='postDate'>
                                                                <time class='published'
                                                                    datetime='<?php echo e($post->published_at->toIso8601String()); ?>'></time>
                                                                <span class='published' style="
    margin-left: 4px;
"
                                                                    >  | <?php echo e($post->views); ?>  views</span>
                                                            </span>
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                            

                                        </div>
                                        <div class='post-inner col-2'>
                                            <div class='postArticle'>
                                                <div class='articleBody' id='articleBody' style="font-size:large;">
                                                    <div class="separator" style="clear: both; text-align: center;"><a
                                                            href="<?php echo e(asset(Storage::url($post->thumbnail_url))); ?>"
                                                            style="margin-left: 1em; margin-right: 1em;"><img border="0"
                                                                data-original-height="1600" data-original-width="1600"
                                                                height="640"
                                                                src="<?php echo e(asset(Storage::url($post->thumbnail_url))); ?>"
                                                                alt="<?php echo e($post->title); ?> | The Evident"
                                                                width="640" /></a></div>
                                                    <div class="separator" style="clear: both; text-align: center;">
                                                        <br />
                                                    </div>
                                                <?php
    // Render markdown → HTML (already sanitized)
    $content = str($post->content);

    /*
    Normalize paragraph boundaries:
    1) Convert <br><br> (or <br /><br /> etc.) into </p><p>
    2) Ensure content is wrapped with <p>...</p>
    3) Remove empty paragraphs
    */

    // Step 1: normalize <br><br> to paragraph breaks
    $normalized = preg_replace(
        '#(<br\s*/?>\s*){2,}#i',
        '</p><p>',
        $content
    );

    // Step 2: ensure opening <p> at start
    if (!str_starts_with(trim($normalized), '<p')) {
        $normalized = '<p>' . $normalized;
    }

    // Step 3: ensure closing </p> at end
    if (!str_ends_with(trim($normalized), '</p>')) {
        $normalized .= '</p>';
    }

    // Step 4: remove empty paragraphs
    $normalized = preg_replace('#<p>\s*</p>#', '', $normalized);

    // Split into paragraphs
    $paragraphs = array_values(array_filter(explode('</p>', $normalized)));
    $paraCount  = count($paragraphs);

    // Ad placement logic
    $firstAdIndex  = null;
    $secondAdIndex = null;
    $showAdAfterContent = false;

    if ($paraCount <= 2) {
        $showAdAfterContent = true;

    } elseif ($paraCount < 10) {
        $firstAdIndex = 2; // after 3rd paragraph

    } else {
        $firstAdIndex  = 2;              // after 3rd paragraph
        $secondAdIndex = $paraCount - 3; // 2 paragraphs before end
    }
?>


<script async
        src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-1814859848368118"
        crossorigin="anonymous"></script>

<?php $__currentLoopData = $paragraphs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $paragraph): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <?php echo $paragraph . '</p>'; ?>


    
    <?php if($index === $firstAdIndex): ?>
        <div style="text-align:center; margin:20px 0;">
            <ins class="adsbygoogle"
                 style="display:block; text-align:center;"
                 data-ad-layout="in-article"
                 data-ad-format="fluid"
                 data-ad-client="ca-pub-1814859848368118"
                 data-ad-slot="1455558603"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    <?php endif; ?>

    
    <?php if(!is_null($secondAdIndex) && $index === $secondAdIndex): ?>
        <div style="text-align:center; margin:20px 0;">
            <ins class="adsbygoogle"
                 style="display:block; text-align:center;"
                 data-ad-layout="in-article"
                 data-ad-format="fluid"
                 data-ad-client="ca-pub-1814859848368118"
                 data-ad-slot="8585642344"></ins>
            <script>
                (adsbygoogle = window.adsbygoogle || []).push({});
            </script>
        </div>
    <?php endif; ?>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<?php if($showAdAfterContent): ?>
    <div style="text-align:center; margin:30px 0;">
        <ins class="adsbygoogle"
             style="display:block; text-align:center;"
             data-ad-layout="in-article"
             data-ad-format="fluid"
             data-ad-client="ca-pub-1814859848368118"
             data-ad-slot="1455558603"></ins>
        <script>
            (adsbygoogle = window.adsbygoogle || []).push({});
        </script>
    </div>
<?php endif; ?>



                                                </div>
                                                <div class='postLabels'>
                                                    <a class='labelName' data-cat='<?php echo e($category->term); ?>'
                                                        href='<?php echo e(route('category.show', $category->term)); ?>'
                                                        rel='tag'><?php echo e($category->term); ?></a>
                                                </div>
                                            </div>
                                            <div class='postShare sticky'>
                                                <ul>



                                                    <?php
                                                        $url = request()->fullUrl();
                                                        $title = urlencode($post->title ?? ''); // Fallback in case title is missing
                                                        $cat = $post->category->term;
                                                        $authorName = $post->author->name;
                                                    ?>

                                                   <li class='hasIcon whatsapp visible'>
    <a href="whatsapp://send?text=<?php echo e($url); ?>%0A%0A
*_<?php echo e($cat); ?>_* --- *<?php echo e($post->title); ?>* _By <?php echo e($authorName); ?>_%0A%0A
<?php echo e(urlencode(Str::limit(strip_tags($post->content), 180))); ?>...%0A%0A
👉 Read more: <?php echo e($url); ?>%0A%0A
📸 Instagram: https://www.instagram.com/evidentmonthly/%0A
📢 WhatsApp Channel: https://whatsapp.com/channel/0029VbBJ4peFsn0WkH2vFJ0V"
        onclick="window.open(this.href, 'windowName', 'width=600,height=400,left=24,top=24,scrollbars,resizable'); return false;"
        rel="nofollow noopener noreferrer"
        target="_blank"
        title="Share to WhatsApp">
        <span>WhatsApp</span>
    </a>
</li>



                                                   
                                                    <li class='hasIcon facebook-f visible'>
                                                        <a href="https://www.facebook.com/sharer.php?u=<?php echo e($url); ?>&title=<?php echo e($title); ?>"
                                                            onclick="window.open(this.href, 'windowName', 'width=600,height=400,left=24,top=24,scrollbars,resizable'); return false;"
                                                            rel="nofollow noopener noreferrer" target="_blank"
                                                            title="Share to Facebook">
                                                            <span>Facebook</span>
                                                        </a>
                                                    </li>

                                                    <li class='hasIcon twitter visible'>
                                                        <a href="https://twitter.com/share?url=<?php echo e($url); ?>&title=<?php echo e($title); ?>"
                                                            onclick="window.open(this.href, 'windowName', 'width=600,height=400,left=24,top=24,scrollbars,resizable'); return false;"
                                                            rel="nofollow noopener noreferrer" target="_blank"
                                                            title="Share to Twitter">
                                                            <span>Twitter</span>
                                                        </a>
                                                    </li>

                                                    <li class='hasIcon pinterest-p visible'>
                                                        <a href="https://pinterest.com/pin/create/button/?url=<?php echo e($url); ?>&media=&description=<?php echo e($title); ?>"
                                                            onclick="window.open(this.href, 'windowName', 'width=600,height=400,left=24,top=24,scrollbars,resizable'); return false;"
                                                            rel="nofollow noopener noreferrer" target="_blank"
                                                            title="Share to Pinterest">
                                                            <span>Pinterest</span>
                                                        </a>
                                                    </li>

                                                    <li class='hasIcon linkedin visible'>
                                                        <a href="https://www.linkedin.com/shareArticle?url=<?php echo e($url); ?>&title=<?php echo e($title); ?>"
                                                            onclick="window.open(this.href, 'windowName', 'width=600,height=400,left=24,top=24,scrollbars,resizable'); return false;"
                                                            rel="nofollow noopener noreferrer" target="_blank"
                                                            title="Share to LinkedIn">
                                                            <span>LinkedIn</span>
                                                        </a>
                                                    </li>

                                                    <li class='hasIcon telegram visible'>
                                                        <a href="https://telegram.me/share/url?url=<?php echo e($url); ?>&text=<?php echo e($title); ?>"
                                                            onclick="window.open(this.href, 'windowName', 'width=600,height=400,left=24,top=24,scrollbars,resizable'); return false;"
                                                            rel="nofollow noopener noreferrer" target="_blank"
                                                            title="Share to Telegram">
                                                            <span>Telegram</span>
                                                        </a>
                                                    </li>

                                                    <li class='hasIcon reddit'>
                                                        <a href="https://reddit.com/submit?url=<?php echo e($url); ?>&title=<?php echo e($title); ?>"
                                                            onclick="window.open(this.href, 'windowName', 'width=600,height=400,left=24,top=24,scrollbars,resizable'); return false;"
                                                            rel="nofollow noopener noreferrer" target="_blank"
                                                            title="Share to Reddit">
                                                            <span>Reddit</span>
                                                        </a>
                                                    </li>

                                                   

                                                    <li class='hasIcon email'>
                                                        <a href="mailto:?subject=<?php echo e($title); ?>&body=<?php echo e($url); ?>"
                                                            rel="nofollow noopener noreferrer" target="_blank"
                                                            title="Email">
                                                            <span>Email</span>
                                                        </a>
                                                    </li>

                                                    <li class='showMore visible'>
                                                        <a data-icon="plus" href="#showmore"
                                                            role="button"><span>More</span></a>
                                                    </li>

                                                </ul>
                                            </div>
                                        </div>
                                        <footer class='postFooter'>
                                            <div class='widget authorProfile'>
                                                <div class='authorHead'>
                                                    <div class='authorImage'>
                                                        <span class='hasImage'
                                                            data-style='<?php echo e(Storage::url($post->author->image_url)); ?>'></span>
                                                    </div>
                                                    <span class='authorName'>Posted
                                                        by<strong><?php echo e($post->author->name); ?></strong></span>
                                                </div>
                                                <div class='authorDesc'>
                                                    <p class='authorAbout'><?php echo e($post->author->about); ?>

                                                        <a data="email" href="mailto:<?php echo e($post->author->email); ?>"></a>
                                                    </p>
                                                </div>
                                            </div>
                                            <div class='widget related-posts'>
                                                <div class='widget-heading'>
                                                    <h3 class='title'>Related Posts</h3>
                                                </div>
                                                <div class='widget-content' data-fetch='grid-8[Living]3'>
                                                </div>
                                            </div>
                                        </footer>
                                    </article>
                                   
                                </div>
                                <script type='text/javascript'>
                                    var postMeta = { date: !0, author: !0 }
                                </script>
                            </div>
                        </div>
                    </div>
                </main>
                <aside class='aside wrapper'>
                    <div class='sidebar-1 sidebar section' id='sidebar-1' name='Sidebar [Post]'>
                        <div class='widget HTML' data-version='2' id='HTML5'>
                            <div class='widget-heading'>
                                <h3 class='title'>
                                    <?php echo e($category->term); ?>

                                </h3>
                            </div>
                            <div class='widget-content' data-fetch='sided-1[<?php echo e($category->scheme); ?>]4'>
                                <span class='loader'><i></i><i></i><i></i><i></i></span>
                            </div>
                        </div>
                    </div>
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


    <script type="text/javascript" src="<?php echo e(asset('show.js')); ?>"></script>
    </script>
</body>

</html><?php /**PATH /var/www/5a5b779e-2ce1-449e-8f4f-cde8aa60fa21/resources/views/show.blade.php ENDPATH**/ ?>