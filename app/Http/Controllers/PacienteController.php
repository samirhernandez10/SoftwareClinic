<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Paciente;


class PacienteController extends Controller
{
    public function register()
    {
        return view('Paciente.register');
    }

    public function save(Request $request)
    {
        $paciente = new Paciente([
            'cedula' => $request->input('cedula'),
            'nombres' => $request->input('nombres'),
            'apellidos' => $request->input('apellidos'),
            'ocupacion' => $request->input('ocupacion'),
            'estcivil' => $request->input('estcivil'),
            'genero' => $request->input('genero'),
            'date' => $request->input('date'),
            'email' => $request->input('email'),
            'tposangre' => $request->input('tposangre'),
            'direccion' => $request->input('direccion'),
            'usuario_id' => session('usuario_id')
        ]);

        $paciente->save();
        session()->flash('mensaje', 'Registro guardado satisfactoriamente');

        return $this->show();
    }

    public function show()
    {
        $pacientes = Paciente::allByUsuarioId(session('usuario_id'));

        // Paginator
        $lista_pacientes = [];
        $registros = 4; // Debe ser siempre par
        // Resto del código de paginación...
        // ...

        return view('Paciente.show', compact('lista_pacientes', 'botones'));
    }

    public function error()
    {
        return view('User.error');
    }

    public function showupdate($id)
    {
        $paciente = Paciente::getById($id);
        return view('Paciente.update', compact('paciente'));
    }

    public function update(Request $request)
    {
        $paciente = new Paciente([
            'id' => $request->input('id'),
            'cedula' => $request->input('cedula'),
            'nombres' => $request->input('nombres'),
            'apellidos' => $request->input('apellidos'),
            'ocupacion' => $request->input('ocupacion'),
            'estcivil' => $request->input('estcivil'),
            'genero' => $request->input('genero'),
            'date' => $request->input('date'),
            'email' => $request->input('email'),
            'tposangre' => $request->input('tposangre'),
            'direccion' => $request->input('direccion'),
            'usuario_id' => session('usuario_id')
        ]);

        Paciente::update($paciente);
        session()->flash('mensaje', 'Registro actualizado satisfactoriamente');

        return $this->show();
    }

    public function delete($id)
    {
        Paciente::delete($id);
        session()->flash('mensaje', 'Registro eliminado satisfactoriamente');

        return $this->show();
    }

    public function buscar(Request $request)
    {
        // Si cedula no es vacía busca por cedula
        if (!empty($request->input('cedula'))) {
            $lista_pacientes = [Paciente::getByCedula($request->input('cedula'))];
            $botones = 0;
            return view('Paciente.show', compact('lista_pacientes', 'botones'));
        } else {
            return $this->show();
        }
    }
}