@extends('layouts.backend.app')
@section('title', 'Files Create')
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon"> <i class="pe-7s-user text-success"></i></div>
                <div>Users <div class="page-title-subheading">Create New User</div></div>
            </div>
        </div>
    </div>         
    <div class="main-card mb-3 card">
        <div class="card-body">
            {{-- <div class="my-2"> @include('layouts.backend.includes.message')</div> --}}
           {!! Form::open(['route' => 'users.store', 'method' => 'POSt', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
                
                <div class="position-relative row form-group">
                    {!! Form::label('user_id', 'User Type', ['class' => 'col-sm-2 col-form-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::select('user_type', ['2x201' => 'Employee', '3x301' => 'Client'], '',['class' => $errors->has('user_type') ? 'form-control is-invalid' : 'form-control', 'required'=> true, 'autofocus' => true, 'placeholder' => 'Title','placeholder' => 'Select Type']) !!}
                        @error('user_type') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span> @enderror
                    </div>
                </div>
                <div class="position-relative row form-group">
                    {!! Form::label('name', 'Full Name', ['class' => 'col-sm-2 col-form-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::text('name','',[ 'class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control', 'required'=> true, 'autofocus' => true, 'placeholder' => 'Full Name']) !!}
                        @error('name') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span> @enderror
                    </div>
                </div>
                <div class="position-relative row form-group">
                    {!! Form::label('email', 'Email Address', ['class' => 'col-sm-2 col-form-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::email('email','',[ 'class' => $errors->has('email') ? 'form-control is-invalid' : 'form-control', 'required'=> true, 'autofocus' => true, 'placeholder' => 'Email Address']) !!}
                        @error('email') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span> @enderror
                    </div>
                </div>
                <div class="position-relative row form-group">
                    {!! Form::label('paword', 'Password', ['class' => 'col-sm-2 col-form-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::password('password',[ 'class' => $errors->has('password') ? 'form-control is-invalid' : 'form-control', 'required'=> true, 'autofocus' => true, 'placeholder' => 'Password']) !!}
                        @error('email') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span> @enderror
                    </div>
                </div>
                <div class="position-relative row form-group">
                    {!! Form::label('paword', 'Confirm Password', ['class' => 'col-sm-2 col-form-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::password('password_confirmation',[ 'class' => $errors->has('password_confirmation') ? 'form-control is-invalid' : 'form-control', 'required'=> true, 'autofocus' => true, 'placeholder' => 'Confirm Password']) !!}
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
