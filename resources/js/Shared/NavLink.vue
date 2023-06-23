<template>
    <Link
        class="btn btn-ghost btn-sm"
        :class="{
            shadow: active,
        }"
        :href="href"
    >
        <slot />
    </Link>
</template>

<script>
import { Link } from "@inertiajs/vue3";
export default {
    components: { Link },
    props: {
        active: Boolean,
        href: String,
    },
};
</script>

<style></style>
