<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmpresaRequest;
use App\Http\Requests\UpdateEmpresaRequest;
use Illuminate\Http\Request;
use App\Models\Empresa;
use Response;

class EmpresaController extends Controller
{

public function __construct(){
    $this->middleware('auth', ['except' => ['index', 'show']]);
}

    /**
     * Display a listing of the Empresa.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $empresas = Empresa::latest()->paginate(10)->withQueryString();

        return view('empresas.index')
            ->with('empresas', $empresas);
    }

    /**
     * Show the form for creating a new Empresa.
     *
     * @return Response
     */
    public function create()
    {
    
        return view('empresas.create');
    }

    /**
     * Store a newly created Empresa in storage.
     *
     * @param CreateEmpresaRequest $request
     *
     * @return Response
     */
    public function store(CreateEmpresaRequest $request)
    {
        $input = $request->all();


        $empresa = new Empresa();
        if($request->file('logotipo')){
            $empresa->logotipo = $request->file('logotipo')->store('', ['disk' => 'public']);
        }
        $empresa->nombre = $request->nombre;
        $empresa->email = $request->email;
        $empresa->sitioweb = $request->sitioweb;
        $empresa->save();

        return redirect(route('empresas.index'));
    }

    /**
     * Display the specified Empresa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $empresa = Empresa::find($id);

        if (empty($empresa)) {

            return redirect(route('empresas.index'));
        }

        return view('empresas.show')->with('empresa', $empresa);
    }

    /**
     * Show the form for editing the specified Empresa.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $empresa = Empresa::find($id);

        if (empty($empresa)) {

            return redirect(route('empresas.index'));
        }

        return view('empresas.edit')->with('empresa', $empresa);
    }

    /**
     * Update the specified Empresa in storage.
     *
     * @param int $id
     * @param UpdateEmpresaRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmpresaRequest $request)
    {
        $empresa = Empresa::find($id);

        if (empty($empresa)) {

            return redirect(route('empresas.index'));
        }
        if ($request->file('logotipo')) {
            $empresa->logotipo = $request->file('logotipo')->store('', ['disk' => 'public']);
        }
        $empresa->nombre = $request->nombre;
        $empresa->email = $request->email;
        $empresa->sitioweb = $request->sitioweb;
        $empresa->save();


        return redirect(route('empresas.index'));
    }

    /**
     * Remove the specified Empresa from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $empresa = Empresa::find($id);

        if (empty($empresa)) {

            return redirect(route('empresas.index'));
        }

        $empresa->delete();


        return redirect(route('empresas.index'));
    }
}
