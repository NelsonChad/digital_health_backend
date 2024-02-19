<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Sidebar from '@/Components/Sidebar/Sidebar.vue';
</script>

<template>
  <Head title="Dashboard" />
  <div class="flex flex-col h-96">
    <!-- Div superior -->
    <div class="p-6 h-full ">
      <h1 style="font-size: xx-large" class="font-extrabold">Dashboard</h1>
      <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4 mt-14 ml-8">
        <!-- Card 1 -->
        <div class="relative bg-white shadow-md rounded-md p-4 lg:w-64 h-44 md:w-64  h-22 border border-green-500 ">
          <h2 class="text-lg font-bold mb-2">Card 1</h2>
          <p>Card 1...</p>
          <div class="absolute bottom-0 left-0 w-full h-8 rounded-b-md bg-green-300 opacity-50 "></div>
        </div>

        <!-- Card 2 -->
        <div class="relative bg-white shadow-md rounded-md p-4 lg:w-64 h-44 md:w-64 h-22  border border-yellow-500 ">
          <h2 class="text-lg font-bold mb-2">Card 2</h2>
          <p>Card 2...</p>
          <div class="absolute bottom-0 left-0 w-full h-8 rounded-b-md bg-yellow-300 opacity-50"></div>
        </div>

        <!-- Card 3 -->
        <div class="relative bg-white shadow-md rounded-md p-4 lg:w-64 h-44 md:w-64 h-22  border border-blue-500">
          <h2 class="text-lg font-bold mb-2">Card 3</h2>
          <p>Card 3...</p>
          
          <div class="absolute bottom-0 left-0 w-full h-8 rounded-b-md bg-blue-300 opacity-50"></div>
        </div>

        <!-- Card 4 -->
        <div class="relative bg-white shadow-md rounded-md p-4 lg:w-64 h-44 md:w-64 h-22  border border-red-500">
          <h2 class="text-lg font-bold mb-2">Card 4</h2>
          <p>Card 4...</p>
          <div class="absolute bottom-0 left-0 w-full h-8 rounded-b-md bg-red-300 opacity-50"></div>
        </div>
      </div>

    </div>

    <!-- Div inferior -->
    <div class="bg-white h-screen">
      <div class="grid grid-cols-2 gap-4 mt-4 ml-14 mr-14 mb-6">
        <!-- Card 1 -->
        <div class=" bg-white  rounded-md p-4 w-90 h-36 border-2 border-gray-300 ">
          <h2 class="text-lg font-bold mb-2">Card 1</h2>
          <p>Card 1...</p>
        </div>

        <!-- Card 2 -->
        <div class=" bg-white  rounded-md p-4 w-90 h-36 border-2  border-gray-300">
          <h2 class="text-lg font-bold mb-2">Card 2</h2>
          <p>Card 2...</p>
        </div>

        <!-- Card 3 -->
        <div class=" bg-white rounded-md p-4 w-90 h-36 border-2  border-gray-300">
          <h2 class="text-lg font-bold mb-2">Card 3</h2>
          <p>Card 3...</p>
          
        </div>

        <!-- Card 4 -->
        <div class=" bg-white rounded-md p-4 w-90 h-36 border-2  border-gray-300">
          <h2 class="text-lg font-bold mb-2">Card 4</h2>
          <p>Card 4...</p>
        </div>
      </div>

    </div>
  </div>
</template>

<script>
export default {
  name: 'Dashboard',
};
</script>
