<template>
  <section>
    <div id="local">
      <div class="divider"></div>
      <div class="local-contents">
        <div class="highlight-text" v-for="(content, index) in contents" :key="index">
          <div class="card-image-container">
            <div class="card-image" :style="{ backgroundImage: 'url(' + content.image + ')' }"></div>
            <img v-if="content.brandImage" :src="content.brandImage" alt="Brand Logo" class="brand-image">
          </div>
          <p class="promo">{{ content.text }}</p>
          <a :href="content.link" class="btn btn-primary">{{ content.buttonText }}</a>
        </div>
      </div>
    </div>
    <div class="banner-container">
      <img src="../assets/img/landing_home.webp" alt="Banner">
    </div>
  </section>
</template>

<script setup>
import { useAuthStore } from '../stores/auth'
const authStore = useAuthStore()
import placaImg from '@/assets/img/placa.jpg';
import ryzen5Img from '@/assets/img/ryzen5.jpg';
import mouse1Img from '@/assets/img/mouse1.jpg';
import brandLogoGefor from '@/assets/img/gefor.png';
import brandLogoMob from '@/assets/img/mob.png';
import brandLogoMobAmd from '@/assets/img/mobamd.png'; // Importa tus imágenes de marca

const contents = [
  {
    text: '¡Envío gratis en compras mayores a $80.000!',
    link: 'products',
    buttonText: 'Ver productos',
    image: placaImg,
    brandImage: brandLogoGefor // Agrega la imagen de la marca aquí
  },
  {
    text: '¡Promociones exclusivas solo por hoy!',
    link: 'promotions',
    buttonText: 'Ver promociones',
    image: mouse1Img,
    brandImage: brandLogoMob
  },
  {
    text: '¡Mira nuestros descuentos de temporada!',
    link: 'sales',
    buttonText: 'Ver descuentos',
    image: ryzen5Img,
    brandImage: brandLogoMobAmd
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
  flex-basis: calc(33.33% - 20px); 
  margin: 10px; 
  min-height: 100px; 
  display: flex; /* Alineación vertical */
  flex-direction: column; /* Alineación vertical */
  justify-content: space-between; 
  background-color: rgba(255, 255, 255, 0.9);
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  text-align: center;
}

.card-image-container {
  position: relative;
  width: 100%;
  height: 200px; 
}

.card-image {
  width: 100%;
  height: 100%;
  background-size: cover;
  background-position: center;
  border-radius: 10px;
}

.brand-image {
  position: absolute;
  bottom: 10px; 
  right: 10px; 
  width: 100px; 
  height: auto;
  z-index: 1;
}

.highlight-text .promo {
  font-size: 1.2rem;
  color: #020505;
  margin-bottom: 20px;
}

.highlight-text .btn {
  background-color: #ffffff;
  color: #050505;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
  transition: background-color 0.2s ease;
}

.highlight-text .btn:hover {
  background-color: #499797;
}

.banner-container {
  width: 100%;
  max-width: 80%;
  overflow: hidden;
  position: relative;
  margin: 10px auto; 
}

.banner-container img {
  width: 100%;
  height: auto;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
}
</style>
