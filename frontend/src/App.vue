<script setup>
import Sidebar from './components/Sidebar.vue';
import Navbar from './components/Navbar.vue';
// import changeTheme from './components/changeTheme.vue';
import { ref } from 'vue';

const isSidebarOpen = ref(false);

function handleSidebarToggle(status) {
  isSidebarOpen.value = status; // Status sidebar diterima di sini
}
</script>

<template>
  <div id="app">
    <Navbar />
    <!-- <changeTheme /> -->
    <Sidebar @toggleSidebar="handleSidebarToggle" />
    <div :class="{ 'content-with-sidebar': isSidebarOpen, 'content-full': !isSidebarOpen }">
      <router-view /> <!-- Render konten sesuai route di sini -->
    </div>
  </div>
</template>

<style scoped>
.content-full {
  margin-left: 0;
  transition: margin-left 0.3s ease;
}

.content-with-sidebar {
  margin-left: 15%;
  /* Lebar sidebar */
  transition: margin-left 0.3s ease;
}

.content {
  max-width: 1910px;
  width: 100%;
  margin-left: auto;
  margin-right: auto;
}
</style>
