@extends('backend.layouts.app')
@section('title', 'Employee Details')
@section('content')
@section('content')
    <ol class="breadcrumb alert alert-info p-2">
        <li class="breadcrumb-item"><strong>Created By - </strong> <span>{{ $employee->user->name ?? '-' }} </span></li>
        <li class="breadcrumb-item"><strong>Created At - </strong> <span>{{ \Carbon\Carbon::parse($employee->created_at)->format('d F , Y') }} at {{ \Carbon\Carbon::parse($employee->created_at)->format('g:i A') }} </span></li>
    </ol>
    <div class="card">
        <div class="card-header">
            <div class="row col-sm">
                <h5><i class="fa fa-list-alt"></i> Employee Details</h5>
            </div>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-md-12 form-group">
                    <div class="row mb-2">
                        <div class="col-lg-4 font-weight-bold"> Company : </div>
                        <div class="col-lg-8"> {{ $employee->comapany->name ?? '-' }} </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4 font-weight-bold"> Employee ID : </div>
                        <div class="col-lg-8"> {{ $employee->employee_id_no ?? '-' }} </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4 font-weight-bold"> First Name : </div>
                        <div class="col-lg-8"> {{ $employee->first_name ?? '-' }} </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4 font-weight-bold"> Last Name : </div>
                        <div class="col-lg-8"> {{ $employee->last_name ?? '-' }} </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4 font-weight-bold"> Email Address : </div>
                        <div class="col-lg-8"> {{ $employee->email ?? '-' }} </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4 font-weight-bold"> Phone : </div>
                        <div class="col-lg-8"> {{ $employee->phone ?? '-' }} </div>
                    </div>
                    <div class="row mb-2">
                        <div class="col-lg-4 font-weight-bold"> Status : </div>
                        <div class="col-lg-8">
                            @if($employee->status == 1) <label class='badge badge-success'>Active</label> @else <label class='badge badge-danger'> Inactive</label> @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer">
            <a href="{{ route('employees.index') }}" class="btn btn-default"><i class="fa fa-backspace"></i> Back</a>
        </div>
    </div><!--card-->
@endsection
