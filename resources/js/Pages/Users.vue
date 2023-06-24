<template>
    <Head>
        <title>Users</title>
        <meta
            type="description"
            content="More interesting information"
            head-key="description"
        />
    </Head>

    <h1 class="text-3xl">Users</h1>

    <ul>
        <li v-for="user in users" :key="user.id" v-text="user.name" />
    </ul>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    users: Array,
});
</script>

<style></style>
