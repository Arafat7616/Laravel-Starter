@push('title')
    Custom script
@endpush
@extends('layouts.backend.app')
@push('style')

@endpush
@section('breadcrumb')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Custom script</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Setting</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Application</a></li>
                    <li class="breadcrumb-item active">Custom script</li>
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
                    <h4 class="m-b-0 text-white">Application custom script setting</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('application.customScriptStaticOptionUpdate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="control-label">Custom head code</label>
                                        <textarea text="text" name="custom_head_code" id="custom_head_code" cols="30" rows="5" class="form-control">{{ get_static_option('custom_head_code') }}</textarea>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <label class="control-label">Custom foot code</label>
                                        <textarea text="text" name="custom_foot_code" id="custom_foot_code" cols="30" rows="5" class="form-control">{{ get_static_option('custom_foot_code') }}</textarea>
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
