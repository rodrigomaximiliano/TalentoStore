<template>
  <footer class="footer">
    <div class="footer-content">
      <div class="footer-section footer-left">
        <h3 class="footer-heading">Enlaces útiles</h3>
        <ul class="footer-links">
          <li><a href="/" class="footer-link">Inicio</a></li>
          <li><a href="/productos" class="footer-link">Productos</a></li>
          <li><a href="/contacto" class="footer-link">Contacto</a></li>
          <li><a href="/preguntas-frecuentes" class="footer-link">Preguntas Frecuentes</a></li>
        </ul>
      </div>

      <div class="footer-section footer-center">
        <h3 class="footer-heading">¡Síguenos en nuestras redes sociales!</h3>
        <div class="social-icons">
          <a href="#" class="social-icon"><v-icon name="bi-facebook" scale="1.5" /></a>
          <a href="#" class="social-icon"><v-icon name="bi-instagram" scale="1.5" /></a>
          <a href="#" class="social-icon"><v-icon name="co-twitter" scale="1.5" /></a>
        </div>
      </div>

      <div class="footer-section footer-right">
        <h3 class="footer-heading">Contáctanos</h3>
        <p class="footer-text">info@tiendatalento.com</p>
        <p class="footer-text">3794456-7890</p>
        <p class="footer-text">Corrientes Capital, Argentina</p>
      </div>
    </div>
    <div class="footer-bottom">
      <p class="footer-text">&copy; 2024 TalentoStore - Todos los derechos reservados</p>
    </div>
  </footer>
</template>

<style scoped>
.footer {
  background-color: #303131;
  color: white;
  padding: 5px 5px; 
  margin-top: 5px; 
  text-align: center;
}

.footer-content {
  display: flex;
  justify-content: space-between;
  max-width: 1200px;
  margin: 0 auto;
}

.footer-section {
  flex: 1;
}

.footer-left {
  text-align: left; 
}

.footer-center {
  text-align: center; 
}

.footer-right {
  text-align: right; 
}

.footer-heading {
  font-size: 16px;
  margin-bottom: 5px; 
}

.footer-text {
  font-size: 12px;
  margin-bottom: 10px;
}

.footer-links {
  list-style-type: none;
  padding: 0;
}

.footer-links li {
  margin-bottom: 2px; 
}

.footer-links a {
  color: white;
  text-decoration: none;
}

.footer-link:hover {
  text-decoration: underline;
}

.social-icons {
  display: flex;
  justify-content: center;
  padding: 20px;
}

.social-icon {
  margin-right: 6px; 
  color: white;
}

.social-icon:hover {
  transform: scale(1.1);
}

.footer-bottom {
  margin-top: 10px; 
  font-size: 10px; }
</style>
