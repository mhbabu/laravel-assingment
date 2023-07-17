@extends('backend.layouts.modal')
@section('title') <h5><i class="fa fa-edit"></i> Company edit</h5> @endsection
@section('content')
    {!! Form::open(['route' => ['companies.update', \App\Libraries\Encryption::encodeId($company->id)], 'method'=>'patch', 'id'=>'dataForm', 'enctype'=>'multipart/form-data']) !!}
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('name','Name : ',['class'=>'required-star']) !!}
                    {!! Form::text('name', $company->name, ['class'=>$errors->has('name')?'form-control is-invalid':'form-control required','placeholder'=>'Name']) !!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('email','Email : ',['class'=>'required-star']) !!}
                    {!! Form::email('email', $company->email,['class'=>$errors->has('email')?'form-control is-invalid':'form-control required','placeholder'=>'Email address']) !!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    {{ Form::label('logo', 'Logo :',['class'=>'required-star']) }}
                    <br/>
                    <div>
                        <img class="img img-responsive img-thumbnail" src="{{ empty($company->logo) ? url('assets/backend/img/photo.png') : url('uploads/companies-logo/' . $company->logo) }}" id="logoViewer" height="100" width="120" />
                    </div>
                    <label class="btn btn-block btn-secondary btn-sm border-0" style="width: 120px; cursor: pointer">
                        <input onchange="changeLogo(this)" type="file" name="logo" style="display: none" required>
                        <i class="fa fa-image"></i> Browse
                    </label>
                    <span id="logo_err" class="text-danger" style="font-size: 16px;"></span>
                </div>
            </div>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-times-circle"></i> Close</button>
            <button name="actionBtn" id="actionButton" type="submit" value="submit" class="actionButton btn btn-primary btn-sm float-right"><i class="fa fa-update"></i> Update</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
