@push('title')
    Company detail
@endpush
@extends('layouts.backend.app')
@push('style')

@endpush
@section('breadcrumb')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Company detail</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Setting</a></li>
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Application</a></li>
                    <li class="breadcrumb-item active">Company detail</li>
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
                    <h4 class="m-b-0 text-white">Application company detail setting</h4>
                </div>
                <div class="card-body">
                    <form action="{{ route('application.companyDetailStaticOptionUpdate') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-body">
                            <div class="row">

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Company email</label>
                                        <input type="text" name="company_email" id="company_email" class="form-control" value="{{ get_static_option('company_email') }}" placeholder="{{ get_static_option('company_email') }}">
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label">Company phone</label>
                                        <input type="text" name="company_phone" id="company_phone" class="form-control" value="{{ get_static_option('company_phone') }}" placeholder="{{ get_static_option('company_phone') }}">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="control-label">Company address</label>
                                        <input type="text" name="company_address" id="company_address" class="form-control" value="{{ get_static_option('company_address') }}" placeholder="{{ get_static_option('company_address') }}">
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
