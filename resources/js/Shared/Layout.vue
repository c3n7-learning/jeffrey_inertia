<template>
    <header>
        <Nav />
    </header>

    <section class="p-6">
        <slot />
    </section>
</template>

<script>
import Nav from "./Nav.vue";

export default { components: { Nav } };
</script>

<style></style>
