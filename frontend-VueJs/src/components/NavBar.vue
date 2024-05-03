<template>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #303131;">
    <div class="container-fluid">
      <img src="/a.png" alt="TalentoStore Icon" style="width: 60px; height: 50px; margin-right: 10px;">
      <a class="navbar-brand" href="/">
        <h2 class="talento-title">TalentoStore</h2>
      </a>
      <button
        class="navbar-toggler"
        type="button"
        data-bs-toggle="collapse"
        data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent"
        aria-expanded="false"
        aria-label="Toggle navigation"
      >
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
        <ul class="navbar-nav">
          <li class="nav-item">
            <RouterLink :to="{ name: 'products' }" class="nav-link">
              Productos
            </RouterLink>
          </li>
          <li class="nav-item">
            <RouterLink :to="{ name: 'cart' }" class="nav-link">
              Carrito
            </RouterLink>
          </li>
          <li class="nav-item">
            <RouterLink :to="{ name: 'order' }" class="nav-link">
              Mis Pedidos
            </RouterLink>
          </li>
        </ul>
        <form class="d-flex">
          <button type="button" class="btn btn-outline-success m-1" v-if="!authStore.user">
            <router-link :to="{ name: 'login' }" class="nav-link">Iniciar Sesión</router-link>
          </button>
          <button type="button" class="btn btn-outline-success m-1">
            <router-link :to="{ name: 'register' }" class="nav-link">Registrarse</router-link>
          </button>
          <button type="button" class="btn btn-outline-success m-1" v-if="authStore.user">
            <span class="text-white">{{ authStore.user.full_name }}</span>
            <v-icon name="co-account-logout" inverse="true" scale="1.3" fill="red" @click="authStore.logout()" />
          </button>
        </form>
      </div>
    </div>
  </nav>
</template>

<script setup>
import { useAuthStore } from '../stores/auth'
const authStore = useAuthStore()
</script>

<style scoped>
.navbar-brand h2 {
  color: #fff; 
}

.talento-title {
  transition: text-shadow 0.3s ease; /* Agrega una transición suave */
}

.talento-title:hover {
  text-shadow: 0 0 10px rgba(8, 248, 188, 0.5); /* Agrega una sombra permanente */
}

.nav-link {
  color: #fff !important; 
}

.navbar-toggler {
  border-color: #fff; 
}

.btn-outline-success {
  color: #303131; 
  border-color: #ffffff;
}

.btn-outline-success:hover {
  color: #fff; 
  background-color: #18c0cc; 
  border-color: #fcfcfc; 
}
</style>
