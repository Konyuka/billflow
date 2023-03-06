<script setup>
import { computed } from 'vue';
import moment from 'moment';

const currentDate = computed(() => {
    return moment().format('MMMM Do YYYY')
})


</script>

<template>
    <div>
        <div class="bg-white p-2">
            <div class="mx-auto grid max-w-7xl grid-cols-1 gap-x-8 gap-y-12 px-6 sm:gap-y-16 lg:grid-cols-2 lg:px-8">
                <article class="mx-auto w-full max-w-2xl lg:mx-0 lg:max-w-lg">
                    <h2 id="featured-post" class="mt-4 text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">
                        Profit or Loss
                    </h2>
                    <p class="mt-4 text-lg leading-8 text-gray-600">
                        KES
                    </p>

                </article>
                <div
                    class="mx-auto w-full max-w-2xl border-t border-gray-900/10 pt-2 lg:mx-0 lg:max-w-none lg:border-t-0 lg:pt-0">
                    <div class="-my-12 divide-y divide-gray-900/10">
                        <article class="py-12">
                            <div class="group relative max-w-xl">
                                <h2 class="mt-2 text-lg font-semibold text-gray-900 group-hover:text-gray-600">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Income
                                    </a>
                                </h2>
                                <p class="mt-4 text-sm leading-6 text-gray-600">
                                    KES
                                </p>
                            </div>
                        </article>
                        <article class="py-12">
                            <div class="group relative max-w-xl">
                                <h2 class="mt-2 text-lg font-semibold text-gray-900 group-hover:text-gray-600">
                                    <a href="#">
                                        <span class="absolute inset-0"></span>
                                        Expenses
                                    </a>
                                </h2>
                                <p class="mt-4 text-sm leading-6 text-gray-600">
                                    KES
                                </p>
                            </div>
                        </article>

                        <!-- More posts... -->
                    </div>
                </div>
            </div>


        </div>

        <div class="bg-white py-10">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:mx-0">
                    <h2 class="text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl">Financial Position & Cash</h2>
                    <p class="mt-2 text-lg leading-8 text-gray-600">
                        {{ currentDate }}
                    </p>
                </div>
                <div
                    class="mx-auto mt-10 grid max-w-2xl grid-cols-1 gap-y-16 gap-x-8 border-t border-gray-200 pt-10 lg:mx-0 lg:max-w-none lg:grid-cols-4">
                    <article class="flex max-w-xl flex-col items-start justify-between">
                        <div class="group relative">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Cash Balance
                                </a>
                            </h3>
                            <p class="mt-5 text-xl leading-6 text-gray-600 line-clamp-3">
                                KES
                            </p>
                        </div>
                    </article>

                    <article class="flex max-w-xl flex-col items-start justify-between">
                        <div class="group relative">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Assets
                                </a>
                            </h3>
                            <p class="mt-5 text-xl leading-6 text-gray-600 line-clamp-3">
                                KES
                            </p>
                        </div>
                    </article>

                    <article class="flex max-w-xl flex-col items-start justify-between">
                        <div class="group relative">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Equity
                                </a>
                            </h3>
                            <p class="mt-5 text-xl leading-6 text-gray-600 line-clamp-3">
                                KES
                            </p>
                        </div>
                    </article>

                    <article class="flex max-w-xl flex-col items-start justify-between">
                        <div class="group relative">
                            <h3 class="mt-3 text-lg font-semibold leading-6 text-gray-900 group-hover:text-gray-600">
                                <a href="#">
                                    <span class="absolute inset-0"></span>
                                    Liabilities
                                </a>
                            </h3>
                            <p class="mt-5 text-xl leading-6 text-gray-600 line-clamp-3">
                                KES
                            </p>
                        </div>
                    </article>

                </div>
            </div>
        </div>

        <div class="bg-indigo-700 p-10">
            <div class="mx-auto max-w-7xl px-6 lg:px-8">
                <div class="mx-auto max-w-2xl lg:max-w-none">
                    <div class="text-center">
                        <h2 class="text-3xl font-bold tracking-tight text-white sm:text-4xl">Efficiency
                        </h2>
                    </div>
                    <dl
                        class="mt-16 grid grid-cols-1 gap-0.5 overflow-hidden rounded-2xl text-center sm:grid-cols-2 lg:grid-cols-2">
                        <div class="flex flex-col bg-white/5 p-8">
                            <dt class="text-sm font-semibold leading-6 text-gray-300">Net Profit Margin</dt>
                            <dd class="order-first text-3xl font-semibold tracking-tight text-white">2%</dd>
                        </div>

                        <div class="flex flex-col bg-white/5 p-8">
                            <dt class="text-sm font-semibold leading-6 text-gray-300">Gross Profit Margin</dt>
                            <dd class="order-first text-3xl font-semibold tracking-tight text-white">3%</dd>
                        </div>
                    </dl>
                </div>
            </div>
        </div>



    </div>
</template>
