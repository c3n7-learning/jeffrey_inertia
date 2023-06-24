<template>
    <Head>
        <title>Create User</title>
    </Head>

    <div class="flex items-end justify-between">
        <h1 class="text-3xl">Create New User</h1>

        <Link href="/users" class="btn btn-primary btn-sm">Back</Link>
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
            <label class="label" v-if="$page.props.errors.name">
                <span class="label-text text-error">
                    {{ $page.props.errors.name }}
                </span>
            </label>
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
            <label class="label" v-if="form.errors.email">
                <span class="label-text text-error">
                    {{ form.errors.email }}
                </span>
            </label>
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
            <label class="label" v-if="errors.password">
                <span class="label-text text-error">
                    {{ errors.password }}
                </span>
            </label>
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

        <button
            type="submit"
            class="btn btn-primary mt-4"
            :disabled="form.processing"
        >
            Submit
        </button>
    </form>
</template>

<script setup>
import { useForm } from "@inertiajs/vue3";

defineProps({
    errors: Object,
});

let form = useForm({
    name: "",
    email: "",
    password: "",
    password_confirmation: "",
});

let submit = () => {
    form.post("/users");
};
</script>

<style></style>
