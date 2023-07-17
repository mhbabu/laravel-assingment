@extends('layouts.backend.app')
@section('title', 'Files Create')
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon"> <i class="pe-7s-file text-success"></i></div>
                <div>Files <div class="page-title-subheading">View your attachment.</div></div>
            </div>
        </div>
    </div>         
    <div class="main-card mb-3 card">
        <ol class="breadcrumb alert alert-info p-2">
            <li class="breadcrumb-item"><strong>Created By - </strong> <span>{{ ($userFile->createdBy->name) ? $userFile->createdBy->name .' (' . $userFile->createdBy->email .')' : '-' }} - {{ \Carbon\Carbon::parse($userFile->created_at)->format('d F , Y') }} at {{ \Carbon\Carbon::parse($userFile->created_at)->format('g:i A') }} </span></li>
        </ol>
        <div class="card-body">
            <div class="position-relative row form-group">
                <label for="title" class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-10">
                    <p>{{ $userFile->title }}</p>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="title" class="col-sm-2 col-form-label">Attachment</label>
                <div class="col-sm-10">
                    <a href="{{ url('uploads/attachment/'.$userFile->attachment) }}" target="_blank" class="btn btn-default btn-xs border" style="margin-top: -6px">
                        <i class="pe-7s-file icon-gradient bg-mean-fruit"></i>
                    </a>
                </div>
            </div>
            <div class="position-relative row form-group">
                <label for="title" class="col-sm-2 col-form-label">Description</label>
                <div class="col-sm-10">
                    <p>{{ $userFile->description }}</p>
                </div>
            </div>

            <div class="position-relative row form-check">
                <div class="col-sm-12">
                    <a href="{{ route('files.index') }}" class="btn btn-secondary float-right">Back</a>
                </div>
            </div>
        </div>
    </div>   
</div>            
 

@endsection
