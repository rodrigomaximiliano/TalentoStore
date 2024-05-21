import { createApp } from 'vue'
import { createPinia } from 'pinia'
import { createPersistedState } from 'pinia-plugin-persistedstate'
import App from './App.vue'
import router from './router'
import 'bootstrap/dist/css/bootstrap.min.css'
import 'bootstrap'
import axios from 'axios'
import '@fortawesome/fontawesome-free/css/all.css';
import '@fortawesome/fontawesome-free/js/all.js';

import { OhVueIcon, addIcons } from 'oh-vue-icons'
import {
  BiCartDashFill,
  FaProductHunt,
  MdBordercolorOutlined,
  MdPermcontactcalendarSharp,
  BiFacebook,
  BiInstagram,
  CoTwitter,
  MdEmail,
  BiTelephoneFill,
  HiUserCircle,
  CoAccountLogout
} from 'oh-vue-icons/icons'

window.axios = axios
window.axios.defaults.baseURL = 'http://localhost:8000'

window.axios.defaults.headers.common['Accept'] = 'application/json'
window.axios.defaults.headers.common['Content-Type'] = 'application/json'
window.axios.defaults.headers.common['X-Requested-With'] = 'XMLHttpRequest'
window.axios.defaults.withCredentials = true

addIcons(
  BiCartDashFill,
  FaProductHunt,
  MdBordercolorOutlined,
  MdPermcontactcalendarSharp,
  BiFacebook,
  BiInstagram,
  CoTwitter,
  MdEmail,
  BiTelephoneFill,
  HiUserCircle,
  CoAccountLogout
)

const pinia = createPinia()
pinia.use(
  createPersistedState({
  })
)
const app = createApp(App)
app.component('v-icon', OhVueIcon)
app.use(pinia).use(router)

app.mount('#app')
