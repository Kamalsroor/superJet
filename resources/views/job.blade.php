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
                    <h2 class="captions">JOBS</h2>
                   
                </div>
            </div>
        </div>
    </section>
    <section>
        <div class="tour-view-main padding-top padding-bottom">
            <div class="container">
                <h2 class="title-style-2">JOBS
                   
                </h2>
                <div class="journey-block margin-top70">
                    <div class="overview-block clearfix">
                    
                        <div class="timeline-container">
                            <div class="timeline">
                                <?php $i = 1 ?>
                                @foreach ($Jobs as $job)
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
                                                            <a href="{{route('job.contact')}}"><p class="location-name">{{$job->name}}
                                                        
                                                            <i class="fa fa-check icon-marker"></i>
                                                        </p></a>
                                                    <p class="description">{{Str::limit($job->content, 350, '...') }}</p>
                                                    <a href="{{route('job.contact')}}">
                                                    <br>
                                                    <p class="location-name">تسجيل</p></a>    
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
                                {{-- <div class="timeline-block">
                                    <div class="timeline-title">
                                        <span>02</span>
                                    </div>
                                    <div class="timeline-content medium-margin-top">
                                        <div class="row">
                                            <div class="timeline-point">
                                                <i class="fa fa-circle-o"></i>
                                            </div>
                                            <div class="timeline-custom-col content-col">
                                                <div class="timeline-location-block">
                                                    <p class="location-name">the mission

                                                        <i class="fa fa-check icon-marker"></i>
                                                    </p>
                                                    <p class="description">Lorem ipsum dolor sit amet, consectetur. Nulla rhoncus ultrices purus, volutpat. Lorem ipsum dolor sit amet, consectetur elit dolor sit amet, consectetur nulla rhoncus ultrices purus.
                                                        Lorem ipsum dolor sit amet, consectetur elit dolor sit amet. Lorem ipsum dolor sit amet, consectetur elit dolor sit amet, consectetur nulla rhoncus ultrices purus.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-custom-col image-col">
                                                <div class="timeline-image-block">
                                                    <img src="assets/images/tour-view/london.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-block">
                                    <div class="timeline-title">
                                        <span>03</span>
                                    </div>
                                    <div class="timeline-content medium-margin-top">
                                        <div class="row">
                                            <div class="timeline-point">
                                                <i class="fa fa-circle-o"></i>
                                            </div>
                                            <div class="timeline-custom-col content-col">
                                                <div class="timeline-location-block">
                                                    <p class="location-name">Objectives
                                                        <i class="fa fa-check icon-marker"></i>
                                                    </p>
                                                    <p class="description">Lorem ipsum dolor sit amet, consectetur. Nulla rhoncus ultrices purus, volutpat. Lorem ipsum dolor sit amet, consectetur elit dolor sit amet, consectetur nulla rhoncus ultrices purus.
                                                        Lorem ipsum dolor sit amet, consectetur elit dolor sit amet. Lorem ipsum dolor sit amet, consectetur elit dolor sit amet, consectetur nulla rhoncus ultrices purus.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-custom-col image-col">
                                                <div class="timeline-image-block">
                                                    <img src="assets/images/tour-view/london.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="timeline-block">
                                    <div class="timeline-title">
                                        <span>04</span>
                                    </div>
                                    <div class="timeline-content medium-margin-top">
                                        <div class="row">
                                            <div class="timeline-point">
                                                <i class="fa fa-circle-o"></i>
                                            </div>
                                            <div class="timeline-custom-col content-col">
                                                <div class="timeline-location-block">
                                                    <p class="location-name">Historical development
                                                        <i class="fa fa-check icon-marker"></i>
                                                    </p>
                                                    <p class="description">Lorem ipsum dolor sit amet, consectetur. Nulla rhoncus ultrices purus, volutpat. Lorem ipsum dolor sit amet, consectetur elit dolor sit amet, consectetur nulla rhoncus ultrices purus.
                                                        Lorem ipsum dolor sit amet, consectetur elit dolor sit amet. Lorem ipsum dolor sit amet, consectetur elit dolor sit amet, consectetur nulla rhoncus ultrices purus.</p>
                                                </div>
                                            </div>
                                            <div class="timeline-custom-col image-col">
                                                <div class="timeline-image-block">
                                                    <img src="assets/images/tour-view/london.png" alt="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
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
        </div>
    </section>
@endsection
