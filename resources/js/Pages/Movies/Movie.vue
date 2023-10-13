<template>
    <div class="p-4 rounded-lg shadow-lg bg-black text-broom-400 border-2 border-broom-400 min-h-[450px] items-center justify-center flex flex-col">
        <div v-if="!poster" class="w-[300px] min-h-[450px] flex items-center justify-center">
            <svg class="animate-spin -ml-1 h-5 w-5 text-white" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24">
                <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
            </svg>
        </div>

        <img v-if="poster" :src="poster" alt="#" class="w-[100%]">
        <h2 class="title mt-4">{{props.data.title}}</h2>
        <h3 class="date">{{props.data.release_date}}</h3>
    </div>
</template>

<script setup lang="ts">
import {ref, defineProps, onMounted} from "vue";
import axios from "axios";
import { Movie } from "@/types";

const poster = ref(null);

const props = defineProps<{
  data: Movie
}>()

const getPoster = async () => {
    const res = await axios
      .get('/api/movies/' + props.data.id + '/poster');

    if (res.data.url) {
        poster.value = res.data.url;
    }
};

onMounted(async () => {
    await getPoster();
});

</script>

<style scoped>

</style>
