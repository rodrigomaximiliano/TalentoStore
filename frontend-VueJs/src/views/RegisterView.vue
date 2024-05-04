<script setup>
import { ref } from 'vue'
import { useAuthStore } from '../stores/auth'
const authStore = useAuthStore()
const form = ref({
  full_name: '',
  email: '',
  phone: '',
  address: '',
  password: '',
  confirm_password: ''
})
</script>

<template>
  <section class="vh-100">
    <div class="w-50 mx-auto text-center pt-3">
      <div class="card" style="border-radius: 1rem">
        <div class="align-items-center">
          <div class="card-body p-4 p-lg-5 text-black">
            <div class="d-flex align-items-center mb-3 pb-1">
              <i class="fas fa-cubes fa-2x me-3" style="color: #ff6219"></i>
              <span class="h1 fw-bold mb-0">Registro</span>
            </div>
            <form @submit.prevent="$event => authStore.register(form)">
              <div class="form-outline mb-2">
                <input
                  type="text"
                  v-model="form.full_name"
                  class="form-control form-control-lg"
                  placeholder="Nombre completo"
                />
              </div>

              <div class="form-outline mb-2">
                <input
                  type="email"
                  v-model="form.email"
                  class="form-control form-control-lg"
                  placeholder="Correo electrónico"
                />
              </div>

              <div class="form-outline mb-2">
                <input
                  type="number"
                  v-model="form.phone"
                  class="form-control form-control-lg"
                  placeholder="Teléfono"
                />
              </div>

              <div class="form-outline mb-2">
                <input
                  type="text"
                  v-model="form.address"
                  class="form-control form-control-lg"
                  placeholder="Dirección"
                />
              </div>

              <div class="form-outline mb-2">
                <input
                  type="password"
                  v-model="form.password"
                  class="form-control form-control-lg"
                  placeholder="Contraseña"
                />
              </div>

              <div class="form-outline mb-2">
                <input
                  type="password"
                  v-model="form.password_confirmation"
                  class="form-control form-control-lg"
                  placeholder="Confirmar contraseña"
                />
              </div>

              <div class="pt-1 mb-2">
                <button class="btn btn-dark btn-lg btn-block">
                 Crear cuenta
                </button>
                <p style="color: red;">{{feedback}}</p>
              </div>
            </form>
            <p class="mb-1" style="color: #393f81">
              ¿Ya tienes una cuenta?
              <router-link :to="{ name: 'login' }">Acceder</router-link>
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>
