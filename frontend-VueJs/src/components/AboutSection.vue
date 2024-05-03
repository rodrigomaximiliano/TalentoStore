<template>
  <section>
    <div id="local">
      <div class="local-content">
        <div class="wrapper">
          <h2 class="title">Estamos ubicados en Corrientes Capital, Argentina</h2>
          <div class="highlight-text">
            <h1>
              <span class="wrap">¡Descubre nuestras increíbles ofertas!</span>
            </h1>
            <p class="promo">
              <i class="fas fa-gift"></i> ¡Envío gratis en pedidos superiores a $30.000!
            </p>
            <a href="products" class="btn btn-primary">Ver productos</a>
          </div>
          <p class="fs-5 text-body">
            Nos encontramos en la vibrante ciudad de Corrientes, Capital. Siempre estamos listos para establecer colaboraciones y ayudar a nuestros clientes en todo lo que esté a nuestro alcance.
          </p>
        </div>
      </div>
      <!-- Primer anuncio duplicado -->
      <div class="local-content">
        <div class="wrapper">
          <h2 class="title">Otro anuncio</h2>
          <div class="highlight-text">
            <h1>
              <span class="wrap">¡Nuevas promociones te esperan!</span>
            </h1>
            <p class="promo">
              <i class="fas fa-star"></i> ¡Descuentos exclusivos solo por hoy!
            </p>
            <a href="promotions" class="btn btn-primary">Ver promociones</a>
          </div>
          <p class="fs-5 text-body">
            Aprovecha nuestras ofertas especiales y ahorra en tus compras.
          </p>
        </div>
      </div>
      <!-- Segundo anuncio duplicado -->
      <div class="local-content">
        <div class="wrapper">
          <h2 class="title">Otro anuncio más</h2>
          <div class="highlight-text">
            <h1>
              <span class="wrap">¡Grandes descuentos te esperan!</span>
            </h1>
            <p class="promo">
              <i class="fas fa-tags"></i> ¡Descubre nuestras rebajas de temporada!
            </p>
            <a href="sales" class="btn btn-primary">Ver descuentos</a>
          </div>
          <p class="fs-5 text-body">
            No te pierdas nuestras increíbles ofertas en una amplia variedad de productos.
          </p>
        </div>
      </div>
    </div>
  </section>
</template>

<script setup>
import { useAuthStore } from '../stores/auth'
const authStore = useAuthStore()
</script>

<style scoped>
#local {
  padding-bottom: 30px;
  padding-top: 30px;
  padding-left: 30px;
  display: flex;
  justify-content: center;
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
  animation: highlight 2s ease-in-out infinite alternate;
}
@keyframes highlight {
  from { transform: translateY(-5px); }
  to { transform: translateY(5px); }
}
.highlight-text h1 {
  font-size: 2rem;
  color: #18c0cc;
  text-transform: uppercase;
  margin-bottom: 20px;
}
.highlight-text .promo {
  font-size: 1.2rem;
  color: #10a6b1;
  margin-bottom: 20px;
}
.highlight-text .btn {
  background-color: #333;
  color: #fff;
  padding: 10px 20px;
  border-radius: 5px;
  text-decoration: none;
  transition: background-color 0.3s ease;
}
.highlight-text .btn:hover {
  background-color: #555;
}
.text-body {
  text-align: center;
  font-size: 1.1rem;
  margin-top: 30px;
}
</style>
