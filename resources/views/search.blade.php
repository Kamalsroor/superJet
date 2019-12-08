<?php 
use Arabic\Arabic;
?>
@extends('Frontend.layouts.app')

@section('style')
<script src="{{ asset('assets/libs/jquery/jquery-2.2.3.min.js')}}"></script>
<link type="text/css" rel="stylesheet" href="{{ asset('assets/libs/nst-slider/css/jquery.nstSlider.min.css')}}">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}">
@endsection

@section('content')
<section class="page-banner tour-result">
    <div class="container">
        <div class="page-title-wrapper">
            <div class="page-title-content">
                <hr/>
                <ol class="breadcrumb">
                    <li>
                        <span class="link home">FROM</span>
                    </li>
                    <li>
                        <h3 class="captions">{{$TripOfficeFrom->Name}}</h3>
                    </li> 
                    <li>
                        <span class="link home">TO</span>
                    </li>
                    <li>
                        <h3 class="captions">{{$TripOfficeTo->Name}}</h3>
                    </li>
                </ol>
            </div>
        </div>
    </div>
</section>
<div class="page-main">
    <div class="clearfix"></div>
    <div class="tour-result-main padding-top-20">
        <div class="container">
            <div class="list-continents">
                <div class="list-continent-wrapper">
                    <div class="continent inner-cho">
                        <span class="text">From</span>
                        <i class="icons fa fa-map-marker"></i>
                        <span class="text">{{$TripOfficeFrom->Name}}</span>
                    </div>
                </div>
                <div class="list-continent-wrapper">
                    <div class="continent">
                        <span class="text">To</span>
                        <i class="icons fa fa-map-marker"></i>
                        <span class="text">{{$TripOfficeTo->Name}}</span>
                    </div>
                </div>
                <div class="list-continent-wrapper">
                    <div class="continent">
                        <span class="text">Check in</span>
                        <i class="icons fa fa-calendar"></i>
                        <span class="font-13">{{Arabic::adate(' j من F Y g:i A', $data['TripDateTimeFrom']) }}</span>
                    </div>
                </div>
                <div class="list-continent-wrapper">
                    <div class="continent">
                        <span class="text">Check out</span>
                        <i class="icons fa fa-calendar"></i>
                        <span class="font-13">{{Arabic::adate(' j من F Y g:i A', $data['TripDateTimeTo']) }}</span>
                    </div>
                </div>
                <div class="list-continent-wrapper">
                    <div class="continent">
                        <span>Adult</span>
                        <i class="icons fa  fa-user"></i>
                        <span class="text">1 </span>
                    </div>
                </div>
                 <div class="list-continent-wrapper">
                    <div class="continent">
                        <span class="text">Child</span>
                        <i class="icons fa  fa-user"></i>
                        <span>0</span> 
                    </div>
                </div>
            </div>
          <div class="tab-search-long-edit d-flex  margin-bottom-20">
               <button type="submit" data-hover="SEARCH NOW" class="btn btn-slide">
                    <span class="text">Edit Search</span>
                    <span class="icons fa fa-long-arrow-right"></span>
                </button>
           
            </div>
            <div class="result-body">
                <div class="row">
                     <div class="col-md-8 main-right">
                         <div class="hotels-content margin-top70">
                            <div class="row hotels-list">
                                @foreach ($Bus as $Bu)
                                    <div class="col-sm-12">
                                        <div class="hotels-layout margin-bottom-5">
                                            <div class="image-wrapper">
                                                <a href="{{route('home.bus',$Bu->id)}}" class="link">
                                                    <img src="assets/images/hotels/hotel-1.jpg" alt="" class="img-responsive">
                                                </a>
                                                <div class="title-wrapper">
                                                <a href="{{route('home.bus',$Bu->id)}}" class="title">{{$Bu->TripName}}</a>
                                                </div>
                                                <div class="label-sale">
                                                        <p class="text">{{$Bu->ServiceKind}}</p>
                                                        <p class="text">{{$Bu->ServiceKind}}</p>
                                                </div>
                                            </div>
                                            <div class="content-wrapper">
                                                <div class="content">
                                                    <div class="title">
                                                        <div class="price">
                                                            <sup>EGP</sup>
                                                            <span class="number">{{$Bu->TripPrice}}</span>
                                                        </div>
                                                        <p class="for-price">for person</p>
                                                    </div>
                                                    <p class="text">
                                                        {{ Arabic::adate(' j من F Y g:i A', $Bu->TripDateTime)}}
                                                    </p>

                                                </div>
                                                <ul class="list-info list-unstyled">
                                                    <li>
                                                        <a href="#" class="link">
                                                            <i class="icons  fa fa-wifi"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="link">
                                                            <i class="icons  fa fa-tv"></i>
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a href="#" class="link">
                                                            <i class="icons  fa fa-coffee"></i>
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
                        </div>
  
                         <nav class="pagination-list margin-top70">
                            <ul class="pagination">
                                <li>
                                    <a href="#" aria-label="Previous" class="btn-pagination previous">
                                        <span aria-hidden="true" class="fa fa-angle-left"></span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#" class="btn-pagination active">01</a>
                                </li>
                                <li>
                                    <a href="#" class="btn-pagination">02</a>
                                </li>
                                <li>
                                    <a href="#" class="btn-pagination">03</a>
                                </li>
                                <li>
                                    <a href="#" class="btn-pagination">...</a>
                                </li>
                                <li>
                                    <a href="#" aria-label="Next" class="btn-pagination next">
                                        <span aria-hidden="true" class="fa fa-angle-right"></span>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                  
                    <div class="col-md-4 sidebar-widget">
                             <div class="col-1">
                                <div class="turkey-cities-widget widget">
                                    <div class="title-widget">
                                        <div class="title">tType serives</div>
                                    </div>
                                    <div class="content-widget">
                                        <form class="radio-selection">
                                            <div class="radio-btn-wrapper">
                                                <input type="radio" name="car-type" value="Economy" id="Economy" class="radio-btn">
                                                <label for="Economy" class="radio-label">VIP</label>
                                            </div>
                                            <div class="radio-btn-wrapper">
                                                <input type="radio" name="car-type" value="Compact" id="Compact" class="radio-btn">
                                                <label for="Compact" class="radio-label">VIP</label>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                       
                       <div class="col-2">
                            <div class="col-1">
                                <div class="price-widget widget">
                                    <div class="title-widget">
                                        <div class="title">price</div>
                                    </div>
                                    <div class="content-widget">
                                        <div class="price-wrapper">
                                            <div data-range_min="0" data-range_max="3000" data-cur_min="450" data-cur_max="1800" class="nstSlider">
                                                <div class="leftGrip indicator">
                                                    <div class="number"></div>
                                                </div>
                                                <div class="rightGrip indicator">
                                                    <div class="number"></div>
                                                </div>
                                            </div>
                                            <div class="leftLabel">0</div>
                                            <div class="rightLabel">3000</div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
         </div>
    </div>
</div>
@endsection

@section('script')

        <!-- LOADING JS FOR PAGE-->
        <script src="{{ asset('assets/libs/bootstrap-datepicker/js/bootstrap-datepicker.min.js') }}"></script>
        <script src="{{ asset('assets/libs/nst-slider/js/jquery.nstSlider.min.js') }}"></script>
        <script src="{{ asset('assets/libs/plus-minus-input/plus-minus-input.js') }}"></script>
        <script src="{{ asset('assets/js/pages/sidebar.js') }}"></script>
        <script src="{{ asset('assets/js/pages/result.js') }}"></script>
@endsection

