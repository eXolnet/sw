<script setup lang="ts">
    import { Link } from '@inertiajs/vue3';

    interface LinkInterface {
        url: string | null
        label: string
        active: boolean
    }

    const props = defineProps<{
        links: LinkInterface[]
    }>()
</script>

<template>
    <div class="mt-6 -mb-1 flex flex-wrap">
        <template v-for="(link, key) in links">
            <div v-if="link.url === null" :key="key" class="mr-1 mb-1 px-4 py-3 bg-black text-broom-400 text-sm border border-broom-400 rounded" :class="{ 'ml-auto': link.label === 'Next' }">{{ link.label }}</div>
            <Link v-else class="mr-1 mb-1 px-4 py-3 bg-broom-400 border border-transparent rounded-md font-semibold text-sm text-black uppercase tracking-widest hover:bg-white focus:bg-white active:bg-gray-300 focus:outline-none focus:ring-offset-gray-800 transition ease-in-out duration-150" :class="{ 'bg-white': link.active, 'ml-auto': link.label === 'Next' }" :href="link.url">{{ link.label }}</Link>
        </template>
    </div>
</template>

<style scoped>

</style>
