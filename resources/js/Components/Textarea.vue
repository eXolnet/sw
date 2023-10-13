<script setup lang="ts">
import { onMounted, ref } from 'vue';

defineProps<{
    modelValue: string | number | null;
}>();

defineEmits(['update:modelValue']);

const input = ref<HTMLInputElement | null>(null);

onMounted(() => {
    if (input.value?.hasAttribute('autofocus')) {
        input.value?.focus();
    }
});

defineExpose({ focus: () => input.value?.focus() });
</script>

<template>
    <textarea
        class="border-gray-300 dark:border-gray-700 dark:bg-gray-900 dark:text-gray-300 focus:border-broom-500 dark:focus:border-broom-400 focus:ring-broom-500 dark:focus:ring-broom-400 rounded-md shadow-sm"
        @input="$emit('update:modelValue', ($event.target as HTMLInputElement).value)"
        ref="input"
    >{{modelValue}}</textarea>
</template>
