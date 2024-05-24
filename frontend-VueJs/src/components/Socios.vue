<template>
  <section>
    <div class="container mt-7">
      <div class="row justify-content-center">
        <div class="col-12 text-center">
          <h3>Algunos de nuestros socios:</h3>
          <div class="logo-container">
            <img src="../assets/img/unne.png" alt="Socio 1" class="logo img-fluid">
            <img src="../assets/img/Logo.png" alt="Socio 3" class="logo img-fluid">
            <img src="../assets/img/polo-it.jpg" alt="Socio 6" class="logo img-fluid">
            <img src="../assets/img/corrienteslogo.jpg" alt="Socio 5" class="logo img-fluid">
            <img src="../assets/img/telco.jpg" alt="Socio 2" class="logo img-fluid">
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
.contact-section {
  background: #f0f0f0;
  padding-bottom: 5px;
}

.form-control {
  padding: 8px 12px; /* Ajustar el espacio dentro de los campos de entrada */
}

.contact-text {
  margin-bottom: 20px; /* Aumentar el espacio entre los elementos de texto */
}

.bg-custom-green {
  background-color: #213a3a;
}

.bg-custom-green:hover {
  background-color: #0f86a3;
}

.logo {
  max-width: 100px;
  max-height: 75px;
  margin: 5px;
  object-fit: contain; /* Ajustar las imágenes para que se contengan dentro de las dimensiones especificadas */
  display: block;
}

.logo-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  margin-bottom: 20px; /* Aumentar el espacio entre los logos */
}
</style>