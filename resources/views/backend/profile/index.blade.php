@push('title')
    Profile
@endpush
@extends('layouts.backend.app')
@push('style')

@endpush
@section('breadcrumb')

<div class="row page-titles">
    <div class="col-md-5 align-self-center">
        <h4 class="text-themecolor">Profile</h4>
    </div>
    <div class="col-md-7 align-self-center text-right">
        <div class="d-flex justify-content-end align-items-center">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
                <li class="breadcrumb-item active">Profile</li>
            </ol>
            {{--  <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>  --}}
        </div>
    </div>
</div>
@endsection
@section('content')
<!-- Start Page Content -->
<!-- ============================================================== -->
<!-- Row -->
<div class="row">
    <!-- Column -->
    <div class="col-lg-4 col-xlg-3 col-md-5">
        <div class="card">
            <div class="card-body">
                <center class="m-t-30"> <img src="{{ asset( auth()->user()->avatar ?? get_static_option('no_image') ) }}" class="img-circle" width="150">
                    <h4 class="card-title m-t-10">{{  auth()->user()->name }}</h4>
                    <h6 class="card-subtitle">{{  auth()->user()->email }}</h6>
                </center>
            </div>
            <div>
                <hr> </div>
            <div class="card-body">
                <small class="text-muted p-t-30 db">Phone</small>
                <h6>{{  auth()->user()->moreInfo->phone ?? '' }}</h6>
                <small class="text-muted p-t-30 db">Address</small>
                <h6>{{  auth()->user()->moreInfo->address ?? '' }}</h6>
                <div class="map-box">
                    <iframe src="{{  auth()->user()->moreInfo->map ?? 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d470029.1604841957!2d72.29955005258641!3d23.019996818380896!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x395e848aba5bd449%3A0x4fcedd11614f6516!2sAhmedabad%2C+Gujarat!5e0!3m2!1sen!2sin!4v1493204785508' }}" width="100%" height="150" frameborder="0" style="border:0" allowfullscreen=""></iframe>
                </div> <small class="text-muted p-t-30 db">Social Profile</small>
                <br>
                <a href="{{ auth()->user()->moreInfo->facebook }}" target="_blank" class="btn btn-circle btn-secondary"><i class="fab fa-facebook-f"></i></a>
                <a href="{{ auth()->user()->moreInfo->twitter }}" target="_blank" class="btn btn-circle btn-secondary"><i class="fab fa-twitter"></i></a>
                <a href="{{ auth()->user()->moreInfo->youtube }}" target="_blank" class="btn btn-circle btn-secondary"><i class="fab fa-youtube"></i></a>
            </div>
        </div>
    </div>
    <!-- Column -->
    <!-- Column -->
    <div class="col-lg-8 col-xlg-9 col-md-7">
        <div class="card">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs profile-tab" role="tablist">
                <li class="nav-item"> <a class="nav-link active" data-toggle="tab" href="#home" role="tab">Timeline</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#profile" role="tab">Profile</a> </li>
                <li class="nav-item"> <a class="nav-link" data-toggle="tab" href="#password" role="tab">Password</a> </li>
            </ul>
            <!-- Tab panes -->
            <div class="tab-content">
                <div class="tab-pane active" id="home" role="tabpanel">
                    <div class="card-body">
                        <div class="profiletimeline">
                            <div class="sl-item">
                                <div class="sl-left"> <img src="../assets/backend/images/users/1.jpg" alt="user" class="img-circle"> </div>
                                <div class="sl-right">
                                    <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                        <p>assign a new task <a href="javascript:void(0)"> Design weblayout</a></p>
                                        <div class="row">
                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="../assets/backend/images/big/img1.jpg" class="img-responsive radius"></div>
                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="../assets/backend/images/big/img2.jpg" class="img-responsive radius"></div>
                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="../assets/backend/images/big/img3.jpg" class="img-responsive radius"></div>
                                            <div class="col-lg-3 col-md-6 m-b-20"><img src="../assets/backend/images/big/img4.jpg" class="img-responsive radius"></div>
                                        </div>
                                        <div class="like-comm"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="sl-item">
                                <div class="sl-left"> <img src="../assets/backend/images/users/2.jpg" alt="user" class="img-circle"> </div>
                                <div class="sl-right">
                                    <div> <a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                        <div class="m-t-20 row">
                                            <div class="col-md-3 col-xs-12"><img src="../assets/backend/images/big/img1.jpg" alt="user" class="img-responsive radius"></div>
                                            <div class="col-md-9 col-xs-12">
                                                <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. </p> <a href="javascript:void(0)" class="btn btn-success"> Design weblayout</a></div>
                                        </div>
                                        <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="sl-item">
                                <div class="sl-left"> <img src="../assets/backend/images/users/3.jpg" alt="user" class="img-circle"> </div>
                                <div class="sl-right">
                                    <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                        <p class="m-t-10"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet. Duis sagittis ipsum. Praesent mauris. Fusce nec tellus sed augue semper </p>
                                    </div>
                                    <div class="like-comm m-t-20"> <a href="javascript:void(0)" class="link m-r-10">2 comment</a> <a href="javascript:void(0)" class="link m-r-10"><i class="fa fa-heart text-danger"></i> 5 Love</a> </div>
                                </div>
                            </div>
                            <hr>
                            <div class="sl-item">
                                <div class="sl-left"> <img src="../assets/backend/images/users/4.jpg" alt="user" class="img-circle"> </div>
                                <div class="sl-right">
                                    <div><a href="javascript:void(0)" class="link">John Doe</a> <span class="sl-date">5 minutes ago</span>
                                        <blockquote class="m-t-10">
                                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt
                                        </blockquote>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--second tab-->
                <div class="tab-pane" id="profile" role="tabpanel">
                    <div class="card-body">
                        <form class="form-horizontal form-material" action="{{ route('backend.profileInfoUpdate') }}" method="POST" enctype="multipart/form-data" >
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" value="{{ Auth::user()->name }}" class="form-control" id="name" placeholder="Name">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="email">Email</label>
                                    <input type="email" value="{{ Auth::user()->email }}" name="email" class="form-control" id="email" placeholder="Email">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="phone">Phone</label>
                                    <input type="text" value="{{ Auth::user()->moreInfo->phone ?? '' }}" name="phone" class="form-control" id="phone" placeholder="Phone">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="address">Address</label>
                                    <input type="text" value="{{ Auth::user()->moreInfo->address ?? '' }}" name="address" class="form-control" id="address" placeholder="Address">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="facebook">Facebook</label>
                                    <input type="text" value="{{ Auth::user()->moreInfo->facebook ?? '' }}" name="facebook" class="form-control" id="facebook" placeholder="Facebook">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="twitter">Twitter</label>
                                    <input type="text" value="{{ Auth::user()->moreInfo->twitter ?? '' }}" name="twitter" class="form-control" id="twitter" placeholder="Twitter">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="youtube">Youtube</label>
                                    <input type="text" value="{{ Auth::user()->moreInfo->youtube ?? '' }}" name="youtube" class="form-control" id="youtube" placeholder="Youtube">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="map">Map</label>
                                    <input type="text" value="{{ Auth::user()->moreInfo->map ?? '' }}" name="map" class="form-control" id="map" placeholder="Map">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="avatar">Avatar</label>
                                    <input type="file"  accept="image/*"  name="avatar" class="form-control" id="avatar">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                        </form>
                    </div>
                </div>
                <div class="tab-pane" id="password" role="tabpanel">
                    <div class="card-body">
                        <form class="form-horizontal form-material" action="{{ route('backend.profilePasswordUpdate') }}" method="POST" >
                            @csrf
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="old_password">Old Password</label>
                                    <input type="password" name="old_password" value="{{ old('old_password') }}" class="form-control" id="old_password">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password">Password</label>
                                    <input type="password" value="{{ old('password') }}" name="password" class="form-control" id="password">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="password_confirmation">Confirmed Password</label>
                                    <input type="password" name="password_confirmation" value="{{ old('password_confirmation') }}" class="form-control" id="password_confirmation">
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Column -->
</div>
<!-- Row -->
<!-- ============================================================== -->
<!-- End PAge Content -->
@endsection
@push('script')

@endpush
