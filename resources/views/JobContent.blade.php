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
                            <a href="hotel-result.html" class="link">jobs</a>
                        </li>
                      
                    </ol>
                    <div class="clearfix"></div>
                    <h2 class="captions">JOBS</h2>
                   
                </div>
            </div>
        </div>
    </section>
    <section>
        
        <div class="container contact">
            <div class="row">
                <div class="col-md-3 cont-inner">
                    <div class="contact-info">
                        <h2>jobs</h2>
                        {{-- <h4>Driver</h4> --}}
                    </div>
                </div>
                <div class="col-md-9 cont-inner-two">
                <form role="form" class="form-edit-add" action="{{url('job-contents')}}" method="POST" enctype="multipart/form-data">
                        <!-- PUT Method if we are editing -->
                            
                        <!-- CSRF TOKEN -->
                        <input type="hidden" name="_token" value="K9xgB0g2rFAdDdiv1jcR8nbhb03FbA70Ezme4MVa">
                        <div class="contact-form">
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="fname">First Name:</label>
                                <div class="col-sm-10">          
                                    <input type="text" class="form-control" id="fname" placeholder="Enter First Name" name="fname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="lname">Last Name:</label>
                                <div class="col-sm-10">          
                                    <input type="text" class="form-control" id="lname" placeholder="Enter Last Name" name="lname">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="email">Email:</label>
                                <div class="col-sm-10">
                                    <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-sm-2" for="comment">Comment:</label>
                                <div class="col-sm-10">
                                    <textarea class="form-control" rows="5" id="comment" name="comment"></textarea>
                                </div>
                            </div>
                            <div class="form-group custom-file-upload">
                                <label for="file-upload" class="custom-file-upload1">
                                    <i class="fa fa-cloud-upload"></i> Cv Upload
                                </label>
                                <div class="col-sm-10">
                                    <input id="file-upload" name="cv" type="file"/>
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
