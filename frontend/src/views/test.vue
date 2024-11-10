<template>
<div>
    <Toolbar class="mb-4">
        <template #start>
            <Button label="New" icon="pi pi-plus" severity="success" class="mr-2" @click="openNew" />
            <Button label="Delete" icon="pi pi-trash" severity="danger" @click="confirmDeleteSelected" :disabled="!selectedProducts || !selectedProducts.length" />
        </template>
 <!-- Hapus Data -->
        <template #end>
            <FileUpload mode="basic" accept="image/*" :maxFileSize="1000000" label="Import" chooseLabel="Import"
                        class="mr-2 inline-block" />
            <Button label="Export" icon="pi pi-upload" severity="help" @click="exportCSV($event)" />
        </template>
    </Toolbar>
    <div>
        <h1>Data Pegawai</h1>
        <DataTable :value="listdata" paginator rows="10" :rowsPerPageOptions="[5, 10, 25]" dataKey="id">
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

    <!-- EDIT DATA -->
    <Dialog v-model:visible="productDialog" :style="{ width: '1050px' }" header="Create Nama Pegawai" :modal="true" class="p-fluid">
        <div class="formgrid grid">
            <div class="field col">
                <label for="name">Nama Lengkap</label>
                <InputText id="name" v-model.trim="data.namaPegawai" required="true" autofocus :invalid="submitted && !data.namaPegawai" />
                <small class="p-error" v-if="submitted && !data.namaPegawai">Nama Lengkap diperlukan.</small>
            </div>
            <div class="field col">
                <label for="email">Email</label>
                <InputText id="email" v-model="data.email" required="true" :invalid="submitted && !data.email" />
                <small class="p-error" v-if="submitted && !data.email">Email diperlukan.</small>
            </div>
            <div class="field col">
                <label for="noHp">No Handphone</label>
                <InputText id="noHp" v-model="data.noHp" required="true" :invalid="submitted && !data.noHp" />
                <small class="p-error" v-if="submitted && !data.noHp">No Handphone diperlukan.</small>
            </div>
        </div>
        <div class="formgrid grid">
            <div class="field col">
                <label for="tglLahir">Tanggal Lahir</label>
                <Calendar v-model="tglLahir" showIcon placeholder="Pilih Tanggal Lahir" :invalid="submitted && !tglLahir" dateFormat="dd/mm/yy" showTime="false"  />
                <small class="p-error" v-if="submitted && !tglLahir">Tanggal Lahir diperlukan.</small>
            </div>
            <div class="field col">
                <label for="tglGabung">Tanggal Gabung</label>
                <Calendar v-model="tglGabung" showIcon placeholder="Pilih Tanggal Gabung" :invalid="submitted && !tglGabung" dateFormat="dd/mm/yy" />
                <small class="p-error" v-if="submitted && !tglGabung">Tanggal Gabung diperlukan.</small>
            </div>
        </div>
        <div class="field">
            <label for="alamat">Alamat</label>
            <Textarea id="alamat" v-model.trim="data.alamat" rows="5" cols="30" :invalid="submitted && !data.alamat" />
            <small class="p-error" v-if="submitted && !data.alamat">Alamat diperlukan.</small>
        </div>
        <div class="field">
            <label for="jabatan">Jabatan</label>
            <Dropdown id="jabatan" v-model="data.jabatan" :options="jabatanData" optionLabel="label" placeholder="Pilih Jabatan" :invalid="submitted && !data.jabatan" />
            <small class="p-error" v-if="submitted && !data.jabatan">Jabatan diperlukan.</small>
        </div>
        <div class="field">
            <label>Departemen</label>
            <div class="formgrid grid">
                <div class="field-radiobutton col-3" v-for="item in departemenData" :key="item.value">
                    <RadioButton :id="'departemen' + item.value" name="departemen" :value="item.value" v-model="data.departemen" :invalid="submitted && !data.departemen" />
                    <label :for="'departemen' + item.value">{{ item.label }}</label>
                </div>
            </div>
            <small class="p-error" v-if="submitted && !data.departemen">Departemen diperlukan.</small>
        </div>
        <div class="formgrid grid">
            <div class="field col">
                <label for="foto">Upload Foto</label>
                <FileUpload @select="onFileSelect" accept="image/*" chooseLabel="Pilih Gambar"  :auto="false" :showUploadButton="false" :showCancelButton="false">
                    <template #empty>
                        <p>Belum ada gambar yang diinput.</p>
                    </template>
                </FileUpload>
            </div>
        </div>
        <template #footer>
            <Button label="Cancel" icon="pi pi-times" text @click="hideDialog" />
            <Button label="Save" icon="pi pi-check" text @click="savePegawai" />
        </template>
    </Dialog>

        <Dialog v-model:visible="deleteProductDialog" :style="{ width: '450px' }" header="Confirm" :modal="true">
            <div class="confirmation-content">
                <i class="pi pi-exclamation-triangle mr-3" style="font-size: 2rem" />
                <span v-if="product">Are you sure you want to delete <b>{{ product.name }}</b>?</span>
            </div>
            <template #footer>
                <Button label="No" icon="pi pi-times" text @click="deleteProductDialog = false" />
                <Button label="Yes" icon="pi pi-check" text @click="deleteProduct" />
            </template>
        </Dialog>

        <Dialog v-model:visible="deleteProductsDialog" :style="{ width: '450px' }" header="Confirm" :modal="true">
            <div class="confirmation-content">
                <i class="pi pi-exclamation-triangle mr-3" style="font-size: 2rem" />
                <span v-if="product">Are you sure you want to delete the selected products?</span>
            </div>
            <template #footer>
                <Button label="No" icon="pi pi-times" text @click="deleteProductsDialog = false" />
                <Button label="Yes" icon="pi pi-check" text @click="deleteSelectedProducts" />
            </template>
        </Dialog>
