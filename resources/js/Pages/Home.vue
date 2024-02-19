<script setup>
import { Head } from '@inertiajs/vue3';
import Sidebar from '@/Components/Sidebar/Sidebar.vue';
import Topbar from '@/Components/Topbar/Topbar.vue';
import Dashboard from '@/Components/Dashboard/Dashboard.vue';
import Inventory from '@/Components/Inventory/Inventory.vue';
import ListOfMedicines from '@/Components/ListOfMedicines/ListOfMedicines.vue'

</script>


<template id="app">
    <Head title="Dashboard" />
    <div class="flex h-screen">
        <div class="h-full">
            <Sidebar />
        </div>

        <div class="flex flex-col flex-1">
            <!-- Topbar -->
            <div class=" h-16 bg-gray-100">
                <Topbar/>
            </div>

            <!-- Conteúdo principal -->
            <!-- Conteúdo principal -->
            <div class="flex-1 bg-gray-200">
                 <Dashboard/>
                 <!-- <Inventory/>-->
                 <!-- <ListOfMedicines/>-->
            </div>
        </div>
    </div> 
     
     
</template>


<script >
export default {
  name: 'Home'
};

</script>
