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

        <nav class="flex w-full justify-center">
            <Pagination :links="users.links" />
        </nav>
    </div>
</template>

<script setup>
import Pagination from "../Shared/Pagination.vue";

defineProps({
    users: Object,
});
</script>

<style></style>
