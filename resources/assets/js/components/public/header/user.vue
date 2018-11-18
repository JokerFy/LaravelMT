<template>
  <div class="m-user">
    <template v-if="user">
      欢迎您，<span class="username">{{user}}</span>
      [退出]
    </template>
    <template v-else>
      <a href="/login" class="login">
        立即登录
      </a>
      <a href="/register" class="login">
        注册
      </a>
    </template>
  </div>
</template>

<script>
  export default {
    data(){
      return{
        user:''
      }
    }
  }
</script>

<style>

</style>
