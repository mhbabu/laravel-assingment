<?php

namespace App\DataTables;

use App\Modules\Employee\Models\Employee;
use Yajra\DataTables\Services\DataTable;

class EmployeeListDataTable extends DataTable
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
            ->editColumn('status', function($data){
                return $data->status == 1 ? "<span class='badge badge-success'>Active</label>" : "<span class='badge badge-danger'>Inactive</label>";
            })
            ->addColumn('action', function ($data) {
                $actionBtn = '';
                $actionBtn .= '<a href="' . route('employees.show',  \App\Libraries\Encryption::encodeId($data->id)) . '" class="btn btn-sm btn-info" title="View"><i class="fa fa-eye"></i> View</a> ';
                $actionBtn .= '<a href="/employees/' . \App\Libraries\Encryption::encodeId($data->id) . '/edit/" class="btn btn-sm btn-primary AppModal" title="Edit" data-toggle="modal" data-target="#AppModal"><i class="fa fa-edit"></i> Edit</a> ';
                $actionBtn .= '<a href="' . route('employees.destroy',  \App\Libraries\Encryption::encodeId($data->id)) . '" table="employee-table" class="btn btn-sm btn-danger action-delete" title="Delete"><i class="fa fa-trash"></i> Delete</a>';
                return $actionBtn;
            })
            ->rawColumns(['action','status'])
            ->make(true);
    }

    /**
     * Get query source of dataTable.
     * @return \Illuminate\Database\Eloquent\Builder
     * @internal param \App\Models\AgentBalanceTransactionHistory $model
     */
    public function query()
    {
        $data = Employee::getEmployeeList();
        $data->select([
            'employees.*',
            'companies.name as company_name'
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
            ->setTableId('employee-table')
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
            'company'     => ['data' => 'company_name', 'name' => 'companies.name', 'orderable' => true, 'searchable' => true],
            'employee_id' => ['data' => 'employee_id_no', 'name' => 'employees.employee_id_no', 'orderable' => true, 'searchable' => true],
            'first_name'  => ['data' => 'first_name', 'name' => 'employees.first_name', 'orderable' => true, 'searchable' => true],
            'last_name'   => ['data' => 'last_name', 'name' => 'employees.last_name', 'orderable' => true, 'searchable' => true],
            'email'       => ['data' => 'email', 'name' => 'employees.email', 'orderable' => true, 'searchable' => true],
            'phone'       => ['data' => 'phone', 'name' => 'employees.phone', 'orderable' => true, 'searchable' => true],
            'status'      => ['data' => 'status', 'name' => 'status', 'orderable' => false, 'searchable' => false],
            'action'      => ['searchable' => false]
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'Employee_List_' . date('Y_m_d_H_i_s');
    }
}
