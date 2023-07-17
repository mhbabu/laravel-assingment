@extends('layouts.backend.app')
@section('title', 'Files Create')
@section('content')
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div class="page-title-icon"> <i class="pe-7s-file text-success"></i></div>
                    <div>Projects
                        <div class="page-title-subheading">{{ $project->name }}</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <ol class="breadcrumb alert alert-info p-2">
                <li class="breadcrumb-item"><strong>Created By - </strong>
                    <span>{{ $project->created_user->name ? $project->created_user->name . ' (' . $project->created_user->email . ')' : '-' }}
                    </span>
                </li>
                <li class="breadcrumb-item"><strong>Created At - </strong>
                    <span>{{ \Carbon\Carbon::parse($project->created_at)->format('d F , Y') }} at
                        {{ \Carbon\Carbon::parse($project->created_at)->format('g:i A') }} </span>
                </li>
            </ol>
            <div class="card-body">
                <div class="position-relative row form-group">
                    <div class="col-6">
                        <h2>Project Users</h2>
                        @foreach ($project->users as $index => $user)
                            <div>
                                <span>{{ $index + 1 }}.
                                    <a href="/admin/users/{{ $user->id }}/edit">{{ $user->name }}</a>
                                    - {{ $user->email }}</span>
                            </div>
                        @endforeach
                    </div>
                    <div class="col-6">
                        <h2>Project Files</h2>
                        @foreach ($project->files as $index => $file)
                            <div>
                                <span>{{ $index + 1 . '. ' . $file->file_name }}</span>
                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="position-relative row form-check">
                    <div class="col-sm-12">
                        <a href="{{ route('projects.index') }}" class="btn btn-primary float-right">Back</a>
                    </div>
                    <div class="col-sm-12">
                        <a href="/admin/projects/{{ $project->id }}/edit" class="btn btn-secondary float-right">Edit</a>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
