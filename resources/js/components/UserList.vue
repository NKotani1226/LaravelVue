<template>
  <div id="userList">
    <div class="container mt-5 mb-5">
        <h2>UserList</h2>

        <ul class="list-group">
          <li class="list-group-item" v-for="user in users" :key="user.id">{{ user.name }}</li>
        </ul>
    </div>
  </div>
</template>

<script>
import axios from 'axios';
import { ref, onMounted } from 'vue';


export default {
  name: 'UserList',
  setup() {
    const users = ref([]);

    // APIを呼び出してデータを取得する
    const fetchUsers = async () => {
      try {
        //WebAPI
        const response = await axios.get('https://jsonplaceholder.typicode.com/users');
        users.value = response.data;

        //API
        const res = await axios.get("/api/apidata");
        console.log(res);
        
      } catch (error) {
        console.error('データ取得エラー:', error);
      }
    };

    // コンポーネントがマウントされた時にデータを取得
    onMounted(fetchUsers);

    return {
      users,
    };
  },
};
</script>