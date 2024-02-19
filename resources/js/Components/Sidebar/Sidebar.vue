<script setup>
import NavLink from '@/Components/NavLink.vue';
import { Link } from '@inertiajs/inertia-vue3';
import Dropdown from '@/Components/Dropdown.vue';
import DropdownLink from '@/Components/DropdownLink.vue';

</script>

<template>
    <div class="left-0 top-0 w-64 h-screen bg-gray-900">
        <div class="flex items-center  bg-gray-950 h-45">
            <NavLink :href="route('dashboard')" :active="route().current('dashboard')" class="w-10  text-lime-50 pb-4 border-b-gray-800 ml-4 ">
                <img src="../../assets/logo 2 (2) 1.png" alt="">
                <span class="text-white ml-3 whitespace-nowrap">Digital Health</span>
            </NavLink>
        </div>
        <ul class="mt-4">
            
            <li class="mb-1">

            <div class="flex items-center py-2 px-4 gap-2 text-white hover:bg-gray-950 rounded-md">
            <!-- Settings Dropdown -->
                <div class="ms-3 relative">
                    <Dropdown align="left" width="48">
                        <template #trigger>
                        <span class="inline-flex rounded-">
                            <button
                            type="button"
                            class="text-sm flex items-center gap-2 text-white"
                            >
                            <svg
                                class=" w-6"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            >
                                <path d="M2 3.9934C2 3.44476 2.45531 3 2.9918 3H21.0082C21.556 3 22 3.44495 22 3.9934V20.0066C22 20.5552 21.5447 21 21.0082 21H2.9918C2.44405 21 2 20.5551 2 20.0066V3.9934ZM6 15V17H18V15H6ZM6 7V13H12V7H6ZM14 7V9H18V7H14ZM14 11V13H18V11H14ZM8 9H10V11H8V9Z">
                                </path>
                            </svg>
                            {{ $page.props.auth.user.name }}

                            <svg
                                class="ms-2 -me-0.5 h-4 w-4"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                                />
                            </svg>
                            </button>
                        </span>
                        </template>

                        <template #content>
                        <DropdownLink class="w-full" :href="route('profile.edit')"> Profile </DropdownLink>
                        <DropdownLink :href="route('logout')" method="post" as="button">
                            Log Out
                        </DropdownLink>
                        </template>
                    </Dropdown>
                </div>
          </div>

          <Link :href="route('dashboard')" class=" flex items-center py-2 px-4 gap-2 text-white hover:bg-gray-950 rounded-md">
                <svg class=" ml-2.5 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M21 20C21 20.5523 20.5523 21 20 21H4C3.44772 21 3 20.5523 3 20V9.48907C3 9.18048 3.14247 8.88917 3.38606 8.69972L11.3861 2.47749C11.7472 2.19663 12.2528 2.19663 12.6139 2.47749L20.6139 8.69972C20.8575 8.88917 21 9.18048 21 9.48907V20ZM19 19V9.97815L12 4.53371L5 9.97815V19H19Z"></path></svg>
                <span class=" text-sm">Dashboard</span>
          </Link>

          <div class="flex items-center py-2 px-4 gap-2 text-white hover:bg-gray-950 rounded-md">
            <!-- Settings Dropdown -->
                <div class="ms-3 relative">
                    <Dropdown align="left" width="48">
                        <template #trigger>
                        <span class="inline-flex rounded-">
                            <button
                            type="button"
                            class="text-sm flex items-center gap-2 text-white"
                            >
                            <svg 
                                class="w-6"
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M19.7786 4.22184C22.1217 6.56498 22.1217 10.364 19.7786 12.7071L17.6565 14.8277L12.7075 19.7782C10.3643 22.1213 6.56535 22.1213 4.2222 19.7782C1.87906 17.435 1.87906 13.6361 4.2222 11.2929L11.2933 4.22184C13.6364 1.87869 17.4354 1.87869 19.7786 4.22184ZM14.8288 14.8284L9.17195 9.17158L5.63642 12.7071C4.07432 14.2692 4.07432 16.8019 5.63642 18.364C7.19851 19.9261 9.73117 19.9261 11.2933 18.364L14.8288 14.8284Z"
                            >
                            </path>
                        </svg>

                            <Link :href="route('inventory')">Inventory</Link>

                            
                            

                            <svg
                                class="ms-2 -me-0.5 h-4 w-4"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                                />
                            </svg>
                            </button>
                        </span>
                        </template>

                        <template #content>
                        <DropdownLink class="w-full" :href="route('profile.edit')"> List of Medicines </DropdownLink>
                        <DropdownLink :href="route('logout')"  as="button">
                            Medicine Groups
                        </DropdownLink>
                        </template>
                    </Dropdown>
                </div>
          </div>
          <div class="flex items-center py-2 px-4 gap-2 text-white hover:bg-gray-950 rounded-md">
            <!-- Settings Dropdown -->
                <div class="ms-3 relative">
                    <Dropdown align="left" width="48">
                        <template #trigger>
                        <span class="inline-flex rounded-">
                            <button
                            type="button"
                            class="text-sm flex items-center gap-2 text-white"
                            >
                            <svg
                                class="w-6" 
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            >
                                <path d="M5 3V19H21V21H3V3H5ZM20.2929 6.29289L21.7071 7.70711L16 13.4142L13 10.415L8.70711 14.7071L7.29289 13.2929L13 7.58579L16 10.585L20.2929 6.29289Z">
                                </path>
                            </svg>

                            <Link :href="route('inventory')">Reports</Link>
                            

                            <svg
                                class="ms-2 -me-0.5 h-4 w-4"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                                />
                            </svg>
                            </button>
                        </span>
                        </template>

                        <template #content>
                        <DropdownLink class="w-full" :href="route('profile.edit')"> Sales Report </DropdownLink>
                        <DropdownLink :href="route('logout')"  as="button">
                            Payment report
                        </DropdownLink>
                        </template>
                    </Dropdown>
                </div>
          </div>
          <Link  :href="route('dashboard')" class=" flex items-center py-2 px-4 gap-2 text-white hover:bg-gray-950 rounded-md">
            <svg class=" ml-2.5 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M6.17071 18C6.58254 16.8348 7.69378 16 9 16C10.3062 16 11.4175 16.8348 11.8293 18H22V20H11.8293C11.4175 21.1652 10.3062 22 9 22C7.69378 22 6.58254 21.1652 6.17071 20H2V18H6.17071ZM12.1707 11C12.5825 9.83481 13.6938 9 15 9C16.3062 9 17.4175 9.83481 17.8293 11H22V13H17.8293C17.4175 14.1652 16.3062 15 15 15C13.6938 15 12.5825 14.1652 12.1707 13H2V11H12.1707ZM6.17071 4C6.58254 2.83481 7.69378 2 9 2C10.3062 2 11.4175 2.83481 11.8293 4H22V6H11.8293C11.4175 7.16519 10.3062 8 9 8C7.69378 8 6.58254 7.16519 6.17071 6H2V4H6.17071ZM9 6C9.55228 6 10 5.55228 10 5C10 4.44772 9.55228 4 9 4C8.44772 4 8 4.44772 8 5C8 5.55228 8.44772 6 9 6ZM15 13C15.5523 13 16 12.5523 16 12C16 11.4477 15.5523 11 15 11C14.4477 11 14 11.4477 14 12C14 12.5523 14.4477 13 15 13ZM9 20C9.55228 20 10 19.5523 10 19C10 18.4477 9.55228 18 9 18C8.44772 18 8 18.4477 8 19C8 19.5523 8.44772 20 9 20Z"></path></svg>
            <span class=" text-sm">Configuration</span>
          </Link>
          <div class="border-b mt-2 mb-2 border-gray-500"/>

          <div class="flex items-center py-2 px-4 gap-2 text-white hover:bg-gray-950 rounded-md">
            <!-- Settings Dropdown -->
                <div class="ms-3 relative">
                    <Dropdown align="left" width="48">
                        <template #trigger>
                        <span class="inline-flex rounded-">
                            <button
                            type="button"
                            class="text-sm flex items-center gap-2 text-white"
                            >
                            <svg
                                class="w-6"  
                                xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            >
                                <path d="M19 7H24V9H19V7ZM17 12H24V14H17V12ZM20 17H24V19H20V17ZM2 22C2 17.5817 5.58172 14 10 14C14.4183 14 18 17.5817 18 22H16C16 18.6863 13.3137 16 10 16C6.68629 16 4 18.6863 4 22H2ZM10 13C6.685 13 4 10.315 4 7C4 3.685 6.685 1 10 1C13.315 1 16 3.685 16 7C16 10.315 13.315 13 10 13ZM10 11C12.21 11 14 9.21 14 7C14 4.79 12.21 3 10 3C7.79 3 6 4.79 6 7C6 9.21 7.79 11 10 11Z">
                                </path>
                            </svg>

                            <Link :href="route('inventory')">Contact Managment</Link>
                            

                            <svg
                                class="ms-2 -me-0.5 h-4 w-4"
                                xmlns="http://www.w3.org/2000/svg"
                                viewBox="0 0 20 20"
                                fill="currentColor"
                            >
                                <path
                                fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"
                                />
                            </svg>
                            </button>
                        </span>
                        </template>

                        <template #content>
                        <DropdownLink class="w-full" :href="route('profile.edit')"> Farmacy </DropdownLink>
                        <DropdownLink :href="route('logout')"  as="button">
                            Suplier
                        </DropdownLink>
                        </template>
                    </Dropdown>
                </div>
          </div>

          <Link  :href="route('dashboard')" class=" flex items-center py-2 px-4 gap-2 text-white hover:bg-gray-950 rounded-md">
            <svg class=" ml-2.5 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M20 17H22V19H2V17H4V10C4 5.58172 7.58172 2 12 2C16.4183 2 20 5.58172 20 10V17ZM18 17V10C18 6.68629 15.3137 4 12 4C8.68629 4 6 6.68629 6 10V17H18ZM9 21H15V23H9V21Z"></path></svg>
            <span class=" text-sm">Notification</span>
          </Link>

          <Link  :href="route('dashboard')" class=" flex items-center py-2 px-4 gap-2 text-white hover:bg-gray-950 rounded-md">
            <svg class=" ml-2.5 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M6.45455 19L2 22.5V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V18C22 18.5523 21.5523 19 21 19H6.45455ZM5.76282 17H20V5H4V18.3851L5.76282 17ZM11 10H13V12H11V10ZM7 10H9V12H7V10ZM15 10H17V12H15V10Z"></path></svg>
            <span class=" text-sm">Chat</span>
          </Link>
          <div class="border-b mt-2 mb-2 border-gray-500"/>

          <Link  :href="route('dashboard')" class=" flex items-center py-2 px-4 gap-2 text-white hover:bg-gray-950 rounded-md">
            <svg class=" ml-2.5 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M2.21232 14.0601C1.91928 12.6755 1.93115 11.2743 2.21316 9.94038C3.32308 10.0711 4.29187 9.7035 4.60865 8.93871C4.92544 8.17392 4.50032 7.22896 3.62307 6.53655C4.3669 5.3939 5.34931 4.39471 6.53554 3.62289C7.228 4.50059 8.17324 4.92601 8.93822 4.60914C9.7032 4.29227 10.0708 3.32308 9.93979 2.21281C11.3243 1.91977 12.7255 1.93164 14.0595 2.21364C13.9288 3.32356 14.2964 4.29235 15.0612 4.60914C15.8259 4.92593 16.7709 4.5008 17.4633 3.62356C18.606 4.36739 19.6052 5.3498 20.377 6.53602C19.4993 7.22849 19.0739 8.17373 19.3907 8.93871C19.7076 9.70369 20.6768 10.0713 21.7871 9.94028C22.0801 11.3248 22.0682 12.726 21.7862 14.06C20.6763 13.9293 19.7075 14.2969 19.3907 15.0616C19.0739 15.8264 19.4991 16.7714 20.3763 17.4638C19.6325 18.6064 18.6501 19.6056 17.4638 20.3775C16.7714 19.4998 15.8261 19.0743 15.0612 19.3912C14.2962 19.7081 13.9286 20.6773 14.0596 21.7875C12.675 22.0806 11.2738 22.0687 9.93989 21.7867C10.0706 20.6768 9.70301 19.708 8.93822 19.3912C8.17343 19.0744 7.22848 19.4995 6.53606 20.3768C5.39341 19.633 4.39422 18.6506 3.62241 17.4643C4.5001 16.7719 4.92552 15.8266 4.60865 15.0616C4.29179 14.2967 3.32259 13.9291 2.21232 14.0601ZM3.99975 12.2104C5.09956 12.5148 6.00718 13.2117 6.45641 14.2963C6.90564 15.3808 6.75667 16.5154 6.19421 17.5083C6.29077 17.61 6.38998 17.7092 6.49173 17.8056C7.4846 17.2432 8.61912 17.0943 9.70359 17.5435C10.7881 17.9927 11.485 18.9002 11.7894 19.9999C11.9295 20.0037 12.0697 20.0038 12.2099 20.0001C12.5143 18.9003 13.2112 17.9927 14.2958 17.5435C15.3803 17.0942 16.5149 17.2432 17.5078 17.8057C17.6096 17.7091 17.7087 17.6099 17.8051 17.5081C17.2427 16.5153 17.0938 15.3807 17.543 14.2963C17.9922 13.2118 18.8997 12.5149 19.9994 12.2105C20.0032 12.0704 20.0033 11.9301 19.9996 11.7899C18.8998 11.4856 17.9922 10.7886 17.543 9.70407C17.0937 8.61953 17.2427 7.48494 17.8052 6.49204C17.7086 6.39031 17.6094 6.2912 17.5076 6.19479C16.5148 6.75717 15.3803 6.9061 14.2958 6.4569C13.2113 6.0077 12.5144 5.10016 12.21 4.00044C12.0699 3.99666 11.9297 3.99659 11.7894 4.00024C11.4851 5.10005 10.7881 6.00767 9.70359 6.4569C8.61904 6.90613 7.48446 6.75715 6.49155 6.1947C6.38982 6.29126 6.29071 6.39047 6.19431 6.49222C6.75668 7.48509 6.90561 8.61961 6.45641 9.70407C6.00721 10.7885 5.09967 11.4855 3.99995 11.7899C3.99617 11.93 3.9961 12.0702 3.99975 12.2104ZM11.9997 15.0002C10.3428 15.0002 8.99969 13.657 8.99969 12.0002C8.99969 10.3433 10.3428 9.00018 11.9997 9.00018C13.6565 9.00018 14.9997 10.3433 14.9997 12.0002C14.9997 13.657 13.6565 15.0002 11.9997 15.0002ZM11.9997 13.0002C12.552 13.0002 12.9997 12.5525 12.9997 12.0002C12.9997 11.4479 12.552 11.0002 11.9997 11.0002C11.4474 11.0002 10.9997 11.4479 10.9997 12.0002C10.9997 12.5525 11.4474 13.0002 11.9997 13.0002Z"></path></svg>
            <span class=" text-sm">Aplications Settings</span>
          </Link>

          <Link  :href="route('dashboard')" class=" flex items-center py-2 px-4 gap-2 text-white hover:bg-gray-950 rounded-md">
            <svg class=" ml-2.5 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M13.7163 1.94745L17.4506 3.38092L16.7339 5.24808L15.8003 4.88947L15.0539 6.83436C15.8328 7.29585 16.4983 7.92847 16.9986 8.68044L18.9014 7.83255L18.4947 6.919L20.3218 6.10553L21.9487 9.75971L20.1216 10.5732L19.7149 9.65964L17.8126 10.5071C17.9348 10.9844 17.9998 11.4846 17.9998 12C17.9998 12.4062 17.9594 12.8031 17.8825 13.1867L19.8265 13.9327L20.1852 12.9998L22.0523 13.7165L20.6189 17.4508L18.7517 16.7341L19.1094 15.8009L17.1654 15.0541C16.7039 15.833 16.0713 16.4985 15.3194 16.9988L16.1672 18.9016L17.0808 18.4949L17.8943 20.322L14.2401 21.9489L13.4266 20.1218L14.3402 19.7151L13.4927 17.8128C13.0154 17.935 12.5152 18 11.9998 18C11.5932 18 11.196 17.9595 10.8121 17.8825L10.0662 19.8271L11 20.1854L10.2833 22.0525L6.54897 20.6191L7.2657 18.7519L8.19803 19.11L8.9457 17.1656C8.16683 16.7041 7.50133 16.0715 7.00097 15.3195L5.09818 16.1674L5.50492 17.081L3.67782 17.8944L2.05088 14.2403L3.87797 13.4268L4.28379 14.3407L6.18702 13.4929C6.06479 13.0156 5.99981 12.5154 5.99981 12C5.99981 11.5937 6.04018 11.1969 6.11714 10.8133L4.17174 10.0668L3.81443 11.0002L1.94727 10.2835L3.38074 6.54915L5.2479 7.26588L4.88888 8.19862L6.83418 8.94588C7.29566 8.16702 7.92829 7.50151 8.68026 7.00115L7.83237 5.09836L6.91882 5.5051L6.10535 3.67801L9.75953 2.05106L10.573 3.87815L9.65946 4.28489L10.5069 6.1872C10.9842 6.06497 11.4844 5.99999 11.9998 5.99999C12.4061 5.99999 12.8029 6.04037 13.1865 6.11732L13.9321 4.17233L12.9996 3.81461L13.7163 1.94745ZM11.9998 7.99999C9.79067 7.99999 7.99981 9.79085 7.99981 12C7.99981 14.2091 9.79067 16 11.9998 16C14.2089 16 15.9998 14.2091 15.9998 12C15.9998 9.79085 14.2089 7.99999 11.9998 7.99999ZM11.4998 12.866C11.9781 13.1422 12.142 13.7537 11.8658 14.232C11.5897 14.7103 10.9781 14.8742 10.4998 14.5981C10.0215 14.3219 9.85764 13.7103 10.1338 13.232C10.4099 12.7537 11.0215 12.5899 11.4998 12.866ZM13.9998 11C14.5521 11 14.9998 11.4477 14.9998 12C14.9998 12.5523 14.5521 13 13.9998 13C13.4475 13 12.9998 12.5523 12.9998 12C12.9998 11.4477 13.4475 11 13.9998 11ZM11.8658 9.76794C12.142 10.2462 11.9781 10.8578 11.4998 11.134C11.0215 11.4101 10.4099 11.2462 10.1338 10.7679C9.85764 10.2896 10.0215 9.67806 10.4998 9.40191C10.9781 9.12577 11.5897 9.28965 11.8658 9.76794Z"></path></svg>
            <span class=" text-sm">Covid-19</span>
          </Link>

          <Link  :href="route('dashboard')" class=" flex items-center py-2 px-4 gap-2 text-white hover:bg-gray-950 rounded-md">
            <svg class=" ml-2.5 w-6" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"><path d="M5.76282 17H20V5H4V18.3851L5.76282 17ZM6.45455 19L2 22.5V4C2 3.44772 2.44772 3 3 3H21C21.5523 3 22 3.44772 22 4V18C22 18.5523 21.5523 19 21 19H6.45455ZM11 14H13V16H11V14ZM8.56731 8.81346C8.88637 7.20919 10.302 6 12 6C13.933 6 15.5 7.567 15.5 9.5C15.5 11.433 13.933 13 12 13H11V11H12C12.8284 11 13.5 10.3284 13.5 9.5C13.5 8.67157 12.8284 8 12 8C11.2723 8 10.6656 8.51823 10.5288 9.20577L8.56731 8.81346Z"></path></svg>
            <span class=" text-sm">Get a Technical Help</span>
          </Link>

            </li>
        </ul>

    </div>
</template>

<script>
import { Inertia } from '@inertiajs/inertia-vue3';

export default {
  name: 'Sidebar',
};
</script>

<style scoped></style>