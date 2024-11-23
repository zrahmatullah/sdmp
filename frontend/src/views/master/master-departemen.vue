<template>
  <div class="card">
    <TreeTable :value="nodes" tableStyle="min-width: 50rem">
      <template #header>
        <div class="text-xl font-bold">Departemen</div>
      </template>
      <Column
        field="idDepartemen"
        header="Kode Departemen"
        expander
        style="width: 250px"
      ></Column>
      <Column
        field="namaDepartemen"
        header="Nama Departemen"
        expander
        style="width: 250px"
      ></Column>
      <Column
        field="valuePegawai"
        header="Jumlah Pegawai"
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
