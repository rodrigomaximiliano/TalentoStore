<template>
  <section>
    <div class="container mt-7">
      <div class="row justify-content-center">
        <div class="col-12 text-center">
          <h3 class="section-title">¡Descubre nuestros increíbles socios!</h3>
          <div class="logo-container">
            <img src="../assets/img/unne.png" alt="Socio 1" class="logo">
            <img src="../assets/img/telco.jpg" alt="Socio 2" class="logo">
            <img src="../assets/img/cteslogo.jpg" alt="Socio 5" class="logo">
            <img src="../assets/img/polo-it.jpg" alt="Socio 3" class="logo">
            <img src="../assets/img/Logo.png" alt="Socio 3" class="logo">
          </div>
        </div>
      </div>
    </div>
    <div class="spacer"></div>
    <footer></footer>
  </section>
</template>

<script setup>
import { useAuthStore } from '../stores/auth'
const authStore = useAuthStore()
</script>

<style scoped>
.section-title {
  font-family: 'Fantasy', sans-serif;
  font-size: 1.25rem;
  font-weight: 600;
  color: #213a3a;
  margin-bottom: 10px;
  text-transform: uppercase;
  letter-spacing: 1px;
}

.logo-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin-top: 20px;
}

.logo {
  max-width: 150px;
  max-height: 100px;
  margin: 10px;
  object-fit: contain;
}
</style>