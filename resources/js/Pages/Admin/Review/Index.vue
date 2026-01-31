<template>
    <div class=" border border-gray-200 rounded-lg shadow">
        <div class="m-2"><a :href="route('admin.reviews.create')" class="px-3 py-1 text-blue-600 transition-colors duration-150 bg-transparent border border-blue-600 rounded hover:bg-blue-600 hover:text-white">Создать</a></div>
        <table class="min-w-full divide-y divide-gray-200 mt-4">
            <thead>
            <tr>
            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Id</th>
            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Имя</th>
            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Заголовок</th>
            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Описание</th>
            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Аватар</th>
            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Статус</th>
            <th scope="col" class="px-6 py-3 text-xs font-medium tracking-wider text-left text-gray-500 uppercase">
                Действия</th>
            </tr>
            </thead>
            <tbody>
            <tr  v-for="review in reviews" class="hover:bg-gray-100 transition-colors duration-150">
            <td  class="px-6 py-4 whitespace-nowrap">{{ review.id }}</td>
            <td  class="px-6 py-4 whitespace-nowrap">{{review.name}}</td>
            <td  class="px-6 py-4 whitespace-nowrap">{{review.title}}</td>
            <td  class="px-6 py-4 whitespace-nowrap">{{review.description}}</td>
            <td  class="px-6 py-4 whitespace-nowrap"><img class="w-10 h-10" :src="review.image.small_uri"></td>
                <td  class="px-6 py-4 whitespace-nowrap" v-if="review.published === 1 ">
                    Опубликован
                </td>
                <td  class="px-6 py-4 whitespace-nowrap" v-else>
                    Не опубликован
                </td>
            <td class="px-6 py-4 text-sm font-medium whitespace-nowrap">
                <div class="flex space-x-2">
                    <a
                        :href="route('admin.reviews.edit', review.id)"
                        class="px-3 py-1 text-blue-600 transition-colors duration-150 bg-transparent border border-blue-600 rounded hover:bg-blue-600 hover:text-white"
                    >
                        Изменить
                    </a>
                    <button
                        @click.prevent="confirmDelete(review)"
                        class="px-3 py-1 text-red-600 transition-colors duration-150 bg-transparent border border-red-600 rounded hover:bg-red-600 hover:text-white"
                    >
                        Удалить
                    </button>
                </div>
            </td>
            </tr>
            </tbody>
        </table>
    </div>
    <div
        v-if="deleteModalOpen"
        class="fixed inset-0 z-50 flex items-center justify-center bg-black bg-opacity-50"
    >
        <div class="w-full max-w-md p-6 mx-4 bg-white rounded-lg shadow-xl">
            <div class="flex items-center justify-between mb-4">
                <h3 class="text-lg font-medium text-gray-900">
                    Confirm Deletion
                </h3>
                <button
                    @click="deleteModalOpen = false"
                    class="text-gray-400 hover:text-gray-500"
                >
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </button>
            </div>
            <p class="mb-6 text-gray-600">
                Are you sure you want to delete "<strong>{{ reviewToDelete?.name }}</strong>"? This action cannot be undone.
            </p>
            <div class="flex justify-end space-x-3">
                <button
                    @click="deleteModalOpen = false"
                    class="px-4 py-2 text-sm font-medium text-gray-700 bg-gray-100 border border-gray-300 rounded-md hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-gray-500"
                >
                    Cancel
                </button>
                <button
                    @click="deletereviewConfirmed"
                    class="px-4 py-2 text-sm font-medium text-white bg-red-600 border border-transparent rounded-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500"
                >
                    Delete
                </button>
            </div>
        </div>
    </div>
</template>
<script>

import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

export default {
    name: 'Index',
    layout: AuthenticatedLayout,
    props: {
        reviews: Array,
        pagination: Object,
    },
    data() {
        return {
            reviewsData: this.reviews,
            deleteModalOpen: false,
            reviewToDelete: null
        }
    },
    methods:{
        confirmDelete(review) {
            this.reviewToDelete = review;
            this.deleteModalOpen = true;
        },

        deletereviewConfirmed() {
            if (!this.reviewToDelete) return;

            axios.delete(route('admin.reviews.destroy', this.reviewToDelete.id))
                .then(res => {
                    // Удаляем товар из списка
                    this.reviewsData = this.reviewsData.filter(p => p.id !== this.reviewToDelete.id);

                    // Обновляем счетчики пагинации
                    if (this.pagination) {
                        this.pagination.total -= 1;
                        this.pagination.to -= 1;
                    }

                    this.deleteModalOpen = false;
                    this.reviewToDelete = null;

                    this.$toast.success('review deleted successfully!');
                })
                .catch(error => {
                    console.error('Error deleting review:', error);
                    this.$toast.error('Failed to delete review');
                });
        },
    }


}

</script>
<style scoped>


</style>
