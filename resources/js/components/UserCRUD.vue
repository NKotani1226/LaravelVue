<template>
  <div class="container mt-5">       
      <table class="table">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>NAME</th>
                  <th>MAIL</th>
              </tr>
          </thead>
          <tbody>
              <tr v-for="user in users" :key="user.id"> 
                <td>{{ user.id}}</td>
                <td>{{ user.name}}</td>
                <td>{{ user.email }}</td>
              </tr>
          </tbody>
      </table>
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
    this.getUsera();
  },
  methods: {
    getUsera() {
      axios.get('/api/user').then(res => {
        this.users = res.data;
      });
    },
  }
};
</script>