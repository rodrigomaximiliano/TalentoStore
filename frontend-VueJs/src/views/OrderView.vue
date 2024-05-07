<template>
  <div>
    <NavBar />
    <div class="row"></div>
    <div class="row mt-3 justify-content-center">
      <div class="col-md-10">
        <div class="table-responsive text-center">
          <table class="table table-bordered table-hover custom-table">
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
                <td><img :src="order.image" alt="Imagen del producto" class="product-image"></td>
                <td>
                  <button
                    v-if="(order.delivery_status == 'Pedido cancelado')"
                    disabled
                    class="btn btn-danger btn-cancel btn-cancel-disabled"
                  >
                    <i class="fas fa-times-circle"></i> Cancelado
                  </button>
                  <button
                    v-else
                    class="btn btn-danger btn-cancel btn-cancel-active"
                    @click="cancelOrder(order.id, order.product_name)"
                  >
                    <i class="fas fa-times-circle"></i> Cancelar
                  </button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</template>

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

<style scoped>
.custom-table {
  box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
  border-radius: 10px;
  background-color: #f9f9f9;
}

.product-image {
  width: 60px;
  height: 60px;
  object-fit: cover;
  border-radius: 50%;
  border: 2px solid #fff;
  box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.btn-cancel {
  font-weight: bold;
  transition: all 0.3s ease;
}

.btn-cancel:hover {
  transform: translateY(-2px);
}

.btn-cancel:disabled {
  cursor: not-allowed;
  opacity: 0.7;
}

.btn-cancel-active {
  background-color: #ff5c5c;
}

.btn-cancel-disabled {
  background-color: #ccc;
}

</style>
