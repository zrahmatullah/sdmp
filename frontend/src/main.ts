//import createApp from Vue
import { createApp } from 'vue';
import PrimeVue from 'primevue/config';
//import component App
import App from './App.vue';
//import config router
import router from './router'
//create App Vue
const app = createApp(App);


// Import PrimeVue CSS
import 'primevue/resources/themes/aura-light-green/theme.css'
import 'primevue/resources/primevue.min.css';
import 'primeicons/primeicons.css';
import Button from 'primevue/button';
import Sidebar from 'primevue/sidebar';
import PanelMenu from 'primevue/panelmenu';




app.component('Button', Button);
app.component('Sidebar', Sidebar);
app.component('PanelMenu', PanelMenu);

//gunakan "router" di Vue dengan plugin "use"
app.use(router);
app.use(PrimeVue);

app.mount('#app');