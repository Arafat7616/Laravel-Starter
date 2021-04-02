@push('title')
    Facebook Page
@endpush
@extends('layouts.backend.app')
@push('style')

@endpush
@section('breadcrumb')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Facebook Page</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Setting</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Application</a></li>
                    <li class="breadcrumb-item active">Facebook Page</li>
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
                    <h4 class="m-b-0 text-white">Application facebook page setting</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('application.fbPageStaticOptionUpdate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-6">
                                    <div class="form-group">
                                        <label class="control-label">Facebook auto extend</label>
                                        <select class="form-control"  name="fb_auto_extend" id="fb_auto_extend">
                                            <option @if(get_static_option('fb_auto_extend') == 'yes') selected @endif value="yes">Yes</option>
                                            <option @if(get_static_option('fb_auto_extend') == 'no') selected @endif  value="no">No</option>
                                        </select>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Facebook page connection</label>
                                        <select class="form-control"  name="fb_page_connection" id="fb_page_connection">
                                            <option @if(get_static_option('fb_page_connection') == 'yes') selected @endif value="yes">Yes</option>
                                            <option @if(get_static_option('fb_page_connection') == 'no') selected @endif  value="no">No</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Facebook page id</label>
                                        <input type="text" name="fb_page_id" id="fb_page_id" class="form-control" value="{{ get_static_option('fb_page_id') }}" placeholder="{{ get_static_option('fb_page_id') }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Fb theme color</label>
                                        <input type="text" name="fb_theme_color" id="fb_theme_color" class="form-control" value="{{ get_static_option('fb_theme_color') }}" placeholder="{{ get_static_option('fb_theme_color') }}">
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
