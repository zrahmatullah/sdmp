<template>
    <div>
        <div class="card">

            <!-- Tambah Data -->
            <Toolbar class="mb-4">
                <template #start>
                    <Button label="New" icon="pi pi-plus" severity="success" class="mr-2" @click="openNew" />
                    <Button label="Delete" icon="pi pi-trash" severity="danger" @click="confirmDeleteSelected"
                        :disabled="!selectedProducts || !selectedProducts.length" />
                </template>

                <!-- Hapus Data -->
                <template #end>
                    <FileUpload mode="basic" accept="image/*" :maxFileSize="1000000" label="Import" chooseLabel="Import"
                        class="mr-2 inline-block" />
                    <Button label="Export" icon="pi pi-upload" severity="help" @click="exportCSV($event)" />
                </template>
            </Toolbar>

            <DataTable ref="dt" :value="data" v-model:selection="selectedProducts" dataKey="id" :paginator="true" :rows="10"
                :filters="filters"
                paginatorTemplate="FirstPageLink PrevPageLink PageLinks NextPageLink LastPageLink CurrentPageReport RowsPerPageDropdown"
                :rowsPerPageOptions="[5, 10, 25]"
                currentPageReportTemplate="Showing {first} to {last} of {totalRecords} products">
                <template #header>
                    <div class="flex flex-wrap gap-2 align-items-center justify-content-between">
                        <h4 class="m-0">Manage Products</h4>
                        <IconField iconPosition="left">
                            <InputIcon>
                                <i class="pi pi-search" />
                            </InputIcon>
                            <InputText v-model="filters['global'].value" placeholder="Search..." />
                        </IconField>
                    </div>
                </template>

                <Column selectionMode="multiple" style="width: 3rem" :exportable="false"></Column>
                <Column field="code" header="Code" sortable style="min-width:12rem"></Column>
                <Column field="namaJabatan" header="Nama Jabatan" sortable style="min-width:16rem"></Column>
                <Column field="deskripsiJabatan" header="Deskripsi" sortable style="min-width:8rem"></Column>
                <Column field="golonganGaji" header="Golongan Gaji" sortable style="min-width:10rem"></Column>
                <Column field="statusEnable" header="Status Aktif" sortable style="min-width:12rem">
                    <template #body="slotProps">
                        <span>{{ slotProps.data.statusEnable ? 'Aktif' : 'Tidak Aktif' }}</span>
                    </template>
                </Column>
            </DataTable>
        </div>


        <!-- create data -->
        <Dialog v-model:visible="productDialog" :style="{ width: '450px' }" header="Tambah Jabatan" :modal="true"
            class="p-fluid">
            <img v-if="product.image" :src="`https://primefaces.org/cdn/primevue/images/product/${product.image}`"
                :alt="product.image" class="block m-auto pb-3" />
            <div class="field">
                <label for="name">Nama Jabatan</label>
                <InputText id="name" v-model.trim="data.namaJabatan" required="true" autofocus
                    :invalid="submitted && !data.namaJabatan" />
                <small class="p-error" v-if="submitted && !data.namaJabatan">Name is required.</small>
            </div>
            <div class="field">
                <label for="description">Deskripsi Jabatan</label>
                <Textarea id="description" v-model="data.deskripsiJabatan" required="true" rows="3" cols="20" />
            </div>

            <div class="field">
                <label for="golonganGaji" class="mb-3">Golongan Gaji</label>
                <Dropdown id="golonganGaji" v-model="data.golonganGaji" :options="golonganGajiOptions" optionLabel="label"
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

            </div>




            <template #footer>
                <Button label="Cancel" icon="pi pi-times" text @click="hideDialog" />
                <Button label="Save" icon="pi pi-check" text @click="create" />
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
import { FilterMatchMode } from 'primevue/api';
import { useToast } from 'primevue/usetoast';
import { ProductService } from '../../services/ProductService';
import apiClient from '../../services/apiService';

onMounted(() => {
    ProductService.getProducts().then((data) => (products.value = data));
    fetchData();
    fetchGolonganGaji();
});

