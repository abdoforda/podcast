@extends('layouts.app')

@section('content')
    
    <!-- MAIN CONTENT -->
    <main>
        <!-- BANNER -->
        <section class="section position-relative" style="background-image: url(/image/image-1920x900-1.jpg);">
            <div class="image-overlay"></div>
            <div class="r-container  position-relative" style="z-index: 2;">
                <div class="d-flex flex-column">
                    <h2 class="font-1 fw-bold">
                        {{ $post->title }}
                    </h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb font-2">
                            <li class="breadcrumb-item"><a href="/">@lang('Home')</a></li>
                            <li class="breadcrumb-item active" aria-current="page">
                                {{ $post->title }}
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </section>

        <section class="section">
            <div class="r-container">
                <div class="d-flex flex-lg-row flex-column-reverse gap-3">
                    <div class="col col-lg-12">
                        <div class="d-flex flex-column gap-3">
                            <h2 class="font-1 fw-bold lh-1">
                                {{ $post->title }}
                            </h2>
                            <div class="d-flex flex-row gap-5">
                                <div class="d-flex flex-row align-items-center gap-2">
                                    <i class="fa-solid fa-user accent-color"></i>
                                    <span>Goodsound</span>
                                </div>
                                <div class="d-flex flex-row align-items-center gap-2">
                                    <i class="fa-solid fa-calendar accent-color"></i>
                                    <span>
                                        {{ $post->created_at->format('d M Y') }}
                                    </span>
                                </div>
                            </div>
                            <img src="{{ Voyager::image($post->{'img_'.app()->getLocale()}) }}" alt="image" class="img-fluid rounded-3"
                            style="height: 300px;
    width: auto;
    object-fit: contain;
        float: left;
    display: table;
    max-width: fit-content;"
                            >
                            <div>
                                {!! $post->body !!}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

@endsection