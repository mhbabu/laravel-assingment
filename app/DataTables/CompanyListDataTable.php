<?php

namespace App\DataTables;

use App\Modules\Company\Models\Company;
use Yajra\DataTables\Services\DataTable;

class CompanyListDataTable extends DataTable
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
            ->editColumn('logo', function ($data){
                $url = url('uploads/companies-logo/' . $data->logo);
                return ($data->logo) ? '<img src="'. $url .'" style="border-radius:5px; border:1px solid #FFFF00; cursor: pointer;" height="50" width="60" />' : '-' ;
            })
            ->addColumn('action', function ($data) {
                $actionBtn = '';
                $actionBtn .= '<a href="' . route('companies.show',  \App\Libraries\Encryption::encodeId($data->id)) . '" class="btn btn-sm btn-info m-1" title="View"><i class="fa fa-eye"></i> View</a> ';
                $actionBtn .= '<a href="/companies/' . \App\Libraries\Encryption::encodeId($data->id) . '/edit/" class="btn btn-sm btn-primary AppModal m-1" title="Edit" data-toggle="modal" data-target="#AppModal"><i class="fa fa-edit"></i> Edit</a> ';
                $actionBtn .= '<a href="' . route('companies.destroy',  \App\Libraries\Encryption::encodeId($data->id)) . '" table="company-table" class="btn btn-sm btn-danger action-delete" title="Delete"><i class="fa fa-trash"></i> Delete</a> ';
                return $actionBtn;
            })

            ->rawColumns(['action', 'logo'])
            ->make(true);
    }

    /**
     * Get query source of dataTable.
     * @return \Illuminate\Database\Eloquent\Builder
     * @internal param \App\Models\AgentBalanceTransactionHistory $model
     */
    public function query()
    {
        $data = Company::getCompanyList();
        $data->select([
            'companies.*'
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
            ->setTableId('company-table')
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
            'name'       => ['data' => 'name', 'name' => 'name', 'orderable' => true, 'searchable' => true],
            'email'      => ['data' => 'email', 'name' => 'email', 'orderable' => true, 'searchable' => true],
            'logo'       => ['data' => 'logo', 'name' => 'logo', 'orderable' => false, 'searchable' => false],
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
        return 'Company_List_' . date('Y_m_d_H_i_s');
    }
}
