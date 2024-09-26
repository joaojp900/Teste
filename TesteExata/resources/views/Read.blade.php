<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabela de Usuários</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 p-10">
    <div class="container mx-auto">
        <h2 class="text-2xl font-bold mb-6 text-center">Lista de Usuários</h2>
        <div class="overflow-x-auto">
            <table class="min-w-full bg-white rounded-lg shadow-md">
                <thead>
                    <tr class="bg-indigo-600 text-white">
                        <th class="py-2 px-4 text-left">ID</th>
                        <th class="py-2 px-4 text-left">Nome</th>
                        <th class="py-2 px-4 text-left">E-mail</th>
                        <th class="py-2 px-4 text-left">Ação</th>
                    </tr>
                </thead>
                <tbody class="text-gray-700">
                    <!-- Exemplo de usuário 1 -->

                    @foreach ($usuario as $usuarios)
                
                    <tr class="border-b">
                        <td class="py-2 px-4">{{$usuarios->id}}</td>
                        <td class="py-2 px-4">{{$usuarios->nome}}</td>
                        <td class="py-2 px-4">{{$usuarios->email}}</td>
                        <td class="py-2 px-4">
                            <button class="bg-green-500 text-white px-4 py-1 rounded hover:bg-green-600"><a href="{{route('app.update', $usuarios->id)}}">Editar</a></button>
                            <button class="bg-red-500 text-white px-4 py-1 rounded hover:bg-red-600 ml-2"><a href="{{route('app.delete', $usuarios->id)}}">Excluir</a></button>
                        </td>
                    </tr>
                      
                 @endforeach
                    <!-- Mais linhas de usuários -->
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
