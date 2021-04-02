@push('title')
    dashboard
@endpush
@extends('layouts.backend.app')
@push('style')

@endpush
@section('breadcrumb')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Seo</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Setting</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Application</a></li>
                    <li class="breadcrumb-item active">Seo</li>
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
                    <h4 class="m-b-0 text-white">Application seo setting</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('application.seoStaticOptionUpdate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="control-label">Meta keywords</label>
                                        <input type="text" name="meta_keywords"  id="meta_keywords" class="form-control" value="{{ get_static_option('meta_keywords') }}" placeholder="{{ get_static_option('meta_keywords') }}">
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="control-label">Meta description</label>
                                        <textarea text="text" name="meta_description" id="meta_description" cols="30" rows="5" class="form-control">{{ get_static_option('meta_description') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Meta author</label>
                                        <input type="text" name="meta_author" id="meta_author" class="form-control" value="{{ get_static_option('meta_author') }}" placeholder="{{ get_static_option('meta_author') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <img height="70px" width="70px;" class="rounded-circle" src="{{ asset(get_static_option('meta_image') ?? get_static_option('no_image')) }}" alt="">
                                        <label class="control-label">Meta image</label>
                                        <input name="meta_image" type="file" accept="image/*"  id="meta_image" class="form-control">
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
