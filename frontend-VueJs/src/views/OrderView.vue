<script setup>
import NavBar from '@/components/NavBar.vue'
import axios from 'axios'
import { ref, onMounted } from 'vue'
import { confirmationGet } from '@/functions'
import { useAuthStore } from '@/stores/auth'
const authStore = useAuthStore()
axios.defaults.headers.common['Authorization'] = 'Bearer ' + authStore.authToken
onMounted(() => {
  getOrders()
})
const orders = ref([])
const getOrders = async () => {
  await axios
    .get('http://localhost:8000/api/show_order')
    .then((response) => (orders.value = response.data))
}
const cancelOrder = (id, name) => {
  confirmationGet(name, 'http://localhost:8000/api/cancel_order/' + id, '/order')
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
              <th>Estado de pago</th>
              <th>Estado de entrega</th>
              <th>Imagen</th>
              <th>Acciones</th>
            </tr>
          </thead>
          <tbody class="table-group-divider">
            <tr v-for="(order, i) in orders" :key="order.id">
              <td>{{ i + 1 }}</td>
              <td>{{ order.product_name }}</td>
              <td>{{ order.quantity }}</td>
              <td>${{ order.price }}</td>
              <td>{{ order.payment_status }}</td>
              <td>{{ order.delivery_status }}</td>
              <td>{{ order.image }}</td>
              <td v-if="(order.delivery_status == 'Pedido cancelado')">
                <button
                  disabled="disabled"
                  class="btn btn-danger"
                  @click="($event) => cancelOrder(order.id, order.product_name)"
                >
                  Cancelar
                </button>
              </td>
              <td v-else>
                <button
                  class="btn btn-danger"
                  @click="($event) => cancelOrder(order.id, order.product_name)"
                >
                  Cancelar
                </button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</template>
