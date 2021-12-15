<?php

namespace App\Http\Controllers\Admin;

use App\DataTables\Admin\ComentarioDataTable;
use App\Http\Requests\Admin;
use App\Http\Requests\Admin\CreateComentarioRequest;
use App\Http\Requests\Admin\UpdateComentarioRequest;
use App\Repositories\Admin\ComentarioRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;
use Illuminate\Http\Request;
use App\Models\Admin\Comentario;
use Illuminate\Support\Facades\Auth;

class ComentarioController extends AppBaseController
{
    /** @var  ComentarioRepository */
    private $comentarioRepository;

    public function __construct(ComentarioRepository $comentarioRepo)
    {
        $this->comentarioRepository = $comentarioRepo;
    }

    /**
     * Display a listing of the Comentario.
     *
     * @param ComentarioDataTable $comentarioDataTable
     * @return Response
     */
    public function index(ComentarioDataTable $comentarioDataTable)
    {
        return $comentarioDataTable->render('admin.comentarios.index');
    }

    /**
     * Show the form for creating a new Comentario.
     *
     * @return Response
     */
    public function create()
    {
        return view('admin.comentarios.create');
    }

    /**
     * Store a newly created Comentario in storage.
     *
     * @param CreateComentarioRequest $request
     *
     * @return Response
     */
    /* public function store(CreateComentarioRequest $request) */
    public function store(Request $request)
    {
        $request->validate([
            'name'          => 'required',
            'email'         => 'required|email',
            'subject'        => 'required',
            'message'       => 'required',
        ]);
        $input = $request->all();

        $comentarios = new Comentario;
        $comentarios->name = $request->name;
        $comentarios->email = $request->email;
        $comentarios->subject = $request->subject;
        $comentarios->message = $request->message;
        $comentarios->save();

        return response()->json(['success'=>'Successfully']);
        /* Comentario::create($request->all());
        return json_encode(array(
            "statusCode"=>200
        )); */
        /* $comentarios = $this->comentarioRepository->create($input); */
/* 
        Flash::success('Comentario saved successfully.');
        return response()->json([
            "status" => true,
            "data" => $input
        ]); */
        /* return redirect(route('admin.comentarios.index')); */
    }

    /**
     * Display the specified Comentario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $comentario = $this->comentarioRepository->find($id);

        if (empty($comentario)) {
            Flash::error('Comentario not found');

            return redirect(route('admin.comentarios.index'));
        }

        return view('admin.comentarios.show')->with('comentario', $comentario);
    }

    /**
     * Show the form for editing the specified Comentario.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $comentario = $this->comentarioRepository->find($id);

        if (empty($comentario)) {
            Flash::error('Comentario not found');

            return redirect(route('admin.comentarios.index'));
        }

        return view('admin.comentarios.edit')->with('comentario', $comentario);
    }

    /**
     * Update the specified Comentario in storage.
     *
     * @param  int              $id
     * @param UpdateComentarioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateComentarioRequest $request)
    {
        $comentario = $this->comentarioRepository->find($id);

        if (empty($comentario)) {
            Flash::error('Comentario not found');

            return redirect(route('admin.comentarios.index'));
        }

        $comentario = $this->comentarioRepository->update($request->all(), $id);

        Flash::success('Comentario updated successfully.');

        return redirect(route('admin.comentarios.index'));
    }

    /**
     * Remove the specified Comentario from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $comentario = $this->comentarioRepository->find($id);

        if (empty($comentario)) {
            Flash::error('Comentario not found');

            return redirect(route('admin.comentarios.index'));
        }

        $this->comentarioRepository->delete($id);

        Flash::success('Comentario deleted successfully.');

        return redirect(route('admin.comentarios.index'));
    }
}
