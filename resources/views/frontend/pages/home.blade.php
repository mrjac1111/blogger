@extends('frontend.layouts.user')

@section('slider')
    @include('frontend.includes.slider')
@endsection
@section('content')
    <section class="half-section no-padding-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-15px-bottom wow fadeIn">
                    <div class="position-relative overflow-hidden">
                        <img src="{{asset('frontend/images/about-author.jpg')}}" class="width-100" alt="">
                        <div class="opacity-extra-medium bg-extra-dark-gray"></div>
                        <div class="blog-box">
                            <div class="blog-box-image height-100">
                                <div class="display-table width-100 height-100 text-center">
                                    <div class="display-table-cell vertical-align-middle">
                                        <span class="text-white text-uppercase alt-font font-weight-600 text-small letter-spacing-2">About Author</span>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-box-content height-100">
                                <div class="display-table width-100 height-100 text-center">
                                    <div class="display-table-cell vertical-align-middle">
                                        <a href="about-me.html" class="btn btn-white btn-rounded btn-small">About Me</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 xs-margin-15px-bottom wow fadeIn" data-wow-delay="0.2s">
                    <div class="position-relative overflow-hidden">
                        <img src="{{asset('frontend/images/contact-me.jpg')}}" class="width-100" alt="">
                        <div class="opacity-extra-medium bg-extra-dark-gray"></div>
                        <div class="blog-box">
                            <div class="blog-box-image height-100">
                                <div class="display-table width-100 height-100 text-center">
                                    <div class="display-table-cell vertical-align-middle">
                                        <span class="text-white text-uppercase alt-font font-weight-600 text-small letter-spacing-2">Contact Me</span>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-box-content height-100">
                                <div class="display-table width-100 height-100 text-center">
                                    <div class="display-table-cell vertical-align-middle">
                                        <a href="contact-us-modern.html" class="btn btn-white btn-rounded btn-small">Contact Me</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12 wow fadeIn" data-wow-delay="0.4s">
                    <div class="position-relative overflow-hidden">
                        <img src="{{asset('frontend/images/follow-instagram.jpg')}}" class="width-100" alt="">
                        <div class="opacity-extra-medium bg-extra-dark-gray"></div>
                        <div class="blog-box">
                            <div class="blog-box-image height-100">
                                <div class="display-table width-100 height-100 text-center">
                                    <div class="display-table-cell vertical-align-middle">
                                        <span class="text-white text-uppercase alt-font font-weight-600 text-small letter-spacing-2">Follow Instagram</span>
                                    </div>
                                </div>
                            </div>
                            <div class="blog-box-content height-100">
                                <div class="display-table width-100 height-100 text-center">
                                    <div class="display-table-cell vertical-align-middle">
                                        <a href="http://www.instagram.com/" target="_blank" class="btn btn-white btn-rounded btn-small">Follow Me</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end blog section -->
    <!-- start blog section -->
    <section class="wow fadeIn">
        <div class="container">
            <div class="row">
                <main class="col-md-9 col-sm-12 col-xs-12 right-sidebar sm-margin-60px-bottom xs-margin-40px-bottom no-padding-left sm-no-padding-right">
                    <div class="col-2-nth">
                        <!-- start blog post item -->
                        <div class="col-md-6 col-sm-6 col-xs-12 margin-50px-bottom last-paragraph-no-margin xs-margin-30px-bottom wow fadeInUp">
                            <div class="blog-post blog-post-style1 xs-text-center">
                                <div class="blog-post-images overflow-hidden margin-25px-bottom sm-margin-20px-bottom">
                                    <a href="blog-post-layout-01.html">
                                        <img src="{{asset('frontend/images/blog-img15.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="post-details">
                                    <span class="post-author text-extra-small text-medium-gray text-uppercase display-block margin-10px-bottom xs-margin-5px-bottom">17 july 2017 | by <a href="blog-masonry.html" class="text-medium-gray">Jay Benjamin</a></span>
                                    <a href="blog-post-layout-01.html" class="post-title text-medium text-extra-dark-gray width-90 display-block sm-width-100">I try to look at design from a more conceptual standpoint.</a>
                                    <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"></div>
                                    <p class="width-90 xs-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                                </div>
                            </div>
                        </div>
                        <!-- end blog post item -->
                        <!-- start blog post item -->
                        <div class="col-md-6 col-sm-6 col-xs-12 margin-50px-bottom last-paragraph-no-margin xs-margin-30px-bottom wow fadeInUp" data-wow-delay="0.2s">
                            <div class="blog-post blog-post-style1 xs-text-center">
                                <div class="blog-post-images overflow-hidden margin-25px-bottom sm-margin-20px-bottom">
                                    <a href="blog-post-layout-02.html">
                                        <img src="{{asset('frontend/images/blog-img16.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="post-details">
                                    <span class="post-author text-extra-small text-medium-gray text-uppercase display-block margin-10px-bottom  xs-margin-5px-bottom">03 July 2017 | by <a href="blog-masonry.html" class="text-medium-gray">Herman Miller</a></span>
                                    <a href="blog-post-layout-02.html" class="post-title text-medium text-extra-dark-gray width-90 display-block sm-width-100">Good design accelerates the adoption of new ideas.</a>
                                    <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"></div>
                                    <p class="width-90 xs-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                                </div>
                            </div>
                        </div>
                        <!-- end blog post item -->
                        <!-- start blog post item -->
                        <div class="col-md-6 col-sm-6 col-xs-12 margin-50px-bottom last-paragraph-no-margin xs-margin-30px-bottom wow fadeInUp">
                            <div class="blog-post blog-post-style1 xs-text-center">
                                <div class="blog-post-images overflow-hidden margin-25px-bottom sm-margin-20px-bottom">
                                    <a href="blog-post-layout-03.html">
                                        <img src="{{asset('frontend/images/blog-img17.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="post-details">
                                    <span class="post-author text-extra-small text-medium-gray text-uppercase display-block margin-10px-bottom  xs-margin-5px-bottom">22 June 2017 | by <a href="blog-masonry.html" class="text-medium-gray">Hugh Macleod</a></span>
                                    <a href="blog-post-layout-03.html" class="post-title text-medium text-extra-dark-gray width-90 display-block sm-width-100">Design is inherently optimistic. That is its power.</a>
                                    <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"></div>
                                    <p class="width-90 xs-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                                </div>
                            </div>
                        </div>
                        <!-- end blog post item -->
                        <!-- start blog post item -->
                        <div class="col-md-6 col-sm-6 margin-50px-bottom col-xs-12 last-paragraph-no-margin xs-margin-30px-bottom wow fadeInUp" data-wow-delay="0.2s">
                            <div class="blog-post blog-post-style1 xs-text-center">
                                <div class="blog-post-images overflow-hidden margin-25px-bottom sm-margin-20px-bottom">
                                    <a href="blog-post-layout-04.html">
                                        <img src="{{asset('frontend/images/blog-img18.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="post-details">
                                    <span class="post-author text-extra-small text-medium-gray text-uppercase display-block margin-10px-bottom  xs-margin-5px-bottom">02 June 2017 | by <a href="blog-masonry.html" class="text-medium-gray">Jennifer Freeman</a></span>
                                    <a href="blog-post-layout-04.html" class="post-title text-medium text-extra-dark-gray width-90 display-block sm-width-100">I wish someone would ask me to design a cathedral.</a>
                                    <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"></div>
                                    <p class="width-90 xs-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                                </div>
                            </div>
                        </div>
                        <!-- end blog post item -->
                        <!-- start blog post item -->
                        <div class="col-md-6 col-sm-6 col-xs-12 margin-50px-bottom last-paragraph-no-margin xs-margin-30px-bottom wow fadeInUp">
                            <div class="blog-post blog-post-style1 xs-text-center">
                                <div class="blog-post-images overflow-hidden margin-25px-bottom sm-margin-20px-bottom">
                                    <a href="blog-post-layout-05.html">
                                        <img src="{{asset('frontend/images/blog-img19.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="post-details">
                                    <span class="post-author text-extra-small text-medium-gray text-uppercase display-block margin-10px-bottom  xs-margin-5px-bottom">13 May 2017 | by <a href="blog-masonry.html" class="text-medium-gray">Willie Clark</a></span>
                                    <a href="blog-post-layout-05.html" class="post-title text-medium text-extra-dark-gray width-90 display-block sm-width-100">Decisions are the frequent fabric of our daily design.</a>
                                    <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"></div>
                                    <p class="width-90 xs-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                                </div>
                            </div>
                        </div>
                        <!-- end blog post item -->
                        <!-- start blog post item -->
                        <div class="col-md-6 col-sm-6 col-xs-12 margin-50px-bottom last-paragraph-no-margin xs-margin-30px-bottom wow fadeInUp" data-wow-delay="0.2s">
                            <div class="blog-post blog-post-style1 xs-text-center">
                                <div class="blog-post-images overflow-hidden margin-25px-bottom sm-margin-20px-bottom">
                                    <a href="blog-post-layout-01.html">
                                        <img src="{{asset('frontend/images/blog-img20.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="post-details">
                                    <span class="post-author text-extra-small text-medium-gray text-uppercase display-block margin-10px-bottom  xs-margin-5px-bottom">29 April 2017 | by <a href="blog-masonry.html" class="text-medium-gray">John Doe</a></span>
                                    <a href="blog-post-layout-01.html" class="post-title text-medium text-extra-dark-gray width-90 display-block sm-width-100">The dreaded phrase in design circles is 'show and tell.'</a>
                                    <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"></div>
                                    <p class="width-90 xs-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                                </div>
                            </div>
                        </div>
                        <!-- end blog post item -->
                        <!-- start blog post item -->
                        <div class="col-md-6 col-sm-6 col-xs-12 margin-50px-bottom last-paragraph-no-margin xs-margin-30px-bottom wow fadeInUp">
                            <div class="blog-post blog-post-style1 xs-text-center">
                                <div class="blog-post-images overflow-hidden margin-25px-bottom sm-margin-20px-bottom">
                                    <a href="blog-post-layout-02.html">
                                        <img src="{{asset('frontend/images/blog-img21.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="post-details">
                                    <span class="post-author text-extra-small text-medium-gray text-uppercase display-block margin-10px-bottom  xs-margin-5px-bottom">18 April 2017 | by <a href="blog-masonry.html" class="text-medium-gray">Isaac Tobin</a></span>
                                    <a href="blog-post-layout-02.html" class="post-title text-medium text-extra-dark-gray width-90 display-block sm-width-100">Design is not so much a design issue as a power struggle.</a>
                                    <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"></div>
                                    <p class="width-90 xs-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                                </div>
                            </div>
                        </div>
                        <!-- end blog post item -->
                        <!-- start blog post item -->
                        <div class="col-md-6 col-sm-6 margin-50px-bottom col-xs-12 last-paragraph-no-margin xs-margin-30px-bottom wow fadeInUp" data-wow-delay="0.2s">
                            <div class="blog-post blog-post-style1 xs-text-center">
                                <div class="blog-post-images overflow-hidden margin-25px-bottom sm-margin-20px-bottom">
                                    <a href="blog-post-layout-03.html">
                                        <img src="{{asset('frontend/images/blog-img22.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="post-details">
                                    <span class="post-author text-extra-small text-medium-gray text-uppercase display-block margin-10px-bottom  xs-margin-5px-bottom">11 April 2017 | by <a href="blog-masonry.html" class="text-medium-gray">Jason Bourne</a></span>
                                    <a href="blog-post-layout-03.html" class="post-title text-medium text-extra-dark-gray width-90 display-block sm-width-100">It takes a real designer to design for real women.</a>
                                    <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"></div>
                                    <p class="width-90 xs-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                                </div>
                            </div>
                        </div>
                        <!-- end blog post item -->
                        <!-- start blog post item -->
                        <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp last-paragraph-no-margin sm-margin-50px-bottom xs-margin-30px-bottom">
                            <div class="blog-post blog-post-style1 xs-text-center">
                                <div class="blog-post-images overflow-hidden margin-25px-bottom sm-margin-20px-bottom">
                                    <a href="blog-post-layout-04.html">
                                        <img src="{{asset('frontend/images/blog-img43.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="post-details">
                                    <span class="post-author text-extra-small text-medium-gray text-uppercase display-block margin-10px-bottom  xs-margin-5px-bottom">31 March 2017 | by <a href="blog-masonry.html" class="text-medium-gray">John Carpenter</a></span>
                                    <a href="blog-post-layout-04.html" class="post-title text-medium text-extra-dark-gray width-90 display-block sm-width-100">I like the body. I like to design everything to do with the body.</a>
                                    <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"></div>
                                    <p class="width-90 xs-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                                </div>
                            </div>
                        </div>
                        <!-- end blog post item -->
                        <!-- start blog post item -->
                        <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInUp last-paragraph-no-margin sm-margin-50px-bottom xs-margin-30px-bottom" data-wow-delay="0.2s">
                            <div class="blog-post blog-post-style1 xs-text-center">
                                <div class="blog-post-images overflow-hidden margin-25px-bottom sm-margin-20px-bottom">
                                    <a href="blog-post-layout-05.html">
                                        <img src="{{asset('frontend/images/blog-img44.jpg')}}" alt="">
                                    </a>
                                </div>
                                <div class="post-details">
                                    <span class="post-author text-extra-small text-medium-gray text-uppercase display-block margin-10px-bottom  xs-margin-5px-bottom">09 March 2017 | by <a href="blog-masonry.html" class="text-medium-gray">Jessica Hart</a></span>
                                    <a href="blog-post-layout-05.html" class="post-title text-medium text-extra-dark-gray width-90 display-block sm-width-100">Styles come and go. Design is a language, not a style.</a>
                                    <div class="separator-line-horrizontal-full bg-medium-light-gray margin-20px-tb sm-margin-15px-tb"></div>
                                    <p class="width-90 xs-width-100">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum text...</p>
                                </div>
                            </div>
                        </div>
                        <!-- end blog post item -->
                    </div>
                    <!-- start slider pagination -->
                    <div class="col-md-12 col-sm-12 col-xs-12 text-center margin-100px-top sm-margin-50px-top wow fadeInUp">
                        <div class="pagination text-small text-uppercase text-extra-dark-gray">
                            <ul>
                                <li><a href="#"><i class="fas fa-long-arrow-alt-left margin-5px-right xs-display-none"></i> Prev</a></li>
                                <li class="active"><a href="#">1</a></li>
                                <li><a href="#">2</a></li>
                                <li><a href="#">3</a></li>
                                <li><a href="#">Next <i class="fas fa-long-arrow-alt-right margin-5px-left xs-display-none"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <!-- end slider pagination -->
                </main>
                <!-- start right sidebar  -->
                <aside class="col-md-3 col-sm-12 col-xs-12 pull-right">
                    <div class="display-inline-block width-100 margin-45px-bottom xs-margin-25px-bottom">
                        <form>
                            <div class="position-relative">
                                <input type="text" class="bg-transparent text-small no-margin border-color-extra-light-gray medium-input pull-left" placeholder="Enter your keywords...">
                                <button type="submit" class="bg-transparent  btn position-absolute right-0 top-1"><i class="fas fa-search no-margin-left"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="margin-45px-bottom xs-margin-25px-bottom">
                        <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase text-small font-weight-600 aside-title"><span>About Me</span></div>
                        <a href="about-me.html"><img src="{{asset('frontend/images/aside-image-1.jpg')}}" alt="" class="margin-25px-bottom"/></a>
                        <p class="margin-20px-bottom text-small">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry’s standard.</p>
                        <a class="btn btn-very-small btn-dark-gray text-uppercase" href="about-me.html">About Author</a>
                    </div>
                    <div class="margin-50px-bottom">
                        <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Follow Us</span></div>
                        <div class="social-icon-style-1 text-center">
                            <ul class="extra-small-icon">
                                <li><a class="facebook" href="http://facebook.com/" target="_blank"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a class="twitter" href="http://twitter.com/" target="_blank"><i class="fab fa-twitter"></i></a></li>
                                <li><a class="google" href="http://google.com/" target="_blank"><i class="fab fa-google-plus-g"></i></a></li>
                                <li><a class="dribbble" href="http://dribbble.com/" target="_blank"><i class="fab fa-dribbble"></i></a></li>
                                <li><a class="linkedin" href="http://linkedin.com/" target="_blank"><i class="fab fa-linkedin-in"></i></a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="margin-45px-bottom xs-margin-25px-bottom">
                        <div class="text-extra-dark-gray margin-20px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Categories</span></div>
                        <ul class="list-style-6 margin-50px-bottom text-small">
                            <li><a href="blog-masonry.html">Arts and Entertainment</a><span>12</span></li>
                            <li><a href="blog-masonry.html">Blog</a><span>05</span></li>
                            <li><a href="blog-masonry.html">Blog Full width</a><span>08</span></li>
                            <li><a href="blog-masonry.html">Blog Grid</a><span>10</span></li>
                            <li><a href="blog-masonry.html">Branding</a><span>21</span></li>
                            <li><a href="blog-masonry.html">Design Tutorials</a><span>09</span></li>
                            <li><a href="blog-masonry.html">Designing</a><span>07</span></li>
                            <li><a href="blog-masonry.html">Feature</a><span>06</span></li>
                            <li><a href="blog-masonry.html">Home Blog</a><span>10</span></li>
                            <li><a href="blog-masonry.html">Onepage Fashion</a><span>11</span></li>
                            <li><a href="blog-masonry.html">Sample</a><span>06</span></li>
                        </ul>
                    </div>
                    <div class="bg-deep-pink padding-30px-all text-white text-center margin-45px-bottom xs-margin-25px-bottom">
                        <i class="fas fa-quote-left icon-small margin-15px-bottom display-block"></i>
                        <span class="text-extra-large font-weight-300 margin-20px-bottom display-block">The future belongs to those who believe in the beauty of their dreams.</span>
                        <a class="btn btn-very-small btn-transparent-white border-width-1 text-uppercase" href="portfolio-boxed-grid-overlay.html">Explore Portfolio</a>
                    </div>
                    <div class="margin-45px-bottom xs-margin-25px-bottom">
                        <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Popular post</span></div>
                        <ul class="latest-post position-relative">
                            <li>
                                <figure>
                                    <a href="blog-post-layout-01.html"><img src="{{asset('frontend/images/aside-image-2.jpg')}}" alt=""></a>
                                </figure>
                                <div class="display-table-cell vertical-align-top text-small"><a href="blog-post-layout-01.html" class="text-extra-dark-gray"><span class="display-inline-block margin-5px-bottom">Traveling abroad will change you forever</span></a> <span class="clearfix text-medium-gray text-small">April 30, 2016</span></div>
                            </li>
                            <li>
                                <figure>
                                    <a href="blog-post-layout-02.html"><img src="{{asset('frontend/images/aside-image-3.jpg')}}" alt=""></a>
                                </figure>
                                <div class="display-table-cell vertical-align-top text-small"><a href="blog-post-layout-02.html" class="text-extra-dark-gray"><span class="display-inline-block margin-5px-bottom">Having a new perspec-tive on new york city</span></a> <span class="clearfix text-medium-gray text-small">March 10, 2016</span></div>
                            </li>
                            <li>
                                <figure>
                                    <a href="blog-post-layout-03.html"><img src="{{asset('frontend/images/aside-image-4.jpg')}}" alt=""></a>
                                </figure>
                                <div class="display-table-cell vertical-align-top text-small"><a href="blog-post-layout-03.html" class="text-extra-dark-gray"><span class="display-inline-block margin-5px-bottom">The incredible talents of street performers</span></a> <span class="clearfix text-medium-gray text-small">March 05, 2016</span></div>
                            </li>
                            <li>
                                <figure>
                                    <a href="blog-post-layout-04.html"><img src="{{asset('frontend/images/aside-image-5.jpg')}}" alt=""></a>
                                </figure>
                                <div class="display-table-cell vertical-align-top text-small"><a href="blog-post-layout-04.html" class="text-extra-dark-gray"><span class="display-inline-block margin-5px-bottom">Praesent placerat risus quis eros</span></a> <span class="clearfix text-medium-gray text-small">March  01, 2016</span></div>
                            </li>
                        </ul>
                    </div>
                    <div class="margin-45px-bottom xs-margin-25px-bottom">
                        <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>tags cloud</span></div>
                        <div class="tag-cloud">
                            <a href="blog-grid.html">ADVERTISEMENT</a>
                            <a href="blog-grid.html">ARTISTRY</a>
                            <a href="blog-grid.html">BLOG</a>
                            <a href="blog-grid.html">CONCEPTUAL</a>
                            <a href="blog-grid.html">DESIGN</a>
                            <a href="blog-grid.html">FASHION</a>
                            <a href="blog-grid.html">INSPIRATION</a>
                            <a href="blog-grid.html">SMART</a>
                            <a href="blog-grid.html">QUOTES</a>
                            <a href="blog-grid.html">UNIQUE</a>
                            <a href="blog-grid.html">CONCEPTS</a>
                        </div>
                    </div>
                    <div class="margin-45px-bottom xs-margin-25px-bottom">
                        <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Archive</span></div>
                        <ul class="list-style-6 margin-20px-bottom text-small">
                            <li><a href="blog-grid.html">July 2017</a><span>12</span></li>
                            <li><a href="blog-grid.html">June 2017</a><span>05</span></li>
                            <li><a href="blog-grid.html">May 2017</a><span>08</span></li>
                            <li><a href="blog-grid.html">April 2017</a><span>10</span></li>
                            <li><a href="blog-grid.html">March 2017</a><span>21</span></li>
                            <li><a href="blog-grid.html">February 2017</a><span>09</span></li>
                            <li><a href="blog-grid.html">January 2017</a><span>07</span></li>
                        </ul>
                    </div>
                    <div class="margin-45px-bottom xs-margin-25px-bottom">
                        <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Newsletter</span></div>
                        <div class="display-inline-block width-100">
                            <form>
                                <div class="position-relative">
                                    <input type="email" class="bg-transparent text-small no-margin border-color-extra-light-gray medium-input pull-left" placeholder="Enter your email...">
                                    <button type="submit" class="bg-transparent text-large btn position-absolute right-0 top-3"><i class="far fa-envelope no-margin-left"></i></button>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div>
                        <div class="text-extra-dark-gray margin-25px-bottom alt-font text-uppercase font-weight-600 text-small aside-title"><span>Instagram</span></div>
                        <div class="instagram-follow-api">
                            <ul id="instaFeed-aside"></ul>
                        </div>
                    </div>
                </aside>
                <!-- end right sidebar -->
            </div>
        </div>
    </section>
@endsection
