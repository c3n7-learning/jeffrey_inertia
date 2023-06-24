<template>
    <Head>
        <title>Users</title>
        <meta
            type="description"
            content="More interesting information"
            head-key="description"
        />
    </Head>

    <div class="flex items-end justify-between">
        <h1 class="text-3xl">Users</h1>

        <Link
            v-if="can.createUser"
            href="/users/create"
            class="btn btn-primary btn-sm"
            >New</Link
        >
    </div>

    <div class="w-full flex justify-end">
        <input
            type="text"
            placeholder="Search..."
            class="input input-bordered input-sm my-2"
            name=""
            v-model="search"
        />
    </div>

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
                            v-if="user.can.edit"
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
import { ref, watch } from "vue";
import Pagination from "../../Shared/Pagination.vue";
import { router } from "@inertiajs/vue3";
import { debounce } from "lodash";

let props = defineProps({
    users: Object,
    filters: Object,
    can: Object,
});

let search = ref(props?.filters?.search ?? "");

watch(
    search,
    debounce((value) => {
        router.get(
            "/users",
            { search: value },
            { preserveState: true, replace: true }
        );
    }, 500)
);
</script>

<style></style>
