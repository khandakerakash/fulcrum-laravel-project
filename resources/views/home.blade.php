@extends('layouts.master')

@section('title', 'Page')

@section('content')
    <header class="header">
        <div class="h-row">

            <div class="h-col-1-of-2">
                <div class="left-box">
                    <div class="bg-video">
                        <video class="bg-video__content" autoplay muted loop>
                            <source src="{{ asset('videos/Writing-Working.mp4') }}" type="video/mp4">
                            <source src="{{ asset('videos/Writing-Working.webm') }}" type="video/mp4">
                            Your browser is not supported!
                        </video>
                    </div>
                </div>
            </div>

            <div class="h-col-1-of-2">
                <div class="right-box">
                    <div class="navigation-bar">
                        <div class="logo">
                            <img src="{{asset('img/logo.png')}}" alt="Fulcrum Logo">
                        </div>
                        <div class="navigation-bar-text">
                            <p>digital<span>_</span>egency</p>
                        </div>
                    </div>
                    <div class="bg-video-2">
                        <video class="bg-video-2__content" autoplay muted loop>
                            <source src="{{ asset('videos/Lulu_latte.mp4') }}" type="video/mp4">
                            <source src="{{ asset('videos/Lulu_latte.webm') }}" type="video/mp4">
                            Your browser is not supported!
                        </video>
                    </div>
                </div>
            </div>

        </div>
    </header>

    <section class="section-features">
        <div class="row">
            <div class="col-1-of-4">
                <div class="feature-box u-center-text">
                    <i class="feature-box__icon u-margin-bottom-x-small icon-basic-world"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Explore the world</h3>
                    <p class="feature-box__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, tempore.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <div class="feature-box u-center-text">
                    <i class="feature-box__icon u-margin-bottom-x-small icon-basic-compass"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Meet with us</h3>
                    <p class="feature-box__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, tempore.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <div class="feature-box u-center-text">
                    <i class="feature-box__icon u-margin-bottom-x-small icon-basic-map"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Find your way</h3>
                    <p class="feature-box__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, tempore.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <div class="feature-box u-center-text">
                    <i class="feature-box__icon u-margin-bottom-x-small icon-basic-heart"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Believe us</h3>
                    <p class="feature-box__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, tempore.
                    </p>
                </div>
            </div>
        </div>
    </section><!-- /.section-features -->

    <section class="section-conceptual">
        <div class="h-row">

            <div class="h-col-1-of-2">
                <div class="sc-left-box">
                    <div class="bg-video">
                        <video class="bg-video__content" autoplay muted loop>
                            <source src="{{ asset('videos/Mock-up.mp4') }}" type="video/mp4">
                            <source src="{{ asset('videos/Mock-up.webm') }}" type="video/mp4">
                            Your browser is not supported!
                        </video>
                    </div>
                </div>
            </div>

            <div class="h-col-1-of-2">
                <div class="sc-right-box">
                    <div class="conceptual-text">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet consectetur dolorem eligendi eum libero magni odio quidem sint sunt.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet consectetur dolorem eligendi eum libero magni odio quidem sint sunt.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet consectetur dolorem eligendi eum libero magni odio quidem sint sunt.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet consectetur dolorem eligendi eum libero magni odio quidem sint sunt.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet consectetur dolorem eligendi eum libero magni odio quidem sint sunt.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet consectetur dolorem eligendi eum libero magni odio quidem sint sunt.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet consectetur dolorem eligendi eum libero magni odio quidem sint sunt.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet consectetur dolorem eligendi eum libero magni odio quidem sint sunt.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet consectetur dolorem eligendi eum libero magni odio quidem sint sunt.
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet consectetur dolorem eligendi eum libero magni odio quidem sint sunt.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet consectetur dolorem eligendi eum libero magni odio quidem sint sunt.
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad amet consectetur dolorem eligendi eum libero magni odio quidem sint sunt.
                        </p>
                    </div>
                </div>
            </div>

        </div>
    </section><!-- /.section-conceptual-->

    <section class="section-feature-bottom">
        <div class="row u-text-color-white">
            <div class="col-1-of-4">
                <div class="feature-box feature-box-1 u-center-text">
                    <i class="feature-box__icon u-margin-bottom-x-small icon-basic-world"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Quantify</h3>
                    <p class="feature-box__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, tempore.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <div class="feature-box feature-box-2 u-center-text">
                    <i class="feature-box__icon u-margin-bottom-x-small icon-basic-compass"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Basic</h3>
                    <p class="feature-box__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, tempore.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <div class="feature-box feature-box-3 u-center-text">
                    <i class="feature-box__icon u-margin-bottom-x-small icon-basic-map"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Glyphs</h3>
                    <p class="feature-box__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, tempore.
                    </p>
                </div>
            </div>

            <div class="col-1-of-4">
                <div class="feature-box feature-box-4 u-center-text">
                    <i class="feature-box__icon u-margin-bottom-x-small icon-basic-heart"></i>
                    <h3 class="heading-tertiary u-margin-bottom-small">Sequence</h3>
                    <p class="feature-box__text">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, tempore.
                    </p>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('app-scripts')

@endsection