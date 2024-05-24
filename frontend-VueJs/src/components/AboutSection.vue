<template>
  <section>
    <div id="local">
      <div class="divider"></div>
      <div class="local-contents">
        <div class="highlight-text" v-for="(content, index) in contents" :key="index">
          <p class="promo">
            <i :class="['fas', content.icon, 'fa-icon']"></i> {{ content.text }}
          </p>
          <a :href="content.link" class="btn btn-primary">{{ content.buttonText }}</a>
        </div>
      </div>
    </div>
    <div class="banner-container">
      <img src="../assets/img/bannerMsi.jpg" alt="Banner">
    </div>
  </section>
</template>

<script setup>
import { useAuthStore } from '../stores/auth'
const authStore = useAuthStore()

const contents = [
  {
    icon: 'fa-gift',
    text: '¡Envío gratis a partir de pedidos +$80.000!',
    link: 'products',
    buttonText: 'Ver productos'
  },
  {
    icon: 'fa-star',
    text: '¡Promociones exclusivas solo por hoy!',
    link: 'promotions',
    buttonText: 'Ver promociones'
  },
  {
    icon: 'fa-tags',
    text: '¡Mira nuestros descuentos de temporada!',
    link: 'sales',
    buttonText: 'Ver descuentos'
  }
]
</script>

<style scoped>
.divider {
  height: 20px; 
}

#local {
  padding-bottom: 30px;
  padding-top: 30px;
  display: flex;
  justify-content: center;
  background-color: whitesmoke;
}

.local-contents {
  display: flex;
  justify-content: center;
  flex-wrap: wrap;
}

.highlight-text {
  flex-basis: calc(33.33% - 20px); /* Ajustar el ancho de cada elemento */
  margin: 10px; /* Espacio entre los elementos */
  min-height: 100px; /* Alto mínimo para todos los elementos */
  display: flex; /* Alineación vertical */
  flex-direction: column; /* Alineación vertical */
  justify-content: space-between; /* Alinear elementos de manera uniforme */
  background-color: rgba(255, 255, 255, 0.9);
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.highlight-text .promo {
  font-size: 1.2rem;
  color: #020505;
  margin-bottom: 20px;
}

.highlight-text .btn {
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
  transition: background-color 0.2s ease;
}

.highlight-text .btn:hover {
  background-color: #18c7c7;
}

.fa-icon {
  font-size: 2rem; /* Tamaño de los íconos */
  color: #0d9e97; /* Color de los íconos */
  margin-bottom: 10px; /* Espacio entre el icono y el texto */
}

.banner-container {
  width: 100%;
  max-width: 80%;
  overflow: hidden;
  position: relative;
  margin: 10px auto; /* Centrar el contenedor */
}

.banner-container img {
  width: 100%;
  height: auto;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
</style>
