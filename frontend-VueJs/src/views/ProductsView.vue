<script setup>
import NavBar from '@/components/NavBar.vue'
import axios from 'axios'
import { ref, onMounted } from 'vue'
import { useAuthStore } from '../stores/auth'
import { sendRequest } from '@/functions'

const form = ref({ quantity: '1' });
const productId = ref();
const authStore = useAuthStore();
axios.defaults.headers.common['Authorization'] = 'Bearer ' + authStore.authToken;

onMounted(() => {
  getProducts();
});

const products = ref([]);

const getProducts = async () => {
  await axios
    .get('http://localhost:8000/api/products')
    .then((response) => {
      products.value = response.data;
      console.log('Products from API:', response.data);
    });
};

const obtainId = (id) => {
  productId.value = id;
};

const addCart = async (event) => {
  event.preventDefault();
  sendRequest('POST', form.value, 'http://localhost:8000/api/add_cart/' + productId.value);
};
</script>

<template>
  <div>
    <NavBar />

    <div class="container">
      <div class="row justify-content-md-center p-4">
        <div
          class="card p-6 shadow-sm"
          style="width: 18rem; margin: 10px; border-radius: 15px; transition: transform 0.2s"
          v-for="product in products"
          :key="product.id"
          @mouseover="hoverEffect($event, true)"
          @mouseout="hoverEffect($event, false)"
        >
          <img :src="`http://localhost:8000/${product.image}`" class="card-img-top" alt="Product Image" style="border-top-left-radius: 15px; border-top-right-radius: 15px"/>
          <div class="card-body d-flex flex-column">
            <h5 class="card-title">{{ product.name }}</h5>
            <p class="card-text" style="flex-grow: 1">{{ product.description }}</p>
            <div class="d-flex justify-content-between align-items-center mt-3">
              <button
                @click="obtainId(product.id)"
                type="button"
                class="btn btn-primary"
                data-bs-toggle="modal"
                data-bs-target="#exampleModal"
              >
                Añadir al carrito
              </button>
              <span class="h6">${{ product.price }}</span>
            </div>
          </div>
        </div>
      </div>
    </div>

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
              <button type="submit" class="btn btn-primary" data-bs-dismiss="modal">
                Añadir al carrito
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  methods: {
    hoverEffect(event, hover) {
      event.currentTarget.style.transform = hover ? 'scale(1.05)' : 'scale(1)';
    }
  }
}
</script>
