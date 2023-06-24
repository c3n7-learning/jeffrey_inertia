<template>
    <Head>
        <title>Create User</title>
    </Head>

    <div
        class="flex flex-col items-center justify-center w-screen h-screen bg-base-200"
    >
        <div class="flex flex-col bg-white rounded-xl p-4 w-5/12">
            <div class="flex items-end justify-between">
                <h1 class="text-3xl">Log In</h1>
            </div>

            <form @submit.prevent="submit" method="post" class="space-y-2">
                <div class="form-control w-full">
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

                <div class="form-control w-full">
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

                <button
                    type="submit"
                    class="btn btn-primary mt-4"
                    :disabled="form.processing"
                >
                    Submit
                </button>
            </form>
        </div>
    </div>
</template>

<script>
export default {
    layout: null,
};
</script>

<script setup>
import { useForm } from "@inertiajs/vue3";

defineProps({
    errors: Object,
});

let form = useForm({
    email: "",
    password: "",
});

let submit = () => {
    form.post("/login");
};
</script>

<style></style>
