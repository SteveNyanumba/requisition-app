<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Item Categories
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="flex items-center justify-center">
                        <div class="col-span-12">
                            <div class="overflow-auto lg:overflow-visible ">
                                <table class="table text-gray-400 border-separate space-y-6 text-sm">
                                    <thead class="bg-gray-800 text-gray-500">
                                        <tr>
                                            <th class="p-3">no.</th>
                                            <th class="p-3 text-left">Category</th>
                                            <th class="p-3 text-left">Number of Items</th>
                                            <th class="p-3 text-left">Store with Most</th>
                                            <th class="p-3 text-left">Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr class="bg-gray-800" v-for="category in Categories" :key="category.id">
                                            <td class="p-3">
                                                {{ category.id }}
                                            </td>
                                            <td class="p-3">
                                                {{ category.title }}
                                            </td>
                                            <td class="p-3">
                                                {{ category.items }}
                                            </td>
                                            <td class="p-3 font-bold">
                                                {{ category.main_store }}
                                            </td>

                                            <td class="p-3 ">
                                                <a href="#" class="text-gray-400 hover:text-gray-100  mx-2">
                                                    <i class="material-icons-outlined text-base">edit</i>
                                                </a>
                                                <a href="#" class="text-gray-400 hover:text-gray-100  ml-2">
                                                    <i class="material-icons-round text-base">delete</i>
                                                </a>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </app-layout>
</template>

<script>
    import AppLayout from '@/Layouts/AppLayout'
    import Welcome from '@/Jetstream/Welcome'

    export default {
        components: {
            AppLayout,
            Welcome,
        },
        props:{
            Categories:Array
        },
    }
</script>
