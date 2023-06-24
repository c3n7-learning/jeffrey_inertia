<template>
    <header>
        <Nav />
    </header>

    <section class="p-6">
        <iframe
            width="100%"
            height="300"
            scrolling="no"
            frameborder="no"
            allow="autoplay"
            src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/297408589&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true&visual=true"
        ></iframe>
        <div
            style="
                font-size: 10px;
                color: #cccccc;
                line-break: anywhere;
                word-break: normal;
                overflow: hidden;
                white-space: nowrap;
                text-overflow: ellipsis;
                font-family: Interstate, Lucida Grande, Lucida Sans Unicode,
                    Lucida Sans, Garuda, Verdana, Tahoma, sans-serif;
                font-weight: 100;
            "
        >
            <a
                href="https://soundcloud.com/atwalmusic"
                title="Atwal Music"
                target="_blank"
                style="color: #cccccc; text-decoration: none"
                >Atwal Music</a
            >
            ·
            <a
                href="https://soundcloud.com/atwalmusic/gotthesauce"
                title="Steph Kapela - Got The Sauce"
                target="_blank"
                style="color: #cccccc; text-decoration: none"
                >Steph Kapela - Got The Sauce</a
            >
        </div>

        <slot />
    </section>
</template>

<script>
import Nav from "./Nav.vue";

export default { components: { Nav } };
</script>

<style></style>
