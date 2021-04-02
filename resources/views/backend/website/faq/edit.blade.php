@push('title')
    Faq edit
@endpush
@extends('layouts.backend.app')
@push('style')

@endpush
@section('breadcrumb')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Faq edit</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Faq edit</li>
                </ol>
                <a href="{{ route('backend.faq.index') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Back to list</a>
            </div>
        </div>
    </div>
@endsection
@section('content')
  <!-- Start Contentbar -->
  <div class="contentbar">
    <!-- Start row -->
    <div class="row">
        <div class="card m-b-30 col-12 ">
            <div class="card-header bg-danger">
                <h5 class="card-title text-white">Faq edit</h5>
            </div>
            <div class="card-body">
                <form class="row justify-content-center" method="POST" action="{{ route('backend.faq.update', $faq) }}"
                      enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="col-lg-10">
                        <div class="form-group row">
                            <label for="question" class="col-sm-4 col-form-label">Question</label>
                            <div class="col-12">
                                <textarea name="question" type="text" class="form-control" id="question">{{ $faq->question }}</textarea>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="answer" class="col-sm-4 col-form-label">Answer</label>
                            <div class="col-12">
                                <textarea name="answer" type="text" class="form-control" id="answer">{!! $faq->answer !!}</textarea>
                            </div>
                        </div>
                        <div class="col-12 text-center">
                            <button id="submit-btn" class="btn btn-primary">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- End row -->
</div>
<!-- End Contentbar -->
@endsection
@push('script')

@endpush
