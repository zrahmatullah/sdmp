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

    <!-- EDIT DATA -->
    <Dialog v-model:visible="productDialog" :style="{ width: '1050px' }" header="Create Nama Pegawai" :modal="true"
            class="p-fluid">
            <div class="formgrid grid">
                <div class="field col">
                    <label for="name">Nama Lengkap</label>
                    <InputText id="name" v-model.trim="data.namaPegawai" required="true" autofocus
                        :invalid="submitted && !data.namaPegawai" />
                    <small class="p-error" v-if="submitted && !data.namaPegawai">Name is required.</small>
                </div>
                <div class="field col">
                    <label for="name">Email</label>
                    <InputText id="name" v-model.trim="data.email" required="true" autofocus
                    :invalid="submitted && !data.email" />
                    <small class="p-error" v-if="submitted && !data.email">Name is required.</small>
                </div>
                <div class="field col">
                    <label for="name">No Handphone</label>
                    <InputText id="name" v-model.trim="data.noHp" required="true" autofocus
                    :invalid="submitted && !data.noHp" />
                    <small class="p-error" v-if="submitted && !data.noHp">Name is required.</small>
                </div>
            </div>
            <div class="formgrid grid">
                <div class="field col">
                    <label for="price">Tanggal Lahir</label>
                    <Calendar v-model="data.tglLahir" showIcon fluid iconDisplay="input" :invalid="submitted && !data.tglLahir" />
                    <small class="p-error" v-if="submitted && !data.tglLahir">Name is required.</small>
                </div>
                <div class="field col">
                    <label for="quantity">Tanggal Gabung</label>
                    <Calendar v-model="data.tglGabung" showIcon fluid iconDisplay="input" :invalid="submitted && !data.tglGabung" />
                    <small class="p-error" v-if="submitted && !data.tglGabung">Name is required.</small>
                </div>
            </div>
            <div class="field">
                <label for="name">Alamat</label>
                <FloatLabel>
                    <Textarea v-model.trim="data.alamat" rows="5" cols="30"  :invalid="submitted && !data.alamat"  />
                </FloatLabel>
                <small class="p-error" v-if="submitted && !data.alamat">Name is required.</small>
            </div>

            <div class="field">
                    <label for="inventoryStatus" class="mb-3">Jabatan</label>
                    <Dropdown id="inventoryStatus" v-model="data.jabatan" :options="statuses" optionLabel="label" :invalid="submitted && !data.jabatan"
                        placeholder="Select a Status">
                        <template #value="slotProps">
                            <div v-if="slotProps.value && slotProps.value.value">
                                <Tag :value="slotProps.value.value" :severity="getStatusLabel(slotProps.value.label)" />
                            </div>
                            <div v-else-if="slotProps.value && !slotProps.value.value">
                                <Tag :value="slotProps.value" :severity="getStatusLabel(slotProps.value)" />
                            </div>
                            <span v-else>
                                {{ slotProps.placeholder }}
                            </span>
                        </template>
                    </Dropdown>
                    <small class="p-error" v-if="submitted && !data.jabatan">Inventory Status is required.</small>
            </div>

            <div class="field">
                <label class="mb-3">Departemen</label>
                <div class="formgrid grid">
                    <div class="field-radiobutton col-6">
                        <RadioButton id="category1" name="category" value="Accessories" v-model="data.dapartemen" :invalid="submitted && !data.dapartemen" />
                        <label for="category1">Accessories</label>
                    </div>
                    <div class="field-radiobutton col-6">
                        <RadioButton id="category2" name="category" value="Clothing" v-model="data.dapartemen" :invalid="submitted && !data.dapartemen" />
                        <label for="category2">Clothing</label>
                    </div>
                    <div class="field-radiobutton col-6">
                        <RadioButton id="category3" name="category" value="Electronics" v-model="data.dapartemen" :invalid="submitted && !data.dapartemen" />
                        <label for="category3">Electronics</label>
                    </div>
                    <div class="field-radiobutton col-6">
                        <RadioButton id="category4" name="category" value="Fitness" v-model="data.dapartemen" :invalid="submitted && !data.dapartemen" />
                        <label for="category4">Fitness</label>
                    </div>
                </div>
                <small class="p-error" v-if="submitted && !data.dapartemen">Inventory Status is required.</small>
            </div>

            <div class="formgrid grid">
                <div class="field col">
                    <label for="price">IMG</label>
                    <Toast />
                    <FileUpload ref="fileupload" mode="basic" name="demo[]" url="/api/upload" accept="image/*" :maxFileSize="1000000" @upload="onUpload" />
                </div>
                <!-- <div class="field col">
                    <label for="quantity">Quantity</label>
                    <InputNumber id="quantity" v-model="product.quantity" integeronly />
                </div> -->
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


const data = ref([]);
const submitted = ref(false);
const product = ref({});
const productDialog = ref(false);
const deleteProductsDialog = ref(false);
const deleteProductDialog = ref(false);
const dt = ref();

const fetchData = async () => {
    try {
        const response = await apiClient.get('/api/pegawai');
        data.value = response.data; // Pastikan data yang diterima sesuai dengan format yang diharapkan
        console.log(data.value);
    } catch (error) {
        console.error('Error loading data:', error);
    }
};
const jabatanData = async () => {
    try {
        const response = await apiClient.get('/api/pegawai');
        data.value = response.data; // Pastikan data yang diterima sesuai dengan format yang diharapkan
        console.log(data.value);
    } catch (error) {
        console.error('Error loading data:', error);
    }
};

const savePegawai = async () => {
    submitted.value = true;
    if (!data.value.namaPegawai == null) {
        console.error("Harap lengkapi semua field yang diperlukan.");
        return;
    }
    let json = {
        "namaPegawai" : data.value.namaPegawai,
        "emailPGW" : data.value.namaPegawai,
        "noTeleponPGW" : data.value.namaPegawai,
        "alamatPGW" : data.value.namaPegawai,
        "fotoPGW" : data.value.namaPegawai,
        "TglLahirPGW" : data.value.tglLahir,
        "TglGabungPGW" : data.value.tglGabung,
        "jabatanPGW" : data.value.inventoryStatus,
        "departemenPGW" : data.value.dapartemen,
    };
    console.log('data json',json)
    // try {
    //     const response = await apiClient.post('/api/pegawai', json);
    //     console.log('Data berhasil dibuat:', response.data);
    // } catch (error) {
    //     console.error('Gagal membuat data:', error);
    // }
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
});
</script>