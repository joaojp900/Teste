<?php

namespace App\Http\Controllers;

use App\Models\UsuarioCrud;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usuario = UsuarioCrud:: paginate(10);

        return View('read', ['usuario' => $usuario]);
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return View('create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $regras = [
            'nome' => 'required|min:5|max:35',
            'email' => 'email',
            'senha' => 'required'
        ];

        $feedback = [
            'required' => 'O campo :attribute deve ser preenchido',
            'nome.min' => 'O campo nome de ter no mínimo 5 caracteres',
            'nome.max' => 'O campo nome deve ter no máximo 35 caracteres',
            'email.email' => 'O campo e-mail não foi preenchido corretamente',
            
        ];

        $request->validate($regras,$feedback);

  


        UsuarioCrud::create($request->all());

        echo 'Cadastro Realizado com Sucesso ';
        return redirect()->route('app.read');
         
        
    }
    

    
    /**
     * 
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id, Request $request)
    {
        $usuario = UsuarioCrud::find($id);
        $usuario->update($request->all());
         return view('update', ['usuario' => $usuario]);

         
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy( $id)
    {
         UsuarioCrud::find($id)->delete();

        return redirect()->route('app.read');
    }
}
