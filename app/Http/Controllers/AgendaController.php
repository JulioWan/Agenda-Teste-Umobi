<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Agenda;

class AgendaController extends Controller
{
    
    public function index() {

        $agendas = Agenda::all();

        return view('welcome',['agendas' => $agendas]);
    }

    public function create() {
        return view('cadastro');
    }

    public function store(Request $request) {

    
        $this->validate($request,[
            "name" => "required",
            "telephone" => "required"
        ], [
            "name.required" => "Preencha corretamente o campo Nome Completo",
            "telephone.required" => "Preencha corretamente o campo telefone"
        ]);
        $agenda = new Agenda;

        $agenda->name = $request->name;
        $agenda->date_of_birth = $request->date_of_birth;
        $agenda->telephone = $request->telephone;
        $agenda->email = $request->email;
        $agenda->compromisso = $request->compromisso;

        $agenda->save();

        return redirect('/')->with('msg', 'Contato criado com sucesso!');

    }

    public function show($id) {

        $agenda = Agenda::findOrFail($id);
        return view('show', ['agenda' => $agenda]);

    }


    public function destroy($id) {

        Agenda::findorFail($id)->delete();

        return redirect('/')->with('msg', 'Agenda excluida com sucesso');

    }


    public function edit($id) {

        $agenda = Agenda::findOrFail($id);

        return view ('edit', ['agenda' => $agenda]);

    }

    public function update(Request $request, $id) {

        $agenda = Agenda::findOrFail($id);
        $agenda->update($request->all());

        return redirect('/')->with('msg', 'Agenda editado com sucesso');

    }

}
