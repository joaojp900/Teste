<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminUserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Gerar uma senha aleatória
        $password = Str::random(12);

        //Criar o usuario administrador

        $admin = User::create([
            'name' => 'Admin',
            'email' => 'admin@exata.it',
            'password' => hash::make($password),
            'role' => 'superadmin',
        ]);
            //Exibir a senha no console
            $this->command->info('Usuário administrador criado com sucesso!');
            $this->command->info('Email: admin@exata.it');
            $this->command->info('Senha: '.$password);


    }
}
