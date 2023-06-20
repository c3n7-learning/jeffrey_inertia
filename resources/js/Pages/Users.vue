<template>
    <h1>Users</h1>

    <Nav />

    <div class="mt-[500px]">
        <p>The current time is {{ time }}</p>
    </div>

    <Link href="/users" preserve-scroll>Refresh</Link>
</template>

<script>
import Nav from "../Shared/Nav.vue";
import { Link } from "@inertiajs/vue3";
export default { components: { Nav, Link }, props: { time: String } };
</script>

<style></style>
