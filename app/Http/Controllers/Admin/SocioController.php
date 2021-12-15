<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\SocioDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateSocioRequest;
use App\Http\Requests\Admin\UpdateSocioRequest;
use App\Repositories\Admin\SocioRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use RealRashid\SweetAlert\Facades\Alert;

class SocioController extends AppBaseController
{
    /** @var  SocioRepository */
    private $socioRepository;

    public function __construct(SocioRepository $socioRepo)
    {
        $this->socioRepository = $socioRepo;
    }

    /**
     * Display a listing of the Socio.
     *
     * @param SocioDataTable $socioDataTable
     * @return Response
     */
    public function index(SocioDataTable $socioDataTable)
    {
        return $socioDataTable->render('admin.socios.index');
    }

    /**
     * Show the form for creating a new Socio.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.socios.create');
    }

    /**
     * Store a newly created Socio in storage.
     *
     * @param CreateSocioRequest $request
     *
     * @return Response
     */
    public function store(CreateSocioRequest $request)
    {
        $input = $request->all();

        $socio = $this->socioRepository->create($input);

        /* Flash::success('Socio saved successfully.'); */        
        toast('Socio agregado exitosamente','success');
        return redirect(route('admin.socios.index'));
    }

    /**
     * Display the specified Socio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $socio = $this->socioRepository->find($id);

        if (empty($socio)) {
            /* Flash::error('Socio not found'); */
            toast('Socio no encontrado','error');

            return redirect(route('admin.socios.index'));
        }

        return view('admin.socios.show')->with('socio', $socio);
    }

    /**
     * Show the form for editing the specified Socio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $socio = $this->socioRepository->find($id);

        if (empty($socio)) {
            /* Flash::error('Socio not found'); */
            toast('Socio no encontrado','error');

            return redirect(route('admin.socios.index'));
        }

        return view('admin.socios.edit')->with('socio', $socio);
    }

    /**
     * Update the specified Socio in storage.
     *
     * @param  int              $id
     * @param UpdateSocioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSocioRequest $request)
    {
        $socio = $this->socioRepository->find($id);

        if (empty($socio)) {
            toast('Socio no encontrado','error');
            /* Flash::error('Socio not found'); */

            return redirect(route('admin.socios.index'));
        }

        $socio = $this->socioRepository->update($request->all(), $id);

        /* Flash::success('Socio updated successfully.'); */
        toast('Socio actualizado exitosamente','success');

        return redirect(route('admin.socios.index'));
    }

    /**
     * Remove the specified Socio from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        toast('Socio eliminado exitosamente','success');
        $socio = $this->socioRepository->find($id);
        
        if (empty($socio)) {            
            toast('Socio no encontrado','error');

            return redirect(route('admin.socios.index'));
        }

        $this->socioRepository->delete($id);

        
        
        
        return redirect(route('admin.socios.index'));
    }
}
