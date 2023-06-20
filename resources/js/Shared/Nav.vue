<template>
    <nav class="mt-6">
        <ul class="list-disc">
            <li>
                <NavLink :active="$page.component === 'Home'" href="/">
                    Home
                </NavLink>
            </li>
            <li>
                <NavLink :active="$page.component === 'Users'" href="/users">
                    Users
                </NavLink>
            </li>
            <li>
                <NavLink :active="$page.url === '/settings'" href="/settings">
                    Settings
                </NavLink>
            </li>
            <li>
                <Link
                    href="/logout"
                    method="post"
                    as="button"
                    class="text-blue-500 hover:underline"
                    >Log Out</Link
                >
            </li>
        </ul>
    </nav>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import NavLink from "./NavLink.vue";

export default { components: { Link, NavLink } };
</script>

<style></style>
