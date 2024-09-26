<template>
  <div class="flex">
    <!-- Sidebar -->
    <div class="h-screen bg-gray-800 text-white w-64">
      <div class="p-4 text-lg font-semibold">
        Menu Lateral
      </div>
      <ul class="mt-6">
        <li v-for="(item, index) in menuItems" :key="index" class="p-4 hover:bg-gray-700 cursor-pointer">
          {{ item.label }}
        </li>
      </ul>
    </div>

    <!-- Main Content -->
    <div class="flex-1 p-6">
      <h1 class="text-2xl font-bold">Conteúdo Principal</h1>
      <p class="mt-4">Esse é o conteúdo da página ao lado do menu lateral.</p>
    </div>
  </div>
</template>

<script>
export default {
  data() {
    return {
      menuItems: [
        { label: 'Dashboard' },
        { label: 'Configurações' },
        { label: 'Perfil' },
        { label: 'Ajuda' },
      ]
    }
  }
}
</script>

<style scoped>
</style>
