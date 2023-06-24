<template>
    <Head>
        <title>Users</title>
        <meta
            type="description"
            content="More interesting information"
            head-key="description"
        />
    </Head>

    <h1 class="text-3xl">Users</h1>

    <ul>
        <li />
    </ul>

    <div class="overflow-x-auto">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                <tr v-for="user in users.data" :key="user.id" class="hover">
                    <td>{{ user.id }}</td>
                    <td>{{ user.name }}</td>
                    <td>
                        <Link
                            :href="`/users/${user.id}/edit`"
                            class="btn btn-primary btn-xs"
                        >
                            Edit
                        </Link>
                    </td>
                </tr>
            </tbody>
        </table>

        <nav class="flex w-full justify-end">
            <div class="join">
                <Link
                    v-for="(link, i) in users.links"
                    :href="link.url ?? '/'"
                    :key="i"
                    v-html="link.label"
                    class="join-item btn"
                />
            </div>
        </nav>
    </div>
</template>

<script setup>
import { Link } from "@inertiajs/vue3";

defineProps({
    users: Object,
});
</script>

<style></style>
