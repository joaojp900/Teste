<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Editar Usuário</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body 
 
    
class="bg-gray-100 flex items-center justify-center min-h-screen">
    <div class="bg-white p-8 rounded-lg shadow-lg w-full max-w-md">
        <h2 class="text-2xl font-bold text-center mb-6">Editar Usuário</h2>
        <form action="{{ route('app.update',['id' => $usuario->id])}}" method="POST" class="space-y-4">
            @csrf
            @method('PUT')
            <!-- Campo Nome -->
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nome</label>
                <input type="text" id="nome" name="nome" value="{{$usuario->nome ?? old('nome')}}"
                placeholder="Digite seu nome"class="mt-1 block w-full px-4 py-2 bg-gray-50 border 
                border-gray-300 rounded-md focus:ring-indigo-500 focus:border-indigo-500 
                text-gray-700">
            </div>
            {{$errors->has('nome')? $errors->first('nome') : ''}}
            <!-- Campo Email -->
            <div>
                <label for="email" class="block text-sm font-medium text-gray-700">E-mail</label>
                <input type="email" id="email" name="email" placeholder="Digite seu e-mail" 
                       class="mt-1 block w-full px-4 py-2 bg-gray-50 border border-gray-300 
                              rounded-md focus:ring-indigo-500 focus:border-indigo-500 
                              text-gray-700" value="{{$usuario->email ?? old('peso')}}">
            </div>
            {{$errors->has('email')? $errors->first('email') : ''}}
             
            <!-- Campo Senha -->
            <div>
                <label for="password" class="block text-sm font-medium text-gray-700">Senha</label>
                <input type="password" id="senha" name="senha" placeholder="Digite sua senha" 
                       class="mt-1 block w-full px-4 py-2 bg-gray-50 border border-gray-300 
                              rounded-md focus:ring-indigo-500 focus:border-indigo-500 
                              text-gray-700" value="{{$usuario->senha ?? old('senha')}}">
            </div>
            {{$errors->has('senha')? $errors->first('senha') : ''}}
            <!-- Botão de Submissão -->
            <div>
                <button type="submit" class="w-full bg-indigo-600 text-white px-4 py-2 
                        rounded-md hover:bg-indigo-700 focus:outline-none focus:ring-2 
                        focus:ring-indigo-500 focus:ring-offset-2">Adicionar Usuário</button>
            </div>
            <br>
            <a href="{{route('app.read')}}" class="mt-1 block w-full px-4 py-2 bg-gray-50 border border-gray-100 
                              rounded-md focus:ring-indigo-500 focus:border-indigo-500 
                              text-gray-700">Consulta</a>
                              <br>
            <a href="{{route('app.create')}}" class="mt-1 block w-full px-4 py-2 bg-gray-50 border border-gray-100 
                 rounded-md focus:ring-indigo-500 focus:border-indigo-500 
                text-gray-700">Criar novo usuario</a>                 
        </form>

    </div>
     
</body>
</html>
