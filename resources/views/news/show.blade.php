{{-- tell Laravel, to use the layout file from /layouts/main.blade.php --}}
@extends('layouts/main')

@section('styles')
    @vite(['resources/scss/news.scss'])
@endsection

@section('content')
    
<!-- news content start -->
<main>
    <div class="post section">
        <div class="container sticky-parent d-lg-flex justify-content-between align-items-start">
            <div class="post_main">
                <div class="post_main-article">
                    <div class="media media--main">
                        <picture>
                            <source data-srcset="{{ asset('img/placeholder.jpg') }}" srcset="{{ asset('img/placeholder.jpg') }}" />
                            <img class="lazy" data-src="{{ asset('img/placeholder.jpg') }}" src="{{ asset('img/placeholder.jpg') }}" alt="media" />
                        </picture>
                    </div>
                    <div class="post_main-article_metadata">
                        <span class="item d-inline-flex align-items-center">
                            <i class="icon-calendar icon"></i>
                            June 16, 2021
                        </span>
                        <span class="item d-inline-flex align-items-center">
                            <i class="icon-eye icon"></i>
                            <span class="number">120</span>
                            <span class="text">views</span>
                        </span>
                        <a class="item d-inline-flex align-items-center" href="#comments">
                            <i class="icon-comment icon"></i>
                            <span class="number">2</span>
                            <span class="text">Comments</span>
                        </a>
                    </div>
                    <div class="post_main-article_text">
                        {!! $post->content !!}
                    </div>
                </div>
                <div class="post_main-footer">
                    <div class="post_main-footer_tags d-flex flex-wrap align-items-center">
                        <h4 class="title">Tags</h4>
                        <ul class="list d-flex flex-wrap align-items-center">
                            <li class="list-item">
                                <a class="link" href="#">Travel</a>
                            </li>
                            <li class="list-item">
                                <a class="link" href="#">People</a>
                            </li>
                            <li class="list-item">
                                <a class="link" href="#">Guide</a>
                            </li>
                        </ul>
                    </div>
                    <div class="post_main-footer_nav d-flex flex-wrap justify-content-between">
                        <a class="nav-block nav-block--prev h5 d-inline-flex align-items-center" href="#">
                            <span class="theme-element theme-element--light">
                                <i class="icon-arrow_left icon"></i>
                            </span>
                            <span class="title">Things hostels do better than posh hotels</span>
                        </a>
                        <a class="nav-block nav-block--next h5 d-inline-flex flex-row-reverse align-items-center">
                            <span class="theme-element theme-element--light">
                                <i class="icon-arrow_right icon"></i>
                            </span>
                            <span class="title">Important Tips for Traveling with Friends</span>
                        </a>
                    </div>
                    <div class="post_main-footer_author d-sm-flex">
                        <div class="media">
                            <picture>
                                <source data-srcset="{{ asset('img/placeholder.jpg') }}" srcset="{{ asset('img/placeholder.jpg') }}" />
                                <img class="lazy" data-src="{{ asset('img/placeholder.jpg') }}" src="{{ asset('img/placeholder.jpg') }}" alt="media" />
                            </picture>
                        </div>
                        <div class="main">
                            <span class="name h4">William Howard</span>
                            <p class="bio">
                                Dignissim convallis aenean et tortor. Lorem donec massa sapien faucibus et molestie ac. Platea
                                dictumst quisque sagittis purus sit amet
                            </p>
                            <ul class="socials d-flex align-items-center">
                                <li class="list-item">
                                    <a class="link" href="">
                                        <i class="icon-facebook"></i>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="link" href="">
                                        <i class="icon-instagram"></i>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="link" href="">
                                        <i class="icon-twitter"></i>
                                    </a>
                                </li>
                                <li class="list-item">
                                    <a class="link" href="">
                                        <i class="icon-whatsapp"></i>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <section class="post_main-comments" id="comments">
                    <h3 class="post_main-comments_header">Post comments</h3>
                    <ul class="post_main-comments_list">
                        <li class="list-item d-flex flex-column flex-sm-row align-items-start">
                            <div class="media">
                                <picture>
                                    <source data-srcset="{{ asset('img/placeholder.jpg') }}" srcset="{{ asset('img/placeholder.jpg') }}" />
                                    <img class="lazy" data-src="{{ asset('img/placeholder.jpg') }}" src="{{ asset('img/placeholder.jpg') }}" alt="media" />
                                </picture>
                            </div>
                            <div class="main">
                                <div class="main_info d-flex flex-column">
                                    <span class="name h4">Gloria Ellis</span>
                                    <span class="date">June 16, 2021</span>
                                </div>
                                <p class="text">
                                    Ac placerat vestibulum lectus mauris ultrices. Velit scelerisque in dictum non consectetur a.
                                    Eget nunc lobortis mattis aliquam faucibus purus in. Ultricies leo integer malesuada nunc.
                                </p>
                            </div>
                            <a class="replyTrigger" href="#">
                                <span class="icon-reply"></span>
                            </a>
                        </li>
                        <li class="list-item d-flex flex-column flex-sm-row align-items-start" data-reply="true">
                            <div class="media">
                                <picture>
                                    <source data-srcset="{{ asset('img/placeholder.jpg') }}" srcset="{{ asset('img/placeholder.jpg') }}" />
                                    <img class="lazy" data-src="{{ asset('img/placeholder.jpg') }}" src="{{ asset('img/placeholder.jpg') }}" alt="media" />
                                </picture>
                            </div>
                            <div class="main">
                                <div class="main_info d-flex flex-column">
                                    <span class="name h4">Esther Hopkins</span>
                                    <span class="date">June 16, 2021</span>
                                </div>
                                <p class="text">
                                    Ac placerat vestibulum lectus mauris ultrices. Velit scelerisque in dictum non consectetur a.
                                    Eget nunc lobortis mattis aliquam faucibus purus in.
                                </p>
                            </div>
                            <a class="replyTrigger" href="#">
                                <span class="icon-reply"></span>
                            </a>
                        </li>
                    </ul>
                </section>
                <section class="post_main-reply">
                    <h3 class="post_main-reply_header">Leave comment</h3>
                    <form
                        class="contacts_form form d-sm-flex flex-wrap justify-content-between"
                        action="#"
                        method="post"
                        data-type="comment"
                    >
                        <div class="field-wrapper">
                            <label class="label" for="commentName">
                                <i class="icon-user icon"></i>
                            </label>
                            <input class="field required" id="commentName" type="text" placeholder="Name" />
                        </div>
                        <div class="field-wrapper">
                            <label class="label" for="commentEmail">
                                <i class="icon-email icon"></i>
                            </label>
                            <input class="field required" id="commentEmail" type="text" data-type="email" placeholder="Email" />
                        </div>
                        <textarea class="field textarea required" id="commentMessage" placeholder="Message"></textarea>
                        <button class="btn theme-element theme-element--accent" type="submit">Submit</button>
                    </form>
                </section>
            </div>
            <div class="widgets" data-sticky="true" data-stop="">
                <div class="widgets_item widgets_item--search">
                    <form class="form d-flex" action="#" method="get" id="newsSearch" data-type="search">
                        <input class="field required" id="newsSearchQuery" type="text" placeholder="Search" />
                        <button class="btn theme-element--accent" type="submit">
                            <i class="icon-search icon"></i>
                        </button>
                    </form>
                </div>
                <div class="widgets_item widgets_item--categories">
                    <h4 class="widgets_item-header">Categories</h4>
                    <ul class="list">
                        <li class="list-item d-flex align-items-center">
                            <a class="link" href="#">Travel</a>
                        </li>
                        <li class="list-item d-flex align-items-center current">
                            <a class="link" href="#">Tourist Guide</a>
                        </li>
                        <li class="list-item d-flex align-items-center">
                            <a class="link" href="#">City Sights</a>
                        </li>
                        <li class="list-item d-flex align-items-center">
                            <a class="link" href="#">Communication</a>
                        </li>
                    </ul>
                </div>
                <div class="widgets_item widgets_item--recommended">
                    <h4 class="widgets_item-header">Recommended articles</h4>
                    <ul class="list">
                        <li class="list-item d-flex align-items-center">
                            <div class="media">
                                <picture>
                                    <source data-srcset="{{ asset('img/placeholder.jpg') }}" srcset="{{ asset('img/placeholder.jpg') }}" />
                                    <img class="lazy" data-src="{{ asset('img/placeholder.jpg') }}" src="{{ asset('img/placeholder.jpg') }}" alt="media" />
                                </picture>
                            </div>
                            <div class="main d-flex flex-column">
                                <a class="main_title h5" href="#">Travel and Working Holidays</a>
                                <span class="main_date">June 16, 2021</span>
                            </div>
                        </li>
                        <li class="list-item d-flex align-items-center">
                            <div class="media">
                                <picture>
                                    <source data-srcset="{{ asset('img/placeholder.jpg') }}" srcset="{{ asset('img/placeholder.jpg') }}" />
                                    <img class="lazy" data-src="{{ asset('img/placeholder.jpg') }}" src="{{ asset('img/placeholder.jpg') }}" alt="media" />
                                </picture>
                            </div>
                            <div class="main d-flex flex-column">
                                <a class="main_title h5" href="#">A Hostel Decided to Social Support</a>
                                <span class="main_date">June 16, 2021</span>
                            </div>
                        </li>
                        <li class="list-item d-flex align-items-center">
                            <div class="media">
                                <picture>
                                    <source data-srcset="{{ asset('img/placeholder.jpg') }}" srcset="{{ asset('img/placeholder.jpg') }}" />
                                    <img class="lazy" data-src="{{ asset('img/placeholder.jpg') }}" src="{{ asset('img/placeholder.jpg') }}" alt="media" />
                                </picture>
                            </div>
                            <div class="main d-flex flex-column">
                                <a class="main_title h5" href="#">Travel and Working Holidays</a>
                                <span class="main_date">June 16, 2021</span>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="widgets_item widgets_item--tags">
                    <h4 class="widgets_item-header">Tag</h4>
                    <ul class="list d-flex flex-wrap">
                        <li class="list-item">
                            <a class="link underlined underlined--accent" href="#">Travel</a>
                        </li>
                        <li class="list-item">
                            <a class="link underlined underlined--accent" href="#">Room</a>
                        </li>
                        <li class="list-item">
                            <a class="link underlined underlined--accent" href="#">People</a>
                        </li>
                        <li class="list-item">
                            <a class="link underlined underlined--accent" href="#">Guide</a>
                        </li>
                        <li class="list-item">
                            <a class="link underlined underlined--accent active" href="#">Season</a>
                        </li>
                        <li class="list-item">
                            <a class="link underlined underlined--accent" href="#">City</a>
                        </li>
                        <li class="list-item">
                            <a class="link underlined underlined--accent" href="#">Sights</a>
                        </li>
                    </ul>
                </div>
                <div class="widgets_item widgets_item--subscribe">
                    <h4 class="widgets_item-header">Subscribe to our mailing list</h4>
                    <form class="form d-flex" action="#" method="post" id="subscribe" data-type="subscribe">
                        <input
                            class="field required"
                            type="text"
                            id="subscribeEmail"
                            data-type="email"
                            placeholder="Email address"
                        />
                        <button class="btn theme-element--accent" type="submit">
                            <i class="icon-arrow_right icon"></i>
                        </button>
                    </form>
                </div>
                <div class="widgets_item widgets_item--instagram">
                    <h4 class="widgets_item-header">Instagram</h4>
                    <ul class="list d-grid">
                        <li class="list-item">
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <source data-srcset="{{ asset('img/placeholder.jpg') }}" srcset="{{ asset('img/placeholder.jpg') }}" />
                                    <img class="lazy" data-src="{{ asset('img/placeholder.jpg') }}" src="{{ asset('img/placeholder.jpg') }}" alt="media" />
                                </picture>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <source data-srcset="{{ asset('img/placeholder.jpg') }}" srcset="{{ asset('img/placeholder.jpg') }}" />
                                    <img class="lazy" data-src="{{ asset('img/placeholder.jpg') }}" src="{{ asset('img/placeholder.jpg') }}" alt="media" />
                                </picture>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <source data-srcset="{{ asset('img/placeholder.jpg') }}" srcset="{{ asset('img/placeholder.jpg') }}" />
                                    <img class="lazy" data-src="{{ asset('img/placeholder.jpg') }}" src="{{ asset('img/placeholder.jpg') }}" alt="media" />
                                </picture>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <source data-srcset="{{ asset('img/placeholder.jpg') }}" srcset="{{ asset('img/placeholder.jpg') }}" />
                                    <img class="lazy" data-src="{{ asset('img/placeholder.jpg') }}" src="{{ asset('img/placeholder.jpg') }}" alt="media" />
                                </picture>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <source data-srcset="{{ asset('img/placeholder.jpg') }}" srcset="{{ asset('img/placeholder.jpg') }}" />
                                    <img class="lazy" data-src="{{ asset('img/placeholder.jpg') }}" src="{{ asset('img/placeholder.jpg') }}" alt="media" />
                                </picture>
                            </a>
                        </li>
                        <li class="list-item">
                            <a href="#" target="_blank" rel="noopener noreferrer">
                                <picture>
                                    <source data-srcset="{{ asset('img/placeholder.jpg') }}" srcset="{{ asset('img/placeholder.jpg') }}" />
                                    <img class="lazy" data-src="{{ asset('img/placeholder.jpg') }}" src="{{ asset('img/placeholder.jpg') }}" alt="media" />
                                </picture>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- latest news post aside start -->
    <aside>
        <section class="latest section section--blockbg">
            <div class="block"></div>
            <div class="container">
                <div class="latest_header d-sm-flex justify-content-between align-items-center">
                    <h2 class="latest_header-title" data-aos="fade-right">Recommended news</h2>
                    <div class="wrapper" data-aos="fade-left">
                        <a class="d-none btn theme-element theme-element--light" href="news.html">View all news</a>
                    </div>
                </div>
                <ul class="latest_list d-md-flex flex-wrap">
                    <li class="latest_list-item col-md-6 col-xl-4" data-order="1" data-aos="fade-up">
                        <div class="item-wrapper d-md-flex flex-column">
                            <div class="media">
                                <picture>
                                    <source data-srcset="{{ asset('img/placeholder.jpg') }}" srcset="{{ asset('img/placeholder.jpg') }}" />
                                    <img class="lazy" data-src="{{ asset('img/placeholder.jpg') }}" src="{{ asset('img/placeholder.jpg') }}" alt="media" />
                                </picture>
                                <span class="media_label media_label--left"> Travel </span>
                            </div>
                            <div class="main d-md-flex flex-column justify-content-between flex-grow-1">
                                <a class="main_title h4" href="#" data-shave="true"
                                    >How to cure wanderlust without leaving your home</a
                                >
                                <p class="main_preview">
                                    Ultrices gravida dictum fusce ut placer orci nulla pellentesque. Senect et netus et malesuada
                                </p>
                                <div class="main_metadata">
                                    <span class="main_metadata-item d-inline-flex align-items-center">
                                        <i class="icon-calendar icon"></i>
                                        June 16, 2021
                                    </span>
                                    <span class="main_metadata-item d-inline-flex align-items-center">
                                        <i class="icon-eye icon"></i>
                                        <span class="number">120</span>
                                        <span class="text">views</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="latest_list-item col-md-6 col-xl-4" data-order="2" data-aos="fade-up" data-aos-delay="50">
                        <div class="item-wrapper d-md-flex flex-column">
                            <div class="media">
                                <picture>
                                    <source data-srcset="{{ asset('img/placeholder.jpg') }}" srcset="{{ asset('img/placeholder.jpg') }}" />
                                    <img class="lazy" data-src="{{ asset('img/placeholder.jpg') }}" src="{{ asset('img/placeholder.jpg') }}" alt="media" />
                                </picture>
                                <span class="media_label media_label--left"> Tourist Guide </span>
                            </div>
                            <div class="main d-md-flex flex-column justify-content-between flex-grow-1">
                                <a class="main_title h4" href="#" data-shave="true"
                                    >Yoga Hostels to soothe your mind and nomadic soul</a
                                >
                                <p class="main_preview">
                                    Ultrices gravida dictum fusce ut placer orci nulla pellentesque. Senect et netus et malesuada
                                </p>
                                <div class="main_metadata">
                                    <span class="main_metadata-item d-inline-flex align-items-center">
                                        <i class="icon-calendar icon"></i>
                                        June 16, 2021
                                    </span>
                                    <span class="main_metadata-item d-inline-flex align-items-center">
                                        <i class="icon-eye icon"></i>
                                        <span class="number">120</span>
                                        <span class="text">views</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </li>
                    <li class="latest_list-item col-md-6 col-xl-4" data-order="3" data-aos="fade-up" data-aos-delay="100">
                        <div class="item-wrapper d-md-flex flex-column">
                            <div class="media">
                                <picture>
                                    <source data-srcset="{{ asset('img/placeholder.jpg') }}" srcset="{{ asset('img/placeholder.jpg') }}" />
                                    <img class="lazy" data-src="{{ asset('img/placeholder.jpg') }}" src="{{ asset('img/placeholder.jpg') }}" alt="media" />
                                </picture>
                                <span class="media_label media_label--left"> Communication </span>
                            </div>
                            <div class="main d-md-flex flex-column justify-content-between flex-grow-1">
                                <a class="main_title h4" href="#" data-shave="true">What happens when you travel with strangers?</a>
                                <p class="main_preview">
                                    Euismod quis viverra nibh cras pulvinar mattis nunc. Leo duis ut diam quam. Sed velit dignissim
                                </p>
                                <div class="main_metadata">
                                    <span class="main_metadata-item d-inline-flex align-items-center">
                                        <i class="icon-calendar icon"></i>
                                        June 16, 2021
                                    </span>
                                    <span class="main_metadata-item d-inline-flex align-items-center">
                                        <i class="icon-eye icon"></i>
                                        <span class="number">120</span>
                                        <span class="text">views</span>
                                    </span>
                                </div>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </section>
    </aside>
    <!-- latest news post aside end -->
</main>
@endsection

@section('scripts')
    <script>
        console.log('Page specific script code goes here');
    </script>
@endsection