<template>
  <section>
    <div id="contact" class="contact-section">
      <div class="container"> 
        <div class="row justify-content-center align-items-center">
          <div class="col-12 col-lg-4 mb-4 mb-lg-0">
            <img src="../assets/img/contact.png" alt="Imagen de contacto" class="img-fluid">
          </div>
          <div class="col-12 col-lg-6">
            <div class="bg-white border rounded shadow-sm p-3">
              <h2 class="text-center mb-3 contact-text">Contáctanos</h2>
              <p class="text-center mb-3 contact-text">Estamos aquí para ayudarte con lo que necesites.</p>
              <form action="#">
                <div class="mb-3">
                  <label for="fullname" class="form-label">Nombre completo <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="fullname" required>
                </div>
                <div class="mb-3">
                  <label for="email" class="form-label">Correo electrónico <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <span class="input-group-text">
                      <v-icon name="md-email" inverse="true" fill="black"></v-icon>
                    </span>
                    <input type="email" class="form-control" id="email" required>
                  </div>
                </div>
                <div class="mb-3">
                  <label for="phone" class="form-label">Número de teléfono</label>
                  <div class="input-group">
                    <span class="input-group-text">
                      <v-icon name="bi-telephone-fill" inverse="true" fill="black"></v-icon>
                    </span>
                    <input type="tel" class="form-control" id="phone">
                  </div>
                </div>
                <div class="mb-3">
                  <label for="message" class="form-label">Mensaje <span class="text-danger">*</span></label>
                  <textarea class="form-control" id="message" rows="3" required></textarea>
                </div>
                <div class="d-grid">
                  <button class="btn btn-primary bg-custom-green" type="submit">Enviar</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-12 text-center">
          <h3>Algunos de nuestros socios:</h3>
          <div class="logo-container">
            <img src="../assets/img/unne.png" alt="Socio 1" class="logo img-fluid">
            <img src="../assets/img/telco.jpg" alt="Socio 2" class="logo img-fluid">
            <img src="../assets/img/Logo.png" alt="Socio 3" class="logo img-fluid">
            <img src="../assets/img/logoCambiarWee.png" alt="Socio 4" class="logo img-fluid">
            <img src="../assets/img/corrienteslogo.jpg" alt="Socio 5" class="logo img-fluid">
            <img src="../assets/img/polo-it.jpg" alt="Socio 6" class="logo img-fluid">
            <img src="../assets/img/devligth.png" alt="Socio 7" class="logo img-fluid">
          </div>
        </div>
      </div>
    </div>
    <div class="spacer"></div>
    <footer>
    </footer>
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
}

.logo-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin-bottom: 20px; /* Aumentar el espacio entre los logos */
}
</style>
