<template>
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem; box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block align-self-center">
                <img
                  src="/src/assets/img/Contact2.png"
                  alt="Descripción de la imagen"
                  style="max-width: 100%; height: auto; display: block; margin: 0 auto;"
                />
              </div>
              <div class="col-md-6 col-lg-7">
                <div class="card-body p-4 p-lg-5 text-black">
                  <form @submit.prevent="handleSubmit">
                    <div class="text-center mb-4">
                      <i class="fas fa-cubes fa-2x" style="color: #ff6219"></i>
                      <h2 class="fw-bold italic mb-0">Iniciar Sesión</h2>
                    </div>
                    <div class="form-outline mb-4">
                      <input
                        type="email"
                        v-model="form.email"
                        class="form-control form-control-lg"
                        placeholder="Correo electrónico"
                      />
                    </div>
                    <div class="form-outline mb-4">
                      <input
                        type="password"
                        v-model="form.password"
                        class="form-control form-control-lg"
                        placeholder="Contraseña"
                      />
                    </div>
                    <div class="mb-4">
                      <button type="submit" class="btn btn-dark btn-lg btn-block">Acceder</button>
                    </div>
                  </form>
                  <a class="small text-muted" href="#!">¿Has olvidado tu contraseña?</a>
                  <p class="mb-0" style="color: #393f81">
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
import { useRouter } from 'vue-router' 

const authStore = useAuthStore()
const router = useRouter() 
const form = ref({
  email: '',
  password: ''
})

const handleSubmit = async () => {
  await authStore.login(form.value)
  if (authStore.isAuthenticated) {
    router.push('/') // Redirige a la página de inicio si el inicio de sesión es exitoso
  }
}
</script>

<style scoped>
</style>
