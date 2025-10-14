<template>
    <div class="min-h-screen flex flex-col">
    <header class="fixed-header w-full animate-fade-in">
        <!-- Верхняя часть -->
        <div class="topbar">
            <a href="/"><img  alt="logo_1" class="logo_1" src="/assets/logo1.webp" /></a>
            <button
                @click="toggleMenu"
                aria-label="Открыть меню"
                class="border border-black rounded-md px-3 py-1 active:scale-95 transition text-black"
            >
                ☰
            </button>
        </div>
        <div class="upper_div flex w-full stack-sm">
            <div class="flex-[1]">
                <a href="/"> <img alt="logo_1" class="logo_1" src="/assets/logo1.webp" /></a>
            </div>
            <div class="flex-[3] mt-2 ml-2 animate-slide-up">
                <strong class="desktop-only"
                    >Налоги и бухгалтерия — блогеры, ИП и организации Минск <br
                /></strong>
                <span class="text-sm desktop-only"
                    >Налоги и бухгалтерия для блогеров, предпринимателей и
                    организаций | Простые решения сложных вопросов</span
                >
            </div>
            <div class="flex-[2] flex justify-center">
                <div
                    class="p-3 border border-black bg-[#292936] text-white rounded-2xl shadow-lg shadow-black/50 w-1/2 text-center transition-transform duration-300 hover:translate-y-[-2px]"
                >
                    Консультация в Telegram</div>
            </div>

            <div class="flex-[2] flex flex-col items-center gap-2">
                <span>Пишите 9:00-18:00</span>
                <span
                    ><strong><a href="#">+375 25 690 28 23</a></strong></span
                >
                <a
                    href="#"
                    class="text-blue-600 hover:underline transition-colors transition-transform transform duration-200 hover:scale-105"
                >
                    Быстрая консультация
                </a>
            </div>
        </div>

        <!-- Нижняя часть с полной шириной -->
        <div class="full-width-bg">
            <div :class="['lower_div', 'animate-slide-up', { 'is-open': isMenuOpen }]">
                <nav :class="['menu', { 'is-open': isMenuOpen }]">
                    <ul>
                        <li><a href="/">Главная</a></li>
                        <li><a href="/#about_us">О нас</a></li>
                        <li><a href="/payment">Оплата</a></li>
                        <li style="border-right:none ;"  ><a href="/#products">Услуги</a></li>
                        <li class="mobile-only mt-2"><a href="tel:+375256902823">+375 25 690 28 23</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
    <main class="flex-1">
        <slot />
    </main>
    <footer class="bg-[#292936] text-white mt-12 site-footer">
        <div class="container-default py-10">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8 items-start">
                <div>
                    <h3 class="text-lg font-bold mb-4">БЛОГ ИН ТАЙМ</h3>
                    <ul class="space-y-4 text-sm">
                        <li class="flex items-center gap-3">
                            <div class="w-6 h-6 flex items-center justify-center">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M6.62 10.79c1.44 2.83 3.76 5.14 6.59 6.59l2.2-2.2c.27-.27.67-.36 1.02-.24 1.12.37 2.33.57 3.57.57.55 0 1 .45 1 1V20c0 .55-.45 1-1 1-9.39 0-17-7.61-17-17 0-.55.45-1 1-1h3.5c.55 0 1 .45 1 1 0 1.25.2 2.45.57 3.57.11.35.03.74-.25 1.02l-2.2 2.2z"/>
                                </svg>
                            </div>
                            <span>+375 25 690 28 23</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-6 h-6 flex items-center justify-center">
                                <svg class="w-4 h-4" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zM12 20c-4.42 0-8-3.58-8-8s3.58-8 8-8 8 3.58 8 8-3.58 8-8 8zm.5-13H11v6l5.25 3.15.75-1.23-4.5-2.67z"/>
                                </svg>
                            </div>
                            <span>Пишите 9:00-18:00</span>
                        </li>
                        <li class="flex items-center gap-3">
                            <div class="w-6 h-6 flex items-center justify-center">
                                <svg class="w-5 h-5" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M20 2H4c-1.1 0-1.99.9-1.99 2L2 22l4-4h14c1.1 0 2-.9 2-2V4c0-1.1-.9-2-2-2zm-7 9h-2V5h2v6zm0 4h-2v-2h2v2z"/>
                                </svg>
                            </div>
                            <a href="#" class="underline hover:no-underline">Быстрая консультация</a>
                        </li>
                    </ul>
                </div>
                <div class="flex justify-center mr-12">
                    <img src="/assets/logo3-removebg-preview.png" alt="Логотип" class="w-48 h-auto"/>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Социальные сети</h3>
                    <div class="flex items-center gap-5">
                        <a href="https://www.instagram.com/blog_in_time?igsh=MW40M3lsNHY3cjRrag%3D%3D&utm_source=qr" aria-label="Instagram" class="flex items-center justify-center w-8 h-8">
                            <img class="w-full h-auto" src="/assets/image%2012.png" alt="Instagram">
                        </a>
                        <a href="https://t.me/Blogintime_klimuk_e" aria-label="Telegram" class="flex items-center justify-center w-8 h-8">
                            <img class="w-full h-auto" src="/assets/image%2014.png" alt="Telegram">
                        </a>
                    </div>
                </div>
                <div>
                    <h3 class="text-lg font-bold mb-4">Быстрые ссылки</h3>
                    <ul class="space-y-2 text-sm">
                        <li><a href="/" class="hover:underline">Главная</a></li>
                        <li><a href="/payment" class="hover:underline">Оплата</a></li>
                        <li><a href="/#products" class="hover:underline">Услуги</a></li>
                        <li><a href="/#about_us" class="hover:underline">О нас</a></li>
                    </ul>
                </div>
            </div>
            <div class="border-t border-white/10 mt-8 pt-6 text-xs text-white/70 flex justify-between items-start">
                <div>
                    <p>© 2025 Blog in time. Все права защищены</p>
                </div>
                <div class="flex flex-col items-end">
                    <a href="/Политика_конфиденциальности.pdf" target="_blank" class="text-white mb-1">Политика конфиденциальности</a>
                    <a href="/ДОГОВОР_об_оказании_услуг_на_условиях_публичной_оферты.docx" download class="text-white">Договор на оказание услуг</a>
                </div>
            </div>
        </div>
    </footer>
    </div>
</template>
<script>
export default {
    name: "MainLayout",
    data() {
        return {
            isMenuOpen: false,
        };
    },
    methods: {
        toggleMenu() {
            this.isMenuOpen = !this.isMenuOpen;
        },
    },
};
</script>
<style src="../../css/header.css"></style>
<style scoped>

</style>
