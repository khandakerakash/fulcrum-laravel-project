@extends('layouts.master')

@section('title', 'Page')

@section('content')
    <header class="header">
        <div class="row">

            <div class="col-1-of-2">
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

            <div class="col-1-of-2">
                <div class="right-box">
                    <div class="navigation">
                        <p>digital_agency</p>
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
@endsection

@section('app-scripts')

@endsection