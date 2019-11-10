@extends('Frontend.layouts.app')

@section('content')
                <section class="page-banner homepage-default">
                        <div class="container">
                            <div class="homepage-banner-warpper">
                                <div class="homepage-banner-content">
                                    <div class="group-title">
                                        <h1 class="title">{{setting('site.title-'.Lang::locale())}}</h1>
                                        {{-- <h1 class="title">{{ trans('date.this_year')}} </h1> --}}
                                        <p class="text">{{setting('site.description-'.Lang::locale())}}
                                            <span class="boder"></span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section>
                        <div class="tab-search tab-search-long tab-search-default">
                            <div class="container">
                                <div class="row">
                                    <div class="col-xs-12">
                                        <ul role="tablist" class="nav nav-tabs">
                                            <li role="presentation" class="tab-btn-wrapper active">
                                                <a href="#busway" aria-controls="busway" role="tab" data-toggle="tab" class="tab-btn">
                                                    <i class="icons flaticon-people"></i>
                                                    <span class="text">ONE WAY</span>
                                                    <span class="xs"></span>
                                                </a>
                                            </li>
                                            <li role="presentation" class="tab-btn-wrapper">
                                                <a href="#busround" aria-controls="busround" role="tab" data-toggle="tab" class="tab-btn">
                                                    <i class="icons flaticon-people"></i>
                                                    <span class="text">ROUND TRIP</span>
                                                    <span class="xs"></span>
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="tab-content-bg">
                                <div class="container">
                                    <div class="row">
                                        <div class="col-xs-12">
                                            <div class="tab-content">
                                                <div role="tabpanel" id="busway" class="tab-pane fade in active">
                                                    <div class="find-widget find-flight-widget widget">
                                                        <h4 class="title-widgets">Book your seat now</h4>
                                                                        <form class="content-widget">
                                                                <div class="ffw-radio-selection">

                                                                    <div class="stretch">&nbsp;</div>
                                                                </div>
                                                                <div class="text-input small-margin-top">
                                                                    <div class="place text-box-wrapper">
                                                                        <label class="tb-label">Form</label>
                                                                        <div class="select-wrapper">
                                                                            <!--i.fa.fa-chevron-down-->
                                                                            <select class="form-control custom-select selectbox">
                                                                                <option>dhab</option>
                                                                                <option>aswan</option>
                                                                                <option>cairo</option>

                                                                            </select>
                                                                        </div>
                                                                        <label class="tb-label">To</label>
                                                                        <div class="select-wrapper">
                                                                            <!--i.fa.fa-chevron-down-->
                                                                            <select class="form-control custom-select selectbox">
                                                                                 <option>dhab</option>
                                                                                <option>aswan</option>
                                                                                <option>cairo</option>
                                                                           </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="input-daterange">
                                                                        <div class="text-box-wrapper half">
                                                                            <label class="tb-label">Check in</label>
                                                                            <div class="input-group">
                                                                                <input type="text" placeholder="MM/DD/YY" class="tb-input">
                                                                                <i class="tb-icon fa fa-calendar input-group-addon"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-box-wrapper half">
                                                                            <label class="tb-label">Check out</label>
                                                                            <div class="a-link">
                                                                              <a href="#">Choose Return Date</a>
                                                                                <i class="fa fa-calendar"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="count adult-count text-box-wrapper">
                                                                        <label class="tb-label">Adult</label>
                                                                        <div class="select-wrapper">
                                                                            <!--i.fa.fa-chevron-down-->
                                                                            <select class="form-control custom-select selectbox">
                                                                                <option selected="selected">1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option>4</option>
                                                                                <option>5</option>
                                                                                <option>6</option>
                                                                                <option>7</option>
                                                                                <option>8</option>
                                                                                <option>9</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="count child-count text-box-wrapper">
                                                                        <label class="tb-label">Child</label>
                                                                        <div class="select-wrapper">
                                                                            <!--i.fa.fa-chevron-down-->
                                                                            <select class="form-control custom-select selectbox">
                                                                                <option selected="selected">0</option>
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option>4</option>
                                                                                <option>5</option>
                                                                                <option>6</option>
                                                                                <option>7</option>
                                                                                <option>8</option>
                                                                                <option>9</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <button type="submit" data-hover="SEARCH NOW" class="btn btn-slide">
                                                                        <span class="text">SEARCH NOW</span>
                                                                        <span class="icons fa fa-long-arrow-right"></span>
                                                                    </button>
                                                                </div>
                                                            </form>

                                                    </div>
                                                </div>
                                                <div role="tabpanel" id="busround" class="tab-pane fade">
                                                    <div class="find-widget find-transfer-widget widget">
                                                        <h4 class="title-widgets">BOOK YOUR SEAT NOW</h4>
                                                            <form class="content-widget">
                                                                <div class="ffw-radio-selection">

                                                                    <div class="stretch">&nbsp;</div>
                                                                </div>
                                                                <div class="text-input small-margin-top">
                                                                    <div class="place text-box-wrapper">
                                                                        <label class="tb-label">Form</label>
                                                                        <div class="select-wrapper">
                                                                            <!--i.fa.fa-chevron-down-->
                                                                            <select class="form-control custom-select selectbox">
                                                                                <option>dhab</option>
                                                                                <option>aswan</option>
                                                                                <option>cairo</option>

                                                                            </select>
                                                                        </div>
                                                                        <label class="tb-label">To</label>
                                                                        <div class="select-wrapper">
                                                                            <!--i.fa.fa-chevron-down-->
                                                                            <select class="form-control custom-select selectbox">
                                                                                 <option>dhab</option>
                                                                                <option>aswan</option>
                                                                                <option>cairo</option>
                                                                           </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="input-daterange">
                                                                        <div class="text-box-wrapper half">
                                                                            <label class="tb-label">Check in</label>
                                                                            <div class="input-group">
                                                                                <input type="text" placeholder="MM/DD/YY" class="tb-input">
                                                                                <i class="tb-icon fa fa-calendar input-group-addon"></i>
                                                                            </div>
                                                                        </div>
                                                                        <div class="text-box-wrapper half">
                                                                            <label class="tb-label">Check out</label>
                                                                            <div class="input-group">
                                                                                <input type="text" placeholder="MM/DD/YY" class="tb-input">
                                                                                <i class="tb-icon fa fa-calendar input-group-addon"></i>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                    <div class="count adult-count text-box-wrapper">
                                                                        <label class="tb-label">Adult</label>
                                                                        <div class="select-wrapper">
                                                                            <!--i.fa.fa-chevron-down-->
                                                                            <select class="form-control custom-select selectbox">
                                                                                <option selected="selected">1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option>4</option>
                                                                                <option>5</option>
                                                                                <option>6</option>
                                                                                <option>7</option>
                                                                                <option>8</option>
                                                                                <option>9</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <div class="count child-count text-box-wrapper">
                                                                        <label class="tb-label">Child</label>
                                                                        <div class="select-wrapper">
                                                                            <!--i.fa.fa-chevron-down-->
                                                                            <select class="form-control custom-select selectbox">
                                                                                <option selected="selected">0</option>
                                                                                <option>1</option>
                                                                                <option>2</option>
                                                                                <option>3</option>
                                                                                <option>4</option>
                                                                                <option>5</option>
                                                                                <option>6</option>
                                                                                <option>7</option>
                                                                                <option>8</option>
                                                                                <option>9</option>
                                                                            </select>
                                                                        </div>
                                                                    </div>
                                                                    <button type="submit" data-hover="SEARCH NOW" class="btn btn-slide">
                                                                        <span class="text">SEARCH NOW</span>
                                                                        <span class="icons fa fa-long-arrow-right"></span>
                                                                    </button>
                                                                </div>
                                                            </form>
                                      </div>
                                                </div>

                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="about-us layout-1 padding-top padding-bottom">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-7">
                                    <div class="group-title">
                                        <div class="sub-title">
                                            <p class="text">be born again</p>
                                            <i class="icons flaticon-people"></i>
                                        </div>
                                        <h2 class="main-title">{{setting('about.about-'.Lang::locale())}}</h2>
                                    </div>

                                    <div class="about-us-wrapper">
                                        {!!  setting('about.content-'.Lang::locale())!!}
                                    </div>
                                        <div class="group-button">
    
                                        </div>
                                    </div>
                                <div class="col-md-5">
                                    <div data-wow-delay="0.5s" class="about-us-image wow zoomIn">
                                        <img src="{{ asset('storage/'.setting('about.photo'))}}" alt="" class="img-responsive bus">
                                    </div>
                                </div>
                            </div>

                        </div>
                        </div>
                    </section>


                    <section class="videos layout-1">
                        <div class="clouds_one"></div>
                        <div class="clouds_two"></div>
                        <div class="container">
                            <div class="row">
                                <div class="col-md-5">
                                    <div class="video-wrapper padding-top padding-bottom">
                                        {!! setting('home-page.content-'.Lang::locale()) !!}
                                        {{-- <h5 class="sub-title">it’s a
                                            <strong>big world</strong> out there</h5>
                                        <h2 class="title">go super jet</h2>
                                        <div class="text">There are many variations of passages of. Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look.</div> --}}
                                        {{-- <a href="tour-result.html" class="btn btn-maincolor">read more</a> --}}
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <div class="video-thumbnail">
                                        <div class="video-bg">
                                            <img src="{{ asset('assets/images/homepage/video-bg.jpg')}}" alt="" class="img-responsive">
                                        </div>
                                        <div class="video-button-play">
                                            <i class="icons fa fa-play"></i>
                                        </div>
                                        <div class="video-button-close"></div>
                                            {!! setting('home-page.video_link') !!}
                                        </div>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="hotels padding-top padding-bottom">
                        <div class="container">
                            <div class="hotels-wrapper">
                                <div class="group-title">
                                    <div class="sub-title">
                                        <p class="text">GUARANTEED QUALITY</p>
                                        <i class="icons flaticon-people"></i>
                                    </div>
                                    <h2 class="main-title">Recommended hotels</h2>
                                </div>
                                <div class="hotels-content margin-top70">
                                    <div class="row hotels-list">
                                        @foreach ($Bus as $item)
                                            <div class="col-sm-6">
                                                <div class="hotels-layout">
                                                    <div class="image-wrapper">
                                                        <a href="hotel-view.html" class="link">
                                                            <img src="{{ asset('storage/'.$item->photo)}}" alt="" class="img-responsive">
                                                        </a>
                                                        <div class="title-wrapper">
                                                            <a href="hotel-view.html" class="title">{{$item->name}}</a>
                                                         
                                                        </div>
                                                        {{-- <div class="label-sale">
                                                            <p class="text">sale</p>
                                                            <p class="number">35%</p>
                                                        </div> --}}
                                                    </div>
                                                    <div class="content-wrapper">
                                                        <div class="content">
                                                         
                                                            <p class="text">
                                                                {{-- {{$item->getTranslatedAttribute('doc', 'locale', 'fallbackLocale')}} --}}
                                                                {{$item->doc}}
                                                            </p>

                                                        </div>
                                                        <ul class="list-info list-unstyled">
                                                            
                                                            <li>
                                                                <a href="#" class="link">
                                                                    <i class="icons fa fa-wifi"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">
                                                                    <i class="icons fa fa-tv"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">
                                                                    <i class="icons fa fa-coffee"></i>
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="javascript:void(0)" class="link">
                                                                    <i class="icons fa fa-share-alt"></i>
                                                                </a>
                                                                <ul class="share-social-list">
                                                                    <li>
                                                                        <a href="#" class="link-social">
                                                                            <i class="icons fa fa-facebook"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="link-social">
                                                                            <i class="icons fa fa-google-plus"></i>
                                                                        </a>
                                                                    </li>
                                                                    <li>
                                                                        <a href="#" class="link-social">
                                                                            <i class="icons fa fa-twitter"></i>
                                                                        </a>
                                                                    </li>
                                                                </ul>
                                                            </li>
                                                            <li>
                                                                <a href="#" class="link">
                                                                    <i class="icons fa fa-map-marker"></i>
                                                                </a>
                                                            </li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>
                                        @endforeach
                                 
                                    </div>
                                    <a href="about-us.html" class="btn btn-transparent margin-top70">more BUS</a>
                                </div>
                            </div>
                        </div>
                    </section>
                    <section class="travelers">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="traveler-wrapper padding-top padding-bottom">
                                        <div class="group-title white">
                                            <div class="sub-title">
                                                <p class="text">RELAX AND ENJOY</p>
                                                <i class="icons flaticon-people"></i>
                                            </div>
                                            <h2 class="main-title">happy traveler</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="traveler-list">
                                        @foreach ($HappyTraveler as $item)
                                            <div class="traveler">
                                                <div class="cover-image">
                                                    <img src="{{ asset('storage/'.$item->cover)}}" alt="">
                                                </div>
                                                <div class="wrapper-content">
                                                    <div class="avatar">
                                                        <img src="{{ asset('storage/'.$item->photo)}}" alt="" class="img-responsive">
                                                    </div>
                                                    <p class="name">{{$item->name}}</p>
                                                    <p class="address">{{$item->city}}</p>
                                                    <p class="description">"{{$item->comment}}"</p>
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
@endsection
