<template>
  <div>
    <div class="card">
      <!-- Tambah Data -->
      <Toolbar class="mb-4">
        <template #start>
          <Button
            label="New"
            icon="pi pi-plus"
            severity="success"
            class="mr-2"
            @click="openNew"
          />
          <Button
            label="Delete"
            icon="pi pi-trash"
            severity="danger"
            @click="confirmDeleteSelected"
            :disabled="!selectedProducts || !selectedProducts.length"
          />
        </template>

        <!-- Hapus Data -->
        <template #end>
          <FileUpload
            mode="basic"
            accept="image/*"
            :maxFileSize="1000000"
            label="Import"
            chooseLabel="Import"
            class="mr-2 inline-block"
          />
          <Button
            label="Export"
            icon="pi pi-upload"
            severity="help"
            @click="exportCSV($event)"
          />
        </template>
      </Toolbar>

      <DataTable
        ref="dt"
        :value="listdata"
        v-model:selection="selectedProducts"
        dataKey="id"
        :first="first.value"
        @page="onPageChange"
        :paginator="true"
        :rows="10"
        :filters="filters"
        paginatorTemplate="FirstPageLink PrevPageLink PageLinks NextPageLink LastPageLink CurrentPageReport RowsPerPageDropdown"
        :rowsPerPageOptions="[5, 10, 25]"
        currentPageReportTemplate="Showing {first} to {last} of {totalRecords} products"
      >
        <template #header>
          <div
            class="flex flex-wrap gap-2 align-items-center justify-content-between"
          >
            <h4 class="m-0">Data Pegawai</h4>
            <IconField iconPosition="left">
              <InputIcon>
                <i class="pi pi-search" />
              </InputIcon>
              <InputText
                v-model="filters['global'].value"
                placeholder="Search..."
              />
            </IconField>
          </div>
        </template>

        <Column
          selectionMode="multiple"
          style="width: 3rem"
          :exportable="false"
        ></Column>
        <Column header="No" style="width: 5rem">
          <template #body="slotProps">
            {{ slotProps.index + first + 1 }}
          </template>
        </Column>
        <Column
          field="namaPegawai"
          header="Nama Lengkap"
          sortable
          style="min-width: 12rem"
        ></Column>
        <Column
          field="email"
          header="Email"
          sortable
          style="min-width: 16rem"
        ></Column>
        <Column header="Image">
          <template #body="slotProps">
            <img
              :src="slotProps.data.foto"
              :alt="slotProps.data.namaPegawai"
              class="border-round"
              style="width: 100px; height: 100px; object-fit: cover"
            />
          </template>
        </Column>
        <Column
          field="noTelepon"
          header="No Telepon"
          sortable
          style="min-width: 8rem"
        ></Column>
        <Column
          field="tglLahir"
          header="Tgl Lahir"
          sortable
          style="min-width: 10rem"
        ></Column>
        <Column
          field="tglGabung"
          header="Tgl Gabung"
          sortable
          style="min-width: 10rem"
        ></Column>
        <Column
          field="namaJabatan"
          header="Jabatan"
          sortable
          style="min-width: 12rem"
        ></Column>
        <Column
          field="namaDepartemen"
          header="Departemen"
          sortable
          style="min-width: 12rem"
        ></Column>
        <Column :exportable="false" style="min-width: 8rem">
          <template #body="slotProps">
            <Button
              icon="pi pi-pencil"
              outlined
              rounded
              class="mr-2"
              @click="editProduct(slotProps.data)"
            />
            <Button
              icon="pi pi-trash"
              outlined
              rounded
              severity="danger"
              @click="confirmDeleteProduct(slotProps.data)"
            />
          </template>
        </Column>
      </DataTable>
    </div>

    <!-- CREATE DATA -->
    <Dialog
      v-model:visible="productDialog"
      :style="{ width: '1050px' }"
      header="Nama Pegawai"
      :modal="true"
      class="p-fluid"
    >
      <div class="formgrid grid">
        <div class="field col">
          <label for="name">Nama Lengkap</label>
          <InputText
            id="name"
            v-model.trim="data.namaPegawai"
            required="true"
            autofocus
            :invalid="submitted && !data.namaPegawai"
          />
          <small class="p-error" v-if="submitted && !data.namaPegawai"
            >Nama Lengkap diperlukan.</small
          >
        </div>
        <div class="field col">
          <label for="email">Email</label>
          <InputText
            id="email"
            v-model="data.email"
            required="true"
            :invalid="submitted && !data.email"
          />
          <small class="p-error" v-if="submitted && !data.email"
            >Email diperlukan.</small
          >
        </div>
        <div class="field col">
          <label for="noHp">No Handphone</label>
          <InputText
            id="noHp"
            v-model="data.noHp"
            required="true"
            :invalid="submitted && !data.noHp"
          />
          <small class="p-error" v-if="submitted && !data.noHp"
            >No Handphone diperlukan.</small
          >
        </div>
      </div>
      <div class="formgrid grid">
        <div class="field col">
          <label for="tglLahir">Tanggal Lahir</label>
          <Calendar
            v-model="tglLahir"
            showIcon
            placeholder="Pilih Tanggal Lahir"
            :invalid="submitted && !tglLahir"
            dateFormat="dd/mm/yy"
          />
          <small class="p-error" v-if="submitted && !tglLahir"
            >Tanggal Lahir diperlukan.</small
          >
        </div>
        <div class="field col">
          <label for="tglGabung">Tanggal Gabung</label>
          <Calendar
            v-model="tglGabung"
            showIcon
            placeholder="Pilih Tanggal Gabung"
            :invalid="submitted && !tglGabung"
            dateFormat="dd/mm/yy"
          />
          <small class="p-error" v-if="submitted && !tglGabung"
            >Tanggal Gabung diperlukan.</small
          >
        </div>
      </div>
      <div class="field">
        <label for="alamat">Alamat</label>
        <Textarea
          id="alamat"
          v-model.trim="data.alamat"
          rows="5"
          cols="30"
          :invalid="submitted && !data.alamat"
        />
        <small class="p-error" v-if="submitted && !data.alamat"
          >Alamat diperlukan.</small
        >
      </div>
      <div class="formgrid grid">
        <div class="field col">
          <label for="jabatan">Jabatan</label>
          <Dropdown
            id="jabatan"
            v-model="data.jabatan"
            :options="jabatanData"
            optionLabel="label"
            optionValue="value"
            placeholder="Pilih Jabatan"
            :invalid="submitted && !data.jabatan"
          />
          <small class="p-error" v-if="submitted && !data.jabatan"
            >Jabatan diperlukan.</small
          >
        </div>
        <div class="field col">
          <label for="jabatan">Departemen</label>
          <Dropdown
            id="jabatan"
            v-model="data.departemen"
            :options="departemenData"
            optionLabel="label"
            optionValue="value"
            placeholder="Pilih Jabatan"
            :invalid="submitted && !data.departemen"
          />
          <small class="p-error" v-if="submitted && !data.departemen"
            >Departemen diperlukan.</small
          >
        </div>
      </div>

      <div class="form-container">
        <!-- Kolom kiri untuk upload foto -->
        <div class="form-section">
          <h3>Upload Foto Baru</h3>
          <FileUpload
            mode="basic"
            name="demo[]"
            auto
            chooseLabel="Pilih Foto"
            accept="image/*"
            customUpload
            @upload="uploadHandler"
          />
          <p v-if="!selectedFile">Belum ada gambar yang dipilih.</p>
        </div>

        <!-- Kolom kanan untuk menampilkan foto lama -->
        <div class="form-section">
          <h3>Foto Lama</h3>
          <div v-if="photoUrl" class="image-container">
            <img :src="photoUrl" alt="Foto Lama" />
          </div>
          <p v-else>Belum ada foto lama.</p>
        </div>
      </div>
      <template #footer>
        <button class="btn btn-cancel" @click="hideDialog">
          <i class="pi pi-trash"></i> Batal
        </button>
        <button class="btn btn-save" @click="savePegawai">
          <i class="pi pi-check"></i> Simpan
        </button>
      </template>
    </Dialog>

    <Dialog
      v-model:visible="deleteProductDialog"
      :style="{ width: '450px' }"
      header="Confirm"
      :modal="true"
    >
      <div class="confirmation-content">
        <i class="pi pi-exclamation-triangle mr-3" style="font-size: 2rem" />
        <span v-if="product"
          >Are you sure you want to delete <b>{{ product.name }}</b
          >?</span
        >
      </div>
      <template #footer>
        <Button
          label="No"
          icon="pi pi-times"
          text
          @click="deleteProductDialog = false"
        />
        <Button label="Yes" icon="pi pi-check" text @click="deleteProduct" />
      </template>
    </Dialog>

    <Dialog
      v-model:visible="deleteProductsDialog"
      :style="{ width: '450px' }"
      header="Confirm"
      :modal="true"
    >
      <div class="confirmation-content">
        <i class="pi pi-exclamation-triangle mr-3" style="font-size: 2rem" />
        <span v-if="product"
          >Are you sure you want to delete the selected products?</span
        >
      </div>
      <template #footer>
        <Button
          label="No"
          icon="pi pi-times"
          text
          @click="deleteProductsDialog = false"
        />
        <Button
          label="Yes"
          icon="pi pi-check"
          text
          @click="deleteSelectedProducts"
        />
      </template>
    </Dialog>
  </div>
