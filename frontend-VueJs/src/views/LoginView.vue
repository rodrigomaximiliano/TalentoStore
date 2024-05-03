<script setup>
import { ref } from 'vue'
import { useAuthStore } from '../stores/auth'
const authStore = useAuthStore()
const form = ref({
  email: '',
  password: ''
})
</script>

<template>
  <section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col col-xl-10">
          <div class="card" style="border-radius: 1rem">
            <div class="row g-0">
              <div class="col-md-6 col-lg-5 d-none d-md-block">
               
              </div>
              <div class="col-md-6 col-lg-7 d-flex align-items-center">
                <div class="card-body p-4 p-lg-5 text-black">
                  <form @submit.prevent="($event) => authStore.login(form)">
                    <div class="d-flex align-items-center mb-3 pb-1">
                      <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219"></i>
                      <span class="h1 fw-bold mb-0">TalentoStore</span>
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

                    <div class="pt-1 mb-4">
                      <button class="btn btn-dark btn-lg btn-block">Acceder</button>
                    </div>
                  </form>
                  <a class="small text-muted" href="#!">¿Has olvidado tu contraseña?</a>
                  <p class="mb-5 pb-lg-2" style="color: #393f81">
                    ¿No tienes una cuenta?
                    <router-link :to="{ name: 'register' }">Registrate aquí</router-link>
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
