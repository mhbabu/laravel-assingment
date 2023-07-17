@extends('layouts.backend.app')
@section('title', 'SEO Features')
@section('css')
    {!! Html::style('assets/backend/data-tables/css/dataTables.bootstrap4.min.css') !!}
    {!! Html::style('assets/backend/data-tables/css/buttons.dataTables.min.css') !!}
@endsection
@section('content')
<div class="app-main__inner">
    <div class="app-page-title">
        <div class="page-title-wrapper">
            <div class="page-title-heading">
                <div class="page-title-icon"> <i class="pe-7s-settings text-success"></i></div>
                <div>SEO Feautures <div class="page-title-subheading">SEO Features</div></div>
            </div>
        </div>
    </div>
    <div class="card mb-4 mt-3">
        <div class="card-header justify-content-between">
            <h6 class="font-weight-bold"><i class="fa fa-cog"></i> SEO Feautures</h6>
            @if(auth()->user()->user_type == 1 || auth()->user()->user_type == 2)
                <a href="{{ route('seo-features.create') }}" class="btn btn-sm btn-success">
                    <i class="fa fa-plus-circle"></i> Create
                </a>
            @endif
        </div>
        <div class="card-body">
            <div class="table-responsive">
                {!! $dataTable->table() !!}
            </div>
        </div>
    </div>
</div>

@endsection
@section('script')
    {!! Html::script('assets/backend/data-tables/js/jquery.dataTables.min.js') !!}
    {!! Html::script('assets/backend/data-tables/js/dataTables.bootstrap4.min.js') !!}
    {!! Html::script('assets/backend/data-tables/js/dataTables.buttons.min.js') !!}
    {!! Html::script('assets/backend/data-tables/js/buttons.server-side.js') !!}

    @if (isset($dataTable))
        {!! $dataTable->scripts() !!}
    @endif
@endsection
