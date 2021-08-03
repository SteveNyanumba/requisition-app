<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Dashboard
            </h2>
        </template>


<!-- Metrics Section -->
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex flex-wrap">
                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Metric Card-->
                            <div class="bg-gradient-to-b from-green-200 to-green-100 border-b-4 border-green-600 rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-5 bg-green-600"><i class="fa fa-wallet fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text-gray-600">Total Revenue</h5>
                                        <h3 class="font-bold text-3xl">$3249 <span class="text-green-500"><i class="fas fa-caret-up"></i></span></h3>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Metric Card-->
                            <div class="bg-gradient-to-b from-pink-200 to-pink-100 border-b-4 border-pink-500 rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-5 bg-pink-600"><i class="fas fa-users fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text-gray-600">Clients</h5>
                                        <h3 class="font-bold text-3xl">249 <span class="text-pink-500"><i class="fas fa-exchange-alt"></i></span></h3>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Metric Card-->
                            <div class="bg-gradient-to-b from-yellow-200 to-yellow-100 border-b-4 border-yellow-600 rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-5 bg-yellow-600"><i class="fas fa-user-plus fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text-gray-600">Registered Stores</h5>
                                        <h3 class="font-bold text-3xl">2 <span class="text-yellow-600"><i class="fas fa-caret-up"></i></span></h3>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Metric Card-->
                            <div class="bg-gradient-to-b from-blue-200 to-blue-100 border-b-4 border-blue-500 rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-5 bg-blue-600"><i class="fas fa-server fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text-gray-600">Issued Receipts</h5>
                                        <h3 class="font-bold text-3xl">15</h3>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Metric Card-->
                            <div class="bg-gradient-to-b from-indigo-200 to-indigo-100 border-b-4 border-indigo-500 rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-5 bg-indigo-600"><i class="fas fa-tasks fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text-gray-600">Unpaid Invoices</h5>
                                        <h3 class="font-bold text-3xl">7 </h3>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                        <div class="w-full md:w-1/2 xl:w-1/3 p-6">
                            <!--Metric Card-->
                            <div class="bg-gradient-to-b from-red-200 to-red-100 border-b-4 border-red-500 rounded-lg shadow-xl p-5">
                                <div class="flex flex-row items-center">
                                    <div class="flex-shrink pr-4">
                                        <div class="rounded-full p-5 bg-red-600"><i class="fas fa-inbox fa-2x fa-inverse"></i></div>
                                    </div>
                                    <div class="flex-1 text-right md:text-center">
                                        <h5 class="font-bold uppercase text-gray-600">Pending Requests</h5>
                                        <h3 class="font-bold text-3xl">3 <span class="text-red-500"><i class="fas fa-caret-up"></i></span></h3>
                                    </div>
                                </div>
                            </div>
                            <!--/Metric Card-->
                        </div>
                    </div>

                </div>
            </div>
        </div>
<!-- Metrics Section End -->



<!-- Categories Section -->
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-4 lg:px-8">

                <div class="bg-gray-700 overflow-hidden shadow-xl sm:rounded-lg">
                        <div class="flex flex-wrap">
                            <div class="w-full md:w-1/2 xl:w-1/2 p-4">
                                <!-- This example requires Tailwind CSS v2.0+ -->
                                <div class="flex flex-col">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-blue-600">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-left font-medium text-white uppercase tracking-wider">
                                                    Categories
                                                    <a :href="route('item_categories.create')">
                                                        <i class="fa fa-plus-circle fa-lg mr-0"></i>
                                                    </a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            <tr class="w-full" v-for="category in Categories" :key="category.id">
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-md text-black text-left ">{{ category.id }}. {{ category.title }}</div>
                                                    <div class="text-blue-600 text-right">
                                                        <a :href="route('item_categories.edit', category.id)">
                                                            <i class="fas fa-edit fa-lg p-2"></i>
                                                        </a>
                                                        <button @click="this.$inertia.delete(route('item_categories.destroy', category.id))">
                                                            <i class="fas fa-trash fa-lg p-2"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- More people... -->
                                        </tbody>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                                </div>

                            </div>
                            <div class="w-full md:w-1/2 xl:w-1/2 p-4">
                                <!-- This example requires Tailwind CSS v2.0+ -->
                                <div class="flex flex-col">
                                <div class="-my-2 overflow-x-auto sm:-mx-6 lg:-mx-8">
                                    <div class="py-2 align-middle inline-block min-w-full sm:px-6 lg:px-8">
                                    <div class="shadow overflow-hidden border-b border-gray-200 sm:rounded-lg">
                                        <table class="min-w-full divide-y divide-gray-200">
                                        <thead class="bg-blue-600">
                                            <tr>
                                                <th scope="col" class="px-6 py-3 text-left font-medium text-white uppercase tracking-wider">
                                                    Store Types
                                                    <a :href="route('types.create')">
                                                        <i class="fa fa-plus-circle fa-lg mr-0"></i>
                                                    </a>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody class="bg-white divide-y divide-gray-200">
                                            <tr class="w-full" v-for="type in Types" :key="type.id">
                                                <td class="px-6 py-4 whitespace-nowrap">
                                                    <div class="text-md text-black text-left ">{{ type.id }}. {{ type.title }}</div>
                                                    <div class="text-blue-600 text-right">
                                                        <a :href="route('types.edit', type.id)">
                                                            <i class="fas fa-edit fa-lg p-2"></i>
                                                        </a>
                                                        <button @click="this.$inertia.delete(route('types.destroy', type.id))">
                                                            <i class="fas fa-trash fa-lg p-2"></i>
                                                        </button>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- More people... -->
                                        </tbody>
                                        </table>
                                    </div>
                                    </div>
                                </div>
                                </div>

                            </div>
                        </div>
                </div>
            </div>
        </div>
<!-- Categories Section End -->
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Welcome from '@/Jetstream/Welcome'
import Button from '../Jetstream/Button.vue'

    export default {
        components: {
            AppLayout,
            Welcome
        },
        props:{
            Categories:Array,
            Types:Array,
        },

    }
</script>