</template>

<script setup>
import { ref, onMounted } from "vue";
import { FilterMatchMode } from "primevue/api";
import { useToast } from "primevue/usetoast";
import apiClient from "../services/apiService";
import { ProductService } from "../services/ProductService";

onMounted(() => {
  // ProductService.getProducts().then((data) => (listdata.value = data));
});

const toast = useToast();
const dt = ref();
const listdata = ref();
const productDialog = ref(false);
const deleteProductDialog = ref(false);
const deleteProductsDialog = ref(false);
const product = ref({});
const selectedProducts = ref();
const data = ref([]);
const tglLahir = ref(null);
const tglGabung = ref(null);
const jabatanData = ref([]);
const departemenData = ref([]);
const fotoPreview = ref(null);
const namafile = ref(null);
const pegawai_id = ref(null);

const filters = ref({
  global: { value: null, matchMode: FilterMatchMode.CONTAINS },
});
const submitted = ref(false);
const statuses = ref([
  { label: "INSTOCK", value: "instock" },
  { label: "LOWSTOCK", value: "lowstock" },
  { label: "OUTOFSTOCK", value: "outofstock" },
]);

const first = ref(0);

const onPageChange = (event) => {
  console.log("data event", event);
  first.value = event.first;
};

const formatCurrency = (value) => {
  if (value)
    return value.toLocaleString("en-US", {
      style: "currency",
      currency: "USD",
    });
  return;
};
const openNew = () => {
  product.value = {};
  submitted.value = false;
  productDialog.value = true;
};
const hideDialog = () => {
  productDialog.value = false;
  submitted.value = false;
};
const fetchData = async () => {
  try {
    const response = await apiClient.get("/api/pegawai");
    listdata.value = response.data; // Pastikan data yang diterima sesuai dengan format yang diharapkan
  } catch (error) {
    console.error("Error loading data:", error);
  }
};
const jabatanDanDepartemenDataPegawai = async () => {
  try {
    const responseJabatan = await apiClient.get("/api/jabatan");
    jabatanData.value = responseJabatan.data.data.map((item) => ({
      label: item.namaJabatan,
      value: item.id,
    }));
    const responseDepartemen = await apiClient.get("/api/departemen");
    departemenData.value = responseDepartemen.data.data.map((item) => ({
      label: item.namaDepartemen,
      value: item.id,
    }));
  } catch (error) {
    console.error("Error loading data:", error);
  }
};
const onFileSelect = (event) => {
  const file = event.files[0];
  if (file) {
    data.value.foto = file;
    console.log("File yang diupload:", data.value.foto);
  }
};

