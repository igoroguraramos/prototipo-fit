<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2
                class="text-xl font-semibold leading-tight text-gray-800"
            >
                Dashboard
            </h2>
        </template>

        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div
                    class="overflow-hidden bg-white shadow-sm sm:rounded-lg"
                >
                    <div class="p-6 text-gray-900">
                        You're logged in!
                        <div class="mt-6 flex flex-col gap-4">
                            <a href="/trainings" class="text-indigo-600 hover:underline font-semibold">Treinos</a>
                            <a href="/nutrition-plans" class="text-indigo-600 hover:underline font-semibold">Planos de Nutrição</a>
                            <a href="/progress-logs" class="text-indigo-600 hover:underline font-semibold">Progresso</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </AuthenticatedLayout>
</template>
