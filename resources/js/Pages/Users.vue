<template>
    <Layout>
        <h1 class="text-3xl">Users</h1>

        <div class="mt-[500px]">
            <p>The current time is {{ time }}</p>
        </div>

        <Link href="/users" preserve-scroll class="text-primary">Refresh</Link>
    </Layout>
</template>

<script setup>
import Layout from "../Shared/Layout.vue";
import { Link } from "@inertiajs/vue3";

defineProps({
    time: String,
});
</script>

<style></style>
