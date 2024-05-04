<template>
  <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #303131;">
    <div class="container-fluid">
      <router-link :to="{ name: 'home' }" >
        <img src="../assets/img/a.png" alt="TalentoStore Icon" class="logo">
      </router-link>
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
            <router-link :to="{ name: 'products' }" class="nav-link">
              Productos
            </router-link>
          </li>
          <li class="nav-item">
            <router-link :to="{ name: 'cart' }" class="nav-link">
              Carrito
            </router-link>
          </li>
          <li class="nav-item">
            <router-link :to="{ name: 'order' }" class="nav-link">
              Mis Pedidos
            </router-link>
          </li>
        </ul>
        <form class="d-flex">
          <router-link v-if="!authStore.user" :to="{ name: 'login' }" class="btn btn-outline-success m-1">Iniciar Sesión</router-link>
          <router-link v-if="!authStore.user" :to="{ name: 'register' }" class="btn btn-outline-success m-1">Registrarse</router-link>
          <button v-if="authStore.user" type="button" class="btn btn-outline-success m-1">
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
.navbar-brand h2,
.nav-link,
.btn-outline-success {
  text-shadow: 0 0 10px rgba(86, 243, 248, 0.5); 
  transition: text-shadow 0.3s ease; 
}

.talento-title {
  color: #fff;
}

.nav-link {
  color: #fff;
}

.navbar-toggler {
  border-color: #fff;
}

.btn-outline-success {
  color: whitesmoke;
  border-color: #ffffff;
}

.btn-outline-success:hover {
  color: #fff;
  background-color: #18c0cc;
  border-color: #fcfcfc;
}
.logo {
  max-width:70px;
  max-height: 70px; /* Ajusta la altura máxima del logo según tu preferencia */
  margin-left: 10px; 
}
</style>