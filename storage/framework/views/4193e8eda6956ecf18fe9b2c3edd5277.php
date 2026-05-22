<div class='settings section' id='settings' name='Settings'>
            <div class='widget ContactForm' data-version='2' id='ContactForm1'>
                  <div class='widget-content contact-form-widget'>
                        <div class='form'>
                              <form name='contact-form'>
                                    <input class='contact-form-name' id='ContactForm1_contact-form-name' name='name'
                                          placeholder='Name' size='30' type='text' value='' />
                                    <input class='contact-form-email' id='ContactForm1_contact-form-email' name='email'
                                          placeholder='Email*' size='30' type='text' value='' />
                                    <textarea class='contact-form-email-message' cols='25'
                                          id='ContactForm1_contact-form-email-message' name='email-message'
                                          placeholder='Message*' rows='5'></textarea>
                                    <input class='contact-form-button contact-form-button-submit'
                                          id='ContactForm1_contact-form-submit' type='button' value='Send' />
                                    <p class='contact-form-error-message' id='ContactForm1_contact-form-error-message'>
                                    </p>
                                    <p class='contact-form-success-message'
                                          id='ContactForm1_contact-form-success-message'></p>
                              </form>
                        </div>
                  </div>
            </div>
            <div class='widget LinkList' data-version='2' id='LinkList200'>
                  <style>
                      
                  </style>
                  <style type='text/css'>
                  <?php
                        $solidColors = [
                              '#e74c3c', // red
                              '#3498db', // blue
                              '#2ecc71', // green
                              '#f1c40f', // yellow
                              '#9b59b6', // purple
                              '#e67e22', // orange
                              '#1abc9c', // teal
                              '#34495e', // dark blue
                              '#d35400', // dark orange
                              '#7f8c8d', // grey
                        ];
                  ?>

                  <?php $__currentLoopData = $topCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $index => $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php
                              $color = $solidColors[$index % count($solidColors)];
                        ?>
                        [data-cat="<?php echo e($category->term); ?>"] a {
                              background-color: <?php echo e($color); ?>;
                        }
                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                      

                        [data-type="iconList"] .list.hasIcons .linkedin a {
                              background-image: linear-gradient(to bottom, #0f4a60 0%, #218fb9 100%)
                        }

                        [data-type="iconList"] .cloud.hasIcons .linkedin a:before {
                              background-image: linear-gradient(to bottom, #0f4a60 0%, #218fb9 100%)
                        }

                        [data-type="iconList"] .cloud.hasIcons .linkedin .icon-meta {
                              color: #218fb9
                        }
                  </style>
            </div>
            <div class='widget LinkList' data-version='2' id='LinkList201'>
                  <style type='text/css'>
                        .tiktok a:before {
                              content: "\e07b"
                        }

                        .pinterest a:before {
                              content: "\f231"
                        }

                        .twitch a:before {
                              content: "\f1e8"
                        }

                        .github a:before {
                              content: "\f09b"
                        }
                  </style>
            </div>
            <div class='widget LinkList' data-version='2' id='LinkList202'>
                  <script type='text/javascript'>
                        var propData = {

                              darkLogo: "<?php echo e(asset('logodark1.png')); ?>",

                        }
                  </script>
            </div>
      </div>
      <div class='offCanvas wrapper'>
            <div class='offCanvas-inner'>
                  <div class='canvas-1 section' id='canvas-1' name='offCanvas [mobile]'>

                        
                        <div class='widget LinkList' data-version='2' id='LinkList5'>
                              <ul class='list' role='navigation'>
                                    <?php $__currentLoopData = $topCategories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                            <li>
                                                                    <a href='<?php echo e(route('category.show', $category->term)); ?>'><?php echo e(ucfirst(trim($category->term))); ?>

                                                                    </a>

                                                            </li>
                                                      <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                     
                                    <li><a href='<?php echo e(route('about')); ?>'>ABOUT US</a></li>
                                    <li><a href='<?php echo e(route('contact')); ?>'>CONTACT</a></li>
                              </ul>
                        </div>
                  </div>
                  <div class='canvas-2 sidebar section' id='canvas-2' name='offCanvas [global]'>
                        

                        <div class='widget Image' data-version='2' id='Image1'>
                              <div class='widget-content hasLogo'>
                                    <a class='logo' href='<?php echo e(url('/')); ?>'>
                                          <img alt='The Evident' height='84' id='Image1_img'
                                                src='<?php echo e(asset('logocolor1.png')); ?>' width='132' />
                                    </a>
                                    <ul data-option='{"phone": "+91 95442 00467","email": "civilizationhasanath@gmail.com", "location": "Niduvat, Kannadiparamba, P. O. Narath Kannur District, Kerala, India"}'>
                                          
                                    </ul>
                              </div>
                        </div>
                  </div>
            </div>
      </div>
      <div class='searchForm wrapper'>
            <span data-icon='close' role='button' aria-label="Close search form"></span>
            <div class='searchForm-inner'>
                  <form action='/search' method='get'>
                        <input autocomplete='off' name='q' placeholder='Enter keyword...' type='text' value='' />
                        <input type='submit' value='Search' />
                  </form>
                  <div class='searchForm-results'></div>
            </div>
      </div>
      <header class='header wrapper'>
            <div class='header-inner'>
                  <div class='header-mainbar-overlay'>
                        <div class='header-mainbar section' id='header-mainbar' name='Header Main Bar'>
                              <div class='widget LinkList' data-type='iconList' data-version='2' id='LinkList2'>
                                    <nav aria-label="Category navigation">
                                    <ul class='cloud' role='navigation'>
                                          <li class='hasIcon grid'>
                                                <a href='#' target='_blank'>
                                                      <svg viewBox='0 0 18 18' xmlns='http://www.w3.org/2000/svg'>
                                                            <rect fill='currentColor' height='7' rx='3' ry='3'
                                                                  stroke='none' width='7' x='1' y='1'></rect>
                                                            <rect fill='currentColor' height='7' rx='3' ry='3'
                                                                  stroke='none' width='7' x='1' y='11'></rect>
                                                            <rect fill='currentColor' height='7' rx='3' ry='3'
                                                                  stroke='none' width='7' x='11' y='1'></rect>
                                                            <rect fill='currentColor' height='7' rx='3' ry='3'
                                                                  stroke='none' width='7' x='11' y='11'></rect>
                                                      </svg>
                                                </a>
                                          </li>
                                    </ul>
                                    </nav>

                              </div>
                              <div class='widget Header' data-version='2' id='Header1'>
                                    <a class='logo' href='<?php echo e(url('/')); ?>'>
                                          <img alt='The Evident' height='84' src='<?php echo e(asset('logocolor1.png')); ?>'
                                                title='The Evident' width='132' />
                                    </a>
                              </div>
                              <div class='widget LinkList' data-version='2' id='LinkList1'>
                                    <ul class='cloud' role='navigation'>
                                        
                                                               <li class="hasMenu" hidden>
                                                                    <a href="#">News</a>
                                                                        <ul class="subMenu">
                                                                            <li class="subItem">
                                                                                <a href="#df">Gaming</a>
                                                                            </li>
                                                                            <li class="subItem">
                                                                                <a href="#dfdf">Tech</a>
                                                                            </li>
                                                                        </ul>
                                                                </li>
                                                                <?php $__currentLoopData = $sections; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $section): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <li class="hasMenu">
        <a href="<?php echo e(route('section.show', $section->slug)); ?>">
            <?php echo e($section->name); ?>

        </a>

        <?php if($section->categories->count()): ?>
            <ul class="subMenu">
                <?php $__currentLoopData = $section->categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <li class="subItem">
                        <a href="<?php echo e(route('category.show', $category->term)); ?>">
                            <?php echo e($category->term); ?>

                        </a>
                    </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
        <?php endif; ?>

    </li>
<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

                                          <li><a href='<?php echo e(route('about')); ?>'>About</a></li>
                                          <li><a href='<?php echo e(route('contact')); ?>'>Contact</a></li>
                                    </ul>
                              </div>
                              <div class='widget LinkList' data-type='iconList' data-version='2' id='LinkList7'>
                                    <ul class='cloud' role='navigation'>
                                          <li class='hasIcon instagram'>
                                                <a href='https://www.instagram.com/civilization_hasanath/' target='_blank'>
                                                      <span class='icon-meta'>500+</span>
                                                </a>
                                          </li>
                                          
                                          <li class='hasIcon search'>
                                                <a href='#' target='_blank'>
                                                      <svg fill='none' stroke='currentColor' stroke-width='3px'
                                                            viewBox='0 0 24 24'>
                                                            <g transform='translate(2.000000, 2.000000)'>
                                                                  <circle cx='9.76659044' cy='9.76659044' r='8.9885584'>
                                                                  </circle>
                                                                  <line x1='16.0183067' x2='19.5423342' y1='16.4851259'
                                                                        y2='20.0000001'></line>
                                                            </g>
                                                      </svg>
                                                </a>
                                          </li>
                                    </ul>
                              </div>
                        </div>
                  </div>
                  <div class='header-childbar no-items section' id='header-childbar' name='Header Child Bar'></div>
            </div>
      </header><?php /**PATH /var/www/5a5b779e-2ce1-449e-8f4f-cde8aa60fa21/resources/views/partials/header.blade.php ENDPATH**/ ?>