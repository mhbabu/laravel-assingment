<?php

namespace App\DataTables;

use App\Models\User;
use Carbon\Carbon;
use App\Models\UserFile;
use GuzzleHttp\Psr7\Uri;
use Termwind\Components\Ul;
use Yajra\DataTables\Services\DataTable;

class FileListDataTable extends DataTable
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
                $actionBtn .= '<a href="' . route('files.show', [$data->id]) . '" class="btn btn-sm btn-info" title="Details"><i class="fa fa-list-alt"></i></a> ';
                if (auth()->user()->user_type == 1 || auth()->user()->user_type == 2) {
                    $actionBtn .= '<a href="' . route('files.edit', [$data->id]) . '" class="btn btn-sm btn-primary" title="Edit"><i class="fa fa-edit"></i></a> ';
                    $actionBtn .= '<a href="/admin/files/' . $data->id . '/delete' . '" onclick="return confirm(`Are you Sure`)" class="btn btn-sm btn-danger" title="Delete"><i class="fa fa-trash"></i></a> ';
                }

                return $actionBtn;
            })
            ->editColumn('attachment', function ($data) {
                $url = url("/uploads/attachment/" . $data->attachment);
                return ($data->attachment) ? '<a href="' . $url . '" target="_blank"> <i class="pe-7s-file icon-gradient bg-mean-fruit fa-2x"></i></a>' : '-';
            })
            ->addColumn('user', function ($data) {
                return $data->user->name . ' - ' . $data->user->email ?? '-';
            })
            ->rawColumns(['attachment', 'action'])
            ->make(true);
    }

    /**
     * Get query source of dataTable.
     * @return \Illuminate\Database\Eloquent\Builder
     * @internal param \App\Models\AgentBalanceTransactionHistory $model
     */
    public function query()
    {
        $query = UserFile::getUserFile();
        $data = $query->select([
            'user_files.*'
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
            'user'       => ['searchable' => false],
            'title'      => ['data' => 'title', 'name' => 'title', 'orderable' => true, 'searchable' => true],
            'attachment' => ['data' => 'attachment', 'name' => 'attachment', 'orderable' => true, 'false' => true],
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
        return 'campaign_list' . date('Y_m_d_H_i_s');
    }
}
