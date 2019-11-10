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
                            <a href="hotel-result.html" class="link">{{$Contactes->branch_name}}</a>
                        </li>
                      
                    </ol>
                    <div class="clearfix"></div>
                    <h2 class="captions">Contact us</h2>
                   
                </div>
            </div>
        </div>
    </section>
    <section class="page-contact-form padding-top padding-bottom">
        <div class="container">
            <div class="wrapper-contact-form">
                <div data-wow-delay="0.5s" class="contact-wrapper wow fadeInLeft">
                    <div class="contact-box">
                        <h5 class="title">{{$Contactes->branch_name}}</h5>
                     <div class="wrapper-info">
                <div class="map-info">
                    <p class="address">
                        <i class="fa fa-map-marker"></i> {{$Contactes->address}}</p>
                    <p class="phone">
                        <i class="fa fa-phone"></i> {{$Contactes->phone}}</p>
                    <p class="mail">
                        <a href="mailto:domain@expooler.com">
                            <i class="fa fa-envelope-o"></i>{{$Contactes->email}}</a>
                    </p>
                </div>
            </div>
           
                    </div>
                </div>
                <div data-wow-delay="0.5s" class="wrapper-form-images wow fadeInRight">
                        {!!$Contactes->map!!}
                   
                </div>
            </div>
        </div>
    </section>
@endsection
