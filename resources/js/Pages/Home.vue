<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({

});
</script>

<template>
    <Head title="Social Media Website" />

     <AuthenticatedLayout>
    <div class="grid lg:grid-cols-12 gap-3 p-4 h-full">

      <!-- Left Sidebar -->
      <div class="lg:col-span-3 lg:order-1 h-full overflow-hidden p-4 bg-gray-100 rounded-2xl">
        <h2 class="font-bold mb-2">Groups</h2>
        <ul class="space-y-2">
          <li class="p-2 bg-white rounded shadow">Group 1</li>
          <li class="p-2 bg-white rounded shadow">Group 2</li>
          <li class="p-2 bg-white rounded shadow">Group 3</li>
        </ul>
      </div>

      <!-- Right Sidebar -->
      <div class="lg:col-span-3 lg:order-3 h-full overflow-hidden p-4 bg-gray-100 rounded-2xl">
        <h2 class="font-bold mb-2">Following</h2>
        <ul class="space-y-2">
          <li class="p-2 bg-white rounded shadow">User A</li>
          <li class="p-2 bg-white rounded shadow">User B</li>
          <li class="p-2 bg-white rounded shadow">User C</li>
        </ul>
      </div>

      <!-- Main Content -->
      <div class="lg:col-span-6 lg:order-2 h-full overflow-hidden flex flex-col space-y-4">
        <!-- Create Post -->
        <div class="p-4 bg-white rounded-2xl shadow">
          <h2 class="font-bold mb-2">Create Post</h2>
          <textarea class="w-full border rounded p-2" placeholder="What's on your mind?"></textarea>
          <button class="mt-2 px-4 py-2 bg-blue-500 text-white rounded">Post</button>
        </div>

        <!-- Posts -->
        <div class="flex-1 space-y-4">
          <div class="p-4 bg-white rounded-2xl shadow">
            <h3 class="font-bold">User A</h3>
            <p>Hello world! This is my first post 🚀</p>
          </div>
          <div class="p-4 bg-white rounded-2xl shadow">
            <h3 class="font-bold">User B</h3>
            <p>Enjoying the sunny day 🌞</p>
          </div>
          <div class="p-4 bg-white rounded-2xl shadow">
            <h3 class="font-bold">User C</h3>
            <p>Working on my Laravel project 💻</p>
          </div>
        </div>
      </div>
    </div>
  </AuthenticatedLayout>

</template>

<style>

</style>
