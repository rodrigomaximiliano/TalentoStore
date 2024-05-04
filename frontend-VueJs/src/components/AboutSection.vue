<template>
  <section>
    <div id="local">
      <div class="divider"></div>

    
      <div class="local-contents">
        <div class="wrapper">
          <div class="highlight-text">
            <p class="promo">
              <i class="fas fa-gift"></i> ¡Envío gratis en pedidos superiores a $30.000!
            </p>
            <a href="products" class="btn btn-primary">Ver productos</a>
          </div>
        </div>
        <div class="wrapper">
          <div class="highlight-text">
            <p class="promo">
              <i class="fas fa-star"></i> ¡Promociones exclusivas solo por hoy!
            </p>
            <a href="promotions" class="btn btn-primary">Ver promociones</a>
          </div>
        </div>
        <div class="wrapper">
          <div class="highlight-text">
            <p class="promo">
              <i class="fas fa-tags"></i> ¡Descubre nuestras rebajas de temporada!
            </p>
            <a href="sales" class="btn btn-primary">Ver descuentos</a>
          </div>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { useAuthStore } from '../stores/auth'
const authStore = useAuthStore()

const contents = [
  {
    icon: 'fa-gift',
    text: '¡Envío gratis en pedidos superiores a $30.000!',
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
    text: '¡Descubre nuestras rebajas de temporada!',
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
  padding-left: 30px;
  display: flex;
  justify-content: center;
  align-items: center;
}

.local-contents {
  flex: 1;
  display: flex;
  justify-content: space-between;
  align-items: center;
}

.local-content {
  flex: 1;
  margin: 0 10px; 
}

.wrapper {
  width: 100%; 
  padding-top: 70px;
}

.title {
  color: #333; 
  font-size: 24px; 
  letter-spacing: 1px;
  margin-bottom: 10px; 
}

.highlight-text {
  background-color: rgba(255, 255, 255, 0.9);
  padding: 20px;
  border-radius: 10px;
  box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
  text-align: center;
  transform: translateY(0);
  transition: transform 0.5s ease-in-out;
}

.highlight-text.animate {
  animation: highlight 2s ease-in-out infinite alternate;
}

@keyframes highlight {
  0% { transform: translateY(0); }
  100% { transform: translateY(10px); }
}

.highlight-text h1 {
  font-size: 2rem;
  color: #000000;
  text-transform: uppercase;
  margin-bottom: 20px;
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

.text-body {
  text-align: center;
  font-size: 1.1rem;
  margin-top: 30px;
}
</style>
