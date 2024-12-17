<template>
  <div id="userList">
    <div class="container mt-5">
        <ListParts id="listparts" class="setup"></ListParts>
    </div>
  </div>
</template>

<script>
export default {
  name: 'UserList',
};
</script>
<script setup>
import ListParts from './ListParts.vue';
</script>
