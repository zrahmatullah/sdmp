<template>
    <div>
        <!-- Tombol hamburger -->
        <Button icon="pi pi-bars" class="p-button-text" @click="showSidebar = true" />

        <!-- Sidebar -->
        <Sidebar v-model:visible="showSidebar" position="left" :dismissable="true" :modal="false"
            class="custom-sidebar">
            <h2>Menu</h2>
            <ul>
                <li><a href="#">Dashboard</a></li>
                <div class="card flex flex-col items-center gap-4">
                    <Button type="button" label="Toggle All" text @click="toggleAll" />
                    <PanelMenu v-model:expandedKeys="expandedKeys" :model="items" class="w-full md:w-80" />
                </div>
            </ul>
        </Sidebar>
    </div>
</template>

<script setup>
import { ref } from "vue";
// State untuk mengatur apakah sidebar terlihat
const showSidebar = ref(false);
const expandedKeys = ref({});
const items = ref([
    {
        key: '0',
        label: 'Users',
        icon: 'pi pi-users',
        items: [
            {
                key: '0_1',
                label: 'New',
                items: [
                    {
                        key: '0_1_0',
                        label: 'Member'
                    },
                    {
                        key: '0_1_1',
                        label: 'Group'
                    }
                ]
            },
            {
                key: '0_2',
                label: 'Search'
            }
        ]
    },
    {
        key: '1',
        label: 'Tasks',
        icon: 'pi pi-server',
        items: [
            {
                key: '1_0',
                label: 'Add New'
            },
            {
                key: '1_1',
                label: 'Pending'
            },
            {
                key: '1_2',
                label: 'Overdue'
            }
        ]
    },
    {
        key: '2',
        label: 'Calendar',
        icon: 'pi pi-calendar',
        items: [
            {
                key: '2_0',
                label: 'New Event'
            },
            {
                key: '2_1',
                label: 'Today'
            },
            {
                key: '2_2',
                label: 'This Week'
            }
        ]
    }
]);

const toggleAll = () => {
    if (Object.keys(expandedKeys.value).length) collapseAll();
    else expandAll();
}

const expandAll = () => {
    for (let node of items.value) {
        expandNode(node);
    }

    expandedKeys.value = { ...expandedKeys.value };
};

const collapseAll = () => {
    expandedKeys.value = {};
};

const expandNode = (node) => {
    if (node.items && node.items.length) {
        expandedKeys.value[node.key] = true;

        for (let child of node.items) {
            expandNode(child);
        }
    }
};





</script>

<style>
/* Styling tambahan untuk menu sidebar */
ul {
    list-style-type: none;
    padding: 0;
}

li {
    margin: 10px 0;
}

a {
    text-decoration: none;
    color: inherit;
}

.custom-sidebar {
    background-color: rgba(0, 0, 0, 0.619);
    color: rgb(255, 255, 255);
    opacity: 5;
}
</style>
