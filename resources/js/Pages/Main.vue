<script setup>
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps({
    data: Object
});
</script>

<template>
    <Head title="Main Page"/>
    <h1>{{ data.header }}</h1>
    <Link href="/about">About Page</Link>
</template>
