<template>
    <div class="discount bg-gray-50 min-h-screen py-10 px-4">
        <div class="max-w-4xl mx-auto">
            <!-- Заголовок -->
            <div class="text-center mb-12">
                <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                    Выбирайте свою выгоду
                </h1>
                <p class="text-lg text-gray-600 max-w-2xl mx-auto">
                    Специальные предложения для старта и развития вашего бизнеса
                </p>
            </div>

            <!-- Карточки предложений -->
            <div class="grid md:grid-cols-2 gap-8 mb-12">
                <!-- Карточка 1: Скидка на старт -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border-2 border-orange-100 transform hover:scale-[1.02] transition-all duration-300">
                    <div class="bg-gradient-to-r from-[#292936] to-[#292936] p-6">
                        <div class="flex items-center justify-between mb-4">
                            <span class="inline-block bg-white text-[#292936] font-bold py-1 px-4 rounded-full text-sm">
                                Выгодный старт
                            </span>
                            <span class="text-white text-2xl font-bold">
                                -20%
                            </span>
                        </div>
                        <h3 class="text-white text-xl font-bold">
                            Скидка на старт бизнеса
                        </h3>
                    </div>

                    <div class="p-6">
                        <div class="mb-6">
                            <p class="text-gray-700 mb-4">
                                Экономьте сразу при заказе услуги по регистрации компании вместе с бухгалтерским сопровождением на первый месяц.
                            </p>

                            <div class="bg-gray-50 rounded-lg p-4 mb-4">
                                <div class="flex items-start">
                                    <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-gray-800">Регистрация компании</span>
                                </div>
                                <div class="flex items-start mt-2">
                                    <svg class="w-5 h-5 text-green-500 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"/>
                                    </svg>
                                    <span class="text-gray-800">Бухгалтерское сопровождение на первый месяц</span>
                                </div>
                            </div>
                        </div>

                        <button class="w-full bg-[#292936] hover:bg-[#292936] text-white font-semibold py-3 px-4 rounded-lg transition duration-300">
                            Выбрать это предложение
                        </button>
                    </div>
                </div>

                <!-- Карточка 2: Долгосрочная выгода -->
                <div class="bg-white rounded-2xl shadow-xl overflow-hidden border-2 border-blue-100 transform hover:scale-[1.02] transition-all duration-300">
                    <div class="bg-gradient-to-r from-[#eb4f78] to-[#eb4f78] p-6">
                        <div class="flex items-center justify-between mb-4">
                            <span class="inline-block bg-white text-[#eb4f78] font-bold py-1 px-4 rounded-full text-sm">
                                Долгосрочное сотрудничество
                            </span>
                            <span class="text-white text-2xl font-bold">
                                до -10%
                            </span>
                        </div>
                        <h3 class="text-white text-xl font-bold">
                            Долгосрочная выгода
                        </h3>
                    </div>

                    <div class="p-6">
                        <div class="mb-6">
                            <p class="text-gray-700 mb-6">
                                Заключите договор на бухгалтерское обслуживание, и мы вознаградим ваше доверие:
                            </p>

                            <!-- Этапы скидок -->
                            <div class="space-y-4">
                                <!-- Первый месяц -->
                                <div class="flex items-start bg-blue-50 rounded-lg p-4">
                                    <div>
                                        <h4 class="font-bold text-gray-900">Первый месяц</h4>
                                        <p class="text-gray-700">Обслуживаем со скидкой <span class="font-bold text-blue-600">10%</span></p>
                                    </div>
                                </div>

                                <!-- 6-12 месяцев -->
                                <div class="flex items-start bg-indigo-50 rounded-lg p-4">
                                    <div>
                                        <h4 class="font-bold text-gray-900">С 6 по 12 месяц</h4>
                                        <p class="text-gray-700">Продолжаем сотрудничество со скидкой <span class="font-bold text-indigo-600">5%</span></p>
                                    </div>
                                </div>
                            </div>

                            <!-- Гарантия -->
                            <div class="mt-6 p-4 bg-green-50 border border-green-100 rounded-lg">
                                <div class="flex items-start">
                                    <svg class="w-5 h-5 text-green-600 mr-3 mt-0.5 flex-shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd"/>
                                    </svg>
                                    <div>
                                        <p class="text-green-800 font-semibold">Ваша скидка остается неизменной</p>
                                        <p class="text-green-700 text-sm mt-1">Даже если объем работ изменится</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <button class="w-full bg-[#eb4f78] hover:bg-[#eb4f78] text-white font-semibold py-3 px-4 rounded-lg transition duration-300">
                            Выбрать долгосрочное сотрудничество
                        </button>
                    </div>
                </div>
            </div>

            <!-- Контактная информация -->
        </div>
    </div>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    name: "BenefitsPage",
    layout: MainLayout,
    props: {
        country: String,
    },
}
</script>

<style scoped>
/* Плавные анимации */
.transition-all {
    transition-property: all;
}

/* Адаптивность */
@media (max-width: 768px) {
    .grid {
        grid-template-columns: 1fr;
    }
}

/* Эффекты наведения */
.transform {
    transition: transform 0.3s ease;
}

/* Плавный скролл */
html {
    scroll-behavior: smooth;
}
.discount {
    margin-top: 50px;
}

@media (max-width: 450px) {
    .discount {
        margin-top: 0 !important;
        padding: 1rem !important;
    }
}
</style>
