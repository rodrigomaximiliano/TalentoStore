<template>
  <section>
    <div id="contact" class="contact-section">
      <div class="container mb-md-1 pt-2">
        <div class="row justify-content-md-center">
          <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6 text-center">
            <h2 class="w-50 mx-auto text-center pt-3 contact-text">Contáctanos</h2>
            <p class="text-secondary mb-4 mb-md-5 contact-text">Estamos aquí para ayudarte con lo que necesites.</p>
          </div>
        </div>
      </div>
      <div class="container pb-2">
        <div class="row justify-content-center align-items-center"> 
          <div class="col-12 col-lg-4"> 
            <img src="../assets/img/contact.png" alt="Descripción de la imagen" class="img-fluid">
          </div>
          <div class="col-12 col-lg-6"> 
            <div class="bg-white border rounded shadow-sm overflow-hidden p-4">
              <form action="#!">
                <div class="mb-2">
                  <label for="fullname" class="form-label">Nombre completo <span class="text-danger">*</span></label>
                  <input type="text" class="form-control" id="fullname" value="" required>
                </div>
                <div class="mb-2">
                  <label for="email" class="form-label">Correo electrónico <span class="text-danger">*</span></label>
                  <div class="input-group">
                    <span class="input-group-text">
                      <v-icon name="md-email" inverse="true" fill="black"></v-icon>
                    </span>
                    <input type="email" class="form-control" id="email" value="" required>
                  </div>
                </div>
                <div class="mb-2">
                  <label for="phone" class="form-label">Número de teléfono</label>
                  <div class="input-group">
                    <span class="input-group-text">
                      <v-icon name="bi-telephone-fill" inverse="true" fill="black"></v-icon>
                    </span>
                    <input type="tel" class="form-control" id="phone" value="">
                  </div>
                </div>
                <div class="mb-2">
                  <label for="message" class="form-label">Mensaje <span class="text-danger">*</span></label>
                  <textarea class="form-control" id="message" rows="3" required></textarea>
                </div>
                <div class="d-grid">
                  <button class="btn btn-primary btn-lg bg-custom-green" type="submit">Enviar</button>
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
  background: whitesmoke;
  padding-top: 0px;
  padding-bottom: 10px;
}

.contact-text {
  margin-bottom: 10px;
}

.bg-custom-green {
  background-color: #303131;
}

.bg-custom-green:hover {
  background-color: #0f86a3;
}

.logo {
  max-width: 150px;
  max-height: 100px;
  margin: 10px;
}

.logo-container {
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  margin-bottom: 20px;
}
</style>
