<script setup>
import { Head, useForm } from '@inertiajs/vue3';
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import InputError from '@/Components/InputError.vue';
import InputLabel from '@/Components/InputLabel.vue';
import PrimaryButton from '@/Components/PrimaryButton.vue';
import TextInput from '@/Components/TextInput.vue';

const props = defineProps({ pages: { type: Array, required: true } });
const form = useForm({
    pages: props.pages.map(({ path, title, description }) => ({ path, title, description })),
});

const save = () => form.put(route('admin.seo.update'), { preserveScroll: true });
</script>

<template>
    <Head title="SEO страниц — Блог ин тайм" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">SEO страниц</h2>
        </template>

        <div class="py-12">
            <form class="mx-auto max-w-4xl space-y-6 px-4 sm:px-6 lg:px-8" @submit.prevent="save">
                <p class="text-sm text-gray-600">
                    Задайте уникальные заголовок и описание для каждой страницы. Они помогают поисковикам
                    понять её содержание. Ориентир: 50–70 символов для title и 120–160 для description.
                    После сохранения изменения появятся на сайте сразу, а в поиске — после переобхода.
                </p>

                <section v-for="(page, index) in form.pages" :key="page.path" class="space-y-5 rounded-lg bg-white p-6 shadow-sm">
                    <div>
                        <h3 class="text-lg font-semibold text-gray-900">{{ props.pages[index].name }}</h3>
                        <a :href="page.path" target="_blank" rel="noopener" class="text-sm text-blue-600 hover:underline">{{ page.path }}</a>
                    </div>

                    <div>
                        <InputLabel :for="`seo-title-${index}`" value="Заголовок (title)" />
                        <TextInput :id="`seo-title-${index}`" v-model="page.title" type="text" class="mt-1 block w-full" maxlength="255" required />
                        <p class="mt-1 text-xs text-gray-500">{{ page.title.length }} / 255 символов</p>
                        <InputError :message="form.errors[`pages.${index}.title`]" class="mt-2" />
                    </div>

                    <div>
                        <InputLabel :for="`seo-description-${index}`" value="Описание (description)" />
                        <textarea :id="`seo-description-${index}`" v-model="page.description" rows="4" maxlength="500" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500" />
                        <p class="mt-1 text-xs text-gray-500">{{ page.description.length }} / 500 символов</p>
                        <InputError :message="form.errors[`pages.${index}.description`]" class="mt-2" />
                    </div>

                    <div class="rounded-md bg-gray-50 p-4 break-words">
                        <p class="mb-2 text-xs text-gray-500">Пример отображения в поиске</p>
                        <p class="text-lg text-blue-800">{{ page.title }}</p>
                        <p class="mt-1 text-sm text-gray-700">{{ page.description }}</p>
                    </div>
                </section>

                <InputError :message="form.errors.pages" />
                <div class="flex items-center gap-4" aria-live="polite">
                    <PrimaryButton :disabled="form.processing">{{ form.processing ? 'Сохранение…' : 'Сохранить' }}</PrimaryButton>
                    <span v-if="form.recentlySuccessful" class="text-sm text-green-700">Настройки сохранены.</span>
                </div>
            </form>
        </div>
    </AuthenticatedLayout>
</template>