const savePegawai = async () => {
  let id_data = pegawai_id.value ? pegawai_id.value : "";

  const formData = new FormData();
  formData.append("foto", data.value.foto);
  const formattedTglLahir = new Date(tglLahir.value).toLocaleDateString(
    "id-ID",
    {
      day: "2-digit",
      month: "2-digit",
      year: "numeric",
    }
  );
  const formattedTglGabung = new Date(tglGabung.value).toLocaleDateString(
    "id-ID",
    {
      day: "2-digit",
      month: "2-digit",
      year: "numeric",
    }
  );
  formData.append("id_pegawai", id_data);
  formData.append("namaPegawai", data.value.namaPegawai);
  formData.append("emailPGW", data.value.email);
  formData.append("noTeleponPGW", data.value.noHp);
  formData.append("TglLahirPGW", formattedTglLahir);
  formData.append("TglGabungPGW", formattedTglGabung);
  formData.append("alamatPGW", data.value.alamat);
  formData.append(
    "jabatanPGW",
    data.value.jabatan.value ? data.value.jabatan.value : data.value.jabatan
  );
  formData.append(
    "departemenPGW",
    data.value.departemen.value
      ? data.value.departemen.value
      : data.value.departemen
  );
  console.log("data formData", formData);
  try {
    const response = await apiClient.post("/api/pegawai", formData, {
      headers: { "Content-Type": "multipart/form-data" },
    });
    productDialog.value = false;
    toast.add({
      severity: "success",
      summary: "Berhasil",
      detail: "Data berhasil disimpan",
    });
    console.log(response);
  } catch (error) {
    console.error("Gagal membuat data:", error);
    toast.add({
      severity: "error",
      summary: "Error",
      detail: "Gagal menyimpan data",
    });
  }
};

