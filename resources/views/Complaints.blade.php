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
                            <a href="hotel-result.html" class="link">COMPLAINTS AND SUGGESTIONS</a>
                        </li>
                      
                    </ol>
                    <div class="clearfix"></div>
                    <h2 class="captions">COMPLAINTS AND SUGGESTIONS</h2>
                   
                </div>
            </div>
        </div>
    </section>
    <section>
        
        <div class="container contact">
            <div class="row">
                <div class="col-md-3 cont-inner">
                    <div class="contact-info">
                        <h2>COMPLAINTS AND SUGGESTIONS</h2>
                        {{-- <h4>Driver</h4> --}}
                    </div>
                </div>
                <div class="col-md-9 cont-inner-two">
                <form role="form" class="form-edit-add" action="{{route('complaints.store')}}" method="POST" enctype="multipart/form-data">
                        <!-- PUT Method if we are editing -->
                        {{csrf_field()}}
                        <!-- CSRF TOKEN -->
                        <div class="contact-form">
                            <div class="form-group @error('fname') has-error @enderror">
                                <label class="control-label col-sm-2" for="fname">First Name:</label>
                                <div class="col-sm-10">          
                                    <input type="text" class="form-control " id="fname" placeholder="Enter First Name" value="{{ old('fname') }}" name="fname">
                                    @error('fname')
                                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group @error('lname') has-error @enderror">
                                <label class="control-label col-sm-2" for="lname">Last Name:</label>
                                <div class="col-sm-10">          
                                    <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" value="{{ old('lname') }}" name="lname">
                                    @error('lname')
                                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group @error('email') has-error @enderror ">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" value="{{ old('email') }}" name="email">
                                    @error('email')
                                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group @error('phone') has-error @enderror">
                                <label class="control-label col-sm-2" for="phone">Phone:</label>
                                <div class="col-sm-10">          
                                    <input type="text" class="form-control" id="phone" placeholder="Enter Last Name" value="{{ old('phone') }}" name="phone">
                                    @error('phone')
                                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            
                            <div class="form-group @error('type') has-error @enderror">
                                <label class="control-label col-sm-2" for="type">الشكاوي والاقترحات:</label>
                                <div class="col-sm-10">   
                                      <select class="form-control" name="type" value="{{ old('type') }}" id="type">
                                        <option value="complaint">شكوي</option>
                                        <option value="Suggestion">اقتراح</option>
                                      </select>
                                    {{-- <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" value="{{ old('lname') }}" name="lname"> --}}
                                    @error('type')
                                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group @error('comment') has-error @enderror">
                                <label class="control-label col-sm-2" for="comment">Comment:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" id="comment" value="{{ old('comment') }}" name="comment"></textarea>
                                    @error('comment')
                                    <span class="glyphicon glyphicon-remove form-control-feedback"></span>
                                    <span class="help-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group">        
                                <div class="col-sm-offset-2 col-sm-10">
                                    <button type="submit" class="btn btn-default">Submit</button>
                                </div>
                            </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
