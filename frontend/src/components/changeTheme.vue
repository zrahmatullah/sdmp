<template>
    <div>
        <p-dropdown v-model="selectedTheme" :options="themes" optionLabel="label" @change="changeTheme"
            placeholder="Pilih Tema" />
    </div>
</template>

<script>
import { ref } from 'vue';

export default {
    name: 'ThemeSwitcher',
    setup() {
        const themes = [
            { label: 'Saga Blue', value: 'saga-blue' },
            { label: 'Vela Green', value: 'vela-green' },
            { label: 'Arya Orange', value: 'arya-orange' },
            // Tambahkan tema lainnya di sini
        ];

        const selectedTheme = ref('saga-blue'); // Tema default

        const changeTheme = () => {
            const themeLink = document.getElementById('theme-css');
            themeLink.href = `https://cdn.jsdelivr.net/npm/primevue/resources/themes/${selectedTheme.value}/theme.css`;
        };

        return { themes, selectedTheme, changeTheme };
    },
};
</script>
