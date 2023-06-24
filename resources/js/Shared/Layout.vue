<template>
    <header>
        <Head>
            <title>App</title>
            <meta
                type="description"
                content="Interesting information"
                head-key="description"
            />
        </Head>
        <Nav />
    </header>

    <section class="p-6">
        <slot />
    </section>
</template>

<script>
import Nav from "./Nav.vue";
import { Head } from "@inertiajs/vue3";

export default { components: { Nav, Head } };
</script>

<style></style>
