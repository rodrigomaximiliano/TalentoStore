<template>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <div class="container-fluid">
      <router-link :to="{ name: 'home' }" class="navbar-brand">
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
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <router-link :to="{ name: 'home' }" class="nav-link">
              <i class="fas fa-home me-1"></i> Inicio
            </router-link>
          </li>
          <li class="nav-item">
            <router-link :to="{ name: 'products' }" class="nav-link">
              <i class="fas fa-box me-1"></i> Productos
            </router-link>
          </li>
          <li class="nav-item">
            <router-link :to="{ name: 'cart' }" class="nav-link">
              <i class="fas fa-shopping-cart me-1"></i> Carrito
            </router-link>
          </li>
          <li class="nav-item">
            <router-link :to="{ name: 'order' }" class="nav-link">
              <i class="fas fa-receipt me-1"></i> Mis Pedidos
            </router-link>
          </li>
        </ul>
        <form class="search-form d-flex ms-auto">
          <input class="form-control" type="search" placeholder="Buscar productos" aria-label="Search">
          <button class="btn btn-search" type="submit">
            <i class="fas fa-search"></i>
          </button>
        </form>
        <div class="d-flex ms-3">
          <router-link v-if="!authStore.user" :to="{ name: 'register' }" class="btn btn-outline-success m-1">
            <i class="fas fa-user-plus me-1"></i> Registrarse
          </router-link>
          <router-link v-if="!authStore.user" :to="{ name: 'login' }" class="btn btn-outline-success m-1">
            <i class="fas fa-sign-in-alt me-1"></i> Iniciar Sesión
          </router-link>
          <button v-if="authStore.user" type="button" class="btn btn-outline-success m-1" @click="authStore.logout()">
            <i class="fas fa-user me-2"></i> {{ authStore.user.full_name }}
            <i class="fas fa-sign-out-alt ms-1"></i>
          </button>
        </div>
      </div>
    </div>
  </nav>
</template>

<script setup>
import { useAuthStore } from '../stores/auth'
const authStore = useAuthStore()
</script>

<style scoped>
.navbar-brand .logo {
  max-width: 70px;
  max-height: 70px;
  margin-left: 20px;
  transition: transform 0.25s;
}

.navbar-brand .logo:hover {
  animation: tilt-n-move-shaking 0.25s infinite;
}

.nav-link,
.btn-outline-success {
  color: #fff;
  text-shadow: 0 0 10px rgba(86, 243, 248, 0.5);
  transition: text-shadow 0.3s ease;
}

.nav-link:hover,
.btn-outline-success:hover {
  color: #fff;
  background-color: #18c0cc;
  border-color: #fcfcfc;
}

.btn-outline-success {
  color: whitesmoke;
  border-color: #ffffff;
  display: flex;
  align-items: center;
}

.me-2 {
  margin-right: 0.5rem;
}

.ms-2 {
  margin-left: 0.5rem;
}

.search-form {
  position: relative;
  width: 300px;
}

.search-form .form-control {
  width: 100%;
  border-radius: 20px 0 0 20px;
  border-right: 0;
}

.search-form .btn-search {
  border-radius: 0 20px 20px 0;
  border-left: 0;
  background-color: #152020;
  color: #fff;
}

.search-form .btn-search:hover {
  background-color: #282f30;
}

@keyframes tilt-n-move-shaking {
  0%, 100% { transform: translate(0, 0) rotate(0deg); }
  25% { transform: translate(5px, 5px) rotate(5deg); }
  50% { transform: translate(0, 0) rotate(0deg); }
  75% { transform: translate(-5px, 5px) rotate(-5deg); }
}
</style>
