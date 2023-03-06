<script setup>
import { computed } from 'vue';
import moment from 'moment';

const currentDate = computed(() => {
    return moment().format('MMMM Do YYYY')
})


</script>

<template>
    <div>            



    </div>
</template>
