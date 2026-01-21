<template>
    <div class="bg-gray-100 p-10 payment">
        <div class="bg-white shadow-lg rounded-lg overflow-hidden max-w-2xl mx-auto">
            <!-- Заголовок компании -->
            <div class="bg-[#F7F5F0] p-6">
                <h1 class="text-2xl font-bold text-black mb-2">Бухгалтерская компания «Блог ин тайм»</h1>
                <p class="text-gray-700 mt-3">
                    Бухгалтерское сопровождение, налоговое консультирование, поддержка бизнеса и блогеров
                </p>
            </div>

            <!-- Основная информация -->
            <div class="p-6">
                <div class="mb-4">
                    <p class="text-gray-700">
                        <span class="font-semibold">УНП:</span>
                        <span class="font-bold ml-1">193848818</span>
                    </p>
                </div>

                <div class="mb-4">
                    <p class="text-gray-700">
                        <span class="font-semibold">Адрес:</span> г. Минск, Республика Беларусь
                    </p>
                </div>

                <!-- Контакты -->
                <div class="space-y-4 mt-6">
                    <!-- Email -->
                    <div class="flex items-start">
                        <span class="font-semibold text-gray-700 min-w-[80px]">Email:</span>
                        <a href="mailto:blogtime.chat@gmail.com" class="text-blue-500 hover:text-blue-700 ml-2">
                            blogtime.chat@gmail.com
                        </a>
                    </div>

                    <!-- Телефон -->
                    <div class="flex items-start">
                        <span class="font-semibold text-gray-700 min-w-[80px]">Телефон:</span>
                        <a href="tel:+375256902823" class="text-black hover:text-blue-700 ml-2">
                            +375 (25) 690-28-23
                        </a>
                    </div>

                    <!-- Telegram -->
                    <div class="flex items-start">
                        <span class="font-semibold text-gray-700 min-w-[80px]">Telegram:</span>
                        <a href="https://t.me/Blogintime_klimuk_e"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="text-blue-500 hover:text-blue-700 ml-2">
                            Blogintime_klimuk_e
                        </a>
                    </div>

                    <!-- Сайт -->
                    <div class="flex items-start">
                        <span class="font-semibold text-gray-700 min-w-[80px]">Сайт:</span>
                        <a href="https://blogintime.by/"
                           target="_blank"
                           rel="noopener noreferrer"
                           class="text-blue-500 hover:text-blue-700 ml-2">
                            https://blogintime.by/
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
import MainLayout from "@/Layouts/MainLayout.vue";

export default {
    name: "Pay",
    layout: MainLayout,
    props: {
        country: String,
    },
}
</script>

<style scoped>
.payment {
    margin-top: 50px;
}

@media (max-width: 450px) {
    .payment {
        margin-top: 0 !important;
        padding: 1rem !important;
    }
}
</style>
