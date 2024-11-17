<template>
    <div class="card">
        <Menubar :model="items">
            <template #start>
               
            </template>
            <template #item="{ item, props, hasSubmenu, root }">
                <a v-ripple class="flex align-items-center" v-bind="props.action"  style="padding-left:60px">
                    <span :class="item.icon" />
                    <span class="ml-2">{{ item.label }}</span>
                    <Badge v-if="item.badge" :class="{ 'ml-auto': !root, 'ml-2': root }" :value="item.badge" />
                    <span v-if="item.shortcut"
                        class="ml-auto border-1 surface-border border-round surface-100 text-xs p-1">{{ item.shortcut
                        }}</span>
                    <i v-if="hasSubmenu"
                        :class="['pi pi-angle-down', { 'pi-angle-down ml-2': root, 'pi-angle-right ml-auto': !root }]"></i>
                </a>
            </template>
            <template #end>
                <div class="flex align-items-center gap-2">
                    <InputText placeholder="Search" type="text" class="w-8rem sm:w-auto" />
                    <div class="dropdown-container">
                        <Button class="custom-split-button" @click="toggleDropdown">
                        <img :src="getImage()" alt="Role Icon" class="button-image" />
                        </Button>
                        <div v-if="isDropdownVisible" class="dropdown-menu">
                        <ul>
                            <li @click="handleAction('profile')">Profile</li>
                            <li @click="handleAction('setting')">Setting</li>
                            <li @click="handleAction('auth')">Login</li>
                        </ul>
                        </div>
                    </div>
                </div>
            </template>
        </Menubar>
    </div>
</template>

<script setup>
import { ref } from "vue";
import { FilterMatchMode } from "primevue/api";
import { useToast } from "primevue/usetoast";
import spongebobImg from '../assets/sepongebob.png';
import { useRouter } from 'vue-router';

const router = useRouter();

const role = 'director';
const isDropdownVisible = ref(false);

function navigateToPage() {
     
}
function toggleDropdown() {
  isDropdownVisible.value = !isDropdownVisible.value;
}

function handleAction(action) {  
  if (action === 'auth' || action === 'profile' || action === 'settings') {
    router.push({ name: action }); 
  } else {
    console.error(`Route "${action}" tidak ditemukan!`);
  }

  isDropdownVisible.value = false;
}



const jabatanDanDepartemenDataPegawai = async () => {
  try {
    const responseJabatan = await apiClient.get("/api/jabatan");
    role.value = responseJabatan.data.data.map((item) => ({
      label: item.namaJabatan,
      value: item.id,
    }));
  } catch (error) {
    console.error("Error loading data:", error);
  }
};


function getImage() {
  if (role === 'director') {
    return spongebobImg;
    }
//   } else if (role === 'hrd') {
//     return patrikImg;
//   } else if (role === 'programmer') {
//     return squidwardImg;
//   } else {
//     return ''; // Jalur default jika tidak ada yang cocok
//   }
}

const items = ref([
    {
        label: 'Home',
        icon: 'pi pi-home'
    },
    {
        label: 'Features',
        icon: 'pi pi-star'
    },
    {
        label: 'Projects',
        icon: 'pi pi-search',
        items: [
            {
                label: 'Core',
                icon: 'pi pi-bolt',
                shortcut: '⌘+S'
            },
            {
                label: 'Blocks',
                icon: 'pi pi-server',
                shortcut: '⌘+B'
            },
            {
                label: 'UI Kit',
                icon: 'pi pi-pencil',
                shortcut: '⌘+U'
            },
            {
                separator: true
            },
            {
                label: 'Templates',
                icon: 'pi pi-palette',
                items: [
                    {
                        label: 'Apollo',
                        icon: 'pi pi-palette',
                        badge: 2
                    },
                    {
                        label: 'Ultima',
                        icon: 'pi pi-palette',
                        badge: 3
                    }
                ]
            }
        ]
    },
    {
        label: 'Contact',
        icon: 'pi pi-envelope',
        badge: 3
    }
]);
</script>
<style scoped>
.custom-split-button {
  padding: 0px;
  border-radius: 50%;
  margin: 10px;
  background-color: transparent;
  color: transparent;
  display: flex;
  justify-content: center;
  align-items: center;
  flex-direction: column;
}

.button-image {
  width: 50px; /* Atur ukuran gambar sesuai kebutuhan */
  height: auto;
  border-radius: 50%;
}
.dropdown-container {
  position: relative;
  display: inline-block;
}

.custom-split-button {
  display: flex;
  align-items: center;
  justify-content: center;
}

.dropdown-menu {
  position: absolute;
  top: 100%;
  width: 150px;
  left: -80px;
  background: white;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.1);
  z-index: 1000;
}

.dropdown-menu ul {
  list-style: none;
  margin: 0;
  padding: 0;
}

.dropdown-menu li {
  padding: 8px 16px;
  cursor: pointer;
  color: black;
  font-weight: bold;
}

.dropdown-menu li:hover {
  background-color: #f0f0f0;
}
</style>

