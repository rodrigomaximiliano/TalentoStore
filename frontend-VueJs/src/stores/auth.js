import axios from 'axios' // Importa Axios para realizar solicitudes HTTP
import { defineStore } from 'pinia' // Importa defineStore de Pinia para definir un store
import { show_alerta } from '../functions' // Importa la función show_alerta para mostrar alertas
import router from '../router' // Importa el enrutador para la navegación

// Define el store de autenticación usando Pinia
export const useAuthStore = defineStore('auth', {
  // Estado inicial del store
  state: () => ({
    authUser: null, // Almacena el usuario autenticado
    authToken: null // Almacena el token de autenticación
  }),
  
  // Getters para acceder al estado
  getters: {
    user: (state) => state.authUser, // Retorna el usuario autenticado
    token: (state) => state.authToken // Retorna el token de autenticación
  },
  
  // Acciones para modificar el estado y realizar operaciones asíncronas
  actions: {
    // Obtiene el token CSRF para las solicitudes seguras
    async getToken() {
      await axios.get('http://localhost:8000/sanctum/csrf-cookie')
    },
    
    // Acción para iniciar sesión
    async login(form) {
      await this.getToken() // Obtiene el token CSRF
      await axios
        .post('http://localhost:8000/api/auth/login', form) // Envía la solicitud de inicio de sesión
        .then((res) => {
          this.authToken = res.data.token // Almacena el token de autenticación
          this.authUser = res.data.data // Almacena el usuario autenticado
          router.push({ name: 'home' }) // Navega a la página principal
        })
        .catch((errors) => {
          let desc = ''
          errors.response.data.errors.map((e) => {
            desc = desc + ' ' + e // Concatena los mensajes de error
          })
          show_alerta(desc, 'error', '') // Muestra una alerta de error
        })
    },
    
    // Acción para registrar un nuevo usuario
    async register(form) {
      await this.getToken() // Obtiene el token CSRF
      await axios
        .post('http://localhost:8000/api/auth/register', form) // Envía la solicitud de registro
        .then((res) => {
          this.authToken = res.data.token // Almacena el token de autenticación
          this.authUser = res.data.data // Almacena el usuario autenticado
          show_alerta(res.data.message, 'success', '') // Muestra una alerta de éxito
          setTimeout(() => router.push({ name: 'home' }), 2000) // Navega a la página principal después de 2 segundos
        })
        .catch((errors) => {
          let desc = ''
          errors.response.data.errors.map((e) => {
            desc = desc + ' ' + e // Concatena los mensajes de error
          })
          show_alerta(desc, 'error', '') // Muestra una alerta de error
        })
    },
    
    // Acción para cerrar sesión
    async logout() {
      await axios
        .get('http://localhost:8000/api/auth/logout') // Envía la solicitud de cierre de sesión
        .then(() => {
          this.authToken = null // Elimina el token de autenticación
          this.authUser = null // Elimina el usuario autenticado
          router.push({ name: 'home' }) // Navega a la página principal
        })
    }
  },
  
  // Persistencia del estado del store
  persist: true
})
