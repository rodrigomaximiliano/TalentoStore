<template>
  <section>
    <!-- Contenido principal -->
    <div id="contact" class="contact-section">
      <div class="container mb-md-6 pt-5">
        <div class="row justify-content-md-center">
          <div class="col-12 col-md-10 col-lg-8 col-xl-7 col-xxl-6 text-center">
            <h2 class="w-50 mx-auto text-center pt-3">Contáctanos</h2>
            <p class="text-secondary mb-4 mb-md-5">Estamos aquí para ayudarte con lo que necesites.</p>
          </div>
        </div>
      </div>
      <div class="container pb-3">
        <div class="row justify-content-lg-center">
          <div class="col-12 col-lg-9">
            <div class="bg-white border rounded shadow-sm overflow-hidden">
              <form action="#!">
                <div class="row gy-4 gy-xl-5 p-4 p-xl-5">
                  <div class="col-12">
                    <label for="fullname" class="form-label">Nombre completo <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" id="fullname" value="" required />
                  </div>
                  <div class="col-12 col-md-6">
                    <label for="email" class="form-label">Correo electrónico <span class="text-danger">*</span></label>
                    <div class="input-group">
                      <span class="input-group-text">
                        <v-icon name="md-email" inverse="true" fill="black" />
                      </span>
                      <input type="email" class="form-control" id="email" value="" required />
                    </div>
                  </div>
                  <div class="col-12 col-md-6">
                    <label for="phone" class="form-label">Número de teléfono</label>
                    <div class="input-group">
                      <span class="input-group-text">
                        <v-icon name="bi-telephone-fill" inverse="true" fill="black" />
                      </span>
                      <input type="tel" class="form-control" id="phone" value="" />
                    </div>
                  </div>
                  <div class="col-12">
                    <label for="message" class="form-label">Mensaje <span class="text-danger">*</span></label>
                    <textarea class="form-control" id="message" rows="3" required></textarea>
                  </div>
                  <div class="col-12">
                    <div class="d-grid">
                      <button class="btn btn-primary btn-lg bg-custom-green" type="submit">Enviar</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    <!-- Sección para los logos de los socios -->
    <div class="container mt-5">
      <div class="row justify-content-center">
        <div class="col-12 text-center">
          <h3>Algunos de nuestros socios:</h3>
          <div class="logo-container">
            <!-- Logos de los socios -->
            <!-- Logo 1 -->
            <img src="C:\Users\Usuario\Desktop\TalentoStore\frontend-VueJs\src\assets\img\unne.png" alt="Socio 1" class="logo img-fluid">
            <!-- Logo 2 -->
            <img src="C:\Users\Usuario\Desktop\TalentoStore\frontend-VueJs\src\assets\img\telco.jpg" alt="Socio 2" class="logo img-fluid">
            <!-- Logo 3 -->
            <img src="C:\Users\Usuario\Desktop\TalentoStore\frontend-VueJs\src\assets\img\Logo.png" alt="Socio 3" class="logo img-fluid">
            <!-- Logo 4 -->
            <img src="C:\Users\Usuario\Desktop\TalentoStore\frontend-VueJs\src\assets\img\logoCambiarWee.png" alt="Socio 4" class="logo img-fluid">
            <!-- Logo 5 -->
            <img src="C:\Users\Usuario\Desktop\TalentoStore\frontend-VueJs\src\assets\img\corrienteslogo.jpg" alt="Socio 5" class="logo img-fluid">
            <!-- Logo 6 -->
            <img src="C:\Users\Usuario\Desktop\TalentoStore\frontend-VueJs\src\assets\img\polo-it.jpg" alt="Socio 6" class="logo img-fluid">
            <!-- Logo 7 -->
            <img src="C:\Users\Usuario\Desktop\TalentoStore\frontend-VueJs\src\assets\img\devligth.png" alt="Socio 7" class="logo img-fluid">
          </div>
        </div>
      </div>
    </div>

    <!-- Espacio entre contenido principal y footer -->
    <div class="spacer"></div>

    <!-- Footer -->
    <footer>
      <!-- Contenido del footer -->
    </footer>
  </section>
</template>

<script setup>
import { useAuthStore } from '../stores/auth'
const authStore = useAuthStore()
</script>

<style scoped>
.contact-section {
  background: white;
  padding-top: 30px;
  padding-bottom: 30px;
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
}

.spacer {
  height: 50px; /* Ajusta la altura según sea necesario */
}
</style>
