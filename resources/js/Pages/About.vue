<script setup>
import { Head, Link } from '@inertiajs/vue3';

const props = defineProps({
    data: Object
});
</script>

<template>
    <Head title="About Page"/>
    <h1>{{ data.header }}</h1>
    <Link href="/">Main Page</Link>
</template>
