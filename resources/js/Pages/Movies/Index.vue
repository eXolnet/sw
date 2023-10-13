<script setup lang="ts">
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import {Head, useForm} from '@inertiajs/vue3';
import Movie from "@/Pages/Movies/Movie.vue";
import { Link } from '@inertiajs/vue3';
import { Paginator } from '@/types';
import TextInput from "@/Components/TextInput.vue";
import InputError from "@/Components/InputError.vue";

const props = defineProps<{
    search: string | null,
    movies: Paginator
}>();


const form = useForm<{ search: string }>({
    search: props.search ?? '',
});

const search = () => {
    form.get(route('movies.index'), {
        // onSuccess: () => {
        //     form.reset();
        // },
    });
};
</script>

<template>
    <Head title="Movies" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="font-semibold text-xl text-gray-200 leading-tight">Movies</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="mb-4 inline-flex">

                    <form @submit.prevent="search" class="me-4">
                        <div>
                            <TextInput
                                class="block w-full"
                                v-model="form.search"
                                placeholder="Search"
                            />

                            <InputError class="mt-2" :message="form.errors.search" />
                        </div>
                    </form>
                    <Link :href="route('movies.create')" class="inline-flex items-center px-4 py-2 bg-broom-400 border border-transparent rounded-md font-semibold text-xs text-gray-800 uppercase tracking-widest hover:bg-white focus:bg-white active:bg-gray-300 focus:outline-none focus:ring-2 focus:ring-broom-500 focus:ring-offset-2 focus:ring-offset-gray-800 transition ease-in-out duration-150">
                        Create
                    </Link>
                </div>

                <div class="grid grid-cols-3 gap-4">
                    <Movie v-for="movie in props.movies.data" :data="movie"></Movie>
                </div>

            </div>
        </div>
    </AuthenticatedLayout>
</template>
