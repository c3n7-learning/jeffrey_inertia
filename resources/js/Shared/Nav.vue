<template>
    <div class="navbar bg-base-200">
        <div class="flex-1">
            <div class="flex flex-row items-center">
                <a class="btn btn-ghost normal-case text-xl">My App</a>
                Welcome Back, {{ username }}
            </div>
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
import NavLink from "./NavLink.vue";

export default {
    components: { NavLink },
    computed: {
        username() {
            return this.$page.props.auth.user.username;
        },
    },
};
</script>

<style></style>
