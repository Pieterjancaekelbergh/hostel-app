{{-- tell Laravel, to use the layout file from /layouts/main.blade.php --}}
@extends('layouts/main')

@section('styles')
    @vite(['resources/scss/news.scss'])
@endsection

@section('content')
    
<!-- news content start -->
<main class="news-section section">
    <div class="sticky-parent container d-lg-flex justify-content-between align-items-start">
        <div class="news">
            <!-- news list start -->
            <ul class="news_list">
                @foreach ($posts as $post)
                <li class="news_list-item">
                    <div class="item-wrapper d-sm-flex flex-lg-column flex-xl-row">
                        <div class="media">
                            <picture>
                                <source data-srcset="{{ asset('img/placeholder.jpg') }}" srcset="{{ asset('img/placeholder.jpg') }}" />
                                <img class="lazy" data-src="{{ asset('img/placeholder.jpg') }}" src="{{ asset('img/placeholder.jpg') }}" alt="media" />
                            </picture>
                            <span class="media_label">Travel</span>
                        </div>
                        <div class="main d-sm-flex d-xl-block flex-column justify-content-between">
                            <a class="main_title h4" href="{{ route('news.show', $post->slug) }}" data-shave="true">
                                {{ $post->title }}
                            </a>
                            <p class="main_preview">
                                {{ $post->intro }}
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
                                <span class="main_metadata-item d-inline-flex align-items-center">
                                    <i class="icon-comment icon"></i>
                                    <span class="number">1</span>
                                    <span class="text">Comment</span>
                                </span>
                            </div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
            <div>
                {!! $posts->links() !!}
            </div>
            {{-- <ul class="pagination d-flex align-items-center">
                <li class="pagination-page">
                    <a class="pagination-page_link d-flex align-items-center justify-content-center" href="#" data-current="true"
                        >1</a
                    >
                </li>
                <li class="pagination-page">
                    <a class="pagination-page_link d-flex align-items-center justify-content-center" href="#">2</a>
                </li>
                <li class="pagination-page">
                    <a class="pagination-page_link d-flex align-items-center justify-content-center" href="#">3</a>
                </li>
            </ul> --}}
            <!-- news list end -->
        </div>
        <!-- news aside start -->
        <div class="widgets" data-sticky="true" data-stop="90">
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
                    <input class="field required" type="text" id="subscribeEmail" data-type="email" placeholder="Email address" />
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
        <!-- news aside end -->
    </div>
</main>

@endsection

@section('scripts')
    <script>
        console.log('Page specific script code goes here');
    </script>
@endsection