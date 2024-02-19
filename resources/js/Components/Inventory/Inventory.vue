<template>
    <div class="p-6">
        Inventory
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-14 ml-8">
        <!-- Card 1 -->
        <div class="relative bg-white shadow-md rounded-md p-4 lg:w-64 h-44 md:w-64  h-22 border border-green-500 ">
          <h2 class="text-lg font-bold mb-2">Card 1</h2>
          <p>Conteúdo do Card 1...</p>
          <div class="absolute bottom-0 left-0 w-full h-8 rounded-b-md bg-green-300 opacity-50 "></div>
        </div>

        <!-- Card 2 -->
        <div class="relative bg-white shadow-md rounded-md p-4 lg:w-64 h-44 md:w-64 h-22  border border-yellow-500 ">
          <h2 class="text-lg font-bold mb-2">Card 2</h2>
          <p>Conteúdo do Card 2...</p>
          <div class="absolute bottom-0 left-0 w-full h-8 rounded-b-md bg-yellow-300 opacity-50"></div>
        </div>

        <!-- Card 3 -->
        <div class="relative bg-white shadow-md rounded-md p-4 lg:w-64 h-44 md:w-64 h-22  border border-blue-500">
          <h2 class="text-lg font-bold mb-2">Card 3</h2>
          <p>Conteúdo do Card 3...</p>
          
          <div class="absolute bottom-0 left-0 w-full h-8 rounded-b-md bg-blue-300 opacity-50"></div>
        </div>

      </div>
    </div>
</template>

<script>
export default {
  name: 'Inventory',
};
</script>

<style scoped>

</style>