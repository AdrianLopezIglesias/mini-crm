<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateEmpleadoRequest;
use App\Http\Requests\UpdateEmpleadoRequest;
use Illuminate\Http\Request;
use App\Models\Empleado;
use Response;

class EmpleadoController extends Controller
{

    public function __construct() {
        $this->middleware('auth', ['except' => ['index', 'show']]);
    }

    /**
     * Display a listing of the Empleado.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $empleados = Empleado::latest()->with('empleador')->paginate(10)->withQueryString();

        return view('empleados.index')
            ->with('empleados', $empleados);
    }

    /**
     * Show the form for creating a new Empleado.
     *
     * @return Response
     */
    public function create()
    {
        return view('empleados.create');
    }

    /**
     * Store a newly created Empleado in storage.
     *
     * @param CreateEmpleadoRequest $request
     *
     * @return Response
     */
    public function store(CreateEmpleadoRequest $request)
    {
        $input = $request->all();
        

        $empleado = new Empleado();
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->empresa = $request->empresa;
        $empleado->email = $request->email;
        $empleado->telefono = $request->telefono;
        $empleado->save();

        return redirect(route('empleados.index'));
    }

    /**
     * Display the specified Empleado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $empleado = Empleado::find($id);

        if (empty($empleado)) {

            return redirect(route('empleados.index'));
        }

        return view('empleados.show')->with('empleado', $empleado);
    }

    /**
     * Show the form for editing the specified Empleado.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $empleado = Empleado::find($id);

        if (empty($empleado)) {

            return redirect(route('empleados.index'));
        }

        return view('empleados.edit')->with('empleado', $empleado);
    }

    /**
     * Update the specified Empleado in storage.
     *
     * @param int $id
     * @param UpdateEmpleadoRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEmpleadoRequest $request)
    {
        $empleado = Empleado::find($id);

        if (empty($empleado)) {

            return redirect(route('empleados.index'));
        }
        $empleado->nombre = $request->nombre;
        $empleado->apellido = $request->apellido;
        $empleado->empresa = $request->empresa;
        $empleado->email = $request->email;
        $empleado->telefono = $request->telefono;
        $empleado->save();


        return redirect(route('empleados.index'));
    }

    /**
     * Remove the specified Empleado from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $empleado = Empleado::find($id);

        if (empty($empleado)) {

            return redirect(route('empleados.index'));
        }

        $empleado->delete();


        return redirect(route('empleados.index'));
    }
}
