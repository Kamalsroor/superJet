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
                               
                            </div>
                        </div>
                    </div>
                </div>
            
        
            </div>
        </div>
    </section>
@endsection
