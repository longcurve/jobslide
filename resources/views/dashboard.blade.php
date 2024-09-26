<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 border-2">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    Welcome to JobSlide! 
                </div>
                <div id="app" class="p-6 my-2"> <!-- "app" ID is handle for VueJS -->
                    <fwb-accordion>
                        <fwb-accordion-panel>
                        <fwb-accordion-header class="bg-amber-50 px-4 py-2 mx-2 my-2 block max-w-xl">header</fwb-accordion-header>
                        <fwb-accordion-content class="my-2 mx-2 block py-2">
                            <div>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">
                                Flowbite is an open-source library of interactive components built on top of Tailwind CSS including buttons, dropdowns, modals, navbars, and more.
                            </p>
                            <p class="text-gray-500 dark:text-gray-400">
                                Check out this guide to learn how to <a class="text-blue-600 dark:text-blue-500 hover:underline" href="/docs/getting-started/introduction/">get started</a> and start developing websites even faster with components on top of Tailwind CSS.
                            </p>
                            </div>
                        </fwb-accordion-content>
                        </fwb-accordion-panel>
                        <fwb-accordion-panel>
                        <fwb-accordion-header class="bg-amber-50 px-4 py-2">another header</fwb-accordion-header>
                        <fwb-accordion-content>
                            <div>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">
                                Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.
                            </p>
                            <p class="text-gray-500 dark:text-gray-400">
                                Check out the <a class="text-blue-600 dark:text-blue-500 hover:underline" href="https://flowbite.com/figma/">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.
                            </p>
                            </div>
                        </fwb-accordion-content>
                        </fwb-accordion-panel>
                        <fwb-accordion-panel>
                        <fwb-accordion-header class="bg-amber-50 px-4 py-2">and one more header</fwb-accordion-header>
                        <fwb-accordion-content>
                            <div>
                            <p class="mb-2 text-gray-500 dark:text-gray-400">
                                Flowbite is first conceptualized and designed using the Figma software so everything you see in the library has a design equivalent in our Figma file.
                            </p>
                            <p class="text-gray-500 dark:text-gray-400">
                                Check out the <a class="text-blue-600 dark:text-blue-500 hover:underline" href="https://flowbite.com/figma/">Figma design system</a> based on the utility classes from Tailwind CSS and components from Flowbite.
                            </p>
                            </div>
                        </fwb-accordion-content>
                        </fwb-accordion-panel>
                    </fwb-accordion>
                    </div>
            </div>
        </div>
    </div>
</x-app-layout>
