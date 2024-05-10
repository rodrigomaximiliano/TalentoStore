<template>
  <section class="vh-100">
    <div class="container py-4 h-70">
      <div class="row justify-content-center align-items-center h-100">
        <div class="col">
          <div class="card shadow-lg p-3 mb-5 bg-body rounded">
            <div class="row g-0">
              <div class="col-md-6 col-lg-4 d-none d-md-block align-self-center">
                <img
                  src="/src/assets/img/registro.png"
                  alt="Imagen de registro"
                  class="img-fluid"
                />
              </div>
              <div class="col-md-4 col-lg-5">
                <div class="card-body p-md-5">
                  <div class="text-center mb-4">
                    <i class="fas fa-cubes fa-2x" style="color: #ff6219;"></i>
                    <h2 class="fw-bold italic mb-0">Registro</h2>
                  </div>
                  <form @submit.prevent="handleSubmit">
                    <div class="mb-4">
                      <input
                        type="text"
                        v-model="form.full_name"
                        class="form-control form-control-lg"
                        placeholder="Nombre completo"
                      />
                    </div>
                    <div class="mb-4">
                      <input
                        type="email"
                        v-model="form.email"
                        class="form-control form-control-lg"
                        placeholder="Correo electrónico"
                      />
                    </div>
                    <div class="mb-4">
                      <input
                        type="number"
                        v-model="form.phone"
                        class="form-control form-control-lg"
                        placeholder="Teléfono"
                      />
                    </div>
                    <div class="mb-4">
                      <input
                        type="text"
                        v-model="form.address"
                        class="form-control form-control-lg"
                        placeholder="Dirección"
                      />
                    </div>
                    <div class="mb-4">
                      <input
                        type="password"
                        v-model="form.password"
                        class="form-control form-control-lg"
                        placeholder="Contraseña"
                      />
                    </div>
                    <div class="mb-4">
                      <input
                        type="password"
                        v-model="form.password_confirmation"
                        class="form-control form-control-lg"
                        placeholder="Confirmar contraseña"
                      />
                    </div>
                    <div class="mb-4">
                      <button type="submit" class="btn btn-primary btn-lg btn-block">Crear cuenta</button>
                    </div>
                  </form>
                  <p class="text-muted mb-0">
                    ¿Ya tienes una cuenta?
                    <router-link :to="{ name: 'login' }">Acceder</router-link>
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
  full_name: '',
  email: '',
  phone: '',
  address: '',
  password: '',
 password_confirmation: '',
})

const handleSubmit = async () => {
  await authStore.register(form.value)
  if (authStore.isAuthenticated) {
    router.push('/') // Redirige a la página de inicio si el registro es exitoso
  }
}
</script>

<style scoped>
.card {
  border: none;
}

.card-body {
  padding: 3rem;
}

.form-control-lg {
  border-radius: 1rem;
}

.btn-lg {
  border-radius: 1rem;
}

.btn-primary {
  background-color: #26647c;
  border-color: #22ebda;
}

.btn-primary:hover {
  background-color: #22cffa;
  border-color: #38cff5;
}
</style>
