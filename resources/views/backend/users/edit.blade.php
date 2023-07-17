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
           {!! Form::open(['route' => ['users.update', $user->id], 'method'=>'PATCH', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
                <div class="position-relative row form-group">
                    {!! Form::label('name', 'Name', ['class' => 'col-sm-2 col-form-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::text('name',$user->name,[ 'class' => 'form-control','readonly' => true]) !!}
                    </div>
                </div>
                <div class="position-relative row form-group">
                    {!! Form::label('email', 'Email Address', ['class' => 'col-sm-2 col-form-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::text('email',$user->email,[ 'class' => 'form-control','readonly' => true]) !!}
                    </div>
                </div> 
                <div class="position-relative row form-group">
                    {!! Form::label('user_type', 'User Type', ['class' => 'col-sm-2 col-form-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::select('user_type',['1x101' => 'Admin', '2x201' => 'User'],$user->user_type,[ 'class' => 'form-control','placeholder' => 'Select User Type']) !!}
                    </div>
                </div> 
                <div class="position-relative row form-check mt-2 float-right">
                    <div class="col-md-12">
                        <a href="{{ route('users.index') }}" class="btn btn-secondary m-1">Back</a>
                        <button type="submit" class="btn btn-primary m-1">Update</button>
                    </div>
                </div>
            {!! Form::close() !!}
        </div>
    </div>   
</div>            
 
@endsection
