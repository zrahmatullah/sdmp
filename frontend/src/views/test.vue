<template>
    <div>
        <h1>Data Pegawai</h1>
        <DataTable :value="data" paginator rows="10" :rowsPerPageOptions="[5, 10, 25]" dataKey="id">
            <Column field="namaPegawai" header="Nama Pegawai"></Column>
            <Column field="email" header="Email"></Column>
            <Column field="noTelepon" header="No Telepon"></Column>
            <Column field="alamat" header="Alamat"></Column>
            <Column field="tglLahir" header="Tanggal Lahir"></Column>
            <Column field="tglGabung" header="Tanggal Gabung"></Column>
            <Column field="jabatan_id" header="Jabatan ID"></Column>
            <Column field="departemen_id" header="Departemen ID"></Column>
        </DataTable>
    </div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import apiClient from '../services/apiService';


const data = ref([]);

const fetchData = async () => {
    try {
        const response = await apiClient.get('/api/pegawai');
        data.value = response.data; // Pastikan data yang diterima sesuai dengan format yang diharapkan
        console.log(data.value);
    } catch (error) {
        console.error('Error loading data:', error);
    }
};

onMounted(() => {
    fetchData();
});
</script>