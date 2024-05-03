<template>
  <footer class="footer">
    <div>
      <p class="footer-text">TalentoStore &copy; Todos Los Derechos Reservados 2024</p>
    </div>
    <div class="iconos mt-2">
      <a href="#" class="icon-link"><v-icon name="bi-facebook" scale="1.5" /></a>
      <a href="#" class="icon-link"><v-icon name="bi-instagram" scale="1.5" /></a>
      <a href="#" class="icon-link"><v-icon name="co-twitter" scale="1.5" /></a>
    </div>
  </footer>
</template>

<script setup>
</script>

<style scoped>
.footer {
  min-height: 80px;
  margin-top: auto;
  opacity: 0;
  animation: fadeIn 1s forwards;
  background-color: #303131 !important; 
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}

.footer-text, .socios-info {
  text-align: center;
  color: white;
}

.iconos {
  display: flex;
  justify-content: center;
}

.icon-link {
  color: white;
  font-size: 20px;
  padding: 0 6px;
}
</style>
