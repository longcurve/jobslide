<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

function handleImageError() {
    document.getElementById('screenshot-container')?.classList.add('!hidden');
    document.getElementById('docs-card')?.classList.add('!row-span-1');
    document.getElementById('docs-card-content')?.classList.add('!flex-row');
    document.getElementById('background')?.classList.add('!hidden');
}
</script>

<template>
    <Head title="Welcome" />
    <div class="bg-gray-50 text-black/50 dark:bg-black dark:text-white/50">
  <div
    class="relative flex min-h-screen flex-col items-center selection:bg-[#FF2D20] selection:text-white"
  >
    <div class="relative w-full max-w-2xl px-6 lg:max-w-7xl">
      <header class="grid grid-cols-2 items-center gap-2 py-10 lg:grid-cols-3">
        <div class="text-center font-extrabold block">
          <div class="flex lg:col-start-2 lg:justify-center">
            <img src="/jobslide-logo.png" />
          </div>
        </div>
        <nav v-if="canLogin" class="-mx-3 flex flex-1 justify-end">
          <a
            v-if="$page.props.auth.user"
            :href="route('dashboard')"
            class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
          >
            Dashboard
          </a>
          <template v-else>
            <a
              :href="route('login')"
              class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            >
              Log in
            </a>
            <a
              v-if="canRegister"
              :href="route('register')"
              class="rounded-md px-3 py-2 text-black ring-1 ring-transparent transition hover:text-black/70 focus:outline-none focus-visible:ring-[#FF2D20] dark:text-white dark:hover:text-white/80 dark:focus-visible:ring-white"
            >
              Register
            </a>
          </template>
        </nav>
      </header>

      <main class="mt-6">
        <div class="grid gap-6 lg:grid-col lg:gap-8">
          <div class="grid grid-cols-2 ml-20">
            <div class="bg-blue-50 mx-4 my-4 p-4 border-rounded border-2">
            Welcome to <i>JobSlide, Job Application Tracker</i>!
            </div>
            <div class="bg-cyan-50 mx-4 my-4 p-4 border-rounded border-2">
            <b>Track your applications' information such as:</b>
            
            <ul>
            <li><i>Application Date</i></li>
            <li><i>Position Applied For</i></li>
            <li><i>Company of interest</i></li>
            <li><i>Follow-up Calls</i></li>
            <li><i>Interviews</i></li>
            </ul>
            </div>
          </div>
        </div>
      </main>
      <footer class="py-16 text-center text-sm text-black dark:text-white/70">
        Laravel v{{ laravelVersion }} (PHP v{{ phpVersion }})
      </footer>
    </div>
  </div>
</div>
</template>
