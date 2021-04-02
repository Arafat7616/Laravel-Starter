@push('title')
    Custom page edit
@endpush
@extends('layouts.backend.app')
@push('style')

@endpush
@section('breadcrumb')
    <div class="row page-titles">
        <div class="col-md-5 align-self-center">
            <h4 class="text-themecolor">Custom page edit</h4>
        </div>
        <div class="col-md-7 align-self-center text-right">
            <div class="d-flex justify-content-end align-items-center">
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="{{ route('backend.dashboard') }}">Dashboard</a></li>
                    <li class="breadcrumb-item active">Custom page edit</li>
                </ol>
                <a href="{{ route('backend.customPage.index') }}" class="btn btn-info d-none d-lg-block m-l-15"><i class="fa fa-plus-circle"></i> Back to list</a>
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
                <h5 class="card-title">Custom page edit</h5>
            </div>
            <div class="card-body">
                <form class="row justify-content-center" method="POST" action="{{  route('backend.customPage.update', $customPage) }}" enctype="multipart/form-data">
                    @csrf
                    @method('PATCH')
                    <div class="col-12">
                        <div class="form-group">
                            <label for="name">Name <span class="text-danger">*</span></label>
                            <input type="text" name="name" required class="form-control" id="name" value="{{ $customPage->name }}">
                            @error('name')
                            <small id="name" class="form-text text-muted text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="name">Title <span class="text-danger">*</span></label>
                            <input type="text" name="title" required class="form-control" id="title" value="{{ $customPage->title }}">
                            @error('title')
                            <small class="form-text text-muted text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="serial">Serial <span class="text-danger">*</span></label>
                            <input type="number" name="serial" required class="form-control" id="serial" value="{{ $customPage->serial }}">
                            @error('serial')
                            <small class="form-text text-muted text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="status">Status <span class="text-danger">*</span></label>
                            <select id="status" class="select2-single form-control select2-hidden-accessible" name="status" data-select2-id="1" tabindex="-1" aria-hidden="true">
                                <option value="1" @if($customPage->status == 1) selected @endif>Active</option>
                                <option value="0"  @if($customPage->status == 0) selected @endif>Inactive</option>
                            </select>
                            @error('status')
                            <small id="status" class="form-text text-muted text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                        <div class="form-group col-12">
                            <label>Description <span class="text-danger">*</span></label>
                            <textarea name="description" type="text" class="form-control" id="description">{!! $customPage->description !!}</textarea>
                            @error('description')
                            <small id="image" class="form-text text-muted text-danger">{{ $message }}</small>
                            @enderror
                        </div>
                    </div>
                    <div class="col-12 text-center">
                        <button type="submit" id="submit-btn" class="btn btn-primary">Save</button>
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
@push('summer-note')
    <script>
        $('#description').summernote({
            placeholder: 'Hello stand alone ui',
            tabsize: 2,
            height: 300,
            toolbar: [
                ['style', ['style']],
                ['font', ['bold', 'underline', 'clear']],
                ['color', ['color']],
                ['para', ['ul', 'ol', 'paragraph']],
                ['table', ['table']],
                ['insert', ['link', 'picture', 'video']],
                ['view', ['fullscreen', 'codeview', 'help']]
            ]
        });
    </script>
@endpush
