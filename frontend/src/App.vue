<script setup>
import Sidebar from './components/Sidebar.vue';
import Navbar from './components/Navbar.vue';
// import changeTheme from './components/changeTheme.vue';
</script>

<template>
  <div id="app">

    <Navbar />
    <!-- <changeTheme /> -->
    <Sidebar />
    <div class="content">
      <router-view /> <!-- Render konten sesuai route di sini -->
    </div>
  </div>
</template>

<style scoped></style>
