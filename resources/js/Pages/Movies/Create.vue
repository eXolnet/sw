<script setup lang="ts">
    import { Head, useForm } from "@inertiajs/vue3";
    import TextInput from "@/Components/TextInput.vue";
    import Textarea from "@/Components/Textarea.vue";
    import InputLabel from "@/Components/InputLabel.vue";
    import PrimaryButton from "@/Components/PrimaryButton.vue";
    import InputError from "@/Components/InputError.vue";
    import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";
    import { Movie } from "@/types";

    const form = useForm<Movie>({
        episode_id: null,
        title: '',
        opening_crawl: '',
        director: '',
        producer: '',
        release_date: '',
        created: '',
        edited: '',
    });

    const submit = () => {
        form.post(route('movies.post'), {
            onSuccess: () => {
                form.reset();
            },
        });
    };
</script>

<template>
    <AuthenticatedLayout>
        <Head title="Create Movie" />

        <template #header>
            <h2 class="font-semibold text-xl text-gray-200 leading-tight">Create Movie</h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-black border-2 border-broom-400 overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-100">
                        <form @submit.prevent="submit">
                            <div>
                                <InputLabel for="episode_id" value="Episode ID" />

                                <TextInput
                                    id="episode_id"
                                    type="number"
                                    class="mt-1 block w-full"
                                    v-model.number="form.episode_id"
                                    required
                                    autofocus
                                />

                                <InputError class="mt-2" :message="form.errors.episode_id" />
                            </div>

                            <div class="mt-4">
                                <InputLabel for="title" value="Title" />

                                <TextInput v-model="form.title" id="title" type="text" class="mt-1 block w-full" required />

                                <InputError class="mt-2" :message="form.errors.title" />
                            </div>

                            <div class="mt-4">
                                <InputLabel for="opening_crawl" value="Opening Crawl" />

                                <Textarea v-model="form.opening_crawl" id="opening_crawl" type="text" class="mt-1 block w-full" required />

                                <InputError class="mt-2" :message="form.errors.opening_crawl" />
                            </div>

                            <div class="mt-4">
                                <InputLabel for="director" value="Director" />

                                <TextInput v-model="form.director" id="director" type="text" class="mt-1 block w-full" required />

                                <InputError class="mt-2" :message="form.errors.director" />
                            </div>

                            <div class="mt-4">
                                <InputLabel for="producer" value="Producer" />

                                <TextInput v-model="form.producer" id="producer" type="text" class="mt-1 block w-full" required />

                                <InputError class="mt-2" :message="form.errors.producer" />
                            </div>

                            <div class="mt-4">
                                <InputLabel for="release_date" value="Release Date" />

                                <TextInput v-model="form.release_date" id="release_date" type="date" class="mt-1 block w-full" required />

                                <InputError class="mt-2" :message="form.errors.release_date" />
                            </div>

                            <div class="mt-4">
                                <InputLabel for="created" value="Created" />

                                <TextInput v-model="form.created" id="created" type="date" class="mt-1 block w-full" required />

                                <InputError class="mt-2" :message="form.errors.created" />
                            </div>

                            <div class="mt-4">
                                <InputLabel for="edited" value="Edited" />

                                <TextInput v-model="form.edited" id="edited" type="date" class="mt-1 block w-full" required />

                                <InputError class="mt-2" :message="form.errors.edited" />
                            </div>

                            <div class="flex items-center justify-end mt-4">
                                <PrimaryButton class="ml-4" :class="{ 'opacity-25': form.processing }" :disabled="form.processing">
                                    Create
                                </PrimaryButton>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>

<style scoped>

</style>
