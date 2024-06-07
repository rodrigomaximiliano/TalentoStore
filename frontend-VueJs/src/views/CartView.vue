<template>
  <div>
    <NavBar />
    <div class="container">
      <div class="row mt-3 justify-content-center">
        <div class="col-md-10">
          <div class="table-responsive">
            <table class="table table-bordered table-hover custom-table">
              <thead>
                <tr>
                  <th></th>
                  <th>Nombre del producto</th>
                  <th>Cantidad</th>
                  <th>Precio</th>
                  <th>Imagen</th>
                  <th>Acciones</th>
                </tr>
              </thead>
              <tbody>
                <tr v-for="(cart, index) in carts" :key="cart.id">
                  <td>{{ index + 1 }}</td>
                  <td>{{ cart.product_name }}</td>
                  <td>{{ cart.quantity }}</td>
                  <td>${{ cart.price }}</td>
                  <td><img :src="getImageUrl(cart.image)" alt="Imagen del producto" class="product-image"></td>
                  <td>
                    <button class="btn btn-danger btn-delete" @click="deleteCart(cart.id, cart.product_name)">
                      <i class="fas fa-trash-alt"></i> Eliminar
                    </button>
                  </td>
                </tr>
              </tbody>
            </table>
            <!-- Total del carrito -->
            <h2 class="text-center total-price">Total: ${{ totalprice }}</h2>
            <div class="text-center">
              <button type="button" class="btn btn-primary btn-pay" @click="cashOrder">
                <i class="fas fa-money-bill"></i> Pagar
              </button>
              <button type="button" class="btn btn-secondary btn-continue-shopping" @click="continueShopping">
                Continuar comprando
              </button>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</template>

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
  axios.get('http://localhost:8000/api/cash_order').then((response) => {
    show_alerta(response.data.message, 'success', '')
    setTimeout(() => router.push({ name: 'home' }), 2000)
  }).catch((error) => {
    show_alerta(error.response.data.message, 'error', '')
  })
}

const getCarts = async () => {
  await axios.get('http://localhost:8000/api/show_cart').then((response) => {
    carts.value = response.data
    calculateTotalPrice()
  }).catch((error) => {
    show_alerta(error.response.data.message, 'error', '')
  })
}

const deleteCart = (id, name) => {
  confirmation(name, 'http://localhost:8000/api/remove_cart/' + id, '/cart')
}

const continueShopping = () => {
  router.push('/products')
}

const getImageUrl = (image) => {
  return `http://localhost:8000/${image}`
}

const calculateTotalPrice = () => {
  totalprice.value = carts.value.reduce((acc, cart) => acc + cart.price, 0)
}
</script>

<style scoped>
/* Estilo para la tabla */
.custom-table {
  border: 1px solid #ddd;
  border-collapse: collapse;
  width: 100%;
}

/* Estilo para las celdas de la tabla */
.custom-table th, .custom-table td {
  padding: 8px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

/* Estilo para las filas alternas de la tabla */
.custom-table tbody tr:nth-child(even) {
  background-color: #f2f2f2;
}

/* Estilo para la imagen del producto */
.product-image {
  width: 60px;
  height: 60px;
  object-fit: cover;
  border-radius: 50%;
}

/* Estilo para los botones */
.btn {
  padding: 8px 16px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

.btn-danger {
  background-color: #dc3545;
  color: white;
}

.btn-danger:hover {
  background-color: #c82333;
}

.btn-primary {
  background-color: #007bff;
  color: white;
}

.btn-primary:hover {
  background-color: #0056b3;
}

/* Estilo para el contenedor principal */
.container {
  margin-top: 20px;
}

/* Estilo para el contenido dentro del contenedor */
.content {
  display: flex;
  flex-direction: column;
  align-items: center;
}
</style>
