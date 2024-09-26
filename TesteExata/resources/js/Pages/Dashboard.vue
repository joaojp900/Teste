<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">Painel</h2>
            <a href=""></a>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">Você está logado!</div>
                    <div>
                        <ul>
                            <li>/create: Vai te levar para a página de Criar usuários.</li>
                            <li>/read: Vai te levar até a página de consultas.</li>
                            <li>/Update: Esta nos botões da pagina Read, que te leva ao usuario pelo id do banco de dados</li>
                            <li>/Delete: Está nos botões da página Read que deleta o usuário.</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
