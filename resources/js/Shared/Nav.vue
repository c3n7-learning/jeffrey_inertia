<template>
    <div class="navbar bg-base-200">
        <div class="flex-1">
            <a class="btn btn-ghost normal-case text-xl">My App</a>
        </div>
        <div class="flex-none">
            <ul class="menu menu-horizontal px-1">
                <NavLink :active="$page.component === 'Home'" href="/">
                    Home
                </NavLink>

                <NavLink :active="$page.component === 'Users'" href="/users">
                    Users
                </NavLink>

                <NavLink :active="$page.url === '/settings'" href="/settings">
                    Settings
                </NavLink>

                <li>
                    <Link href="/logout" method="post" as="button">
                        <span class="btn btn-ghost btn-sm"> Log Out </span>
                    </Link>
                </li>
            </ul>
        </div>
    </div>
</template>

<script>
import { Link } from "@inertiajs/vue3";
import NavLink from "./NavLink.vue";

export default { components: { Link, NavLink } };
</script>

<style></style>
