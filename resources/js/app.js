import './bootstrap';
import { createApp } from 'vue';
import App from './components/App.vue';
import UserList from './components/UserList.vue';
import UserCRUD from './components/UserCRUD.vue';

createApp(App).mount('#app');
createApp(UserList).mount('#userList');
createApp(UserCRUD).mount('#usercrud');
