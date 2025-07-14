<template>
  <div class="max-w-3xl mx-auto py-10 sm:px-6 lg:px-8">
    <h1 class="text-2xl font-semibold text-gray-900 mb-6">Novo Plano de Nutrição</h1>

    <form @submit.prevent="submit" class="space-y-6">
      <div>
        <label class="block text-sm font-medium text-gray-700">Título</label>
        <input
          v-model="form.name"
          type="text"
          class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
        />
        <div v-if="form.errors.name" class="text-sm text-red-600 mt-1">{{ form.errors.name }}</div>
      </div>

      <div>
        <label class="block text-sm font-medium text-gray-700">Descrição</label>
        <textarea
          v-model="form.description"
          rows="4"
          class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
        ></textarea>
        <div v-if="form.errors.description" class="text-sm text-red-600 mt-1">{{ form.errors.description }}</div>
      </div>

      <div class="flex justify-between items-center">
        <Link
          href="/nutrition-plans"
          class="inline-flex items-center px-4 py-2 bg-gray-200 text-gray-900 rounded-md font-semibold hover:bg-gray-300"
        >
          Voltar
        </Link>
        <div>
          <button
            type="submit"
            class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-md font-semibold hover:bg-indigo-500"
          >
            Salvar
          </button>
        </div>
      </div>
    </form>
  </div>
</template>

<script setup>
import { useForm, Link } from '@inertiajs/vue3'

const form = useForm({
  name: '',
  description: ''
})

function submit() {
  form.post('/nutrition-plans')
}
</script>
