@extends('layouts.backend.app')
@section('title', 'Files Create')
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon"> <i class="pe-7s-user text-success"></i></div>
                <div>User <div class="page-title-subheading">Edit user.</div></div>
            </div>
        </div>
    </div>
    <div class="main-card mb-3 card">
        <div class="card-body">
           {!! Form::open(['route' => ['projects.update', $project->id], 'method'=>'PATCH', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
                <div class="position-relative row form-group">
                    {!! Form::label('name', 'Project Name', ['class' => 'col-sm-2 col-form-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::text('name',$project->name,[ 'class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'autofocus' => true, 'placeholder' => 'Project Name']) !!}
                        @error('name') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span> @enderror
                    </div>
                </div>
                <div class="position-relative row form-group">
                    {!! Form::label('email', 'Email Address', ['class' => 'col-sm-2 col-form-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::select('user_id[]', $user, $project['user'],['class' => $errors->has('user_id') ? 'form-control is-invalid' : 'form-control', 'multiple' => true, "size"=>"8", 'autofocus' => true, 'placeholder' => 'Title','placeholder' => 'Select Type']) !!}
                        @error('user_type') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span> @enderror
                    </div>
                </div>
                <div class="position-relative row form-check mt-2 float-right">
                    <div class="col-md-12">
                        <a href="{{ route('projects.index') }}" class="btn btn-secondary m-1">Back</a>
                        <button type="submit" class="btn btn-primary m-1">Update</button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>
</div>

@endsection
