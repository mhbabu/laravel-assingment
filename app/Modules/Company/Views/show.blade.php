@extends('backend.layouts.app')
@section('title', 'Company Details')
@section('content')
@section('content')
    <ol class="breadcrumb alert alert-info p-2">
        <li class="breadcrumb-item"><strong>Created By - </strong> <span>{{ $company->user->name ?? '-' }} </span></li>
        <li class="breadcrumb-item"><strong>Created At - </strong> <span>{{ \Carbon\Carbon::parse($company->created_at)->format('d F , Y') }} at {{ \Carbon\Carbon::parse($company->created_at)->format('g:i A') }} </span></li>
    </ol>
    <div class="card">
        <div class="card-header">
            <div class="row col-sm">
                <h5><i class="fa fa-list-alt"></i> Company Details</h5>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 form-group">
                    <div class="row mb-2">
                        <div class="col-lg-4 font-weight-bold"> Name : </div>
                        <div class="col-lg-8"> {{ $company->name ?? '-' }} </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4 font-weight-bold"> Email Address : </div>
                        <div class="col-lg-8"> {{ $company->email ?? '-' }} </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4 font-weight-bold"> Status : </div>
                        <div class="col-lg-8">
                            @if($company->status == 1) <label class='badge badge-success'>Active</label> @else <label class='badge badge-danger'> Inactive</label> @endif
                        </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4 font-weight-bold"> Logo : </div>
                        <div class="col-lg-8"> @if(!empty($company->logo)) <img class="img img-bordered img-rounded" src="{{ url('uploads/companies-logo/' . $company->logo) }}" height="100" width="120" alt="{{ $company->name }}"> @else - @endif </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('companies.index') }}" class="btn btn-default"><i class="fa fa-backspace"></i> Back</a>
        </div>
    </div><!--card-->
@endsection
