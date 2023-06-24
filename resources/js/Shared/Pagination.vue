<template>
    <div class="join">
        <Component
            v-for="(link, i) in links"
            :is="link.url ? 'Link' : 'span'"
            :href="link.url ?? '/'"
            :key="i"
            v-html="link.label"
            class="join-item btn"
            :class="{ 'btn-active': link.active }"
            preserve-scroll
        />
    </div>
</template>

<script>
export default {
    props: {
        links: Array,
    },
};
</script>

<style></style>
