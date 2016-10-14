<!-- Header
============================================= -->
<header id="header" class="full-header transparent-header" data-sticky-class="not-dark">

  <div id="header-wrap">

    <div class="container clearfix">

      <div id="primary-menu-trigger"><i class="icon-reorder"></i></div>

      <!-- Logo
      ============================================= -->
      <div id="logo">
        <a href="{{ url('/') }}" class="standard-logo" data-dark-logo="{{ asset ('assets/index/images/logo-dark.png')}}"><img src="{{ asset ('assets/index/images/logo.png')}}" alt="Canvas Logo"></a>
        <a href="{{ url('/') }}" class="retina-logo" data-dark-logo="{{asset('assets/index/images/logo-dark@2x.png')}}"><img src="{{ asset('assets/index/images/logo@2x.png') }}" alt="Canvas Logo"></a>
      </div><!-- #logo end -->

      <!-- Primary Navigation
      ============================================= -->
      <nav id="primary-menu" class="not-dark">

        <ul>
          <li><a href="{{ url('/') }}"><div>Home</div></a>
            <ul>
              <li><a href="{{ url('/') }}"><div>Home - Corporate</div></a>
                <ul>
                  <li><a href="{{ url('/') }}"><div>Corporate - Layout 1</div></a></li>
                  <li><a href="{{ url('/') }}"><div>Corporate - Layout 2</div></a></li>
                  <li><a href="{{ url('/') }}"><div>Corporate - Layout 3</div></a></li>
                  <li><a href="{{ url('/') }}"><div>Corporate - Layout 4</div></a></li>
                </ul>
              </li>
              <li><a href="{{ url('/') }}"><div>Home - Portfolio</div></a>
                <ul>
                  <li><a href="{{ url('/') }}"><div>Portfolio - Layout 1</div></a></li>
                  <li><a href="{{ url('/') }}"><div>Portfolio - Layout 2</div></a></li>
                  <li><a href="{{ url('/') }}"><div>Portfolio - Masonry</div></a></li>
                  <li><a href="{{ url('/') }}"><div>Portfolio - AJAX</div></a></li>
                </ul>
              </li>
              <li><a href="{{ url('/') }}"><div>Home - Blog</div></a>
                <ul>
                  <li><a href="{{ url('/') }}"><div>Blog - Layout 1</div></a></li>
                  <li><a href="{{ url('/') }}"><div>Blog - Layout 2</div></a></li>
                  <li><a href="{{ url('/') }}"><div>Blog - Layout 3</div></a></li>
                </ul>
              </li>
              <li><a href="{{ url('/') }}"><div>Home - Shop</div></a>
                <ul>
                  <li><a href="{{ url('/') }}"><div>Shop - Layout 1</div></a></li>
                  <li><a href="{{ url('/') }}"><div>Shop - Layout 2</div></a></li>
                </ul>
              </li>
              <li><a href="{{ url('/') }}"><div>Home - Magazine</div></a>
                <ul>
                  <li><a href="{{ url('/') }}"><div>Magazine - Layout 1</div></a></li>
                  <li><a href="{{ url('/') }}"><div>Magazine - Layout 2</div></a></li>
                  <li><a href="{{ url('/') }}"><div>Magazine - Layout 3</div></a></li>
                </ul>
              </li>
              <li><a href="landing.html"><div>Home - Landing Page</div></a>
                <ul>
                  <li><a href="landing.html"><div>Landing Page - Layout 1</div></a></li>
                  <li><a href="landing-2.html"><div>Landing Page - Layout 2</div></a></li>
                  <li><a href="landing-3.html"><div>Landing Page - Layout 3</div></a></li>
                  <li><a href="landing-4.html"><div>Landing Page - Layout 4</div></a></li>
                  <li><a href="landing-5.html"><div>Landing Page - Layout 5</div></a></li>
                </ul>
              </li>
              <li><a href="index-fullscreen-image.html"><div>Home - Full Screen</div></a>
                <ul>
                  <li><a href="index-fullscreen-image.html"><div>Full Screen - Image</div></a></li>
                  <li><a href="index-fullscreen-slider.html"><div>Full Screen - Slider</div></a></li>
                  <li><a href="index-fullscreen-video.html"><div>Full Screen - Video</div></a></li>
                </ul>
              </li>
              <li><a href="index-onepage.html"><div>Home - One Page</div></a>
                <ul>
                  <li><a href="index-onepage.html"><div>One Page - Default</div></a></li>
                  <li><a href="index-onepage-2.html"><div>One Page - Submenu</div></a></li>
                  <li><a href="index-onepage-3.html"><div>One Page - Dots Style</div></a></li>
                </ul>
              </li>
              <li><a href="index-wedding.html"><div>Home - Wedding</div></a></li>
              <li><a href="index-restaurant.html"><div>Home - Restaurant</div></a></li>
              <li><a href="index-events.html"><div>Home - Events</div></a></li>
              <li><a href="index-parallax.html"><div>Home - Parallax</div></a></li>
              <li><a href="index-app-showcase.html"><div>Home - App Showcase</div></a></li>
              <li><a href="index-boxed.html"><div>Home - Boxed Layout</div></a></li>
            </ul>
          </li>
          <li class="mega-menu"><a href="#"><div>Contact</div></a>
            <div class="mega-menu-content style-2 clearfix">
              <ul class="mega-menu-column col-md-3">
                <li>
                  <div class="widget visible-lg visible-md clearfix">

                    <h4>Our Location</h4>

                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d201717.45988409253!2d144.81557611671303!3d-37.81732634202082!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x6ad65d4c2b349649%3A0xb6899234e561db11!2sEnvato!5e0!3m2!1sen!2sin!4v1456564509271" width="600" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>

                  </div>
                </li>
              </ul>
              <ul class="mega-menu-column col-md-6">
                <li>
                  <div class="widget clearfix">

                    <h4>Send us a Quick Email</h4>

                    <div class="contact-widget" data-loader="button">
                      <div class="contact-form-result"></div>

                      <form class="nobottommargin" name="template-contactform" action="include/sendemail.php" method="post">

                        <div class="col_half">
                          <div class="col_full">
                            <input type="text" name="template-contactform-name" value="" class="form-control required" placeholder="Name" />
                          </div>
                          <div class="col_full">
                            <input type="email" name="template-contactform-email" value="" class="required email form-control" placeholder="Email" />
                          </div>
                          <div class="col_full nobottommargin">
                            <input type="text" name="template-contactform-phone" value="" class="form-control" placeholder="Phone" />
                          </div>
                        </div>

                        <div class="col_half col_last">
                          <div class="col_full">
                            <input type="text" name="template-contactform-subject" value="" class="required form-control" placeholder="Subject" />
                          </div>
                          <textarea class="required form-control" name="template-contactform-message" rows="4" cols="30" placeholder="Enter your Message"></textarea>
                        </div>

                        <div class="clear"></div>

                        <div class="col_full hidden">
                          <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="form-control" />
                        </div>

                        <div class="col_full">
                          <button class="button button-3d button-small nomargin" type="submit" id="template-contactform-submit" name="template-contactform-submit" value="submit">Send Message</button>
                        </div>

                      </form>
                    </div>

                  </div>
                </li>
              </ul>
              <ul class="mega-menu-column col-md-3">
                <li>
                  <div class="widget clearfix">

                    <h4>Our Headquarters</h4>

                    <address>
                      <strong>Address:</strong><br>
                      795 Folsom Ave, Suite 600<br>
                      San Francisco, CA 94107<br>
                      Melbourne, Australia<br>
                    </address>
                    <abbr title="Phone Number"><strong>Phone:</strong></abbr> (91) 8547 632521<br>
                    <abbr title="Fax"><strong>Fax:</strong></abbr> (91) 11 4752 1433<br>
                    <abbr title="Email Address"><strong>Email:</strong></abbr> info@canvas.com

                    <div class="bottommargin-sm"></div>

                    <a href="#" class="social-icon si-small si-colored si-facebook" title="Facebook">
                      <i class="icon-facebook"></i>
                      <i class="icon-facebook"></i>
                    </a>
                    <a href="#" class="social-icon si-small si-colored si-twitter" title="Twitter">
                      <i class="icon-twitter"></i>
                      <i class="icon-twitter"></i>
                    </a>
                    <a href="#" class="social-icon si-small si-colored si-github" title="Github">
                      <i class="icon-github"></i>
                      <i class="icon-github"></i>
                    </a>
                    <a href="#" class="social-icon si-small si-colored si-instagram" title="Instagram">
                      <i class="icon-instagram"></i>
                      <i class="icon-instagram"></i>
                    </a>
                    <a href="#" class="social-icon si-small si-colored si-flickr" title="Flickr">
                      <i class="icon-flickr"></i>
                      <i class="icon-flickr"></i>
                    </a>
                    <a href="#" class="social-icon si-small si-colored si-skype" title="Skype">
                      <i class="icon-skype"></i>
                      <i class="icon-skype"></i>
                    </a>

                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="mega-menu"><a href="#"><div>Pages</div></a>
            <div class="mega-menu-content style-2 clearfix">
              <ul class="mega-menu-column col-md-3">
                <li>
                  <div class="widget clearfix">

                    <iframe src="https://player.vimeo.com/video/136249183" width="500" height="281" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>

                    <p class="topmargin-sm nobottommargin">Fully Widgetized Mega Menus with the Ability to add Multiple Mixed Columns and Variable Content. You can use Images, Videos, Embedded Maps or Carousels along with Fully Functional Forms.</p>

                  </div>
                </li>
              </ul>
              <ul class="mega-menu-column col-md-2">
                <li class="mega-menu-title"><a href="#"><div>Introduction</div></a>
                  <ul>
                    <li><a href="about.html"><div>About Us</div></a></li>
                    <li><a href="about-2.html"><div>About Us - Layout 2</div></a></li>
                    <li><a href="about-me.html"><div>About Me</div></a></li>
                    <li><a href="team.html"><div>Team Members</div></a></li>
                    <li><a href="jobs.html"><div>Careers</div></a></li>
                    <li><a href="side-navigation.html"><div>Side Navigation</div></a></li>
                    <li><a href="page-submenu.html"><div>Page Submenu</div></a></li>
                    <li><a href="sitemap.html"><div>Sitemap</div></a></li>
                  </ul>
                </li>
              </ul>
              <ul class="mega-menu-column col-md-2">
                <li class="mega-menu-title"><a href="#"><div>Utility</div></a>
                  <ul>
                    <li><a href="services.html"><div>Services - Layout 1</div></a></li>
                    <li><a href="services-2.html"><div>Services - Layout 2</div></a></li>
                    <li><a href="services-3.html"><div>Services - Layout 3</div></a></li>
                    <li><a href="faqs.html"><div>FAQs - Layout 1</div></a></li>
                    <li><a href="faqs-2.html"><div>FAQs - Layout 2</div></a></li>
                    <li><a href="faqs-3.html"><div>FAQs - Layout 3</div></a></li>
                    <li><a href="faqs-4.html"><div>FAQs - Layout 4</div></a></li>
                    <li><a href="maintenance.html"><div>Maintenance Page</div></a></li>
                  </ul>
                </li>
              </ul>
              <ul class="mega-menu-column col-md-2">
                <li class="mega-menu-title"><a href="#"><div>Layout Grids</div></a>
                  <ul>
                    <li><a href="full-width.html"><div>Full Width</div></a></li>
                    <li><a href="full-width-wide.html"><div>Full Width - Wide</div></a></li>
                    <li><a href="right-sidebar.html"><div>Right Sidebar</div></a></li>
                    <li><a href="left-sidebar.html"><div>Left Sidebar</div></a></li>
                    <li><a href="both-sidebar.html"><div>Both Sidebar</div></a></li>
                    <li><a href="both-right-sidebar.html"><div>Both Right Sidebar</div></a></li>
                    <li><a href="both-left-sidebar.html"><div>Both Left Sidebar</div></a></li>
                    <li><a href="blank-page.html"><div>Blank Page</div></a></li>
                  </ul>
                </li>
              </ul>
              <ul class="mega-menu-column col-md-3">
                <li>
                  <div class="widget clearfix">

                    <h4>Login to your Account</h4>

                    <form id="login-form" name="login-form" class="nobottommargin" action="#" method="post">

                      <div class="col_full">
                        <label for="login-form-username">Username or Email:</label>
                        <input type="text" id="login-form-username" name="login-form-username" value="" class="form-control" />
                      </div>

                      <div class="col_full">
                        <label for="login-form-password">Password:</label>
                        <input type="password" id="login-form-password" name="login-form-password" value="" class="form-control" />
                      </div>

                      <div class="col_full nobottommargin">
                        <button class="button button-3d button-black nomargin" id="login-form-submit" name="login-form-submit" value="login">Login</button>
                        <a href="#" class="fright">Forgot Password?</a>
                      </div>

                    </form>

                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="mega-menu"><a href="#"><div>Portfolio</div></a>
            <div class="mega-menu-content style-2 clearfix">
              <ul class="mega-menu-column col-md-12">
                <li>
                  <div class="widget clearfix">

                    <!-- Portfolio Items
                    ============================================= -->
                    <div class="portfolio portfolio-5 clearfix">

                      <article class="portfolio-item pf-media pf-icons">
                        <div class="portfolio-image">
                          <a href="portfolio-single.html">
                            <img src="{{ asset ('assets/index/images/portfolio/4/1.jpg')}}" alt="Open Imagination">
                          </a>
                          <div class="portfolio-overlay">
                            <a href="{{asset('assets/index/images/portfolio/full/1.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                            <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                          </div>
                        </div>
                        <div class="portfolio-desc">
                          <h3><a href="portfolio-single.html">Open Imagination</a></h3>
                          <span><a href="#">Media</a>, <a href="#">Icons</a></span>
                        </div>
                      </article>

                      <article class="portfolio-item pf-graphics pf-uielements">
                        <div class="portfolio-image">
                          <a href="#">
                            <img src="{{asset('assets/index/images/portfolio/4/3.jpg')}}" alt="Mac Sunglasses">
                          </a>
                          <div class="portfolio-overlay">
                            <a href="http://vimeo.com/89396394" class="left-icon" data-lightbox="iframe"><i class="icon-line-play"></i></a>
                            <a href="portfolio-single-video.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                          </div>
                        </div>
                        <div class="portfolio-desc">
                          <h3><a href="portfolio-single-video.html">Mac Sunglasses</a></h3>
                          <span><a href="#">Graphics</a>, <a href="#">UI Elements</a></span>
                        </div>
                      </article>

                      <article class="portfolio-item pf-icons pf-illustrations">
                        <div class="portfolio-image">
                          <a href="portfolio-single.html">
                            <img src="{{asset('assets/index/images/portfolio/4/4.jpg')}}" alt="Morning Dew">
                          </a>
                          <div class="portfolio-overlay">
                            <a href="{{asset('assets/index/images/portfolio/full/6.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                            <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                          </div>
                          <div class="portfolio-overlay" data-lightbox="gallery">
                            <a href="{{asset('assets/index/images/portfolio/full/4.jpg')}}" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                            <a href="{{asset('assets/index/images/portfolio/full/4-1.jpg')}}" class="hidden" data-lightbox="gallery-item"></a>
                            <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                          </div>
                        </div>
                        <div class="portfolio-desc">
                          <h3><a href="portfolio-single-gallery.html">Morning Dew</a></h3>
                          <span><a href="#">Icons</a>, <a href="#">Illustrations</a></span>
                        </div>
                      </article>

                      <article class="portfolio-item pf-uielements pf-media">
                        <div class="portfolio-image">
                          <a href="portfolio-single.html">
                            <img src="{{asset('assets/index/images/portfolio/4/5.jpg')}}" alt="Console Activity ">
                          </a>
                          <div class="portfolio-overlay">
                            <a href="{{asset('assets/index/images/portfolio/full/5.jpg')}}" class="left-icon" data-lightbox="image"><i class="icon-line-plus"></i></a>
                            <a href="portfolio-single.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                          </div>
                        </div>
                        <div class="portfolio-desc">
                          <h3><a href="portfolio-single.html">Console Activity</a></h3>
                          <span><a href="#">UI Elements</a>, <a href="#">Media</a></span>
                        </div>
                      </article>

                      <article class="portfolio-item pf-graphics pf-illustrations">
                        <div class="portfolio-image">
                          <a href="portfolio-single.html">
                            <img src="{{asset('assets/index/images/portfolio/4/6.jpg')}}" alt="Shake It!">
                          </a>
                          <div class="portfolio-overlay" data-lightbox="gallery">
                            <a href="{{asset('assets/index/images/portfolio/full/6.jpg')}}" class="left-icon" data-lightbox="gallery-item"><i class="icon-line-stack-2"></i></a>
                            <a href="{{asset('assets/index/images/portfolio/full/6-1.jpg')}}" class="hidden" data-lightbox="gallery-item"></a>
                            <a href="{{asset('assets/index/images/portfolio/full/6-2.jpg')}}" class="hidden" data-lightbox="gallery-item"></a>
                            <a href="{{asset('assets/index/images/portfolio/full/6-3.jpg')}}" class="hidden" data-lightbox="gallery-item"></a>
                            <a href="portfolio-single-gallery.html" class="right-icon"><i class="icon-line-ellipsis"></i></a>
                          </div>
                        </div>
                        <div class="portfolio-desc">
                          <h3><a href="portfolio-single-gallery.html">Shake It!</a></h3>
                          <span><a href="#">Illustrations</a>, <a href="#">Graphics</a></span>
                        </div>
                      </article>

                    </div>

                    <div class="line line-sm"></div>

                    <div class="owl-carousel customjs image-carousel carousel-widget" data-margin="80" data-nav="false" data-pagi="true" data-items-xxs="1" data-items-xs="2" data-items-sm="4" data-items-md="6" data-items-lg="8">

                      <div class="oc-item"><a href="#"><img src="{{ asset ('assets/index/images/clients/1.png') }}" alt="Clients"></a></div>
                      <div class="oc-item"><a href="#"><img src="{{ asset ('assets/index/images/clients/2.png') }}" alt="Clients"></a></div>
                      <div class="oc-item"><a href="#"><img src="{{ asset ('assets/index/images/clients/3.png') }}" alt="Clients"></a></div>
                      <div class="oc-item"><a href="#"><img src="{{ asset ('assets/index/images/clients/4.png') }}" alt="Clients"></a></div>
                      <div class="oc-item"><a href="#"><img src="{{ asset ('assets/index/images/clients/5.png') }}" alt="Clients"></a></div>
                      <div class="oc-item"><a href="#"><img src="{{ asset ('assets/index/images/clients/6.png') }}" alt="Clients"></a></div>
                      <div class="oc-item"><a href="#"><img src="{{ asset ('assets/index/images/clients/7.png') }}" alt="Clients"></a></div>
                      <div class="oc-item"><a href="#"><img src="{{ asset ('assets/index/images/clients/8.png') }}" alt="Clients"></a></div>
                      <div class="oc-item"><a href="#"><img src="{{ asset ('assets/index/images/clients/9.png') }}" alt="Clients"></a></div>
                      <div class="oc-item"><a href="#"><img src="{{ asset ('assets/index/images/clients/10.png') }}" alt="Clients"></a></div>

                    </div>

                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="mega-menu"><a href="#"><div>Blog</div></a>
            <div class="mega-menu-content style-2 clearfix">
              <ul class="mega-menu-column col-md-2">
                <li>
                  <div class="widget clearfix">

                    <h4>Recently Posted</h4>

                    <div class="ipost clearfix">
                      <div class="entry-image">
                        <a href="#"><img class="image_fade" src="{{ asset ('assets/index/images/magazine/thumb/1.jpg') }}" alt="Image"></a>
                      </div>
                      <div class="entry-title">
                        <h3><a href="blog-single.html">Truth About Extreme Budget Travel</a></h3>
                      </div>
                      <ul class="entry-meta clearfix">
                        <li><i class="icon-calendar3"></i> 13th Jun 2014</li>
                        <li><i class="icon-comments"></i> 53</li>
                      </ul>
                    </div>

                  </div>
                </li>
              </ul>
              <ul class="mega-menu-column col-md-3">
                <li>
                  <div class="widget clearfix">

                    <h4>Popular Posts</h4>

                    <div>
                      <div class="spost clearfix">
                        <div class="entry-image">
                          <a href="#" class="nobg"><img class="img-circle" src="{{ asset ('assets/index/images/magazine/small/2.jpg') }}" alt=""></a>
                        </div>
                        <div class="entry-c">
                          <div class="entry-title">
                            <h4><a href="#">Elit Assumenda vel amet dolorum quasi</a></h4>
                          </div>
                          <ul class="entry-meta">
                            <li><i class="icon-comments-alt"></i> 24 Comments</li>
                          </ul>
                        </div>
                      </div>

                      <div class="spost clearfix">
                        <div class="entry-image">
                          <a href="#" class="nobg"><img class="img-circle" src="{{ asset ('assets/index/images/magazine/small/1.jpg') }}" alt=""></a>
                        </div>
                        <div class="entry-c">
                          <div class="entry-title">
                            <h4><a href="#">Lorem ipsum dolor sit amet, consectetur</a></h4>
                          </div>
                          <ul class="entry-meta">
                            <li><i class="icon-comments-alt"></i> 19 Comments</li>
                          </ul>
                        </div>
                      </div>

                      <div class="spost clearfix">
                        <div class="entry-image">
                          <a href="#" class="nobg"><img class="img-circle" src="{{ asset ('assets/index/images/magazine/small/3.jpg') }}" alt=""></a>
                        </div>
                        <div class="entry-c">
                          <div class="entry-title">
                            <h4><a href="#">Debitis nihil placeat, illum est nisi</a></h4>
                          </div>
                          <ul class="entry-meta">
                            <li><i class="icon-comments-alt"></i> 35 Comments</li>
                          </ul>
                        </div>
                      </div>
                    </div>

                  </div>
                </li>
              </ul>
              <ul class="mega-menu-column col-md-2">
                <li class="mega-menu-title"><a href="#"><div>Categories</div></a>
                  <ul>
                    <li><a href="#"><div><i class="icon-t-shirt"></i>Fashion</div></a></li>
                    <li><a href="#"><div><i class="icon-laptop2"></i>Technology</div></a></li>
                    <li><a href="#"><div><i class="icon-clock2"></i>Lifestyle</div></a></li>
                    <li><a href="#"><div><i class="icon-plane"></i>Travel</div></a></li>
                    <li><a href="#"><div><i class="icon-barbell"></i>Sport</div></a></li>
                    <li><a href="#"><div><i class="icon-heart3"></i>Health</div></a></li>
                    <li><a href="#"><div><i class="icon-film"></i>Videos</div></a></li>
                  </ul>
                </li>
              </ul>
              <ul class="mega-menu-column col-md-2">
                <li class="mega-menu-title"><a href="#"><div>Archives</div></a>
                  <ul>
                    <li><a href="#"><div>January 2016</div></a></li>
                    <li><a href="#"><div>December 2015</div></a></li>
                    <li><a href="#"><div>November 2015</div></a></li>
                    <li><a href="#"><div>October 2015</div></a></li>
                    <li><a href="#"><div>September 2015</div></a></li>
                    <li><a href="#"><div>August 2015</div></a></li>
                    <li><a href="#"><div>July 2015</div></a></li>
                  </ul>
                </li>
              </ul>
              <ul class="mega-menu-column col-md-3">
                <li>
                  <div class="widget clearfix">
                    <div class="alert alert-info nobottommargin">Use Bootstrap Grid to create the Mega Menu Columns which allows you to Flexibly use Mixed Width Columns and Widgets of all Sizes.</div>
                  </div>

                  <div class="widget clearfix">

                    <h4>Tag Cloud</h4>

                    <div class="tagcloud">
                      <a href="#">general</a>
                      <a href="#">videos</a>
                      <a href="#">music</a>
                      <a href="#">media</a>
                      <a href="#">photography</a>
                      <a href="#">parallax</a>
                      <a href="#">ecommerce</a>
                      <a href="#">terms</a>
                      <a href="#">coupons</a>
                      <a href="#">modern</a>
                      <a href="#">clean</a>
                      <a href="#">medical</a>
                      <a href="#">agency</a>
                      <a href="#">travel</a>
                    </div>

                  </div>
                </li>
              </ul>
            </div>
          </li>
          <li class="mega-menu"><a href="shop.html"><div>Shop</div></a>
            <div class="mega-menu-content style-2 clearfix" style="background-image: url('assets/index/images/shop/shop-menu.jpg'); background-repeat: no-repeat; background-position: right bottom;">
              <ul class="mega-menu-column col-lg-2 col-md-3">
                <li>
                  <div class="widget clearfix">

                    <div class="product iproduct clearfix">
                      <div class="product-image">
                        <a href="#"><img src="{{ asset ('assets/index/images/shop/shoes/2-small.jpg') }}" alt="Gray Shoes"></a>
                        <a href="#"><img src="{{ asset ('assets/index/images/shop/shoes/2-2-small.jpg') }}" alt="Gray Shoes"></a>
                        <div class="sale-flash">50% Off*</div>
                        <div class="product-overlay">
                          <a href="#" class="add-to-cart"><i class="icon-shopping-cart"></i><span> Add to Cart</span></a>
                          <a href="include/ajax/shop-item.html" class="item-quick-view" data-lightbox="ajax"><i class="icon-zoom-in2"></i><span> Quick View</span></a>
                        </div>
                      </div>
                      <div class="product-desc nobottompadding center">
                        <div class="product-title"><h3><a href="#">Gray Shoes</a></h3></div>
                        <div class="product-price"><del>$24.99</del> <ins>$12.49</ins></div>
                      </div>
                    </div>

                  </div>
                </li>
              </ul>
              <ul class="mega-menu-column col-md-3">
                <li>
                  <div class="widget clearfix">

                    <h4 class="highlight-me">Last Viewed Items</h4>
                    <div class="widget-last-view">
                      <div class="spost clearfix">
                        <div class="entry-image">
                          <a href="#"><img src="{{ asset ('assets/index/images/shop/small/3.jpg') }}" alt="Image"></a>
                        </div>
                        <div class="entry-c">
                          <div class="entry-title">
                            <h4><a href="#">Round-Neck Tshirt</a></h4>
                          </div>
                          <ul class="entry-meta">
                            <li class="color">$15</li>
                            <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i></li>
                          </ul>
                        </div>
                      </div>

                      <div class="spost clearfix">
                        <div class="entry-image">
                          <a href="#"><img src="{{ asset ('assets/index/images/shop/small/10.jpg') }}" alt="Image"></a>
                        </div>
                        <div class="entry-c">
                          <div class="entry-title">
                            <h4><a href="#">Green Trousers</a></h4>
                          </div>
                          <ul class="entry-meta">
                            <li class="color">$19</li>
                            <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i> <i class="icon-star-empty"></i></li>
                          </ul>
                        </div>
                      </div>

                      <div class="spost clearfix">
                        <div class="entry-image">
                          <a href="#"><img src="{{ asset ('assets/index/images/shop/small/7.jpg') }}" alt="Image"></a>
                        </div>
                        <div class="entry-c">
                          <div class="entry-title">
                            <h4><a href="#">Light Blue Denim Dress</a></h4>
                          </div>
                          <ul class="entry-meta">
                            <li class="color">$19.99</li>
                            <li><i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star3"></i> <i class="icon-star-half-full"></i> <i class="icon-star-empty"></i></li>
                          </ul>
                        </div>
                      </div>
                    </div>

                  </div>
                </li>
              </ul>
              <ul class="mega-menu-column col-md-2">
                <li class="mega-menu-title"><a href="#"><div>Categories</div></a>
                  <ul>
                    <li><a href="#"><div><i class="icon-t-shirt"></i>Men's Shirts</div></a></li>
                    <li><a href="#"><div><i class="icon-laptop2"></i>Women's Accessories</div></a></li>
                    <li><a href="#"><div><i class="icon-clock2"></i>Branded Watches</div></a></li>
                    <li><a href="#"><div><i class="icon-plane"></i>Innerwear &amp; Lingerie</div></a></li>
                    <li><a href="#"><div><i class="icon-barbell"></i>Belts &amp; Backpacks</div></a></li>
                    <li><a href="#"><div><i class="icon-heart3"></i>Gym &amp; Sportswear</div></a></li>
                    <li><a href="#"><div><i class="icon-film"></i>Personal Grooming</div></a></li>
                  </ul>
                </li>
              </ul>
              <ul class="mega-menu-column col-md-2 noleftborder">
                <li class="mega-menu-title"><a href="#"><div>Popular Brands</div></a>
                  <ul>
                    <li><a href="#"><div>United Colors of Benetton</div></a></li>
                    <li><a href="#"><div>Burton Menswear London</div></a></li>
                    <li><a href="#"><div>Calvin Clein Jeans</div></a></li>
                    <li><a href="#"><div>Dorothy Perkins</div></a></li>
                    <li><a href="#"><div>Tommy Hilfiger</div></a></li>
                    <li><a href="#"><div>Gucci</div></a></li>
                    <li><a href="#"><div>Armani</div></a></li>
                  </ul>
                </li>
              </ul>
            </div>
          </li>
          <li class="mega-menu"><a href="#"><div>Shortcodes</div></a>
            <div class="mega-menu-content clearfix">
              <ul class="mega-menu-column col-5">
                <li><a href="animations.html"><div><i class="icon-magic"></i>Animations</div></a></li>
                <li><a href="buttons.html"><div><i class="icon-link"></i>Buttons</div></a></li>
                <li><a href="carousel.html"><div><i class="icon-heart3"></i>Carousel</div></a></li>
                <li><a href="charts.html"><div><i class="icon-bar-chart"></i>Charts</div></a></li>
                <li><a href="clients.html"><div><i class="icon-apple"></i>Clients</div></a></li>
                <li><a href="columns-grids.html"><div><i class="icon-th-large"></i>Columns</div></a></li>
                <li><a href="counters.html"><div><i class="icon-time"></i>Counters</div></a></li>
                <li><a href="component-datatable.html"><div><i class="icon-table"></i>Data Tables</div></a></li>
                <li><a href="component-datepicker.html"><div><i class="icon-calendar3"></i>Date &amp; Time Pickers</div></a></li>
              </ul>
              <ul class="mega-menu-column col-5">
                <li><a href="dividers.html"><div><i class="icon-indent-right"></i>Dividers</div></a></li>
                <li><a href="featured-boxes.html"><div><i class="icon-lightbulb"></i>Icon Boxes</div></a></li>
                <li><a href="gallery.html"><div><i class="icon-picture"></i>Galleries</div></a></li>
                <li><a href="headings-dropcaps.html"><div><i class="icon-pencil2"></i>Heading Styles</div></a></li>
                <li><a href="icon-lists.html"><div><i class="icon-list-alt"></i>Icon Lists</div></a></li>
                <li><a href="labels-badges.html"><div><i class="icon-plus-sign"></i>Labels</div></a></li>
                <li><a href="lightbox.html"><div><i class="icon-resize-full"></i>Lightbox</div></a></li>
                <li><a href="component-editable.html"><div><i class="icon-edit"></i>Editable Fields</div></a></li>
                <li><a href="component-uploads.html"><div><i class="icon-line-upload"></i>File Uploads</div></a></li>
              </ul>
              <ul class="mega-menu-column col-5">
                <li><a href="lists-panels.html"><div><i class="icon-th-list"></i>Lists &amp; Panels</div></a></li>
                <li><a href="maps.html"><div><i class="icon-map-marker2"></i>Maps</div></a></li>
                <li><a href="media-embeds.html"><div><i class="icon-play"></i>Media Embeds</div></a></li>
                <li><a href="modal-popovers.html"><div><i class="icon-move"></i>Modal Boxes</div></a></li>
                <li><a href="navigation.html"><div><i class="icon-align-justify2"></i>Navigations</div></a></li>
                <li><a href="pagination-progress.html"><div><i class="icon-cogs"></i>Pagination</div></a></li>
                <li><a href="pie-skills.html"><div><i class="icon-tasks"></i>Pies &amp; Skills</div></a></li>
                <li><a href="component-range-slider.html"><div><i class="icon-line-move"></i>Range Slider</div></a></li>
                <li><a href="component-ratings.html"><div><i class="icon-star3"></i>Star Ratings</div></a></li>
              </ul>
              <ul class="mega-menu-column col-5">
                <li><a href="pricing.html"><div><i class="icon-dollar"></i>Pricing Boxes</div></a></li>
                <li><a href="process-steps.html"><div><i class="icon-thumbs-up"></i>Process Steps</div></a></li>
                <li><a href="promo-boxes.html"><div><i class="icon-rocket"></i>Promo Boxes</div></a></li>
                <li><a href="quotes-blockquotes.html"><div><i class="icon-quote-left"></i>Blockquotes</div></a></li>
                <li><a href="responsive.html"><div><i class="icon-laptop2"></i>Responsive</div></a></li>
                <li><a href="sections.html"><div><i class="icon-folder-open"></i>Sections</div></a></li>
                <li><a href="social-icons.html"><div><i class="icon-facebook2"></i>Social Icons</div></a></li>
                <li><a href="component-select-picker.html"><div><i class="icon-select"></i>Select Picker</div></a></li>
                <li><a href="component-select-box.html"><div><i class="icon-line-columns"></i>Select Boxes</div></a></li>
              </ul>
              <ul class="mega-menu-column col-5">
                <li><a href="style-boxes.html"><div><i class="icon-exclamation-sign"></i>Alert Boxes</div></a></li>
                <li><a href="styled-icons.html"><div><i class="icon-flag2"></i>Styled Icons</div></a></li>
                <li><a href="tables.html"><div><i class="icon-table"></i>Tables</div></a></li>
                <li><a href="tabs.html"><div><i class="icon-star3"></i>Tabs</div></a></li>
                <li><a href="testimonials-twitter.html"><div><i class="icon-user4"></i>Testimonials</div></a></li>
                <li><a href="thumbnails-slider.html"><div><i class="icon-camera3"></i>Thumbnails</div></a></li>
                <li><a href="toggles-accordions.html"><div><i class="icon-ok-circle"></i>Toggles</div></a></li>
                <li><a href="component-radios-switches.html"><div><i class="icon-line-square-check"></i>Radios &amp; Switches</div></a></li>
                <li><a href="component-typeahead.html"><div><i class="icon-type"></i>Input Typeahead</div></a></li>
              </ul>
            </div>
          </li>
        </ul>

        <!-- Top Cart
        ============================================= -->
        <div id="top-cart">
          <a href="#" id="top-cart-trigger"><i class="icon-shopping-cart"></i><span>5</span></a>
          <div class="top-cart-content">
            <div class="top-cart-title">
              <h4>Shopping Cart</h4>
            </div>
            <div class="top-cart-items">
              <div class="top-cart-item clearfix">
                <div class="top-cart-item-image">
                  <a href="#"><img src="{{ asset ('assets/index/images/shop/small/1.jpg') }}" alt="Blue Round-Neck Tshirt" /></a>
                </div>
                <div class="top-cart-item-desc">
                  <a href="#">Blue Round-Neck Tshirt</a>
                  <span class="top-cart-item-price">$19.99</span>
                  <span class="top-cart-item-quantity">x 2</span>
                </div>
              </div>
              <div class="top-cart-item clearfix">
                <div class="top-cart-item-image">
                  <a href="#"><img src="{{ asset ('assets/index/images/shop/small/6.jpg') }}" alt="Light Blue Denim Dress" /></a>
                </div>
                <div class="top-cart-item-desc">
                  <a href="#">Light Blue Denim Dress</a>
                  <span class="top-cart-item-price">$24.99</span>
                  <span class="top-cart-item-quantity">x 3</span>
                </div>
              </div>
            </div>
            <div class="top-cart-action clearfix">
              <span class="fleft top-checkout-price">$114.95</span>
              <button class="button button-3d button-small nomargin fright">View Cart</button>
            </div>
          </div>
        </div><!-- #top-cart end -->

        <!-- Top Search
        ============================================= -->
        <div id="top-search">
          <a href="#" id="top-search-trigger"><i class="icon-search3"></i><i class="icon-line-cross"></i></a>
          <form action="search.html" method="get">
            <input type="text" name="q" class="form-control" value="" placeholder="Type &amp; Hit Enter..">
          </form>
        </div><!-- #top-search end -->

      </nav><!-- #primary-menu end -->

    </div>

  </div>

</header><!-- #header end -->
