<?php

namespace App\DataTables;

use App\Models\User;
use Yajra\DataTables\Services\DataTable;

class UserListDataTable extends DataTable
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
            ->editColumn('user_type', function ($data) {
                if ($data->user_type == 1) return 'System Admin';
                if ($data->user_type == 2) return 'Admin';
                if ($data->user_type == 3) return 'Employee';
                if ($data->user_type == 4) return 'User';
            })
            ->addColumn('action', function ($data) {
                if ($data->user_type == 1) return '--';

                $actionBtn = '';
                $actionBtn .= '<a href="/admin/users/' . $data->id . '/edit/" class="btn btn-sm btn-primary m-1" title="Edit"><i class="fa fa-edit"></i></a>';
                $actionBtn .= '<a href="/admin/users/' . $data->id . '/delete' . '" onclick="return confirm(`Are you Sure`)" class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-trash"></i></a> ';

                return $actionBtn;
            })

            ->rawColumns(['action'])
            ->make(true);
    }

    /**
     * Get query source of dataTable.
     * @return \Illuminate\Database\Eloquent\Builder
     * @internal param \App\Models\AgentBalanceTransactionHistory $model
     */
    public function query()
    {
        $account = User::query();
        $account->select([
            'users.*'
        ]);

        return $this->applyScopes($account);
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
                'dom'         => 'Blfrtip',
                'responsive'  => true,
                'autoWidth'   => false,
                'paging'      => true,
                "pagingType"  => "full_numbers",
                'searching'   => true,
                'info'        => true,
                'searchDelay' => 350,
                "serverSide"  => true,
                'order'       => [[1, 'asc']],
                'buttons'     => ['excel', 'csv', 'print', 'reset', 'reload'],
                'pageLength'  => 10,
                'lengthMenu'  => [[10, 20, 25, 50, 100, 500, -1], [10, 20, 25, 50, 100, 500, 'All']],
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
            'name'       => ['data' => 'name', 'name' => 'name', 'orderable' => true, 'searchable' => true],
            'email'      => ['data' => 'email', 'name' => 'email', 'orderable' => true, 'searchable' => true],
            'user_type'  => ['data' => 'user_type', 'name' => 'user_type', 'orderable' => true, 'searchable' => true],
            'action'     => ['searchable' => false]
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'user_list_' . date('Y_m_d_H_i_s');
    }
}
