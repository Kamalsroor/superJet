@extends('Frontend.layouts.app')

@section('content')
    <section class="page-banner tour-view">
        <div class="container">
            <div class="page-title-wrapper">
                <div class="page-title-content">
                    <ol class="breadcrumb">
                        <li>
                            <a href="index-2.html" class="link home">Home</a>
                        </li>
                        <li>
                            <a href="hotel-result.html" class="link">about</a>
                        </li>
                      
                    </ol>
                    <div class="clearfix"></div>
                    <h2 class="captions">About</h2>
                   
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="tour-view-main padding-top padding-bottom">
            <div class="container">
                <h2 class="title-style-2">about
                   
                </h2>
                <div class="journey-block margin-top70">
                    <h3 class="title-style-3">Epic journeys</h3>
                    <div class="wrapper-journey">
                        <div class="item feature-item">
                            <i class="icon-journey flaticon-interface"></i>
                            <p class="text">Insurrance</p>
                        </div>
                        <div class="item feature-item">
                            <i class="icon-journey flaticon-cup"></i>
                            <p class="text">All drink inculded</p>
                        </div>
                        <div class="item feature-item">
                            <i class="icon-journey flaticon-food-2"></i>
                            <p class="text">Lunch in restaurant</p>
                        </div>
                        <div class="item feature-item">
                            <i class="icon-journey flaticon-money-1"></i>
                            <p class="text">booking online</p>
                        </div>
                        <div class="item feature-item">
                            <i class="icon-journey flaticon-man"></i>
                            <p class="text">guide helper</p>
                        </div>
                        <div class="item feature-item">
                            <i class="icon-journey flaticon-technology"></i>
                            <p class="text">DVD</p>
                        </div>
                    </div>
                    <div class="overview-block clearfix">
                        <h3 class="title-style-3">About Suberjet</h3>
                        <div class="timeline-container">
                            <div class="timeline">
                                    <?php $i = 1 ?>
                                    @foreach ($About as $job)
                                        <div class="timeline-block">
                                            <div class="timeline-title">
                                                <span>{{$i}}</span>
                                            </div>
                                            <div class="timeline-content medium-margin-top">
                                                <div class="row">
                                                    <div class="timeline-point">
                                                        <i class="fa fa-circle-o"></i>
                                                    </div>
                                                    <div class="timeline-custom-col content-col">
                                                        <div class="timeline-location-block">
                                                                <p class="location-name">{{$job->titel}}
                                                            
                                                                <i class="fa fa-check icon-marker"></i>
                                                            </p>
                                                        <p class="description">{{Str::limit($job->body, 350, '...') }}</p>
                                                       
                                                    </div>
                                                    </div>
                                                    <div class="timeline-custom-col image-col">
                                                        <div class="timeline-image-block">
                                                            <img src="{{ asset('storage/'.$job->photo)}}" alt="">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <?php $i++ ?>
                                    @endforeach
                            </div>
                        </div>
                    </div>
                </div>
                <div class="wrapper-btn margin-top70">
                    <a href="#" class="btn btn-maincolor btn-book-tour">book now</a>
                </div>
                <div class="timeline-book-block book-tour">
                    <div class="find-widget find-hotel-widget widget new-style">
                        <h4 class="title-widgets">BOOK ROOM</h4>
                        <form class="content-widget">
                            <div class="text-input small-margin-top">
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
                                <div class="first-name text-box-wrapper">
                                    <label class="tb-label">Your First Name</label>
                                    <div class="input-group">
                                        <input type="text" placeholder="Write your first name" class="tb-input">
                                    </div>
                                </div>
                                <div class="last-name text-box-wrapper">
                                    <label class="tb-label">Your Last Name</label>
                                    <div class="input-group">
                                        <input type="text" placeholder="Write your last name" class="tb-input">
                                    </div>
                                </div>
                                <div class="email text-box-wrapper">
                                    <label class="tb-label">Your Email</label>
                                    <div class="input-group">
                                        <input type="email" placeholder="Write your email address" class="tb-input">
                                    </div>
                                </div>
                                <div class="phone text-box-wrapper">
                                    <label class="tb-label">Your Number Phone</label>
                                    <div class="input-group">
                                        <input type="text" placeholder="Write your number phone" class="tb-input">
                                    </div>
                                </div>
                                <div class="place text-box-wrapper">
                                    <label class="tb-label">Where are your address?</label>
                                    <div class="input-group">
                                        <input type="text" placeholder="Write your address" class="tb-input">
                                    </div>
                                </div>
                                <div class="note text-box-wrapper">
                                    <label class="tb-label">Note:</label>
                                    <div class="input-group">
                                        <textarea placeholder="Write your note" rows="3" name="content" class="tb-input"></textarea>
                                    </div>
                                </div>
                                <button type="submit" data-hover="SEND REQUEST" class="btn btn-slide">
                                    <span class="text">BOOK Now</span>
                                    <span class="icons fa fa-long-arrow-right"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            {{-- <div class="gallery-block margin-top70">
                <div class="container">
                    <h3 class="title-style-2">Gallery</h3>
                    <div class="grid">
                        <div class="grid-sizer"></div>
                        <div class="gutter-sizer"></div>
                        <div class="grid-item grid-item--big">
                            <div class="gallery-image">
                                <a href="assets/images/tour-view/fancybox-1.png" data-fancybox-group="gallery" class="title-hover dh-overlay fancybox">
                                    <i class="icons fa fa-eye"></i>
                                </a>
                                <div class="bg"></div>
                            </div>
                        </div>
                        <div class="grid-item grid-item--medium">
                            <div class="gallery-image">
                                <a href="assets/images/tour-view/fancybox-1.png" data-fancybox-group="gallery" class="title-hover dh-overlay fancybox">
                                    <i class="icons fa fa-eye"></i>
                                </a>
                                <div class="bg"></div>
                            </div>
                        </div>
                        <div class="grid-item img-small pdr">
                            <div class="gallery-image">
                                <a href="assets/images/tour-view/fancybox-3.png" data-fancybox-group="gallery" class="title-hover dh-overlay fancybox">
                                    <i class="icons fa fa-eye"></i>
                                </a>
                                <div class="bg"></div>
                            </div>
                        </div>
                        <div class="grid-item img-small pdl">
                            <div class="gallery-image">
                                <a href="assets/images/tour-view/fancybox-4.png" data-fancybox-group="gallery" class="title-hover dh-overlay fancybox">
                                    <i class="icons fa fa-eye"></i>
                                </a>
                                <div class="bg"></div>
                            </div>
                        </div>
                        <div class="grid-item grid-item--width2">
                            <div class="gallery-image">
                                <a href="assets/images/tour-view/fancybox-5.png" data-fancybox-group="gallery" class="title-hover dh-overlay fancybox">
                                    <i class="icons fa fa-eye"></i>
                                </a>
                                <div class="bg"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}
        </div>
    </section>
@endsection

@section('script')
<script src="{{ asset('assets/js/pages/tour-view.js')}}"></script>
<script src="{{ asset('assets/libs/isotope/isotope.min.js')}}"></script>
<script src="{{ asset('assets/libs/fancybox/js/jquery.mousewheel-3.0.6.pack.js')}}"></script>
<script src="{{ asset('assets/libs/fancybox/js/jquery.fancybox.js')}}"></script>
<script src="{{ asset('assets/libs/fancybox/js/jquery.fancybox-buttons.js')}}"></script>
<script src="{{ asset('assets/libs/fancybox/js/jquery.fancybox-thumbs.js')}}"></script>
<script src="{{ asset('assets/libs/mouse-direction-aware/jquery.directional-hover.js')}}"></script>
<script src="{{ asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js')}}"></script>

@endsection

