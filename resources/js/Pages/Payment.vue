
<template>
    <div class="bg-gray-100 p-10 payment">
    <div class=" bg-white shadow-lg rounded-lg overflow-hidden">
        <div class="bg-[#F7F5F0] p-5">
            <h1 class="text-2xl font-bold text-black mb-2">ООО «Блог ин тайм»</h1>
            <p class="text-gray-700">Юридический и почтовый адрес:</p>
            <p class="text-gray-700">222365, Минская область Воложинский район Раковский сельсовет аг. Раков пер. Свободы 2А пом. 17</p>
            <p class="text-gray-700">УНП 193848818</p>
            <p class="text-gray-700">Тел. моб. +375 25 690 28 23</p>
            <p class="text-gray-700">E-mail: <a href="mailto:blogtime.chat@gmail.com" class="text-blue-500">blogtime.chat@gmail.com</a></p>
        </div>
        <div class="p-5">
            <h2 class="text-xl font-semibold text-black mb-3">Реквизиты</h2>
            <p class="text-gray-700">Текущий (расчетный) счет: <strong>BY60 ALFA 3012 2G53 8100 1027 0000</strong> в BYN</p>
            <p class="text-gray-700">Реквизиты банка: ЗАО "АЛЬФА-БАНК", SWIFT ALFABY2X, УНП 101541947</p>
            <p class="text-gray-700">Юридический адрес банка: 222365, Минская область Воложинский район Раковский сельсовет аг. Раков пер. Свободы 2А пом. 17</p>
        </div>
        <div class="bg-[#F7F5F0] p-5">
            <h2 class="text-xl font-semibold text-black mb-3">Оплата с карты АЛЬФА-БАНК</h2>
            <p class="text-gray-700">Перевод – По номеру счета человеку или организации в Беларуси – внести реквизиты.</p>
            <p class="text-gray-700">У других банков обычно Произвольный платеж – также внести реквизиты.</p>
            <p class="text-gray-700">КОД назначения платежа: <strong>22001</strong></p>
            <p class="text-gray-700">В назначении можно указать – консультация бухгалтера или бухгалтерская услуга.</p>
        </div>
    </div>
    </div>
</template>
<script >
    import MainLayout from "@/Layouts/MainLayout.vue";

    export default {
        name: "Pay",
        layout: MainLayout,
        props:{
            country:String,
        },
    }

</script>
<style scoped>
    .payment{
        margin-top: 50px
    }
    @media (max-width: 450px) {
        .payment{
            margin-top: 0 !important;
        }
    }
</style>
