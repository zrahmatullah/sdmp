<template>
  <div class="card">
    <TreeTable :value="nodes" tableStyle="min-width: 50rem">
      <template #header>
        <div class="text-xl font-bold">Data Pegawai</div>
      </template>
      <Column
        field="idPegawai"
        header="Kode Pegawai"
        expander
        style="width: 250px"
      ></Column>
      <Column
        field="namaPegawai"
        header="Nama Pegawai"
        expander
        style="width: 250px"
      ></Column>
      <Column
        field="jabatan"
        header="Jabatan"
        expander
        style="width: 250px"
      ></Column>
      <Column
        field="tglMasuk"
        header="Tanggal Masuk"
        expander
        style="width: 250px"
      ></Column>
      <Column
        field="tglKontrak"
        header="Tanggal Kontrak"
        expander
        style="width: 250px"
      ></Column>
      <!-- <Column style="width: 10rem">
        <template #body>
          <div class="flex flex-wrap gap-2">
            <Button type="button" icon="pi pi-search" rounded />
            <Button
              type="button"
              icon="pi pi-pencil"
              rounded
              severity="success"
            />
          </div>
        </template>
      </Column> -->
      <!-- <template #footer>
        <div class="flex justify-start">
          <Button icon="pi pi-refresh" label="Reload" severity="warn" />
        </div>
      </template> -->
    </TreeTable>
  </div>
</template>

<script setup>
import { ref, onMounted } from "vue";
import { FilterMatchMode } from "primevue/api";
import { useToast } from "primevue/usetoast";
import { ProductService } from "../../services/ProductService";
import apiClient from "../../services/apiService";
</script>
../services/ProductService
