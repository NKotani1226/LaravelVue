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
        
        <div class="container mt-5">
            <h2>PAGENATE</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>MAIL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="puser in pusers" :key="puser.id">
                        <td>{{ puser.id }}</td>
                        <td>{{ puser.name }}</td>
                        <td>{{ puser.email }}</td>
                    </tr>
                    <tr></tr>
                </tbody>
            </table>
        </div>

        <div class="container mt-5">
            <h2>WHERE</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>MAIL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="wuser in wusers" :key="wuser.id">
                        <td>{{ wuser.id }}</td>
                        <td>{{ wuser.name }}</td>
                        <td>{{ wuser.email }}</td>
                    </tr>
                    <tr></tr>
                </tbody>
            </table>
        </div>

        <div class="container mt-5">
            <h2>WHEREBETEEN</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>MAIL</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="wbuser in wbusers" :key="wbuser.id">
                        <td>{{ wbuser.id }}</td>
                        <td>{{ wbuser.name }}</td>
                        <td>{{ wbuser.email }}</td>
                    </tr>
                    <tr></tr>
                </tbody>
            </table>
        </div>

        <div class="container mt-5 mb-5">
            <h2>JOINDATA</h2>
            <table class="table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NAME</th>
                        <th>MAIL</th>
                        <th>POST TITLE</th>
                        <th>POST CONTENT</th>
                    </tr>
                </thead>
                <tbody>
                    <tr v-for="joinuser in joinusers" :key="joinuser.id">
                        <template v-if="joinuser.user !== null">
                            <td>{{joinuser.user.id }}</td>
                            <td>{{joinuser.user.name }}</td>
                            <td>{{joinuser.user.email }}</td>
                            <td>{{joinuser.title }}</td>
                            <td>{{joinuser.content }}</td>
                        </template>
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
      pusers: {},
      wusers: {},
      wbusers: {},
      joinusers: {}
    }
  },
  created() {
    this.getUsers();
    this.getPagenate();
    this.getWhere();
    this.getBWhere();
    this.getJoin();
  },
  methods: {
    getUsers() {
      axios.get('/api/userlist/alldata').then(res => {
        this.users = res.data;
      });
    },
    getPagenate() {
      axios.get('/api/userlist/pagenate').then(res => {
        this.pusers = res.data.data;
      });
    },
    getWhere() {
      axios.get('/api/userlist/getWhere').then(res => {
        this.wusers = res.data;
      });
    },
    getBWhere() {
      axios.get('/api/userlist/getWhereBetween').then(res => {
        this.wbusers = res.data;
      });
    },
    getJoin() {
      axios.get('/api/userlist/getJoin').then(res => {
        this.joinusers = res.data;
        console.log(this.joinusers);
      });
    },
  }
};
</script>