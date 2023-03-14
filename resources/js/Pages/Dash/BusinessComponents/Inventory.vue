<script setup>
import { computed } from 'vue';
import moment from 'moment';

const currentDate = computed(() => {
    return moment().format('MMMM Do YYYY')
})


</script>

<template>
    <div>
    
        <div>
            <div class="hidden sm:block">
                <nav class="flex space-x-4 p-4" aria-label="Tabs">
                    <!-- Current: "bg-gray-200 text-gray-800", Default: "text-gray-600 hover:text-gray-800" -->
                    <a href="#" class="text-gray-600 hover:text-gray-800 rounded-md px-3 py-2 text-sm font-medium">My
                        Account</a>

                    <a href="#"
                        class="text-gray-600 hover:text-gray-800 rounded-md px-3 py-2 text-sm font-medium">Company</a>

                    <a href="#" class="bg-indigo-800 text-gray-800 rounded-md px-3 py-2 text-sm font-medium"
                        aria-current="page">Team Members</a>

                    <a href="#"
                        class="text-gray-600 hover:text-gray-800 rounded-md px-3 py-2 text-sm font-medium">Billing</a>
                </nav>
            </div>
        </div>



</div></template>