const editProduct = (prod) => {
  console.log("data prod", prod);
  pegawai_id.value = prod.id;
  data.value.namaPegawai = prod.namaPegawai;
  data.value.email = prod.email;
  data.value.noHp = prod.noTelepon;
  tglLahir.value = prod.tglLahir;
  tglGabung.value = prod.tglGabung;
  data.value.alamat = prod.alamat;
  data.value.jabatan = prod.jabatan_id;
  data.value.departemen = prod.departemen_id;
  data.value.foto = prod.foto;
  fotoPreview.value = prod.foto;
  const fileName = prod.foto.split("/").pop();
  namafile.value = fileName;

  productDialog.value = true;
};
const confirmDeleteProduct = (prod) => {
  product.value = prod;
  deleteProductDialog.value = true;
};
const deleteProduct = () => {
  listdata.value = listdata.value.filter((val) => val.id !== product.value.id);
  deleteProductDialog.value = false;
  product.value = {};
  toast.add({
    severity: "success",
    summary: "Successful",
    detail: "Product Deleted",
    life: 3000,
  });
};
const findIndexById = (id) => {
  let index = -1;
  for (let i = 0; i < listdata.value.length; i++) {
    if (listdata.value[i].id === id) {
      index = i;
      break;
    }
  }

  return index;
};
const createId = () => {
  let id = "";
  var chars = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789";
  for (var i = 0; i < 5; i++) {
    id += chars.charAt(Math.floor(Math.random() * chars.length));
  }
  return id;
};
const exportCSV = () => {
  dt.value.exportCSV();
};
const confirmDeleteSelected = () => {
  if (selectedProducts.value.length > 0) {
    deleteProductsDialog.value = true;
  } else {
    alert("No products selected for deletion");
  }
};
const deleteSelectedProducts = async () => {
  try {
    const idsToDelete = selectedProducts.value.map((product) => product.id);
    await apiClient.post("/api/pegawai", {
      delete: { pegawai_id: idsToDelete },
    });
  } catch (error) {}
};

const getStatusLabel = (status) => {
  switch (status) {
    case "INSTOCK":
      return "success";

    case "LOWSTOCK":
      return "warning";

    case "OUTOFSTOCK":
      return "danger";

    default:
      return null;
  }
};
onMounted(() => {
  fetchData();
  jabatanDanDepartemenDataPegawai();
});
</script>

<style scoped>
.preview-foto {
  width: 50px;
  height: 55px;
  border: 1px solid #ddd;
  object-fit: cover;
  margin-right: 10px;
}

.imgOld {
  border: 1px solid rgba(255, 250, 250, 0.705);
  display: flex;
  object-fit: cover;
  align-content: center;
  text-align: center;
  margin: 15px;
  padding: 10px;
}
.nameFile {
  padding-right: 10px;
}
.buttonNotif {
  width: 100px;
  height: 20px;
}

.form-container {
  display: flex;
  gap: 20px;
}

.form-section {
  flex: 1;
  padding: 20px;
  border-radius: 8px;
  color: #fff;
}

.image-container {
  width: 100%;
  padding-top: 75%; /* Untuk rasio 4x3 */
  position: relative;
  background: #2c2c2c;
  display: flex;
  justify-content: center;
  align-items: center;
  border: 1px solid #ccc;
  border-radius: 4px;
}

.image-container img {
  position: absolute;
  width: 100%;
  height: 100%;
  object-fit: cover;
  border-radius: 4px;
}

.btn {
  display: inline-flex;
  align-items: center;
  padding: 8px 12px;
  font-size: 14px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  transition: background-color 0.3s ease, opacity 0.3s ease;
}

.btn i {
  margin-right: 8px;
}

.btn-cancel {
  background-color: #e74c3c; /* Warna merah */
  color: #fff;
}

.btn-cancel:hover {
  background-color: #c0392b;
}

.btn-save {
  background-color: #2ecc71; /* Warna hijau */
  color: #fff;
}

.btn-save:hover {
  background-color: #27ae60;
}

.btn:focus {
  outline: none;
}
</style>

../services/ProductService
