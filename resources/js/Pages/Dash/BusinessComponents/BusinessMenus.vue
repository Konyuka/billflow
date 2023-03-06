<script setup>
import { ref } from 'vue';

const currentMenu = ref('invoice');


</script>

<template>
    <div>
        <div class="px-2 flex flex-col justify-between flex-1 mt-6">
            <nav>

                <a :class="currentMenu == 'invoice' ? 'bg-indigo-700 text-white' : ''"
                    class="flex items-center px-4 py-2 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                    href="#">
                    <i v-if="currentMenu == 'invoice'" class="fas fa-caret-right"></i>
                    <span class="mx-4 font-medium">Invoice</span>
                </a>

                <a :class="currentMenu == 'quotes' ? 'bg-indigo-700 text-white' : ''"
                    class="flex items-center px-4 py-2 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                    href="#">
                    <i v-if="currentMenu == 'quotes'" class="fas fa-caret-right"></i>
                    <span class="mx-4 font-medium">Quotes</span>
                </a>


                <hr class="my-6 border-gray-900 dark:border-gray-600" />

                <a :class="currentMenu == 'bills' ? 'bg-indigo-700 text-white' : ''"
                    class="flex items-center px-4 py-2 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                    href="#">
                    <i v-if="currentMenu == 'bills'" class="fas fa-caret-right"></i>
                    <span class="mx-4 font-medium">Bills To Pay</span>
                </a>

                <a :class="currentMenu == 'purchaseOrder' ? 'bg-indigo-700 text-white' : ''"
                    class="flex items-center px-4 py-2 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                    href="#">
                    <i v-if="currentMenu == 'purchaseOrder'" class="fas fa-caret-right"></i>
                    <span class="mx-4 font-medium">Purchase Order</span>
                </a>


                <hr class="my-6 border-gray-900 dark:border-gray-600" />

                <a :class="currentMenu == 'expenseClaim' ? 'bg-indigo-700 text-white' : ''"
                    class="flex items-center px-4 py-2 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                    href="#">
                    <i v-if="currentMenu == 'expenseClaim'" class="fas fa-caret-right"></i>
                    <span class="mx-4 font-medium">Expense Claims</span>
                </a>

                <a :class="currentMenu == 'payrun' ? 'bg-indigo-700 text-white' : ''"
                    class="flex items-center px-4 py-2 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                    href="#">
                    <i v-if="currentMenu == 'payrun'" class="fas fa-caret-right"></i>
                    <span class="mx-4 font-medium">Pay Run</span>
                </a>

                <hr class="my-6 border-gray-900 dark:border-gray-600" />

                <a :class="currentMenu == 'sales' ? 'bg-indigo-700 text-white' : ''"
                    class="flex items-center px-4 py-2 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                    href="#">
                    <i v-if="currentMenu == 'sales'" class="fas fa-caret-right"></i>
                    <span class="mx-4 font-medium">Sales</span>
                </a>

                <a :class="currentMenu == 'inventory' ? 'bg-indigo-700 text-white' : ''"
                    class="flex items-center px-4 py-2 text-gray-600 transition-colors duration-300 transform rounded-md dark:text-gray-400 hover:bg-gray-100 dark:hover:bg-gray-800 dark:hover:text-gray-200 hover:text-gray-700"
                    href="#">
                    <i v-if="currentMenu == 'inventory'" class="fas fa-caret-right"></i>
                    <span class="mx-4 font-medium">Inventory</span>
                </a>

        </nav>

    </div>
</div></template>