</div>
</template>

<script setup>
import { ref, onMounted } from 'vue';
import apiClient from '../services/apiService';
import { useToast } from "primevue/usetoast";


const data = ref([]);
const listdata = ref([]);
const tglLahir = ref(null);
const tglGabung = ref(null);
const jabatanData = ref([]);
const departemenData = ref([]);
const submitted = ref(false);
const product = ref({});
const productDialog = ref(false);
const deleteProductsDialog = ref(false);
const deleteProductDialog = ref(false);
const dt = ref();

const fetchData = async () => {
    try {
        const response = await apiClient.get('/api/pegawai');
        listdata.value = response.data; // Pastikan data yang diterima sesuai dengan format yang diharapkan
    } catch (error) {
        console.error('Error loading data:', error);
    }
};
const jabatanDanDepartemenDataPegawai = async () => {
    try {
        const responseJabatan = await apiClient.get('/api/jabatan');
        jabatanData.value = responseJabatan.data.data.map(item => ({
            label: item.namaJabatan,
            value: item.id
        }));
        const responseDepartemen = await apiClient.get('/api/departemen');
        departemenData.value = responseDepartemen.data.data.map(item => ({
            label: item.namaDepartemen,
            value: item.id
        }));
    } catch (error) {
        console.error('Error loading data:', error);
    }
};

const onFileSelect = (event) => {
  data.value.foto = event.files.name[0]; // Ambil file pertama yang dipilih
  console.log('data.value.foto',data.value.foto)
};

const savePegawai = async () => {
    const json = {
        "namaPegawai" : data.value.namaPegawai,
        "emailPGW" : data.value.email,
        "noTeleponPGW" : data.value.noHp,
        "TglLahirPGW" : tglLahir.value,
        "TglGabungPGW" : tglGabung.value,
        "alamatPGW" : data.value.alamat,
        "jabatanPGW" : data.value.jabatan.value,
        "departemenPGW" : data.value.departemen,
        "foto" : data.value.foto,
    }
    console.log('data formData',json)
    try {
        const response = await apiClient.post('/api/pegawai', json, {
        });
        productDialog.value = false;
    } catch (error) {
        console.error("Gagal membuat data:", error);
        toast.add({ severity: 'error', summary: 'Error', detail: 'Gagal menyimpan data' });
    }

    productDialog.value = false;
    product.value = {};
};

const hideDialog = () => {
    productDialog.value = false;
    submitted.value = false;
};
const openNew = () => {
    product.value = {};
    submitted.value = false;
    productDialog.value = true;
};
const confirmDeleteSelected = () => {
    deleteProductsDialog.value = true;
};
const exportCSV = () => {
    dt.value.exportCSV();
};

onMounted(() => {
    fetchData();
    jabatanDanDepartemenDataPegawai();
});
</script>