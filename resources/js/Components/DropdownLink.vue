<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { computed } from 'vue';

const props = defineProps<{
    href: string;
    active?: boolean;
}>();

const classes = computed(() =>
    props.active
        ? 'block w-full px-4 py-2 text-left text-sm leading-5 text-gray-300 hover:bg-gray-800 bg-gray-800 focus:outline-none focus:bg-gray-800 transition duration-150 ease-in-out'
        : 'block w-full px-4 py-2 text-left text-sm leading-5 text-gray-300 hover:bg-gray-800 focus:outline-none focus:bg-gray-800 transition duration-150 ease-in-out'
);
</script>

<template>
    <Link
        :href="href"
        :class="classes"
    >
        <slot />
    </Link>
</template>
