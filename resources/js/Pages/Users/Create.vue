<template>
    <Head>
        <title>Create User</title>
    </Head>

    <div class="flex items-end justify-between">
        <h1 class="text-3xl">Create New User</h1>
    </div>

    <form @submit.prevent="submit" method="post" class="space-y-2">
        <div class="form-control w-full max-w-md">
            <label class="label">
                <span class="label-text">Name</span>
            </label>
            <input
                type="text"
                class="input input-bordered w-full"
                v-model="form.name"
            />
        </div>

        <div class="form-control w-full max-w-md">
            <label class="label">
                <span class="label-text">Email</span>
            </label>
            <input
                type="email"
                class="input input-bordered w-full"
                v-model="form.email"
            />
        </div>

        <div class="form-control w-full max-w-md">
            <label class="label">
                <span class="label-text">Password</span>
            </label>
            <input
                type="password"
                class="input input-bordered w-full"
                v-model="form.password"
            />
        </div>

        <div class="form-control w-full max-w-md">
            <label class="label">
                <span class="label-text">Confirm Password</span>
            </label>
            <input
                type="password"
                class="input input-bordered w-full"
                v-model="form.password_confirmation"
            />
        </div>

        <button type="submit" class="btn btn-primary mt-4">Submit</button>
    </form>
</template>

<script setup>
import { router } from "@inertiajs/vue3";
import { reactive } from "vue";

let form = reactive({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});

let submit = () => {
    router.post("/users", form);
};
</script>

<style></style>
