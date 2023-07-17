@extends('layouts.backend.app')
@section('title', 'Files Create')
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon"> <i class="pe-7s-user text-success"></i></div>
                <div>Projects <div class="page-title-subheading">Create New Project</div></div>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="my-2"> @include('layouts.backend.includes.message')</div>
           {!! Form::open(['route' => 'projects.store', 'method' => 'POST', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
                <div class="position-relative row form-group">
                    {!! Form::label('name', 'Project Name', ['class' => 'col-sm-2 col-form-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::text('name','',[ 'class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'autofocus' => true, 'placeholder' => 'Project Name']) !!}
                        @error('name') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span> @enderror
                    </div>
                </div>
                <div class="position-relative row form-group">
                    {!! Form::label('user_id', 'User Type', ['class' => 'col-sm-2 col-form-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::select('user_id[]', $user, '',['class' => $errors->has('user_id') ? 'form-control is-invalid' : 'form-control', 'multiple' => true, "size"=>"8", 'autofocus' => true, 'placeholder' => 'Title','placeholder' => 'Select Type']) !!}
                        @error('user_type') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span> @enderror
                    </div>
                </div>
                <div class="position-relative row form-check">
                    <div class="col-sm-12">
                        <a href="{{ route('files.index') }}" class="btn btn-secondary float-left">Back</a>
                        <button type="submit" class="btn btn-primary float-right">Save</button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>


@endsection
