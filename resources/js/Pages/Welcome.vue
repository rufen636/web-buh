<template>
    <div class="relative animate-fade-in">
        <!-- Фоновое изображение -->


        <!-- Затемнение фона (опционально) -->

        <!-- first section -->
        <div class="relative z-10 flex h-full text-white first-grid">
            <div class="ml-10 mt-32 text-[42px] hero-title">
                <div class="">
                    <div class=" ">БУХГАЛТЕРИЯ РАБОТАЕТ,</div>
                    <div class="flex">
                        <div class="">ВЫ — СПОКОЙНЫ</div>
                        <div class="italic text-[24px] ml-12">
                            Без найма. Без штрафов.<br/>
                            Без вашего участия.
                        </div>
                    </div>
                    <div class="mt-8 text-[26px] pr-8 hero-subtitle">
                        Работаем как свой отдел — но дешевле, тише и без
                        больничных
                    </div>
                    <div class="flex text-[16px] gap-7 mt-16 stack-sm">
                        <div class="flex-1">
                            <strong>Оптимизируем</strong><br/>
                            Ваше время
                        </div>
                        <div class="flex-[3/2]">
                            <strong> Закрываем вопросы</strong><br/>
                            контролирующих органов
                        </div>
                        <div class="flex-1">
                            <strong> Своевременно</strong><br/>
                            подаем отчетность
                        </div>
                        <div class="flex-1">
                            От <strong> {{ prices['first'] }} {{ country === 'by' ? 'BYN' : (country === 'ru' ? 'RUB' : '') }}</strong>/мес.
                        </div>
                    </div>
                    <div class="flex mt-28 stack-sm mb-10">
                        <div class="flex-1 text-[16px] mt-4">
                            <a
                                href="/#form"
                                class="pt-8 pb-8 pl-12 pr-12 bg-[#292936] text-white rounded-lg hero-cta transform transition-all duration-500 ease-in-out hover:bg-white hover:text-black hover:scale-105"
                            >
                                Записаться на консультацию
                            </a>
                        </div>
                        <div class="flex-1 text-[14px] mt-8">
                            <div
                                class="w-4 h-4 mt-1 rounded-full bg-lime-400"
                            ></div>
                            <div class="mt-1">
                                Разберем все по полочкам<br/>
                                и предложим лучшие условия.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- second section -->
        <div
            class="flex flex-col md:flex-row items-center justify-center pt-10 pb-10 pl-10 pr-10 text-center bg-[#F7F5F0] card-surface animate-slide-up"
        >
            <div  class="flex-1 flex flex-col items-center feature-card mb-4 md:mb-0">
                <a href="/#about_us"><img
                    class="h-[200px] w-[200px]"
                    alt="Кто мы?"
                    src="/assets/second-section/1.webp"
                />
                <span class="text-center mt-2">Кто мы?</span>
                </a>
            </div>
            <div class="flex-1 flex flex-col items-center feature-card mb-4 md:mb-0">
                <a href="/#products">
                <img
                    class="h-[200px] w-[200px]"
                    alt="Услуги"
                    src="/assets/second-section/2.webp"
                />
                <span class="text-center mt-2">Услуги</span>
                </a>
            </div>
            <div class="flex-1 flex flex-col items-center feature-card mb-4 md:mb-0">
                <a href="/#reviews">
                <img
                    class="h-[200px] w-[200px]"
                    alt="Отзывы"
                    src="/assets/second-section/3.webp"
                />
                <span class="text-center mt-2">Отзывы</span>
                </a>
            </div>
        </div>
        <!-- third section -->
        <div class="p-10 ">
            <div class="flex gap-6 stack-sm">
                <span class="flex-1 text-[40px] animate-slide-up"
                >Наводим порядок в финансах — легко и вовремя</span
                >
                <span class="flex-1 text-[20px] mt-2 animate-slide-up"
                >Blog in time — команда профессионалов, которые умеют
                    выстраивать удаленные процессы работы сводя к минимуму так
                    называемый «человеческий фактор»-нервы, забывчивость,
                    ошибки</span
                >
            </div>
            <div class="mt-10 mb-10">
                <img alt="image" src="/assets/third-section/1.webp"/>
            </div>
            <div class="flex gap-2 stack-sm">
                <div
                    class="flex-1 flex p-5 border text-white rounded-xl border-[#292936] bg-[#292936] feature-card"
                >
                    <span class="text-[60px]">10+</span>
                    <span class="mt-4 ml-5"
                    >Лет опыта работы с ООО, ИП и самозанятыми</span
                    >
                </div>
                <div
                    class="flex-1 flex p-5 border rounded-xl border-[#F7F5F0] bg-[#F7F5F0] feature-card"
                >
                    <img
                        class="h-[100px] w-[100px]"
                        alt="Члены палаты налоговых консультантов"
                        src="/assets/third-section/image-3.webp"
                    />
                    <span class="mt-4 ml-5"
                    >Члены палаты налоговых консультантов</span
                    >
                </div>
                <div
                    class="flex-1 flex p-5 border rounded-xl border-[#292936] text-white bg-[#292936] feature-card"
                >
                    <img
                        class="h-[100px] w-[100px]"
                        alt="Отзывы"
                        src="/assets/third-section/image-2.webp"
                    />
                    <span class="mt-2 ml-5"
                    >Работаем с любыми электронными системами ведения
                        отчетности</span
                    >
                </div>
                <div
                    class="flex-[1/4] p-5 border rounded-xl border-[#F7F5F0] bg-[#F7F5F0]"
                >
                    <img
                        class="h-[100px] w-[100px]"
                        alt="Отзывы"
                        src="/assets/third-section/chat-ai-line_1.webp"
                    />
                </div>
            </div>
        </div>
        <!-- 4 section -->
        <div id="products" class="p-10 bg-[#F7F5F0] ">
            <span class="text-[36px]"
            >Ведем учет для тех, кто <br/>творит, строит, запускает</span
            >
            <div class="flex gap-2 text-center items-center pt-10 stack-sm">
                <div class="flex-[2] text-start text-[24px] pt-2 pb-2">
                    <span>Наши услуги:</span>
                </div>
                <div class="flex-[2] border border-black rounded-3xl pt-2 pb-2">
                    <span>ООО</span>
                </div>
                <div class="flex-[4] border border-black rounded-3xl pt-2 pb-2">
                    <span>Индивидуальным предпринимателям</span>
                </div>
                <div class="flex-[3] border border-black rounded-3xl pt-2 pb-2">
                    <span>Физическим лицам</span>
                </div>
            </div>
        </div>
        <div >
            <div class="pl-10 pr-10 pt-10 flex gap-2 stack-sm ">
                <div
                    class="flex-1 p-5 border rounded-xl border-[#292936] text-white bg-[#292936]"
                >
                    <h2 class="text-[24px]"><strong>Открытие бизнеса</strong></h2>
                    <span
                    >Регистрация ИП или ООО, подбор оптимальной формы,
                        подготовка документов. Всё, чтобы старт был уверенным и
                        законным.</span
                    >
                    <p class=" text-[22px]">
                       <strong>от {{ prices['opening_business'] }} {{ country === 'by' ? 'бел. руб' : (country === 'ru' ? 'рос. руб' : '') }} </strong>
                    </p>
                </div>
                <div
                    class="flex-1 p-5 border text-black rounded-xl border-[#F7F5F0] bg-[#F7F5F0]"
                >
                    <h2 class="text-[24px]"><strong>Юридическое сопровождение</strong></h2>
                    <span
                    >Составление и проверка договоров, консультации по
                        правовым вопросам, помощь в решении текущих задач.
                        Надёжная поддержка на каждом этапе.</span
                    >
                    <p class=" text-[22px]">
                        <strong>от {{ prices['legal_support'] }} {{ country === 'by' ? 'бел. руб' : (country === 'ru' ? 'рос. руб' : '') }} </strong>
                    </p>
                </div>
            </div>
            <div
                class="ml-10 mr-10 mt-5 p-5 text-black rounded-xl border-[#F7F5F0] bg-[#F7F5F0] animate-slide-up"
            >
                <h2 class="text-[24px]"><strong>
                    Перед стартом / Предварительный аудит
                </strong></h2>
                <ul class="flex gap-2">
                    <li>
                        Перед открытием бизнеса — рассчитаем налоговую нагрузку,
                        подскажем оптимальную систему налогообложения. Поможем
                        избежать ошибок ещё до регистрации.
                    </li>
                    <li>
                        Проверка текущего состояния учёта, выявление ошибок,
                        рекомендации по улучшению. Подходит перед проверками или
                        сменой бухгалтера.
                    </li>
                </ul>
                <p class=" text-[22px]">
                    <strong>от {{ prices['before_start'] }} {{ country === 'by' ? 'бел. руб' : (country === 'ru' ? 'рос. руб' : '') }} </strong>
                </p>
            </div>
            <div class="pl-10 pr-10 pt-5 flex gap-2 stack-sm ">
                <div
                    class="flex-1 p-5 border rounded-xl border-[#292936] text-white bg-[#292936]"
                >
                    <h2 class="text-[24px]"><strong>Бухгалтерское сопровождение</strong></h2>
                    <span
                    >Ведение учёта, отчётность, расчёт налогов и зарплат.
                        Всё вовремя, прозрачно и без лишних хлопот.</span
                    >
                    <p class=" text-[22px]">
                      <strong>от   {{ prices['buh'] }} {{ country === 'by' ? 'бел. руб' : (country === 'ru' ? 'рос. руб' : '') }} </strong>
                    </p>
                </div>
                <div
                    class="flex-1 p-5 border text-black rounded-xl border-[#F7F5F0] bg-[#F7F5F0]"
                >
                    <h2 class="text-[24px]"><strong>Консультации</strong></h2>
                    <span
                    >Ответы на вопросы, разбор нестандартных ситуаций,
                        помощь в принятии финансовых решений. Можно разово или
                        на регулярной основе.</span
                    >
                    <p class=" text-[22px]">
                        <strong>от {{ prices['consultations'] }} {{ country === 'by' ? 'бел. руб' : (country === 'ru' ? 'рос. руб' : '') }} </strong>
                    </p>
                </div>
            </div>
            <h2 class="p-10 text-[36px] animate-slide-up">
                Вы по адрессу если...
            </h2>
            <div class="p-10 bg-[#F7F5F0]">
                <div class="flex stack-sm">
                    <div
                        class="flex-1 m-1 p-6 border text-black rounded-xl border-[white] bg-[white]"
                    >
                        <img
                            class="w-[80px] h-[80px] mb-7"
                            src="/assets/5-section/Rectangle-131.webp"
                        />
                        <p>
                            У вас ИП или самозанятость, но вы не хотите
                            разбираться в нюансах налогов
                        </p>
                    </div>
                    <div
                        class="flex-1 m-1 p-6 border text-black rounded-xl border-[white] bg-[white]"
                    >
                        <img
                            class="w-[80px] h-[80px] mb-7"
                            src="/assets/5-section/Rectangle-132.webp"
                        />
                        <p>
                            Вы ведете блог или подкаст и не знаете, как
                            правильно оформлять доход
                        </p>
                    </div>
                    <div
                        class="flex-1 m-1 p-6 border text-black rounded-xl border-[white] bg-[white]"
                    >
                        <img
                            class="w-[80px] h-[80px] mb-7"
                            src="/assets/5-section/Rectangle-133.webp"
                        />
                        <p>
                            Бухгалтер, с которым вы работали, был сложный,
                            строгий или просто «не ваш»
                        </p>
                    </div>
                </div>
                <div class="flex stack-sm">
                    <div
                        class="flex-1 m-1 p-6 border text-black rounded-xl border-[white] bg-[white]"
                    >
                        <img
                            class="w-[80px] h-[80px] mb-7"
                            src="/assets/5-section/Rectangle-137.webp"
                        />
                        <p>
                            Вы забываете о сроках сдачи отчетности — и каждый
                            квартал начинается с паники
                        </p>
                    </div>
                    <div
                        class="flex-1 m-1 p-6 border text-black rounded-xl border-[white] bg-[white]"
                    >
                        <img
                            class="w-[60px] h-[60px] mb-7"
                            src="/assets/5-section/Rectangle-138.webp"
                        />
                        <p>
                            Вы не понимаете, зачем вам ОКЭД, упрощенка и НДС, но
                            «все об этом говорят»
                        </p>
                    </div>
                    <div
                        class="flex-1 m-1 p-6 border text-black rounded-xl border-[white] bg-[white]"
                    >
                        <h2 class="text-[20px]">
                            <strong
                            >Если хоть один пункт про вас, оставьте это
                                нам!</strong
                            >
                        </h2>
                        <br/>
                        <div class="flex gap-2">
                            <p>
                                Всего два клика и Вы на консультации, в руках
                                профессионалов
                            </p>
                            <img
                                class="w-[80px] h-[80px]"
                                src="/assets/5-section/Rectangle-139.webp"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <h2 id="about_us" class="p-10 text-[36px] animate-slide-up">
                Ответственность — не просто слово
            </h2>

            <div  class="flex pl-10 pr-10 pt-10 gap-2 stack-sm">
                <div
                    class="flex-[3] flex gap-5 p-5 border text-black rounded-xl border-[#F7F5F0] bg-[#F7F5F0]"
                >
                    <div class="flex-[3]">
                        <h2 class="text-[24px] font-bold">
                            Общаемся на понятном языке
                        </h2>
                        <p>
                            Сложные бухгалтерские ситуации объясняем<br/>
                            на доступном языке, не используя термины <br/>
                            и бухгалтерский «сленг».
                        </p>
                    </div>
                    <div class="flex justify-center items-center">
                        <img
                            class="w-[80px] h-[80px]"
                            src="/assets/6-section/image%2018.webp"
                        />
                    </div>
                </div>
                <div
                    class="flex-[2] flex p-5 border rounded-xl border-[#292936] text-white bg-[#292936]"
                >
                    <div class="flex-[3]">
                        <h2 class="text-[24px] font-bold">
                            Работаем без задержек
                        </h2>
                        <p>
                            Мы оперативно отвечаем на вопросы, не исчезаем и не
                            задерживаем сроки, обеспечивая своевременную сдачу
                            отчетности.
                        </p>
                    </div>
                    <div class="flex justify-center items-center">
                        <img
                            class="w-[80px] h-[80px]"
                            src="/assets/6-section/image%2019.webp"
                        />
                    </div>
                </div>
            </div>
            <div class="flex pl-10 pr-10 pt-5 gap-2 stack-sm">
                <div
                    class="flex-[2] p-5 border rounded-xl border-[#292936] text-white bg-[#292936]"
                >
                    <div class="flex-[3]">
                        <h2 class="text-[24px] font-bold">Командная работа</h2>
                        <p>
                            В нашей компании каждый специалист <br/>
                            использует свои навыки и знания,<br/>
                            сотрудничая с коллегами и работая как <br/>
                            единая команда.
                        </p>
                    </div>
                </div>
                <div
                    class="flex-[3] flex p-5 border text-black rounded-xl border-[#F7F5F0] bg-[#F7F5F0]"
                >
                    <div class="flex-[3]">
                        <h2 class="text-[24px] font-bold">
                            Не уходим на больничный
                        </h2>
                        <p>
                            Даже если наш сотрудник заболеет или уйдет <br/>
                            в отпуск, работа не остановится благодаря <br/>
                            системе взаимозаменяемости <br/>
                            и делегированию задач.
                        </p>
                    </div>
                    <div class="flex justify-center items-center">
                        <img
                            class="w-[80px] h-[80px]"
                            src="/assets/6-section/image%2020.webp"
                        />
                    </div>
                </div>
            </div>
            <div
                class="ml-10 mr-10 mt-5 p-5 flex border rounded-xl border-[#292936] text-white bg-[#292936] feature-card"
            >
                <div class="flex-[3]">
                    <h2 class="text-[24px] font-bold">Индивидуальный подход</h2>
                    <p>
                        Мы обеспечиваем индивидуальный подход каждому клиенту,
                        поскольку предоставляем услуги как единоразово, так и на
                        условиях долгосрочного сотрудничества.
                    </p>
                </div>

                <img
                    class="w-[80px] h-[80px]"
                    src="/assets/6-section/image%2021.webp"
                />
            </div>

            <div class="bg-white p-6 md:p-10">
                <div class="flex flex-col md:flex-row justify-between items-start mb-8 md:mb-12">
                    <h2 class="text-2xl md:text-3xl font-bold mb-4 md:mb-0">Зачем платить больше?</h2>
                    <p class="text-base md:text-lg text-gray-600 md:text-right">
                        Наглядные выгоды передачи бухгалтерии на аутсорсинг
                    </p>
                </div>

                <div class="flex flex-col lg:flex-row gap-6 md:gap-8 items-stretch">
                    <!-- Левая колонка - Свой бухгалтер -->
                    <div
                        class="flex-1 flex flex-col lg:flex-row bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden">
                        <div class="lg:w-2/5">
                            <img
                                src="/assets/7-section/Rectangle%20140.webp"
                                alt="Свой бухгалтер"
                                class="w-full h-48 md:h-64 lg:h-full object-cover"
                            />
                        </div>
                        <div class="lg:w-3/5 p-4 md:p-6">
                            <h3 class="text-lg md:text-xl font-bold mb-4 md:mb-6 text-gray-800">СВОЙ БУХГАЛТЕР</h3>
                            <div class="space-y-0">
                                <div class="py-3 md:py-4">
                                    <p class="text-sm md:text-base text-gray-600">ЗАРПЛАТА "ЧИСТЫМИ"</p>
                                    <p class="font-bold text-black text-sm md:text-base mt-1">ОТ  {{ prices['thousand'] }} {{ country === 'by' ? 'BYN' : (country === 'ru' ? 'RUB' : '') }} + НАЛОГИ</p>
                                </div>
                                <div class="py-3 md:py-4 ">
                                    <p class="text-sm md:text-base text-gray-600">БОЛЬНИЧНЫЕ / ОТПУСК</p>
                                </div>
                                <div class="py-3 md:py-4 ">
                                    <p class="text-sm md:text-base text-gray-600">РИСКИ И ОТВЕТСТВЕННОСТЬ</p>
                                </div>
                                <div class="py-3 md:py-4">
                                    <p class="text-sm md:text-base text-gray-600">НАДО ИСКАТЬ / УВОЛЬНЯТЬ</p>
                                </div>
                                <div class="py-3 md:py-4">
                                    <p class="text-sm md:text-base text-gray-600">РАБОТАЕТ ПО СТАРИНКЕ</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Правая колонка - Блог Ин Тайм -->
                    <div
                        class="flex-1 flex flex-col lg:flex-row bg-white rounded-lg shadow-sm border border-gray-100 overflow-hidden">
                        <div class="lg:w-3/5 p-4 md:p-6 order-2 lg:order-1">
                            <h3 class="text-lg md:text-xl font-bold mb-4 md:mb-6 text-gray-800">БЛОГ ИН ТАЙМ</h3>
                            <div class="space-y-0">
                                <div class="py-3 md:py-4 ">
                                    <p class="font-bold text-black text-sm md:text-base">ОТ  {{ prices['first'] }} {{ country === 'by' ? 'BYN' : (country === 'ru' ? 'RUB' : '') }} В МЕСЯЦ</p>
                                </div>
                                <div class="py-3 md:py-4">
                                    <p class="text-sm md:text-base text-gray-600">ВСЕГДА НА СВЯЗИ</p>
                                </div>
                                <div class="py-3 md:py-4">
                                    <p class="text-sm md:text-base text-gray-600">БЕРЕМ НА СЕБЯ</p>
                                </div>
                                <div class="py-3 md:py-4">
                                    <p class="text-sm md:text-base text-gray-600">ПОДГОТОВЛЕННАЯ КОМАНДА</p>
                                </div>
                                <div class="py-3 md:py-4">
                                    <p class="text-sm md:text-base text-gray-600">АВТОМАТИЗАЦИЯ, ЦИФРОВОЙ
                                        ДОКУМЕНТООБОРОТ</p>
                                </div>
                            </div>
                        </div>
                        <div class="lg:w-2/5 order-1 lg:order-2">
                            <img
                                src="/assets/7-section/Rectangle%20141.webp"
                                alt="Блог Ин Тайм"
                                class="w-full h-48 md:h-64 lg:h-full object-cover"
                            />
                        </div>
                    </div>
                </div>
            </div>
            <div class="min-h-screen bg-[#F7F5F0] py-12 px-4 sm:px-6 lg:px-8">
                <div class="max-w-2xl mx-auto">
                    <div class="bg-white rounded-2xl shadow-lg overflow-hidden">
                        <!-- Заголовок -->
                        <div class="bg-[#292936] px-6 py-8">
                            <h2 class="text-2xl font-bold text-white text-center">Свяжитесь с нами</h2>
                            <p class="text-gray-200 text-center mt-2">Мы ответим вам в течение 24 часов</p>
                        </div>

                        <!-- Форма -->
                        <div id="form" class="px-6 py-8">
                            <form @submit.prevent="postForm" class="space-y-6">
                                <!-- Имя -->
                                <div>
                                    <label for="name" class="block text-sm font-medium text-gray-700 mb-2">Имя *</label>
                                    <input
                                        type="text"
                                        id="name"
                                        name="name"
                                        v-model="sendData.name"
                                        required
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#292936] focus:border-transparent transition-colors"
                                        placeholder="Ваше имя"
                                    >
                                </div>

                                <!-- Email -->
                                <div>
                                    <label for="email" class="block text-sm font-medium text-gray-700 mb-2">Email
                                        *</label>
                                    <input
                                        type="email"
                                        id="email"
                                        name="email"
                                        required
                                        v-model="sendData.email"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#292936] focus:border-transparent transition-colors"
                                        placeholder="your@email.com"
                                    >
                                </div>

                                <!-- Телефон -->
                                <div>
                                    <label for="phone"
                                           class="block text-sm font-medium text-gray-700 mb-2">Телефон</label>
                                    <input
                                        type="tel"
                                        id="phone"
                                        name="phone"
                                        v-model="sendData.phone"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#292936] focus:border-transparent transition-colors"
                                        placeholder="+375 (__) ___ __ __"
                                    >
                                </div>

                                <!-- Описание -->
                                <div>
                                    <label for="description" class="block text-sm font-medium text-gray-700 mb-2">Сообщение
                                        *</label>
                                    <textarea
                                        id="description"
                                        name="description"
                                        rows="4"
                                        required
                                        v-model="sendData.description"
                                        class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-[#292936] focus:border-transparent transition-colors resize-none"
                                        placeholder="Расскажите о вашем проекте или задайте вопрос..."
                                    ></textarea>
                                </div>


                                <div class="flex items-center mt-4">
                                    <label for="agree" class="text-sm text-gray-700">
                                        Нажимая на кнопку «Оставить заявку», вы соглашаетесь с
                                        <a href="/Политика_конфиденциальности.pdf" target="_blank" class="text-[#292936] underline">политикой конфиденциальности</a>
                                    </label>
                                </div>

                                <!-- Кнопка отправки -->
                                <div class="mt-4">
                                    <button
                                        type="submit"
                                        class="w-full bg-[#292936] text-white py-3 px-6 rounded-lg font-medium hover:bg-[#3a3a4a] transition-colors duration-200 transform hover:scale-105 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-[#292936]"
                                    >
                                        Оставить заявку
                                    </button>
                                </div>
                            </form>

                            <!-- Дополнительная информация -->
                            <div class="mt-6 text-center">
                                <p class="text-sm text-gray-600">
                                    или напишите нам в
                                    <a href="#" class="text-[#292936] hover:underline font-medium">Telegram</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
<!--        <section class="py-16" aria-labelledby="reviews-title">-->
<!--            <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">-->
<!--                <div class="mx-auto max-w-3xl text-center mb-10">-->
<!--                    <h2 id="reviews-title" class="text-3xl sm:text-4xl font-bold tracking-tight text-gray-900">-->
<!--                        Отзывы клиентов о нашей компании-->
<!--                    </h2>-->
<!--                    <p class="mt-3 text-gray-600">-->
<!--                        Профессиональные услуги в сфере юридического и бухгалтерского сопровождения бизнеса.-->
<!--                    </p>-->
<!--                </div>-->

<!--                <div class="relative" id="reviews-carousel">-->
<!--                    &lt;!&ndash; Лента карточек &ndash;&gt;-->
<!--                    <div-->
<!--                        class="flex gap-6 overflow-x-auto overscroll-smooth snap-x snap-mandatory pb-4 pt-2 px-1"-->
<!--                        role="region"-->
<!--                        aria-roledescription="carousel"-->
<!--                        aria-label="Отзывы клиентов"-->
<!--                        tabindex="0"-->
<!--                        data-carousel-track-->
<!--                    >-->
<!--                        &lt;!&ndash; Карточка 1 &ndash;&gt;-->
<!--                        <article id="reviews" class="snap-start shrink-0 w-[85%] sm:w-[60%] md:w-[45%] lg:w-[33%] xl:w-[28%] bg-white rounded-2xl shadow-sm ring-1 ring-gray-100 p-6">-->
<!--                            <div class="flex items-center gap-4">-->
<!--                                <img src="https://i.pravatar.cc/72?img=11" alt="Фото клиента" class="h-14 w-14 rounded-full object-cover" />-->
<!--                                <div>-->
<!--                                    <h3 class="font-semibold text-gray-900">Алексей П.</h3>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="mt-4 flex items-center gap-1 text-amber-500" aria-label="Рейтинг 5 из 5">-->
<!--                                &lt;!&ndash; 5 звёзд &ndash;&gt;-->
<!--                                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.967 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.379-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>-->
<!--                                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.967 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.379-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>-->
<!--                                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.967 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.379-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>-->
<!--                                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.967 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.379-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>-->
<!--                                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.967 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.379-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>-->
<!--                            </div>-->
<!--                            <p class="mt-4 text-gray-700">-->
<!--                                Получили комплексное юридическое сопровождение открытия филиала и настроили бухгалтерский учет. Всё четко по срокам и с детальными пояснениями.-->
<!--                            </p>-->
<!--                        </article>-->

<!--                        &lt;!&ndash; Карточка 2 &ndash;&gt;-->
<!--                        <article class="snap-start shrink-0 w-[85%] sm:w-[60%] md:w-[45%] lg:w-[33%] xl:w-[28%] bg-white rounded-2xl shadow-sm ring-1 ring-gray-100 p-6">-->
<!--                            <div class="flex items-center gap-4">-->
<!--                                <img src="https://i.pravatar.cc/72?img=32" alt="Фото клиента" class="h-14 w-14 rounded-full object-cover" />-->
<!--                                <div>-->
<!--                                    <h3 class="font-semibold text-gray-900">Мария С.</h3>-->
<!--                                    <p class="text-sm text-gray-500">Финансовый директор</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="mt-4 flex items-center gap-1 text-amber-500" aria-label="Рейтинг 4 из 5">-->
<!--                                &lt;!&ndash; 4.5 звезды (4 полных и одна наполовину) &ndash;&gt;-->
<!--                                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.967 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.379-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>-->
<!--                                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.967 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.379-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>-->
<!--                                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.967 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.379-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>-->
<!--                                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.967 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.379-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>-->
<!--                                &lt;!&ndash; половинка &ndash;&gt;-->
<!--                                <svg class="h-5 w-5" viewBox="0 0 20 20" aria-hidden="true">-->
<!--                                    <defs>-->
<!--                                        <linearGradient id="half">-->
<!--                                            <stop offset="50%" stop-color="currentColor" />-->
<!--                                            <stop offset="50%" stop-color="transparent" />-->
<!--                                        </linearGradient>-->
<!--                                    </defs>-->
<!--                                    <path fill="url(#half)" d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.967 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.379-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/>-->
<!--                                    <path fill="none" stroke="currentColor" stroke-opacity="0.15" d="M10 3.5l1 3.1a2.5 2.5 0 002.36 1.73h3.46l-2.8 2.03a2.5 2.5 0 00-.91 2.79l1.08 3.28-2.82-2.03a2.5 2.5 0 00-2.93 0l-2.82 2.03 1.08-3.28a2.5 2.5 0 00-.91-2.79L3.18 8.33h3.46A2.5 2.5 0 009 6.6L10 3.5z"/>-->
<!--                                </svg>-->
<!--                            </div>-->
<!--                            <p class="mt-4 text-gray-700">-->
<!--                                Настроили управленческую отчетность и помогли оптимизировать налогообложение. Команда оперативная и внимательная к деталям.-->
<!--                            </p>-->
<!--                        </article>-->

<!--                        &lt;!&ndash; Карточка 3 &ndash;&gt;-->
<!--                        <article class="snap-start shrink-0 w-[85%] sm:w-[60%] md:w-[45%] lg:w-[33%] xl:w-[28%] bg-white rounded-2xl shadow-sm ring-1 ring-gray-100 p-6">-->
<!--                            <div class="flex items-center gap-4">-->
<!--                                <img src="https://i.pravatar.cc/72?img=5" alt="Фото клиента" class="h-14 w-14 rounded-full object-cover" />-->
<!--                                <div>-->
<!--                                    <h3 class="font-semibold text-gray-900">Ирина К.</h3>-->
<!--                                    <p class="text-sm text-gray-500">ИП, e‑commerce</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="mt-4 flex items-center gap-1 text-amber-500" aria-label="Рейтинг 5 из 5">-->
<!--                                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.967 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.379-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>-->
<!--                                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.967 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.379-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>-->
<!--                                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.967 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.379-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>-->
<!--                                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.967 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.379-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>-->
<!--                                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.967 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.379-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>-->
<!--                            </div>-->
<!--                            <p class="mt-4 text-gray-700">-->
<!--                                Помогли с регистрацией товарного знака и сопровождением камеральной проверки. Всё объяснили простыми словами.-->
<!--                            </p>-->
<!--                        </article>-->

<!--                        &lt;!&ndash; Карточка 4 &ndash;&gt;-->
<!--                        <article class="snap-start shrink-0 w-[85%] sm:w-[60%] md:w-[45%] lg:w-[33%] xl:w-[28%] bg-white rounded-2xl shadow-sm ring-1 ring-gray-100 p-6">-->
<!--                            <div class="flex items-center gap-4">-->
<!--                                <img src="https://i.pravatar.cc/72?img=22" alt="Фото клиента" class="h-14 w-14 rounded-full object-cover" />-->
<!--                                <div>-->
<!--                                    <h3 class="font-semibold text-gray-900">Дмитрий Р.</h3>-->
<!--                                    <p class="text-sm text-gray-500">Управляющий партнёр</p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="mt-4 flex items-center gap-1 text-amber-500" aria-label="Рейтинг 5 из 5">-->
<!--                                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.967 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.379-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>-->
<!--                                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.967 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.379-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>-->
<!--                                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.967 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.379-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>-->
<!--                                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.967 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.379-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>-->
<!--                                <svg class="h-5 w-5 fill-current" viewBox="0 0 20 20" aria-hidden="true"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.967 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.379-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>-->
<!--                            </div>-->
<!--                            <p class="mt-4 text-gray-700">-->
<!--                                Регулярно ведут бухгалтерию и готовят отчётность. Вопросы решаются заранее, без авралов.-->
<!--                            </p>-->
<!--                        </article>-->

<!--                        &lt;!&ndash; Можно добавить больше карточек по аналогии &ndash;&gt;-->
<!--                    </div>-->

<!--                    &lt;!&ndash; Кнопки управления &ndash;&gt;-->
<!--                    <div class="pointer-events-none absolute inset-y-0 left-0 right-0 flex items-center justify-between px-1">-->
<!--                        <button-->
<!--                            type="button"-->
<!--                            class="pointer-events-auto inline-flex items-center justify-center h-10 w-10 rounded-full bg-white/90 shadow ring-1 ring-black/5 hover:bg-white focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-500"-->
<!--                            aria-label="Предыдущий отзыв"-->
<!--                            data-carousel-prev-->
<!--                        >-->
<!--                            <svg class="h-5 w-5 text-gray-700" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M12.707 15.707a1 1 0 01-1.414 0l-5-5a1 1 0 010-1.414l5-5a1 1 0 111.414 1.414L8.414 10l4.293 4.293a1 1 0 010 1.414z" clip-rule="evenodd"/></svg>-->
<!--                        </button>-->
<!--                        <button-->
<!--                            type="button"-->
<!--                            class="pointer-events-auto inline-flex items-center justify-center h-10 w-10 rounded-full bg-white/90 shadow ring-1 ring-black/5 hover:bg-white focus:outline-none focus-visible:ring-2 focus-visible:ring-amber-500"-->
<!--                            aria-label="Следующий отзыв"-->
<!--                            data-carousel-next-->
<!--                        >-->
<!--                            <svg class="h-5 w-5 text-gray-700" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true"><path fill-rule="evenodd" d="M7.293 4.293a1 1 0 011.414 0l5 5a1 1 0 010 1.414l-5 5a1 1 0 01-1.414-1.414L10.586 10 7.293 6.707a1 1 0 010-1.414z" clip-rule="evenodd"/></svg>-->
<!--                        </button>-->
<!--                    </div>-->

<!--                    &lt;!&ndash; Индикаторы страниц (по желанию можно скрыть) &ndash;&gt;-->
<!--                    <div class="mt-6 flex justify-center gap-2" data-carousel-dots></div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!--        &lt;!&ndash; Модалка выбора страны &ndash;&gt;-->
        <div v-if="showCountryModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white p-6 rounded-lg shadow-lg w-[300px] text-center">
                <h2 class="text-xl mb-4">Выберите страну</h2>
                <div class="flex flex-col gap-3">
                    <button @click="setCountry('by')" class="bg-blue-500 text-white py-2 rounded hover:bg-blue-600">
                        Беларусь
                    </button>
                    <button @click="setCountry('ru')" class="bg-red-500 text-white py-2 rounded hover:bg-red-600">
                        Россия
                    </button>
                </div>
            </div>
        </div>

    </div>

</template>
<script>
import MainLayout from "@/Layouts/MainLayout.vue";
import axios from 'axios'
(function () {
    const root = document.getElementById('reviews-carousel');
    if (!root) return;
    const track = root.querySelector('[data-carousel-track]');
    const prevBtn = root.querySelector('[data-carousel-prev]');
    const nextBtn = root.querySelector('[data-carousel-next]');
    const dotsWrap = root.querySelector('[data-carousel-dots]');

    if (!track || !prevBtn || !nextBtn) return;

    // Считаем ширину одного слайда как первую карточку + gap
    function getSlideWidth() {
        const firstCard = track.querySelector('article');
        if (!firstCard) return track.clientWidth;
        const style = window.getComputedStyle(track);
        const gap = parseFloat(style.columnGap || style.gap || '0');
        return firstCard.getBoundingClientRect().width + gap;
    }

    function scrollBySlides(dir) {
        const w = getSlideWidth();
        track.scrollBy({ left: dir * w, behavior: 'smooth' });
    }

    prevBtn.addEventListener('click', () => scrollBySlides(-1));
    nextBtn.addEventListener('click', () => scrollBySlides(1));

    // Клавиатура
    track.addEventListener('keydown', (e) => {
        if (e.key === 'ArrowLeft') scrollBySlides(-1);
        if (e.key === 'ArrowRight') scrollBySlides(1);
    });

    // Тач‑жесты
    let startX = 0;
    let isDown = false;
    track.addEventListener('pointerdown', (e) => {
        isDown = true; startX = e.clientX; track.setPointerCapture(e.pointerId);
    });
    track.addEventListener('pointerup', (e) => {
        if (!isDown) return; isDown = false; const dx = e.clientX - startX;
        if (Math.abs(dx) > 30) scrollBySlides(dx > 0 ? -1 : 1);
    });

    // Индикаторы страниц по количеству видимых областей
    function buildDots() {
        if (!dotsWrap) return;
        dotsWrap.innerHTML = '';
        const cards = Array.from(track.querySelectorAll('article'));
        const cardWidth = cards[0]?.getBoundingClientRect().width || 1;
        const visible = Math.max(1, Math.floor(track.clientWidth / cardWidth));
        const pages = Math.max(1, cards.length - visible + 1);
        for (let i = 0; i < pages; i++) {
            const btn = document.createElement('button');
            btn.type = 'button';
            btn.className = 'h-2.5 w-2.5 rounded-full bg-gray-300 aria-[current=page]:bg-amber-500 transition-colors';
            btn.setAttribute('aria-label', `Страница ${i + 1}`);
            btn.addEventListener('click', () => {
                const w = getSlideWidth();
                track.scrollTo({ left: i * w, behavior: 'smooth' });
            });
            dotsWrap.appendChild(btn);
        }
        updateDots();
    }

    function updateDots() {
        if (!dotsWrap) return;
        const buttons = Array.from(dotsWrap.children);
        const w = getSlideWidth();
        const page = Math.round(track.scrollLeft / Math.max(1, w));
        buttons.forEach((b, i) => b.setAttribute('aria-current', i === page ? 'page' : 'false'));
    }

    track.addEventListener('scroll', () => {
        // Троттлинг не обязателен, событий немного
        updateDots();
    });

    const ro = new ResizeObserver(() => buildDots());
    ro.observe(track);
    buildDots();
})();
export default {
    name: "Welcome",
    layout: MainLayout,
    props:{
        country:String,
        prices:Array,
    },
    data() {
        return {
            sendData: {
                name: '',
                email: '',
                phone: '',
                description: ''
            },
            showCountryModal: !this.$page.props.hasCountryCookie
        }
    },
    methods: {
        postForm() {
            axios.post(route('send.worm'), this.sendData)
                .then(res => {
                    alert('Форма успешно отправлена')
                })
                .catch(error=>{
                    alert('При отправке формы произошла ошибка')
            })
        },
        setCountry(country) {
            axios.post(route('set-country'), { country })
                .then(() => {
                    this.showCountryModal = false
                    location.reload() // перезагружаем, чтобы Inertia подхватила новые цены
                })
        }
    }

};
</script>

<style src="../../css/first-section.css"></style>
