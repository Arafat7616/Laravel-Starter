@push('title')
    Social
@endpush
@extends('layouts.backend.app')
@push('style')

@endpush
@section('breadcrumb')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Social</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Setting</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Application</a></li>
                    <li class="breadcrumb-item active">Social</li>
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
                    <h4 class="m-b-0 text-white">Application social setting</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('application.socialStaticOptionUpdate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Facebook link</label>
                                        <input type="text" name="company_facebook_link" id="company_facebook_link" class="form-control" value="{{ get_static_option('company_facebook_link') }}" placeholder="{{ get_static_option('company_facebook_link') }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Twitter link</label>
                                        <input type="text" name="company_twitter_link" id="company_twitter_link" class="form-control" value="{{ get_static_option('company_twitter_link') }}" placeholder="{{ get_static_option('company_twitter_link') }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Youtube link</label>
                                        <input type="text" name="company_youtube_link" id="company_youtube_link" class="form-control" value="{{ get_static_option('company_youtube_link') }}" placeholder="{{ get_static_option('company_youtube_link') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Instagram link</label>
                                        <input type="text" name="company_instagram_link" id="company_instagram_link" class="form-control" value="{{ get_static_option('company_instagram_link') }}" placeholder="{{ get_static_option('company_instagram_link') }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Linkedin link</label>
                                        <input type="text" name="company_linkedin_link" id="company_linkedin_link" class="form-control" value="{{ get_static_option('company_linkedin_link') }}" placeholder="{{ get_static_option('company_linkedin_link') }}">
                                    </div>
                                </div>
                            </div>
                            <!--/row-->
                        </div>
                        <div class="form-actions">
                            <button type="submit" class="btn btn-success"> <i class="fa fa-check"></i> Save</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Row -->
@endsection
@push('script')

@endpush
