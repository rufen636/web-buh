<script setup>
import { Head, usePage } from '@inertiajs/vue3';
import { computed } from 'vue';

const page = usePage();
// Inertia serializes title strings as HTML, including the title prop.
const title = computed(() => page.props.seo.title
    .replaceAll('&', '&amp;')
    .replaceAll('<', '&lt;')
    .replaceAll('>', '&gt;'));
</script>

<template>
    <Head :title="title">
        <meta head-key="description" name="description" :content="page.props.seo.description" />
        <link head-key="canonical" rel="canonical" :href="page.props.seo.canonical" />
        <meta head-key="robots" name="robots" :content="page.props.seo.robots" />
    </Head>
</template>
