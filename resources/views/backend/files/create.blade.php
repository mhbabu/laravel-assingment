@extends('layouts.backend.app')
@section('title', 'Files Create')
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon"> <i class="pe-7s-file text-success"></i></div>
                <div>Files <div class="page-title-subheading">Add your attachment.</div></div>
            </div>
        </div>
    </div>         
    <div class="main-card mb-3 card">
        <div class="card-body">
            <div class="my-2"> @include('layouts.backend.includes.message')</div>
           {!! Form::open(['route' => 'files.store', 'method' => 'POSt', 'files' => true, 'enctype' => 'multipart/form-data']) !!}
                <div class="position-relative row form-group">
                    {!! Form::label('title', 'Title', ['class' => 'col-sm-2 col-form-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::text('title','',[ 'class' => $errors->has('title') ? 'form-control is-invalid' : 'form-control', 'required'=> true, 'autofocus' => true, 'placeholder' => 'Title']) !!}
                        @error('title') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span> @enderror
                    </div>
                </div>
                <div class="position-relative row form-group">
                    {!! Form::label('user_id', 'User', ['class' => 'col-sm-2 col-form-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::select('user_id', $users, '',['class' => $errors->has('user_id') ? 'form-control is-invalid' : 'form-control', 'required'=> true, 'autofocus' => true, 'placeholder' => 'Title','placeholder' => 'Select User']) !!}
                        @error('user_id') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span> @enderror
                    </div>
                </div>

                <div class="position-relative row form-group">
                    {!! Form::label('description', 'Description', ['class' => 'col-sm-2 col-form-label']) !!}
                    <div class="col-sm-10">
                        {!! Form::textarea('description','',[ 'class' => 'form-control','rows' => 3]) !!}
                    </div>
                </div>
                <div class="position-relative row form-group"><label for="exampleFile" class="col-sm-2 col-form-label">Attachment</label>
                    <div class="col-sm-10">
                        <label class="btn btn-default btn-xs border">
                            <input type="file" name="attachment" accept="image/jpg, image/jpeg, image/png, application/pdf, application/doc, application/docx, application/zip">
                        </label>
                        @error('attachment') <span class="invalid-feedback" role="alert"> <strong>{{ $message }}</strong></span> @enderror
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
