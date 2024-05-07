<script setup>
</script>

<template>
<div id="carouselExampleInterval" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active" data-bs-interval="3000">
      <img src="../assets/img/example.png" class="d-block w-100" alt="slide1"style="height: 300px;">
      <div class="carousel-caption d-none d-md-block text-success">
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="../assets/img/slide3.jpg" class="d-block w-100" alt="slide3"style="height: 300px;">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="../assets/img/asus.jpg" class="d-block w-100" alt="slide3"style="height: 300px;">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="../assets/img/example2.jpg" class="d-block w-100" alt="slide3"style="height: 300px;">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
    <div class="carousel-item" data-bs-interval="3000">
      <img src="../assets/img/example3.png" class="d-block w-100" alt="slide3"style="height: 300px;">
      <div class="carousel-caption d-none d-md-block">
      </div>
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleInterval" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</template>