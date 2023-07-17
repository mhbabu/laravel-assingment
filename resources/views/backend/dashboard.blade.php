@extends('layouts.backend.app')
@section('title', 'Dashboard')
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon">
                    <i class="pe-7s-car icon-gradient bg-mean-fruit">
                    </i>
                </div>
                <div> @if(auth()->user()->user_type == 1 || auth()->user()->user_type == 2)Admin @endif Dashboard
                    <div class="page-title-subheading">Welcome to your @if(auth()->user()->user_type == '1x101') admin @endif  dashboard.
                    </div>
                </div>
            </div>

        </div>
    </div>
    <div class="row">
        @if(auth()->user()->user_type == 1 || auth()->user()->user_type == 2)
            <div class="col-md-6 col-xl-4">
                <a href="{{ route('users.index') }}" style="text-decoration: none">
                    <div class="card mb-3 widget-content bg-midnight-bloom">
                        <div class="widget-content-wrapper text-white">
                            <div class="widget-content-left">
                                <div class="widget-heading">Total Users</div>
                            </div>
                            <div class="widget-content-right">
                                <div class="widget-numbers text-white"><span>{{ $totalUsers }}</span></div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
        @endif
        <div class="col-md-6 col-xl-4">
            <a href="{{ route('files.index') }}" style="text-decoration: none">
                <div class="card mb-3 widget-content bg-arielle-smile">
                    <div class="widget-content-wrapper text-white">
                        <div class="widget-content-left">
                            <div class="widget-heading">Total Files</div>
                        </div>
                        <div class="widget-content-right">
                            <div class="widget-numbers text-white"><span>{{ $authUserTotalFile }}</span></div>
                        </div>
                    </div>
                </div>
            </a>
        </div>
    </div>
</div>
@endsection
