<template>
    <div>
        <h1 class="p-2">Создание отзыва</h1>
        <form @submit.prevent="storeReview()">
            <div class="p-2 flex flex-col space-y-2">
                <label class="text-sm font-medium text-gray-700">Имя <span class="text-red-600">*</span></label>
                <input
                    type="text"
                    v-model="review.name"
                    class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    required
                >
            </div>
            <div class="p-2 flex flex-col space-y-2">
                <label class="text-sm font-medium text-gray-700">Заголовок(специальность)</label>
                <input
                    type="text"
                    v-model="review.title"
                    class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    required
                >
            </div>
            <div class="p-2 flex flex-col space-y-2">
                <label class="text-sm font-medium text-gray-700">Описание <span class="text-red-600">*</span></label>
                <textarea
                    type="text"
                    v-model="review.description"
                    class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                ></textarea>
            </div>
            <div class="p-2 flex flex-col space-y-2">
                <label class="text-sm font-medium text-gray-700">Кол-во звезд</label>
                <input
                    type="number"
                    v-model="review.rates"
                    class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"
                    required
                >
            </div>

            <div class="p-2 flex flex-col space-y-2">
                <label class="mb-4 text-sm font-medium text-gray-700">Опубликован</label>
                <input
                    type="checkbox"

                    v-model="review.published"
                    true-value="1"
                    false-value="0"
                    class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500"

                >
            </div>
            <div class="flex flex-col space-y-2 h-auto">
                <label class="mb-2 mt-2 text-sm font-medium text-gray-700">Аватар</label>
                <input
                    type="file"
                    @change="handleFileUpload($event,index)"
                    accept="image/*"
                    class="px-3 py-2 border border-gray-300 rounded-md focus:outline-none focus:ring-2 focus:ring-blue-500 focus:border-blue-500 cursor-pointer file:mr-4 file:py-2 file:px-4 file:rounded-full file:border-0 file:text-sm file:font-semibold file:bg-blue-50 file:text-blue-700 hover:file:bg-blue-100"
                >
                <div v-if="review.image  || review.image.small_uri" class="mt-4">
                    <div class="relative group w-24 h-24">
                        <img
                            :src=" review.image.small_uri || review.image.dataUrl"
                            class="w-full h-full object-cover rounded-lg border"
                        >
                        <button
                            @click="removeImage()"
                            type="button"
                            class="absolute -top-2 -right-2 bg-red-500 text-white rounded-full w-6 h-6 flex items-center justify-center opacity-0 group-hover:opacity-100 transition-opacity"
                        >
                            &times;
                        </button>
                    </div>
                </div>
            </div>
            <button  type="submit"
                    class="mt-4 px-4 py-2 text-sm font-medium text-white bg-blue-600 rounded-md hover:bg-blue-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-blue-500">
                Изменить
            </button>
        </form>
    </div>
</template>
<script>

import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout.vue";

export default {
    name: 'Create',
    layout: AuthenticatedLayout,
    props:{
        review: Object
    },
    data() {
        // return {
        //     review:{
        //         'name': '',
        //         'rates': 0,
        //         'title': '',
        //         'description': '',
        //         'published': false,
        //         image: null,
        //     }
        // }
    },
    methods:{
        handleFileUpload(event,index) {
            this.createImages(event.target.files || e.dataTransfer.files,index)
        },
        createImages(files, index) {
            [...files].forEach(file => {
                const reader = new FileReader();
                reader.onload = e => {
                    this.review.image = {
                        file,
                        dataUrl: e.target.result, // для превью
                        name: file.name,
                        size: file.size,
                        type: file.type,
                    };
                };
                reader.readAsDataURL(file);
            });
        },
        removeImage(index,indexImg) {
            if (this.review.image.small_uri) {
                URL.revokeObjectURL(this.review.image.small_uri);
            }

            this.review.image.small_uri = null;
        },

        readFileAsDataURL(file) {
            return new Promise((resolve, reject) => {
                const reader = new FileReader();
                reader.onload = () => resolve(reader.result);
                reader.onerror = reject;
                reader.readAsDataURL(file);
            });
        },
        storeReview() {
            axios.post(route('admin.reviews.store'), {review: this.review}, {
                'headers': {
                    'Content-Type': 'multipart/form-data'
                }
            }).then(res => {
                alert('Review created successfully');
            }).catch(error => {
                alert(error.message);
            });
        },
    }


}

</script>
<style scoped>


</style>
