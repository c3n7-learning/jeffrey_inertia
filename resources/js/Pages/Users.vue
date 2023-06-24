<template>
    <h1 class="text-3xl">Users</h1>

    <div class="mt-[500px]">
        <p>The current time is {{ time }}</p>
    </div>

    <Link href="/users" preserve-scroll class="text-primary">Refresh</Link>
</template>

<script>
import { Link } from "@inertiajs/vue3";

export default {
    components: { Link },
    props: {
        time: String,
    },
};
</script>

<style></style>
