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
                <h1 class="text-center">Check Out</h1>
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
                                                  <a href="#">{{$Reservation->ReservationsInformation->count()}} person</a>
                                                 </div> 
                                         </div>
                                            {{-- <div class="text-box-wrapper half right">
                                                <label class="tb-label tb-label-two">Number of Child :</label>
                                               <div class="a-link">
                                                        <i class="fa fa-user"></i>
                                                      <a href="#">1 person</a>
                                                   </div> </div> --}}
                                            </div>
                                        <button  data-hover="Check Out" onclick="Checkout.showLightbox();" class="btn btn-slide small-margin-top Check-out">
                                            <span class="text">Check Out</span>
                                            <span class="icons fa fa-long-arrow-right"></span>
                                        </button>
                                </div>
                            </div>
                         </div>
                    </div>
                </div>
             </div>
        </div>

        <div class="clearfix"></div>
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


        
        <script src="https://secure.uat.tnspayments.com/checkout/version/28/checkout.js"
               	 data-error="errorCallback"
               	 data-cancel="cancelCallback"
                 data-complete="http://super-jet.test/"
                >
       </script>

       <script type="text/javascript">
            function errorCallback(error) {
                  alert(JSON.stringify(error));
            }
            
            function completeCallback(resultIndicator, sessionVersion) {
                  alert("Result Indicator");
				  				alert(JSON.stringify(resultIndicator));
                  alert("Session Version:");
				  				alert(JSON.stringify(sessionVersion));
				  				alert("Successful Payment");
            }
           
            function cancelCallback() {
                  alert('Payment cancelled');
            
            }

						Checkout.configure({
    					merchant   : {!! $merchantID !!},
    					order      : {
        				amount     : {!! json_encode($order_amount)!!},
        				currency   : {!! json_encode($order_currency)!!},
        				description: 'Hosted Checkout Test Order - Return to Merchant - PHP/JavaScript/NVP',
        				id				 : {!! json_encode($order_id)!!},
        				item			 : {
        					brand: 'Mastercard',
        					description: 'Hosted Checkout Test Item - Return to Merchant - PHP/JavaScript/NVP',
        					name: 'HostedCheckoutItem',
        					quantity: '1',
        					unitPrice: '1.00',
        					unitTaxAmount: '1.00'
        				}
            	},
    					billing    : {
    						address  : {
    							street: '300 Adelaide Street',
    							stateProvince: 'QLD',
    							city: 'Brisbane',
    							company: 'Mastercard Pty Ltd',		
    							postcodeZip: '4000',
    							country: 'AUS'
    						}
    					},
    					customer :{
    						email: {!! $customer_receipt_email!!}
    				  },
    					interaction: {
        				merchant: {
            		name: 'Jonny Test Merchant for Hosted Checkout',
            			address: {
            				line1: '300 Adelaide Street',
            				line2: 'Brisbane Queensland 4000'
        					},
        					  logo:  'https://www.albemarle-london.com/OnlineBooking/Albemarle/ShowPics/ALBAniv.png'
        				}
    					},
    					session: { 
            			id: {!! json_encode($session_id) !!}
       						}
                });
        </script>
@endsection

