import './bootstrap';
import { createApp } from 'vue';
import App from './components/App.vue';
import UserList from './components/UserList.vue';

createApp(App).mount('#app');
createApp(UserList).mount("#userList");