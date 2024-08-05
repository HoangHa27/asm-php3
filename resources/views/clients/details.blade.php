@extends('clients.layouts.master')

@section('title')
    {{ $news->title }}
@endsection

@section('breadcump')
    <div class="banner text-center">
        @include('clients.components.breadcump', [
            'page' => '' . $news->title,
            'breadcump' => '',
        ])
    </div>
@endsection

@section('content')
    <section class="section">
        <div class="container">
            <div class="row justify-content-center">
                <div class=" col-lg-9   mb-5 mb-lg-0">
                    <article>
                        <div class="post-slider mb-4">
                            <img class="card-img-top" style="height: 500px; width: 100%;"
                                src="{{ \Storage::url($news->image) }}" alt="Loading...">
                        </div>

                        <h1 class="h2">{{ $news->title }}</h1>
                        <ul class="card-meta my-3 list-inline">
                            <li class="list-inline-item">
                                <a href="author-single.html" class="card-meta-author">
                                    <img src="/themes/clients/images/john-doe.jpg" alt="No image">

                                </a>
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-timer"></i>{{ $news->created_at }}
                            </li>
                            <li class="list-inline-item">
                                <i class="ti-eye"></i>{{ $news->views }}
                            </li>
                            <li class="list-inline-item">
                                <ul class="card-meta-tag list-inline">
                                    <li class="list-inline-item"><a href="">{{ $news->category->name }}</a></li>
                                </ul>
                            </li>
                        </ul>
                        <div class="content">
                            {{ $news->description }}
                        </div>
                    </article>

                </div>


            </div>
        </div>
    </section>
@endsection
