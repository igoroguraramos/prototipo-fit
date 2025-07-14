<template>

  <div class="max-w-7xl mx-auto py-10 sm:px-6 lg:px-8">
    <div class="flex justify-between items-center mb-4">
      <Link
        href="/"
        class="inline-flex items-center px-4 py-2 bg-gray-200 text-gray-900 rounded-md font-semibold hover:bg-gray-300"
      >
        Voltar ao Dashboard
      </Link>
      <div></div>
    </div>
    <div class="flex justify-between items-center mb-6">
      <h1 class="text-2xl font-semibold text-gray-900">Planos de Nutrição</h1>
      <Link
        href="/nutrition-plans/create"
        class="inline-flex items-center px-4 py-2 bg-indigo-600 text-white rounded-md font-semibold hover:bg-indigo-500"
      >
        + Novo Plano
      </Link>
    </div>

    <div class="overflow-x-auto bg-white shadow rounded-lg">
      <table class="min-w-full divide-y divide-gray-200">
        <thead class="bg-gray-50">
          <tr>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">#</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Título</th>
            <th class="px-6 py-3 text-left text-xs font-medium text-gray-500 uppercase tracking-wider">Descrição</th>
            <th class="px-6 py-3 text-right text-xs font-medium text-gray-500 uppercase tracking-wider">Ações</th>
          </tr>
        </thead>
        <tbody class="bg-white divide-y divide-gray-200">
          <tr v-for="plan in nutritionPlans" :key="plan.id">
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ plan.id }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900">{{ plan.name }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-500">{{ plan.description }}</td>
            <td class="px-6 py-4 whitespace-nowrap text-right text-sm font-medium">
              <Link
                :href="`/nutrition-plans/${plan.id}/edit`"
                class="text-indigo-600 hover:text-indigo-900 mr-3"
              >
                Editar
              </Link>
              <button
                @click="deletePlan(plan.id)"
                class="text-red-600 hover:text-red-900"
              >
                Excluir
              </button>
            </td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</template>

<script setup>
import { router, Link } from '@inertiajs/vue3'

defineProps({
  nutritionPlans: Array
})

function deletePlan(id) {
  if (confirm('Tem certeza que deseja excluir este plano?')) {
    router.delete(`/nutrition-plans/${id}`)
  }
}
</script>
