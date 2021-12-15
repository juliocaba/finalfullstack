<?php

namespace App\DataTables\Admin;

use App\Models\Admin\Socio;
use Yajra\DataTables\Services\DataTable;
use Yajra\DataTables\EloquentDataTable;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class SocioDataTable extends DataTable
{
    /**
     * Build DataTable class.
     *
     * @param mixed $query Results from query() method.
     * @return \Yajra\DataTables\DataTableAbstract
     */
    public function dataTable($query)
    {
        $dataTable = new EloquentDataTable($query);
        return $dataTable->editColumn('estado', function ($query) {
            $checked = $query->estado ? 'checked' : '';
            return
            '<div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">'.
                '<input type="checkbox" class="custom-control-input" name="estado" value="'.$query->id.'" '.$checked.' id="customSwitch'.$query->id.'">'.
                '<label class="custom-control-label" for="customSwitch'.$query->id.'"></label>'.
            '</div>';
        })->addColumn('action', 'admin.socios.datatables_actions')        
          ->rawColumns(['action', 'estado']);
        return $dataTable->addColumn('action', 'admin.socios.datatables_actions');
        /* return $dataTable->addColumn('action', 'admin.socios.datatables_actions'); */
    }

    /**
     * Get query source of dataTable.
     *
     * @param \App\Models\Socio $model
     * @return \Illuminate\Database\Eloquent\Builder
     */
    public function query(Socio $model)
    {
        return $model->newQuery();
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
            ->minifiedAjax()
            ->addAction(['width' => '120px', 'printable' => true])
            ->parameters([
                'dom'       => 'Bfrtip',
                'stateSave' => true,
                'order'     => [[0, 'desc']],
                'buttons'   => [
                    /* ['extend' => 'create', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'export', 'className' => 'btn btn-default btn-sm no-corner',],
                    ['extend' => 'print', 'className' => 'btn btn-default btn-sm no-corner',], 
                    ['extend' => 'reset', 'className' => 'btn btn-default btn-md no-corner',],
                    ['extend' => 'reload', 'className' => 'btn btn-default btn-md no-corner',],*/
                ],
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
            'dni' => new \Yajra\DataTables\Html\Column(['title' => 'DNI', 'data' => 'dni', 'name' => 'dni']),
            'name' => new \Yajra\DataTables\Html\Column(['title' => 'Nombre', 'data' => 'name', 'name' => 'name']),
            'lastname' => new \Yajra\DataTables\Html\Column(['title' => 'Apellido', 'data' => 'lastname', 'name' => 'lastname']),             
            'direction' => new \Yajra\DataTables\Html\Column(['title' => 'Direccion', 'data' => 'direction', 'name' => 'direction']),
            /* 'phone', */
            'estado' => new \Yajra\DataTables\Html\Column(['title' => 'Activo', 'data' => 'estado', 'name' => 'estado']),
            /* 'email' */
        ];
    }

    /**
     * Get filename for export.
     *
     * @return string
     */
    protected function filename()
    {
        return 'socios_datatable_' . time();
    }
}
