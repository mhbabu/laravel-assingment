@extends('backend.layouts.modal')
@section('title') <h5><i class="fa fa-plus-square"></i> Add New Employee</h5> @endsection
@section('content')
    {!! Form::open(['route' => 'employees.store', 'method' => 'post', 'id' => 'dataForm']) !!}
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('company_id','Company : ',['class'=>'required-star']) !!}
                    {!! Form::select('company_id', $companies,'',['class'=>$errors->has('company_id')?'form-control is-invalid':'form-control required','placeholder'=>'Select a company']) !!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('first_name','First Name : ',['class'=>'required-star']) !!}
                    {!! Form::text('first_name','',['class'=>$errors->has('first_name')?'form-control is-invalid':'form-control required','placeholder'=>'First Name']) !!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('last_name','Last Name : ',['class'=>'required-star']) !!}
                    {!! Form::text('last_name','',['class'=>$errors->has('last_name')?'form-control is-invalid':'form-control required','placeholder'=>'Last Name']) !!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('email','Email : ',['class'=>'required-star']) !!}
                    {!! Form::email('email','',['class'=>$errors->has('email')?'form-control is-invalid':'form-control required','placeholder'=>'Email address']) !!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group row">
                    {{ Form::label('phone','Phone',['class'=>'required-star']) }}
                    <div class="input-group">
                        <div class="input-group-prepend">
                            <span class="input-group-text">+88</span>
                        </div>
                        {!! Form::text('phone','',['class'=>$errors->has('phone')?'form-control is-invalid':'form-control required','minlength'=>'11','maxlength'=>'11','placeholder'=>'01795******']) !!}
                    </div>
                </div>
            </div>
            <div class="col-md-12 form-group">
                {!! Form::label('status','Status',['class'=>'font-weight-bold required-star']) !!}
                {!! Form::select('status',[1 => 'Active',0 => 'Inactive'],'',['class'=>$errors->has('status')?'form-control is-invalid':'form-control required']) !!}
            </div>
        </div>

        <div class="modal-footer">
            <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal"><i class="fa fa-times-circle"></i> Close</button>
            <button name="actionBtn" id="actionButton" type="submit" value="submit" class="actionButton btn btn-primary btn-sm float-right"><i class="fa fa-save"></i> Save</button>
        </div>
    </div>
    {!! Form::close() !!}
@endsection
