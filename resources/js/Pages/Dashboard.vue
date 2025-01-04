<script setup>
import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout.vue';
import { Head } from '@inertiajs/vue3';
import Applications from '../Components/Applications.vue';

    const accordionElement = document.getElementById('accordion-example');

    // create an array of objects with the id, trigger element (eg. button), and the content element
    const accordionItems = [
        {
            id: 'accordion-example-heading-1',
            triggerEl: document.querySelector('#accordion-example-heading-1'),
            targetEl: document.querySelector('#accordion-example-body-1'),
            active: true
        },
        {
            id: 'accordion-example-heading-2',
            triggerEl: document.querySelector('#accordion-example-heading-2'),
            targetEl: document.querySelector('#accordion-example-body-2'),
            active: false
        },
        {
            id: 'accordion-example-heading-3',
            triggerEl: document.querySelector('#accordion-example-heading-3'),
            targetEl: document.querySelector('#accordion-example-body-3'),
            active: false
        }
    ];

    // options with default values
    const options = {
        alwaysOpen: true,
        activeClasses: 'bg-gray-100 dark:bg-gray-800 text-gray-900 dark:text-white',
        inactiveClasses: 'text-gray-500 dark:text-gray-400',
        onOpen: (item) => {
            accordionElement.open(item);
            console.log('accordion item has been shown');
            console.log(item);
        },
        onClose: (item) => {
            accordionElement.close(item);
            console.log('accordion item has been hidden');
            console.log(item);
        },
        onToggle: (item) => {
            console.log('accordion item has been toggled');
            console.log(item);
        },
    };

    // instance options object
    const instanceOptions = {
        id: 'accordion-example',
        override: true
    };
</script>

<template>
    <Head title="Dashboard" />

    <AuthenticatedLayout>
        <template #header>
            <h2 class="text-xl font-semibold leading-tight text-gray-800">
                Dashboard
            </h2>
        </template>

        <div id="applications">
        <div class="py-12">
            <div class="mx-auto max-w-7xl sm:px-6 lg:px-8">
                <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        <p>Applications</p>
                    <Applications /> <!-- Vue Accordion from scratch -->
                    </div>
                </div>
            </div>
        </div>
        </div><!-- End applications div -->
    </AuthenticatedLayout>
</template>
