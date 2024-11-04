<script>
import Sidebar from './components/Sidebar.vue';

export default {
  name: 'App',
  components: {
    Sidebar
  }
}
</script>

<template>
  <div id="app">
    <Sidebar /> <!-- Tambahkan komponen Sidebar di sini -->
    <div class="content">
      <router-view /> <!-- Render konten sesuai route di sini -->
    </div>
  </div>
</template>

<style scoped></style>
