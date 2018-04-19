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
@endsection

@section('app-scripts')

@endsection