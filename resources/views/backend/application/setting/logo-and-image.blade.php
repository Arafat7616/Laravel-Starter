@push('title')
    Logo and image
@endpush
@extends('layouts.backend.app')
@push('style')

@endpush
@section('breadcrumb')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Logo and image</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Setting</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Application</a></li>
                    <li class="breadcrumb-item active">Logo and image</li>
                </ol>
                {{--                <button type="button" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Create New</button>--}}
            </div>
        </div>
    </div>
@endsection
@section('content')
    <!-- Row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-header bg-info">
                    <h4 class="m-b-0 text-white">Application logo and image setting</h4>
                </div>
                <div class="card-body">


                        <div class="form-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <img height="70px" width="70px;" class="rounded-circle image-display" src="{{ asset(get_static_option('no_image')) }}" alt="">
                                        <label class="control-label">No image</label>
                                        <input name="no_image" type="file" accept="image/*"  id="no_image" class="form-control image-importer">
                                        <br>
                                        <button type="button" class="btn btn-info btn-circle image-chose-btn"><i class="fa fa-plus"></i> </button>
                                        <button value="{{ route('application.image.noImage') }}" type="button" class="btn btn-info btn-circle image-submit-btn"><i class="fa fa-check"></i> </button>
                                        <button type="button" class="btn btn-warning btn-circle image-reset-btn"  value="{{ asset(get_static_option('no_image')) }}"><i class="fa fa-times "></i> </button>
                                    </div>
                                    <div class="form-group">
                                        <img height="70px" width="70px;" class="rounded-circle image-display" src="{{ asset(get_static_option('fav_icon') ?? get_static_option('no_image')) }}" alt="">
                                        <label class="control-label">Fav icon</label>
                                        <input name="no_image" type="file" accept="image/*"  id="no_image" class="form-control image-importer">
                                        <br>
                                        <button type="button" class="btn btn-info btn-circle image-chose-btn"><i class="fa fa-plus"></i> </button>
                                        <button value="{{ route('application.image.favIcon') }}" type="button" class="btn btn-info btn-circle image-submit-btn"><i class="fa fa-check"></i> </button>
                                        <button type="button" class="btn btn-warning btn-circle image-reset-btn"  value="{{ asset(get_static_option('fav_icon') ?? get_static_option('no_image')) }}"><i class="fa fa-times "></i> </button>
                                    </div>
                                    <div class="form-group">
                                        <img height="70px" width="70px;" class="rounded-circle image-display" src="{{ asset(get_static_option('backend_logo') ?? get_static_option('no_image')) }}" alt="">
                                        <label class="control-label">Backend logo</label>
                                        <input name="no_image" type="file" accept="image/*"  id="no_image" class="form-control image-importer">
                                        <br>
                                        <button type="button" class="btn btn-info btn-circle image-chose-btn"><i class="fa fa-plus"></i> </button>
                                        <button value="{{ route('application.image.backendLogo') }}" type="button" class="btn btn-info btn-circle image-submit-btn"><i class="fa fa-check"></i> </button>
                                        <button type="button" class="btn btn-warning btn-circle image-reset-btn"  value="{{ asset(get_static_option('backend_logo') ?? get_static_option('no_image')) }}"><i class="fa fa-times "></i> </button>
                                    </div>
                                    <div class="form-group">
                                        <img height="70px" width="70px;" class="rounded-circle image-display" src="{{ asset(get_static_option('frontend_logo') ?? get_static_option('no_image')) }}" alt="">
                                        <label class="control-label">Frontend logo</label>
                                        <input name="no_image" type="file" accept="image/*"  id="no_image" class="form-control image-importer">
                                        <br>
                                        <button type="button" class="btn btn-info btn-circle image-chose-btn"><i class="fa fa-plus"></i> </button>
                                        <button value="{{ route('application.image.frontendLogo') }}" type="button" class="btn btn-info btn-circle image-submit-btn"><i class="fa fa-check"></i> </button>
                                        <button type="button" class="btn btn-warning btn-circle image-reset-btn"  value="{{ asset(get_static_option('frontend_logo') ?? get_static_option('no_image')) }}"><i class="fa fa-times "></i> </button>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <img height="70px" width="70px;" class="rounded-circle image-display" src="{{ asset(get_static_option('backend_light_logo') ?? get_static_option('no_image')) }}" alt="">
                                        <label class="control-label">Backend light logo</label>
                                        <input name="no_image" type="file" accept="image/*"  id="no_image" class="form-control image-importer">
                                        <br>
                                        <button type="button" class="btn btn-info btn-circle image-chose-btn"><i class="fa fa-plus"></i> </button>
                                        <button value="{{ route('application.image.backendLightLogo') }}" type="button" class="btn btn-info btn-circle image-submit-btn"><i class="fa fa-check"></i> </button>
                                        <button type="button" class="btn btn-warning btn-circle image-reset-btn"  value="{{ asset(get_static_option('backend_light_logo') ?? get_static_option('no_image')) }}"><i class="fa fa-times "></i> </button>
                                    </div>
                                    <div class="form-group">
                                        <img height="70px" width="70px;" class="rounded-circle image-display" src="{{ asset(get_static_option('backend_text_logo') ?? get_static_option('no_image')) }}" alt="">
                                        <label class="control-label">Backend text logo</label>
                                        <input name="no_image" type="file" accept="image/*"  id="no_image" class="form-control image-importer">
                                        <br>
                                        <button type="button" class="btn btn-info btn-circle image-chose-btn"><i class="fa fa-plus"></i> </button>
                                        <button value="{{ route('application.image.backendTextLogo') }}" type="button" class="btn btn-info btn-circle image-submit-btn"><i class="fa fa-check"></i> </button>
                                        <button type="button" class="btn btn-warning btn-circle image-reset-btn"  value="{{ asset(get_static_option('backend_text_logo') ?? get_static_option('no_image')) }}"><i class="fa fa-times "></i> </button>
                                    </div>
                                    <div class="form-group">
                                        <img height="70px" width="70px;" class="rounded-circle image-display" src="{{ asset(get_static_option('backend_text_light_logo') ?? get_static_option('no_image')) }}" alt="">
                                        <label class="control-label">Backend text light logo</label>
                                        <input name="no_image" type="file" accept="image/*"  id="no_image" class="form-control image-importer">
                                        <br>
                                        <button type="button" class="btn btn-info btn-circle image-chose-btn"><i class="fa fa-plus"></i> </button>
                                        <button value="{{ route('application.image.backendTextLightLogo') }}" type="button" class="btn btn-info btn-circle image-submit-btn"><i class="fa fa-check"></i> </button>
                                        <button type="button" class="btn btn-warning btn-circle image-reset-btn"  value="{{ asset(get_static_option('backend_text_light_logo') ?? get_static_option('no_image')) }}"><i class="fa fa-times "></i> </button>
                                    </div>
                                    <div class="form-group">
                                        <img height="70px" width="70px;" class="rounded-circle image-display" src="{{ asset(get_static_option('breadcrumb_image') ?? get_static_option('no_image')) }}" alt="">
                                        <label class="control-label">Breadcrumb Image</label>
                                        <input name="no_image" type="file" accept="image/*"  id="no_image" class="form-control image-importer">
                                        <br>
                                        <button type="button" class="btn btn-info btn-circle image-chose-btn"><i class="fa fa-plus"></i> </button>
                                        <button value="{{ route('application.image.breadcrumbImage') }}" type="button" class="btn btn-info btn-circle image-submit-btn"><i class="fa fa-check"></i> </button>
                                        <button type="button" class="btn btn-warning btn-circle image-reset-btn"  value="{{ asset(get_static_option('breadcrumb_image') ?? get_static_option('no_image')) }}"><i class="fa fa-times "></i> </button>
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
@endsection
@push('script')

@endpush
