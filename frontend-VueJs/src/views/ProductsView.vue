<script setup>
import NavBar from '@/components/NavBar.vue'
import axios from 'axios'
import { ref, onMounted } from 'vue'
import { useAuthStore } from '../stores/auth'
import { sendRequest } from '@/functions'

const form = ref({ quantity:'1'});
const productId = ref()
const authStore = useAuthStore()
axios.defaults.headers.common['Authorization'] = 'Bearer ' + authStore.authToken

onMounted(() => {
  getProducts()
})

const products = ref([])

const getProducts = async () => {
  await axios
    .get('http://localhost:8000/api/products')
    .then((response) => {
      products.value = response.data;
      console.log('Products from API:', response.data); // Log products from API response
    })
}

const obtainId = async (id) => {
  productId.value = id
}

const addCart = async (event) => {
  event.preventDefault();
  sendRequest('POST', form.value, 'http://localhost:8000/api/add_cart/' + productId.value)
}

const getImageUrl = (productName, imageUrl) => {
  if (imageUrl) {
    // Si la URL de la imagen está disponible en la respuesta de la API, la utilizamos
    return imageUrl;
  } else {
    // Si la URL de la imagen es null, proporcionamos una URL predeterminada o lógica alternativa
    switch (productName) {
      case 'Xiaomi':
        return '../../public/imagen/xiaomi.jpeg';
      case 'Samsung Galaxy S20':
        return '../../public/imagen/samsung.jpg'; // Ajusta la URL de la imagen de Samsung si es diferente
      case 'Iphone 13':
        return '../../public/imagen/iphone13.jpg';
      default:
        return '';
    }
  }
}

</script>

<template>
  <NavBar />
  <div class="row justify-content-md-center p-4">
    <div
      class="card p-6"
      style="width: 18rem; margin: 10px"
      v-for="product in products"
      :key="product.id"
    >
      <img :src="getImageUrl(product.name)" class="card-img-top" />
      <div class="card-body">
        <h5 class="card-title">{{ product.name }}</h5>
        <p class="card-text">{{ product.description }}</p>
        <button
          @click="obtainId(product.id)"
          type="button"
          class="btn btn-primary"
          data-bs-toggle="modal"
          data-bs-target="#exampleModal"
        >
          Añadir al carrito
        </button>
        <span class="h6" style="padding-left: 50px">${{ product.price }}</span>
      </div>
    </div>
  </div>

  <!-- Modal -->
  <div
    class="modal fade"
    id="exampleModal"
    tabindex="-1"
    aria-labelledby="exampleModalLabel"
    aria-hidden="true"
  >
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">
            Especifique la cantidad que desea comprar:
          </h1>
          <button
            type="button"
            class="btn-close"
            data-bs-dismiss="modal"
            aria-label="Close"
          ></button>
        </div>
        <form @submit.prevent="addCart">
          <div class="modal-body mx-auto">
            <input type="number" v-model="form.quantity" min="1" style="width: 100px" />
          </div>
          <div class="modal-footer mx-auto">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-primary" @click="addCart" data-bs-dismiss="modal">
              Añadir al carrito
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

