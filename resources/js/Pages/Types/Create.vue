<template>
    <app-layout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Store Types
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                    <div class="mx-16 py-4 px-8 text-black text-xl font-bold border-b border-grey-500">
                        Create Store Type
                    </div>

                    <form name="student_application" id="student_application" @submit.prevent="createType">
                        <div class="py-4 px-8">

                            <div class="mb-4">
                                <label class="block text-grey-darker text-sm font-bold mb-2">Title</label>
                                <input class=" border rounded w-full py-2 px-3 text-grey-darker" type="text" name="title" id="title" v-model="form.title" placeholder="Enter Your Title">

                            </div>

                            <div class="mb-4">
                                <input
                                    class="mb-2 mx-16 rounded-full text-white uppercase py-1 px-24 bg-gradient-to-r from-red-600 to-yellow-400 hover:from-yellow-400 hover:to-red-600 " type="submit" value="save">
                            </div>
                        </div>
                    </form>
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
        data(){
            return{
                form:{
                    title:'',
                }
            }
        },
        methods:{
            createType(){
                this.$inertia.post(route('types.store'), this.form)
            }
        }

    }
</script>
