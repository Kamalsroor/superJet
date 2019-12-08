<?php 
use Arabic\Arabic;
?>
@extends('Frontend.layouts.app')

@section('style')
<script src="{{ asset('assets/libs/jquery/jquery-2.2.3.min.js')}}"></script>
<link type="text/css" rel="stylesheet" href="{{ asset('assets/libs/nst-slider/css/jquery.nstSlider.min.css')}}">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/libs/bootstrap-datepicker/css/bootstrap-datepicker.min.css')}}">
<link type="text/css" rel="stylesheet" href="{{ asset('assets/css/seat.css')}}">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.css" id="theme-styles">

@endsection

@section('content')
    <section class="page-banner page-banner-3 tour-result">
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
         <div class="hotel-result-main padding-top">
            <div class="container">
               <div class="result-body">
                    <div class="row">
                        <div class="col-md-8 main-right">
                            <div class="hotel-list">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <div class="hotels-layout">
                                            <div class="image-wrapper">
                                                <a  class="link">
                                                    <img src="{{ asset('assets/images/hotels/hotel-5.jpg')}}" alt="" class="img-responsive">
                                                </a>
                                                <div class="title-wrapper">
                                                    <a  class="title">{{$Bu->TripName}}</a>
                                            
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
                                                        <p class="for-price">for person </p>
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
                               </div>
                            </div>
                        </div>
                        <div class="col-md-4 sidebar-widget">
                            <div class="col-2">
                                <div class="find-widget find-widget-two find-flight-widget widget">
                                     <div class="text-input">
                                            <div class="input-daterange">
                                                <div class="text-box-wrapper half left">
                                                    <label class="tb-label tb-label-two">From :</label>
                                                     <div class="a-link">
                                                        <i class="fa fa-map-marker"></i>
                                                  <a href="#">{{$TripOfficeFrom->Name}}</a>
                                                   </div>
                                                </div> 
                                                <div class="text-box-wrapper half left">
                                                    <label class="tb-label tb-label-two">To :</label>
                                                     <div class="a-link">
                                                          <i class="fa fa-map-marker"></i>
                                                  <a href="#">{{$TripOfficeTo->Name}}</a>
                                                    </div>
                                                </div>
                                                <div class="text-box-wrapper half right">
                                                    <label class="tb-label tb-label-two">Check in :</label>
                                                    <div class="a-link">
                                                    <i class="fa fa-calendar"></i>
                                                  <a href="#">{{Arabic::adate(' j من F Y g:i A', $data['TripDateTimeFrom']) }}</a>
                                                </div>
                                                </div> 
                                                <div class="text-box-wrapper half right">
                                                    <label class="tb-label tb-label-two">Check out :</label>
                                                    <div class="a-link">
                                                    <i class="fa fa-calendar"></i>
                                                  <a href="#">{{Arabic::adate(' j من F Y g:i A', $data['TripDateTimeTo']) }}</a>
                                                  </div>
                                                </div>
                                            </div>
                                            <div class="text-box-wrapper half left">
                                                <label class="tb-label tb-label-two">Number of Adult :</label>
                                                <div class="a-link">
                                                    <i class="fa fa-user"></i>
                                                  <a href="#">1 person</a>
                                                 </div> 
                                         </div>
                                            <div class="text-box-wrapper half right">
                                                <label class="tb-label tb-label-two">Number of Child :</label>
                                               <div class="a-link">
                                                        <i class="fa fa-user"></i>
                                                      <a href="#">1 person</a>
                                                   </div> </div>
                                            </div>
                                        <button type="submit" data-hover="SEND NOW" class="btn btn-slide small-margin-top">
                                            <span class="text">Edit search</span>
                                            <span class="icons fa fa-long-arrow-right"></span>
                                        </button>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
             </div>
        </div>
   
        <section class="seat-media">
            <div class="container">
                <div class="theatre">
                    <div class="screen-side">
                        <h3 class="select-text">Please select a seat</h3>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                        <form role="form" class="form-edit-add" id="seed-form" action="{{route('seet.post')}}" method="POST" enctype="multipart/form-data">
                            <!-- PUT Method if we are editing -->
                            {{csrf_field()}}
                            {{-- {!! Form::hidden('id', $id) !!} --}}
                            <input type="hidden" name="id" value="{{$id}}">
                            <input type="hidden" name="tripdata_id" value="{{$Bu->tripdata_id}}">
                            
                            <!-- CSRF TOKEN -->
                            <ol class="cabin">
                                <li class="row row--1">
                                    <ol class="seats" type="A">
                                    @for ($i = 45; $i >= 1; $i-=4)
                                    <li class="seat">
                                            <input type="checkbox" value="{{$i}}" name="seet[]"   id="{{$i}}chess" @if (in_array($i, $Chairs)) 
                                                    disabled
                                                @endif />
                                            <label for="{{$i}}chess">
                                                <img src="{{ asset('assets/images/blog/chair_deactive.png')}}"  @if (in_array($i, $Chairs)) style=" -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
                                                        filter: grayscale(100%);"@endif > 
                                                {{$i}}
                                            </label>
                                        </li>   

                                        @if ($i == 29)
                                            <?php $k=$i-2  ?>
                                            <li class="seat">
                                                    <input type="checkbox" value="{{$k}}" name="seet[]"   id="{{$k}}chess" @if (in_array($i, $Chairs)) 
                                                    disabled
                                                @endif />
                                                    <label for="{{$k}}chess">
                                                        <img src="{{ asset('assets/images/blog/chair_deactive.png')}}"   @if (in_array($i, $Chairs)) style=" -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
                                                        filter: grayscale(100%);"@endif> 
                                                        {{$k}}
                                                    </label>
                                                </li> 
                                        @endif
                                    @endfor
                                        {{-- @for ($i = 1; $i > 1 ; $i-4)
                                            <li class="seat">
                                                <input type="checkbox" value="{{$i}}" name="seet[]" disabled  id="{{$i}}chess" />
                                                <label for="{{$i}}chess">
                                                    <img src="{{ asset('assets/images/blog/chair_deactive.png')}}" style=" -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
                                                    filter: grayscale(100%);"  > 
                                                    {{$i}}
                                                </label>
                                            </li>   
                                        @endfor --}}
                                        {{-- <li class="seat">
                                            <input type="checkbox" value="{{$i}}" name="seet[]" id="1B" />
                                            <label for="1B">
                                                <img src="{{ asset('assets/images/blog/chair_deactive.png')}}" > 
                                                1B
                                            </label>
                                        </li>  --}}
                                    </ol>
                                </li>
                                <li class="row row--1">
                                    <ol class="seats" type="A">
                                        @for ($i = 46; $i >= 1; $i-=4)
                                            <li class="seat">
                                                <input type="checkbox" value="{{$i}}" name="seet[]"   id="{{$i}}chess"  @if (in_array($i, $Chairs)) 
                                                    disabled
                                                @endif/>
                                                <label for="{{$i}}chess">
                                                    <img src="{{ asset('assets/images/blog/chair_deactive.png')}}"  @if (in_array($i, $Chairs)) style=" -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
                                                        filter: grayscale(100%);"@endif> 
                                                    {{$i}}
                                                </label>
                                            </li>   
                                            @if ($i == 30)
                                            <?php $k=$i-2  ?>
                                            <li class="seat">
                                                    <input type="checkbox" value="{{$k}}" name="seet[]"   id="{{$k}}chess"  @if (in_array($i, $Chairs)) 
                                                    disabled
                                                @endif />
                                                    <label for="{{$k}}chess">
                                                        <img src="{{ asset('assets/images/blog/chair_deactive.png')}}"   @if (in_array($i, $Chairs)) style=" -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
                                                        filter: grayscale(100%);"@endif> 
                                                        {{$k}}
                                                    </label>
                                                </li> 
                                            @endif
                                        @endfor
                                    </ol>
                                </li>
                                <li class="row row--1">
                                    <ol class="seats" type="A">
                                        <li class="seat">
                                            <input type="checkbox" value="47" name="seet[]" id="47chess"  @if (in_array(47, $Chairs)) 
                                                    disabled
                                                @endif />
                                            <label for="47chess">
                                                <img src="{{ asset('assets/images/blog/chair_deactive.png')}}" @if (in_array(47, $Chairs)) style=" -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
                                                        filter: grayscale(100%);"@endif > 
                                                47
                                            </label>
                                        </li>
                                    </ol>
                                </li>
                                <li class="row row--1">
                                    <ol class="seats" type="A">
                                        @for ($i = 48; $i >= 1; $i-=4)
                                            @if ($i == 44)
                                                <?php $i=$i-1  ?>
                                            @endif
                                            @if ($i != 27)
                                            <li class="seat">
                                                <input type="checkbox" value="{{$i}}" name="seet[]" @if (in_array($i, $Chairs)) 
                                                    disabled
                                                @endif  id="{{$i}}chess" />
                                                <label for="{{$i}}chess">
                                                        <img src="{{ asset('assets/images/blog/chair_deactive.png')}}" @if (in_array($i, $Chairs)) style=" -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
                                                        filter: grayscale(100%);"@endif > 
                                                        {{$i}}
                                                </label>
                                            </li>   
                                            @endif
                                            @if ($i == 27)
                                            <li class="seat">
                                                    <label >
                                                        W
                                                    </label>
                                                </li> 
                                            @endif
                                            @if ($i == 31)
                                            <li class="seat">
                                                    <label >
                                                        T
                                                    </label>
                                                </li> 
                                            @endif
                                        @endfor
                                    </ol>
                                </li>
                                <li class="row row--1">
                                    <ol class="seats" type="A">
                                        @for ($i = 49; $i >= 2; $i-=4)
                                            @if ($i == 45)
                                                <?php $i=$i-1  ?>
                                            @endif
                                            @if ($i != 28)
                                            <li class="seat">
                                                <input type="checkbox" value="{{$i}}" name="seet[]"   id="{{$i}}chess"  @if (in_array($i, $Chairs)) 
                                                    disabled
                                                @endif />
                                                <label for="{{$i}}chess">
                                                        <img src="{{ asset('assets/images/blog/chair_deactive.png')}}" @if (in_array($i, $Chairs)) style=" -webkit-filter: grayscale(100%); /* Safari 6.0 - 9.0 */
                                                        filter: grayscale(100%);"@endif > 
                                                        {{$i}}
                                                    </label>
                                            </li> 
                                            @endif
                                            @if ($i == 28)
                                            <li class="seat">
                                                    <label >
                                                        C
                                                    </label>
                                                </li> 
                                            @endif  
                                            @if ($i == 32)
                                            <li class="seat">
                                                    <label >
                                                        V
                                                    </label>
                                                </li> 
                                            @endif
                                        @endfor
                                    </ol>
                                </li>
                            </ol>
                        </div>
                    </div>
                </div>
                <div class="d-flex">
                    <button type="submit" data-hover="SEND NOW" class="btn btn-slide small-margin-top  margin-bottom">
                    <span class="text">BOOK NOW</span>
                    <span class="icons fa fa-long-arrow-right"></span>
                   </button>
                </div>
            </form>
            </div>
        </section>
        <div class="clearfix"></div>
    </div>
    <div class="modal fade bd-example-modal-lg login-modal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
            {{-- <div class="container"> --}}
                <div class="row">
                    <div class="col-md-6">
                        <form method="POST" action="{{ route('login') }}" style="padding: 26px;">
                            @csrf
                     
                            <div class="form-login">
                                <div class="input-login">
                                    <label class="label-login">email
                                        <i class="form-icon fa fa-asterisk"></i>
                                    </label>
                                    <input type="email"  style="border-radius: 60px !important;background-color: #efefef;" name="email" class="form-control label-input">
                                </div>
                                <div class="input-login">
                                    <label class="label-login">password
                                        <i class="form-icon fa fa-asterisk"></i>
                                    </label>
                                    <input type="password"  style="border-radius: 60px !important;background-color: #efefef;"  name="password" class="form-control label-input">
                                </div>
                                <div class="contact-submit"  style="margin-top: 20px;">
                                    <button type="submit"  data-hover="SEND NOW" class="btn btn-slide">
                                        <span class="text">sign in</span>
                                        <span class="icons fa fa-long-arrow-right"></span>
                                    </button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div class="col-md-6">
                        <form method="POST" action="{{ route('register') }}" style="padding: 26px;">
                        @csrf
                            <div class="form-login">
                                <div class="row">
                                    <div class="content-form">
                                        <div class="col-md-12">
                                            <div class="form-login">
                                                <div class="input-login">
                                                    <label class="label-login">name
                                                        <i class="form-icon fa fa-asterisk"></i>
                                                    </label>
                                                    <input type="text" style="border-radius: 60px !important;background-color: #efefef;" name="name" value="{{ old('name') }}" class="form-control label-input">
                                                    @error('name')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-login">
                                                <div class="input-login">
                                                    <label class="label-login">email
                                                        <i class="form-icon fa fa-asterisk"></i>
                                                    </label>
                                                    <input type="email" style="border-radius: 60px !important;background-color: #efefef;" name="email" value="{{ old('email') }}" class="form-control label-input">
                                                    @error('email')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-login">
                                                <div class="input-login">
                                                    <label class="label-login">password
                                                        <i class="form-icon fa fa-asterisk"></i>
                                                    </label>
                                                    <input type="password" style="border-radius: 60px !important;background-color: #efefef;" name="password" class="form-control label-input">
                                                
                                        @error('password')
                                                        <span class="invalid-feedback" role="alert">
                                                            <strong>{{ $message }}</strong>
                                                        </span>
                                                    @enderror
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-12">
                                            <div class="form-login">
                                                <div class="input-login">
                                                    <label class="label-login">confirm password
                                                        <i class="form-icon fa fa-asterisk"></i>
                                                    </label>
                                                    <input type="password" style="border-radius: 60px !important;background-color: #efefef;" name="password_confirmation" class="form-control label-input">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                    <div class="contact-submit"  style="margin-top: 20px;">
                                        <button type="submit" data-hover="SEND NOW" class="btn btn-slide">
                                            <span class="text">create account</span>
                                            <span class="icons fa fa-long-arrow-right"></span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            {{-- </div> --}}
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
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9/dist/sweetalert2.min.js"></script>
        <script src="{{ asset('assets/js/pages/seed.js') }}"></script>
@endsection

