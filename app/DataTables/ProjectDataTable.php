<?php

namespace App\DataTables;

use App\Models\Project;
use App\Models\ProjectFile;
use App\Models\ProjectUser;
use App\Models\User;
use Yajra\DataTables\Services\DataTable;

class ProjectDataTable extends DataTable
{

    /**
     * Display ajax response.
     *
     * @return \Illuminate\Http\JsonResponse
     */
    public function ajax()
    {
        return datatables()
            ->eloquent($this->query())
            ->addColumn('action', function ($data) {
                $actionBtn = '';
                // $actionBtn .= '<a href="' . route('seo-features.show', [$data->id]) . '" class="btn btn-sm btn-info" title="Details"><i class="fa fa-list-alt"></i></a> ';
                $actionBtn .= '<a href="/admin/projects/' . $data->id . '" class="btn btn-sm btn-primary m-1" title="View"><i class="fa fa-eye"></i></a>';
                $actionBtn .= '<a href="/admin/projects/' . $data->id . '/edit/" class="btn btn-sm btn-secondary m-1" title="Edit"><i class="fa fa-edit"></i></a>';
                $actionBtn .= '<a href="/admin/projects/' . $data->id . '/delete' . '" onclick="return confirm(`Are you Sure`)" class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-trash"></i></a> ';
                return $actionBtn;
            })
            ->addColumn('created_by', function ($data) {
                return User::find($data->created_by)->name;
            })
            ->addColumn('created_at', function ($data) {
                return date('d-m-Y', strtotime($data->created_at));
            })
            ->addColumn('user', function ($data) {
                return ProjectUser::where('project_id', $data->id)->count();
            })
            ->addColumn('file', function ($data) {
                return ProjectFile::where('project_id', $data->id)->count();
            })
            // ->rawColumns(['created_by'])
            // ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Get query source of dataTable.
     * @return \Illuminate\Database\Eloquent\Builder
     * @internal param \App\Models\AgentBalanceTransactionHistory $model
     */
    public function query()
    {
        $query = Project::latest();
        $data = $query->select([
            'projects.*'
        ]);

        return $this->applyScopes($data);
    }

    /**
     * Optional method if you want to use html builder.
     *
     * @return \Yajra\DataTables\Html\Builder
     */
    public function html()
    {
        return $this->builder()
            ->columns($this->getColumns())
            ->parameters([
                'dom' => 'Blfrtip',
                'responsive' => true,
                'autoWidth' => false,
                'paging' => true,
                "pagingType" => "full_numbers",
                'searching' => true,
                'info' => true,
                'searchDelay' => 350,
                "serverSide" => true,
                'order' => [[1, 'asc']],
                'buttons' => ['reset', 'reload'],
                'pageLength' => 10,
                'lengthMenu' => [[10, 20, 25, 50, 100, 500, -1], [10, 20, 25, 50, 100, 500, 'All']],
            ]);
    }

    /**
     * Get columns.
     *
     * @return array
     */
    protected function getColumns()
    {
        return [
            'title'   => ['data' => 'name', 'name' => 'name', 'orderable' => true, 'searchable' => true],
            'user'   => ['data' => 'user', 'name' => 'user', 'orderable' => false, 'searchable' => false],
            'file'   => ['data' => 'file', 'name' => 'file', 'orderable' => false, 'searchable' => false],
            'created by'    => ['data' => 'created_by', 'name' => 'created_by', 'orderable' => false, 'searchable' => true],
            'created at'    => ['data' => 'created_at', 'name' => 'created_at', 'orderable' => true, 'searchable' => false],
            'action'  => ['orderable' => false, 'searchable' => false]
        ];
    }
}
