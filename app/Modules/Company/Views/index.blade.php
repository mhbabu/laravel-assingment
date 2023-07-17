@extends('backend.layouts.app')
@section('title', 'Companies List')
@section('header-css')
    {!! Html::style('assets/backend/dist/css/dataTables.bootstrap4.min.css') !!}
    {!! Html::style('assets/backend/dist/css/buttons.dataTables.min.css') !!}
@endsection
@section('content')
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-sm-5">
                    <h5><i class="fa fa-list-alt"></i> Companies</h5>
                </div><!--col-->

                <div class="col-sm-7 pull-right">
                    <div class="btn-toolbar float-right" role="toolbar" aria-label="Toolbar with button groups">
                        <a href="{{ route('companies.create') }}" class="btn btn-sm btn-success ml-1 AppModal"
                           data-toggle="modal" data-target="#AppModal" title="Create new" data-original-title="Create New">
                            <i class="fa fa-plus-circle"></i> Create
                        </a>
                    </div>
                </div><!--col-->
            </div>
        </div>
        <div class="card-body">
            <div class="row mt-4">
                <div class="col-md-12">
                    {!! $dataTable->table() !!}
                </div>
            </div><!--row-->
        </div><!--card-body-->
    </div><!--card-->
    @include('backend.includes.modal-dialogue-md')

@endsection

@section('footer-script')
    {!! Html::script('assets/backend/dist/js/jquery.dataTables.min.js') !!}
    {!! Html::script('assets/backend/dist/js/dataTables.bootstrap4.min.js') !!}
    {!! Html::script('assets/backend/dist/js/dataTables.buttons.min.js') !!}
    {!! Html::script('assets/backend/dist/js/buttons.server-side.js') !!}

    @if(isset($dataTable))
        {!! $dataTable->scripts() !!}
    @endif
@endsection
