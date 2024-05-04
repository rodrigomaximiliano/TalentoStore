<script setup>
import NavBar from '@/components/NavBar.vue'
import axios from 'axios'
import router from '../router'
import { ref, onMounted } from 'vue'
import { confirmation } from '@/functions'
import { show_alerta } from '@/functions'
import { useAuthStore } from '@/stores/auth'
const authStore = useAuthStore()
const totalprice = ref(0)
axios.defaults.headers.common['Authorization'] = 'Bearer ' + authStore.authToken
onMounted(() => {
  getCarts()
})
const carts = ref([])
const cashOrder = async () => {
  let res
  axios.get('http://localhost:8000/api/cash_order').then((response) => {
    ;(res = response.data.status),
      show_alerta(response.data.message, 'success', ''),
      setTimeout(() => router.push({ name: 'home' }), 2000)
  })
}
const getCarts = async () => {
  await axios
    .get('http://localhost:8000/api/show_cart')
    .then((response) => (carts.value = response.data))
  const array = carts.value
  for (let i = 0; i < array.length; i++) {
    totalprice.value = totalprice.value + array[i].price
  }
}
const deleteCart = (id, name) => {
  confirmation(name, 'http://localhost:8000/api/remove_cart/' + id, '/cart')
}
</script>

<template>
  <NavBar />
  <div class="row"></div>
  <div class="row mt-3 justify-content-center">
    <div class="col-md-10">
      <div class="table-responsive text-center">
        <table class="table table-bordered table-hover col-10">
          <thead>
            <tr>
              <th>#</th>
              <th>Nombre del producto</th>
              <th>Cantidad</th>
              <th>Precio</th>
              <th>Imagen</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr v-for="(cart, i) in carts" :key="cart.id">
              <td>{{ i + 1 }}</td>
              <td>{{ cart.product_name }}</td>
              <td>{{ cart.quantity }}</td>
              <td>${{ cart.price }}</td>
              <td>{{ cart.image }}</td>
              <td>
                <button
                  class="btn btn-danger"
                  @click="($event) => deleteCart(cart.id, cart.product_name)"
                >
                  Eliminar
                </button>
              </td>
            </tr>
          </tbody>
        </table>
        <h2 class="text-center">Total price : ${{ totalprice }}</h2>
        <button style="margin-left: 6px" type="button" class="btn btn-primary" @click="stripe">
          Pagar
        </button>
      </div>
    </div>
  </div>
</template>
