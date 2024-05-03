import axios from 'axios'
import { defineStore } from 'pinia'
import { show_alerta } from '../functions'
import router from '../router'

export const useAuthStore = defineStore('auth', {
  state: () => ({ authUser: null, authToken: null }),
  getters: {
    user: (state) => state.authUser,
    token: (state) => state.authToken
  },
  actions: {
    async getToken() {
      await axios.get('http://localhost:8000/sanctum/csrf-cookie')
    },
    async login(form) {
      await this.getToken()
      await axios
        .post('http://localhost:8000/api/auth/login', form)
        .then((res) => {
          this.authToken = res.data.token
          this.authUser = res.data.data
          router.push({ name: 'home' })
        })
        .catch((errors) => {
          let desc = ''
          errors.response.data.errors.map((e) => {
            desc = desc + ' ' + e
          })
          show_alerta(desc, 'error', '')
        })
    },
    async register(form) {
      await this.getToken()
      await axios
        .post('http://localhost:8000/api/auth/register', form)
        .then((res) => {
          this.authToken = res.data.token
          this.authUser = res.data.data
          show_alerta(res.data.message, 'success', '')
          setTimeout(() => router.push({ name: 'home' }), 2000)
        })
        .catch((errors) => {
          let desc = ''
          errors.response.data.errors.map((e) => {
            desc = desc + ' ' + e
          })
          show_alerta(desc, 'error', '')
        })
    },
    async logout() {
      await axios
        .get('http://localhost:8000/api/auth/logout', this.authToken)
        .then((this.authToken = null), (this.authUser = null), router.push({ name: 'home' }))
    }
  },
  persist: true
})
