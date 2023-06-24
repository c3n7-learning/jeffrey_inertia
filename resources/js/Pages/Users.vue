<template>
    <Head>
        <title>App - Users</title>
        <meta
            type="description"
            content="More interesting information"
            head-key="description"
        />
    </Head>

    <h1 class="text-3xl">Users</h1>

    <div class="mt-[500px]">
        <p>The current time is {{ time }}</p>
    </div>

    <Link href="/users" preserve-scroll class="text-primary">Refresh</Link>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";
import { Head } from "@inertiajs/vue3";

defineProps({
    time: String,
});
</script>

<style></style>
