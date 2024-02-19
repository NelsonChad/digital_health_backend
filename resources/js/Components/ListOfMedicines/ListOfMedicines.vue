<script setup>
import Searchbar from '@/Components/Searchbar/Searchbar.vue';
import { Link } from '@inertiajs/inertia-vue3';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';
</script>

<template>
    <div class="p-8">
        <div class="flex justify-between">
            <h6>Inventory>List Of Medicines</h6>
            <button class="w-52 h-10 rounded-md bg-red-500 text-white">add items</button>
        </div>

        <div class="flex justify-between items-center">
            <div class="relative mb-4 mt-4 items-start">
                <input type="text" v-model="searchQuery" @input="handleInput"
                    class="py-2 pl-10 pr-4 block w-min rounded-md bg-white border-none focus:outline-none focus:border-blue-500 focus:bg-white"
                    placeholder="Search..." />
                <svg class="absolute left-3 top-2 w-5 h-5 text-gray-400" xmlns="http://www.w3.org/2000/svg"
                    viewBox="0 0 24 24" fill="currentColor">
                    <path
                        d="M18.031 16.6168L22.3137 20.8995L20.8995 22.3137L16.6168 18.031C15.0769 19.263 13.124 20 11 20C6.032 20 2 15.968 2 11C2 6.032 6.032 2 11 2C15.968 2 20 6.032 20 11C20 13.124 19.263 15.0769 18.031 16.6168ZM16.0247 15.8748C17.2475 14.6146 18 12.8956 18 11C18 7.1325 14.8675 4 11 4C7.1325 4 4 7.1325 4 11C4 14.8675 7.1325 18 11 18C12.8956 18 14.6146 17.2475 15.8748 16.0247L16.0247 15.8748Z">
                    </path>
                </svg>
            </div>
            <div>
                <div class="flex items-center py-2 px-4 bg-white gap-2 text-black rounded-md border-2 border-gray-400">
                    <!-- Settings Dropdown -->
                    <div class="ms-3 relative">
                        <Dropdown align="left" width="48" class="">
                            <template #trigger>
                                <span class="inline-flex rounded-">
                                    <button type="button" class=" w-56 text-sm justify-center flex items-center gap-2 text-black ">
                                        -Select Group -

                                        <svg class="ms-2 -me-0.5 h-4 w-4" xmlns="http://www.w3.org/2000/svg"
                                            viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd"
                                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                                clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </span>
                            </template>

                            <template #content>
                                <DropdownLink class="w-full bg-white text-black" > Group-1 </DropdownLink>
                                <DropdownLink class="w-full bg-white text-black">
                                    Group-2
                                </DropdownLink>
                            </template>
                        </Dropdown>
                    </div>
                </div>
            </div>
        </div>
        <table class="border-collapse bg-white border border-gray-400 w-full">
            <thead class="roudend-md">
                <tr class="">
                    <th class="border border-gray-400 px-4 py-2">Coluna 1</th>
                    <th class="border border-gray-400 px-4 py-2">Coluna 2</th>
                    <th class="border border-gray-400 px-4 py-2">Coluna 3</th>
                    <th class="border border-gray-400 px-4 py-2">Coluna 4</th>
                    <th class="border border-gray-400 px-4 py-2">Coluna 5</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="border border-gray-400 px-4 py-2">Linha 1, Coluna 1</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 1, Coluna 2</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 1, Coluna 3</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 1, Coluna 4</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 1, Coluna 5</td>
                </tr>
                <tr>
                    <td class="border border-gray-400 px-4 py-2">Linha 2, Coluna 1</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 2, Coluna 2</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 2, Coluna 3</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 2, Coluna 4</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 2, Coluna 5</td>
                </tr>
                <tr>
                    <td class="border border-gray-400 px-4 py-2">Linha 3, Coluna 1</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 3, Coluna 2</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 3, Coluna 3</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 3, Coluna 4</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 3, Coluna 5</td>
                </tr>
                <tr>
                    <td class="border border-gray-400 px-4 py-2">Linha 4, Coluna 1</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 4, Coluna 2</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 4, Coluna 3</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 4, Coluna 4</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 4, Coluna 5</td>
                </tr>
                <tr>
                    <td class="border border-gray-400 px-4 py-2">Linha 5, Coluna 1</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 5, Coluna 2</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 5, Coluna 3</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 5, Coluna 4</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 5, Coluna 5</td>
                </tr>
                <tr>
                    <td class="border border-gray-400 px-4 py-2">Linha 6, Coluna 1</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 6, Coluna 2</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 6, Coluna 3</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 6, Coluna 4</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 6, Coluna 5</td>
                </tr>
                <tr>
                    <td class="border border-gray-400 px-4 py-2">Linha 7, Coluna 1</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 7, Coluna 2</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 7, Coluna 3</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 7, Coluna 4</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 7, Coluna 5</td>
                </tr>
                <tr>
                    <td class="border border-gray-400 px-4 py-2">Linha 8, Coluna 1</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 8, Coluna 2</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 8, Coluna 3</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 8, Coluna 4</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 8, Coluna 5</td>
                </tr>
                <tr>
                    <td class="border border-gray-400 px-4 py-2">Linha 9, Coluna 1</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 9, Coluna 2</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 9, Coluna 3</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 9, Coluna 4</td>
                    <td class="border border-gray-400 px-4 py-2">Linha 9, Coluna 5</td>
                </tr>
            </tbody>
        </table>

    </div>
</template>

<script>
export default {

}
</script>

<style scoped></style>