const data = ref([]);
const golonganGajiOptions = ref([]);
const fetchData = async () => {
    try {
        const response = await apiClient.get('/api/jabatan');
        data.value = response.data.data;
        // console.log(data.value);
    } catch (error) {
        console.log('Error Fetch Data', error);
    }
};

const fetchGolonganGaji = async () => {
    try {
        const response = await apiClient.get('/api/jabatan');
        golonganGajiOptions.value = response.data.data.map(item => ({
            label: `Golongan Gaji ${item.golonganGaji}`,  // Ambil golongan gaji dan beri label
            value: item.golonganGaji,  // Nilai yang akan dikirim
        }));

        // console.log('ssss', this.golonganGajiOptions);
    } catch (error) {
        console.error('Terjadi kesalahan saat mengambil data jabatan:', error);
        // alert('Gagal mengambil data jabatan.');
    }
};

const create = async () => {
    productDialog.value = false;
    try {
        const payload = {
            "namaJabatan": data.value.namaJabatan,
            "deskripsiJabatan": data.value.deskripsiJabatan,
            "golonganGaji": data.value.golonganGaji ? data.value.golonganGaji.value : null,  // Menyimpan hanya nilai golonganGaji yang benar
            "statusEnable": data.value.statusEnable || true,
        };
        console.log('Payload yang akan dikirim:', payload);  // Cek payload di konsol
        // Mengirimkan data ke API
        const response = await apiClient.post('/api/jabatan', payload);

        if (response.status === 201) {
            data.value = response.data;
            fetchData();
            console.log('jabatan berhasil disimpan:', response.data);
        } else {
            console.log('gagal menyimpan:', response.data);
        }
        // Opsional: Menampilkan pesan sukses atau melakukan navigasi setelah berhasil
    } catch (error) {
        // Menangani error jika terjadi
        console.error('Terjadi kesalahan:', error);
        alert('Terjadi kesalahan saat menyimpan jabatan.');

        // Opsional: Menampilkan pesan kesalahan kepada pengguna
    }
};
const toast = useToast();
const dt = ref();
const products = ref();
const productDialog = ref(false);
const deleteProductDialog = ref(false);
const deleteProductsDialog = ref(false);
const product = ref({});
const selectedProducts = ref();
const filters = ref({
    'global': { value: null, matchMode: FilterMatchMode.CONTAINS },
});
const submitted = ref(false);

const openNew = () => {
    product.value = {};
    submitted.value = false;
    productDialog.value = true;
};
const hideDialog = () => {
    productDialog.value = false;
    submitted.value = false;
};
const editProduct = (prod) => {
    product.value = { ...prod };
    productDialog.value = true;
};
const confirmDeleteProduct = (prod) => {
    product.value = prod;
    deleteProductDialog.value = true;
};
const deleteProduct = () => {
    products.value = products.value.filter(val => val.id !== product.value.id);
    deleteProductDialog.value = false;
    product.value = {};
    toast.add({ severity: 'success', summary: 'Successful', detail: 'Product Deleted', life: 3000 });
};
const findIndexById = (id) => {
    let index = -1;
    for (let i = 0; i < products.value.length; i++) {
        if (products.value[i].id === id) {
            index = i;
            break;
        }
    }

    return index;
};
const createId = () => {
    let id = '';
    var chars = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789';
    for (var i = 0; i < 5; i++) {
        id += chars.charAt(Math.floor(Math.random() * chars.length));
    }
    return id;
}
const exportCSV = () => {
    dt.value.exportCSV();
};
const confirmDeleteSelected = () => {
    deleteProductsDialog.value = true;
};
const deleteSelectedProducts = () => {
    products.value = products.value.filter(val => !selectedProducts.value.includes(val));
    deleteProductsDialog.value = false;
    selectedProducts.value = null;
    toast.add({ severity: 'success', summary: 'Successful', detail: 'Products Deleted', life: 3000 });
};

const getStatusLabel = (status) => {
    switch (status) {
        case 'INSTOCK':
            return 'success';

        case 'LOWSTOCK':
            return 'warning';

        case 'OUTOFSTOCK':
            return 'danger';

        default:
            return null;
    }
};

</script>
../services/ProductService