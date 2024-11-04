<!-- src/components/Sidebar.vue -->
<template>
    <div class="sidebar">
        <ul>
            <li><router-link to="/">Home</router-link></li>
            <li><router-link to="/about">About</router-link></li>
            <li><router-link to="/contact">Contact</router-link></li>
            <!-- Tambahkan link sesuai kebutuhan -->
        </ul>
    </div>
</template>

<script>
export default {
    name: 'Sidebar'
}
</script>

<style scoped>
/* Tambahkan gaya CSS untuk sidebar */
.sidebar {
    width: 250px;
    height: 100vh;
    background-color: #333;
    color: #fff;
    padding: 20px;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
}

.sidebar ul li {
    margin: 10px 0;
}

.sidebar ul li a {
    color: #fff;
    text-decoration: none;
}
</style>
