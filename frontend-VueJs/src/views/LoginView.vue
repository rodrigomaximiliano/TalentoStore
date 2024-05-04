<template>
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem">
            <div class="row g-0">
              <!-- Imagen (Opcional) -->
              <div class="col-md-6 col-lg-5 d-none d-md-block">
                <!-- Puedes agregar una imagen aquí si es necesario -->
              </div>
              <!-- Formulario de Inicio de Sesión -->
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                  <form @submit.prevent="handleSubmit">
                    <!-- Logo y Título -->
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <img src="C:\Users\Usuario\Desktop\TalentoStore\frontend-VueJs\src\assets\img\a.png" alt="Logo" class="me-6" style="height: 100px" />
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219"></i>
                      <span class="h2 fw-bold italic mb-0">Inicia Sesión</span>
                    </div>
                    <!-- Campo de Correo Electrónico -->
                    <div class="form-outline mb-4">
                      <input
                        type="email"
                        v-model="form.email"
                        class="form-control form-control-lg"
                        placeholder="Correo electrónico"
                      />
                    </div>
                    <!-- Campo de Contraseña -->
                    <div class="form-outline mb-4">
                      <input
                        type="password"
                        v-model="form.password"
                        class="form-control form-control-lg"
                        placeholder="Contraseña"
                      />
                    </div>
                    <!-- Botón de Acceder -->
                    <div class="pt-1 mb-4">
                      <button type="submit" class="btn btn-dark btn-lg btn-block">Acceder</button>
                    </div>
                  </form>
                  <!-- Enlace de Recuperación de Contraseña -->
                  <a class="small text-muted" href="#!">¿Has olvidado tu contraseña?</a>
                  <!-- Enlace de Registro -->
                  <p class="mb-5 pb-lg-2" style="color: #393f81">
                    ¿No tienes una cuenta?
                    <router-link :to="{ name: 'register' }">Regístrate aquí</router-link>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { ref } from 'vue'
import { useAuthStore } from '../stores/auth'


const authStore = useAuthStore()


const form = ref({
  email: '',
  password: ''
})

const handleSubmit = () => {
  authStore.login(form.value)
}
</script>
