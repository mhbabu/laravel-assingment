<?php

namespace App\DataTables;

use App\Models\SeoFeature;
use Yajra\DataTables\Services\DataTable;

class SeoFeatureDataTable extends DataTable
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
                $actionBtn .= '<a href="' . route('seo-features.edit', [$data->id]) . '" class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit"></i></a> ';
                $actionBtn .= '<a href="/admin/seo-features/' . $data->id . '/delete' .'" onclick="return confirm(`Are you Sure`)" class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-trash"></i></a> ';
                
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
        $query = SeoFeature::latest();
        $data = $query->select([
            'seo_features.*'
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
            'title'   => ['data' => 'title', 'name' => 'title', 'orderable' => true, 'searchable' => true],
            'page'    => ['data' => 'page_name', 'name' => 'page_name', 'orderable' => true, 'searchable' => true],
            'slug'    => ['data' => 'slug', 'name' => 'slug', 'orderable' => true, 'searchable' => true],
            'title'   => ['data' => 'title', 'name' => 'title', 'orderable' => true, 'searchable' => true],
            'title'   => ['data' => 'title', 'name' => 'title', 'orderable' => true, 'searchable' => true],
            'action'  => ['searchable' => false]
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'seo_features' . date('Y_m_d_H_i_s');
    }
}
