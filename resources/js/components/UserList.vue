<template>
  <div id="userList">
    <div class="container mt-5 mb-5">
        <h2>UserList</h2>

        <div class="container mt-5">
            <h2>ALLDATA</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>MAIL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="alluser in users" :key="alluser.id">
                        <td>{{ alluser.id }}</td>
                        <td>{{ alluser.name }}</td>
                        <td>{{ alluser.email }}</td>
                    </tr>
                    <tr></tr>
                </tbody>
            </table>
        </div>        
    </div>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'UserList',
  data() {
    return {
      users: {},
    }
  },
  created() {
    this.getUsers();
  },
  methods: {
    getUsers() {
      axios.get('/api/userlist/alldata').then(res => {
        this.users = res.data;
      });
    },
  }
};
</script>