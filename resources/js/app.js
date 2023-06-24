import { createApp, h } from "vue";
import { createInertiaApp, Link } from "@inertiajs/vue3";

import Layout from "./Shared/Layout.vue";

createInertiaApp({
    resolve: async (name) => {
        const pages = import.meta.glob("./Pages/**/*.vue", {
            eager: false,
        });
        let page = await pages[`./Pages/${name}.vue`]();
        page.default.layout ??= Layout;
        return page;
    },
    setup({ el, App, props, plugin }) {
        createApp({ render: () => h(App, props) })
            .use(plugin)
            .component("Link", Link)
            .mount(el);
    },
});
