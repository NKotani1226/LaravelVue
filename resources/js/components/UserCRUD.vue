<template>
  <!--一覧取得-->
  <div class="container mt-5"> 
      <h2 class="fs-1 mb-2">一覧情報</h2>  
      <div v-if="listmessage" class="alert alert-primary">
        {{ listmessage }}
      </div>    
      <table class="table">
          <thead>
              <tr>
                  <th>ID</th>
                  <th>NAME</th>
                  <th>MAIL</th>
                  <th></th>
                  <th></th>
              </tr>
          </thead>
          <tbody>
              <tr v-for="(user,index) in users" :key="user.id"> 
                <td >{{ user.id}}</td>
                <td v-if="!isPush">{{ user.name}}</td>
                <td v-if="!isPush">{{ user.email }}</td>
                <td  v-if="isPush">
                  <input type="text" class="col-10 border" v-model="user.name" name="name">
                </td>
                <td  v-if="isPush">
                  <input type="email" class="col-10 border" v-model="user.email" name="email">
                </td>
                <td v-if="!isPush">
                  <button @click="dispUpdate(user)">編集</button>
                </td>
                <td  v-if="isPush">
                  <button @click="updateUser(index)">更新</button>
                </td>
                <td v-if="!isPush">
                  <button
                    @click="deleteUser(user.id)"
                    >削除
                  </button>
                </td>
                <td  v-if="isPush">
                  <button @click="cancel()">キャンセル</button>
                </td>
              </tr>
          </tbody>
      </table>
  </div>

  <!--新規登録-->
  <div class="container mt-5">
    <h2 class="fs-1 mb-2">新規登録</h2>   
    <div v-if="error" class="alert alert-danger">
      {{ error }}
    </div>
    <div v-if="message" class="alert alert-primary">
      {{ message }}
    </div>
    <ul>
      <li class="row">
        <p class="col-2">名前：</p>
        <input type="text" class="col-10 border" v-model="name">
      </li>
      <li class="row">
        <p class="col-2">メールアドレス：</p>
        <input type="email" class="col-10 border" v-model="email">
      </li>
      <li class="row">
        <p class="col-2">パスワード：</p>
        <input type="password" class="col-10 border" v-model="password">
      </li>
      <li class="row">
        <p class="col-2">パスワード（確認用）：</p>
        <input type="password" class="col-10 border" v-model="password_confirmation">
      </li>
    </ul>
    <button @click="addUser" class="btn btn-primary mt-2">追加</button>
  </div>
</template>

<script>
import axios from 'axios';

export default {
  name: 'UserList',
  data() {
    return {
      users: [],
      name: '',
      email: '',
      password: '',
      password_confirmation: '',
      error: '',
      message: '',
      listmessage: '',
      isPush:false,
      updateId: '',
      updateName: '',
      updateEmail: ''
    }
  },
  created() {
    this.getUsers();
  },
  methods: {
    getUsers() {
      axios.get('/api/user').then(res => {
        this.users = res.data;
      });
    },
    addUser() {
      this.listmessage = "";
      axios.post('/api/user', {
        name: this.name,
        email: this.email,
        password: this.password,
        password_confirmation: this.password_confirmation,
      })
        .then(() => {
          this.name = '';
          this.email = '';
          this.password = '';
          this.password_confirmation = '';
          this.getUsers(); // ユーザー一覧を再取得
          this.error = ''; // エラーをクリア
          this.message = 'ユーザーが追加されました';
        })
        .catch(err => {
          if (err.response && err.response.data.errors) {
            // バリデーションエラーを表示
            this.error = Object.values(err.response.data.errors).flat().join(' / ');
          } else {
            this.error = '登録に失敗しました。';
          }
          this.message = '';
          console.error(err);
        });
    },
    deleteUser(id) {
      this.error = '';
      this.message = '';
      axios.delete('/api/user/' + id).then(() => {
        this.getUsers();
        this.listmessage = '削除完了しました';
      });
    },
    dispUpdate(){
      this.isPush = true;
    },
    updateUser(index){
        this.updateId = this.users[index].id;
        this.updateName = this.users[index].name;
        this.updateEmail = this.users[index].email;

        axios.put('/api/user/' + this.updateId, {
        name: this.updateName,
        email: this.updateEmail
      }).then(() => {
        this.isPush = false;
        this.getUsers();
      });
    },
    cancel(){
      this.isPush = false;
    }
  }
}
</script>