@extends('layouts.backend.app')
@section('title', 'Files Create')
@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon">
                        <i class="pe-7s-user text-success"> </i>
                    </div>
                    <div> Profile
                        <div class="page-title-subheading"> Update your profile </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            {!! Form::open(['route' => ['users.profile.update', $user->id], 'method' => 'POST']) !!}
            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            {!! Form::label('name', 'Name') !!}
                            {!! Form::text('name', $user->name, [
                                'class' => $errors->has('name') ? 'form-control is-invalid' : 'form-control',
                                'autofocus' => true,
                                'placeholder' => 'Name',
                                'required' => true,
                            ]) !!}
                            @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="position-relative form-group">
                            {!! Form::label('email', 'Email') !!}
                            {!! Form::email('email', $user->email, [
                                'class' => $errors->has('email') ? 'form-control is-invalid' : 'form-control',
                                'autofocus' => true,
                                'placeholder' => 'Email',
                                'required' => true,
                            ]) !!}
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                </div>
                <div class="ml-auto col-1">
                    <button type="submit" class="mt-2 btn btn-primary float-end">Update</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
        <div class="main-card mb-3 card">
            {!! Form::open(['route' => ['users.change-password', $user->id], 'method' => 'POST']) !!}
            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            {!! Form::label('old_password', 'Old Password') !!}
                            {!! Form::password('old_password', [
                                'class' => $errors->has('old_password') ? 'form-control is-invalid' : 'form-control required',
                                'placeholder' => 'Old Password',
                                'required' => true,
                                'autocomplete' => 'off',
                            ]) !!}
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            {!! Form::label('password', 'Password') !!}
                            {!! Form::password('password', [
                                'class' => $errors->has('password') ? 'form-control is-invalid' : 'form-control required',
                                'placeholder' => 'Password',
                                'required' => true,
                                'autocomplete' => 'off',
                            ]) !!}
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="position-relative form-group">
                            {!! Form::label('password_confirmation', 'Confirm Password', ['class' => 'required-star']) !!}
                            {!! Form::password('password_confirmation', [
                                'class' => $errors->has('password_confirmation') ? 'form-control is-invalid' : 'form-control required',
                                'placeholder' => 'Confirm password',
                                'required' => true,
                                'autocomplete' => 'off',
                            ]) !!}
                        </div>
                    </div>
                    <div class="ml-auto col-1">
                        <button type="submit" class="mt-2 btn btn-primary float-end">Update</button>
                    </div>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection
