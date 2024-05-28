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
          <a href="#" class="social-icon"><v-icon name="bi-facebook" scale="1.5" style="color: #3b5998;" /></a>
          <a href="#" class="social-icon"><v-icon name="bi-instagram" scale="1.5" style="color: #c13584;" /></a>
          <a href="#" class="social-icon"><v-icon name="co-twitter" scale="1.5" style="color: #1da1f2;" /></a>
        </div>
      </div>

      <div class="footer-section footer-right">
        <h3 class="footer-heading">Contáctanos</h3>
        <ul class="contact-info">
          <li><span class="footer-text">Email:</span> info@tiendatalento.com</li>
          <li><span class="footer-text">Teléfono:</span> 3794456-7890</li>
          <li><span class="footer-text">Dirección:</span> Corrientes Capital, Argentina</li>
          <a href="#" class="scroll-to-top"><i class="fas fa-arrow-up" style="color: #2ff5e4;"></i></a>
        </ul>
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
  padding: 20px 10px; 
  text-align: center;
}

.footer-content {
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  max-width: 1200px;
  margin: 0 auto;
}

.footer-section {
  flex: 1;
}

.footer-heading {
  font-size: 16px;
  margin-bottom: 10px; 
}

.footer-text {
  font-size: 12px;
  margin-bottom: 5px;
}

.footer-links {
  list-style-type: none;
  padding: 0;
}

.footer-links li {
  margin-bottom: 5px; 
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
  padding: 10px;
}

.social-icon {
  margin: 0 6px; 
  color: white;
}

.social-icon:hover {
  transform: scale(1.1);
}

.contact-info {
  list-style-type: none;
  padding: 0;
  margin: 0;
}

.contact-info li {
  margin-bottom: 5px;
  font-size: 12px;
}

.footer-bottom {
  margin-top: 10px; 
  font-size: 10px; 
}
.scroll-to-top {
  color: #2ff5e4;
  text-decoration: none;
  font-size: 20px;
  transition: transform 0.3s ease; /* Agregar una transición de transformación */
}

.scroll-to-top:hover {
  transform: scale(1.2);
}
</style>
