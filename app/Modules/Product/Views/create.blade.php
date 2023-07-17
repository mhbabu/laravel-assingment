@extends('backend.layouts.modal')
@section('title') <h5><i class="fa fa-plus-square"></i> Product create</h5> @endsection
@section('content')
    {!! Form::open(['route'=>'products.store', 'method'=>'post','id'=>'dataForm']) !!}
    <div class="card-body">
        <div class="row">
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('name','Name : ',['class'=>'required-star']) !!}
                    {!! Form::text('name','',['class'=>$errors->has('name')?'form-control is-invalid':'form-control required','placeholder'=>'Name']) !!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('price','Price : ',['class'=>'required-star']) !!}
                    {!! Form::number('price','',['class'=>$errors->has('price')?'form-control is-invalid':'form-control required']) !!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('quantity','Quantity : ',['class'=>'required-star']) !!}
                    {!! Form::number('quantity','',['class'=>$errors->has('quantity')?'form-control is-invalid':'form-control required']) !!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    {!! Form::label('status','Status : ',['class'=>'required-star']) !!}
                    {!! Form::select('status',['1'=>'Active','0'=>'Inactive'],'',['class'=>$errors->has('status')?'form-control is-invalid':'form-control required']) !!}
                </div>
            </div>
            <div class="col-md-12">
                <div class="form-group">
                    {{ Form::label('photo', 'Photo :',['class'=>'required-star']) }}
                    <br/>
                    <div>
                        <img class="img img-responsive img-thumbnail" src="{{ url('assets/backend/img/photo.png') }}" id="photoViewer" height="100" width="120">
                    </div>
                    <label class="btn btn-block btn-secondary btn-sm border-0" style="width: 120px;">
                        <input onchange="changePhoto(this)" type="file" name="photo" style="display: none" required>
                        <i class="fa fa-image"></i> Browse
                    </label>
                    <span id="photo_err" class="text-danger" style="font-size: 16px;"></span>
                </div>
            </div>
        </div>
    </div>
    <div class="card-footer">
        <a href="{{ route('products.index') }}" class="btn btn-warning"><i class="fa fa-backward"></i> Back</a>
        <button type="submit" class="btn float-right btn-primary" id="productCategorySubmit"><i class="fa fa-save"></i> Save</button>
    </div>
    {!! Form::close() !!}
@endsection
