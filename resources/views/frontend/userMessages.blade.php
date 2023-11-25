@extends('welcome')
@section('content')

    <div class="breadcrumb-container">
        <div class="container">
            <ol class="breadcrumb">
                <li><i class="fa fa-home pr-10"></i><a href="{{route('frontend.index')}}">Home</a></li>
                <li><a href="{{route('frontend.details')}}">Account Details</a></li>
                <li class="active">Account Messages</li>
            </ol>
        </div>
    </div>
    <section class="main-container">
        <div class="container">
            <div class="row">
                <div class="main col-md-12">
                    <ul class="nav nav-tabs style-1" role="tablist">
                        <li class="active"><a href="#tab1" role="tab" data-toggle="tab"><i class="fa fa-user pr-10"></i>Messages</a>
                        </li>
                    </ul>
                    <div class="tab-content">
                        <div class="tab-pane fade in active" id="tab1">
                            <div class="panel-group collapse-style-1" id="accordion-faq-2">
                                <article class="blogpost">
                                    <header>
                                        <h2><a href="blog-post.html">{{ $message->subject }}</a></h2>
                                        <div class="post-info">
										<span class="post-date">
											<i class="icon-calendar"></i>
											<span class="date">{{ $date }}</span>
										</span>
                                            <span class="submitted"><i class="icon-user-1"></i> by <a href="#">{{ $message->fullName }}</a></span>
                                            <span class="comments"><i class="icon-mail"></i> <a href="mailto:{{ $message->email }}">{{ $message->email }} </a></span>
                                        </div>
                                    </header>
                                    <div class="blogpost-content">
                                        <p>{{ $message->message }}</p>
                                    </div>
                                    <div class="separator-2"></div>
                                </article>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
