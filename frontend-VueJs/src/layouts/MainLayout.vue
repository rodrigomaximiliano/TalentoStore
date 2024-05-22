<script setup>
import NavBar from '@/components/NavBar.vue'
import SliderSection from '@/components/SliderSection.vue'
import WhySection from '@/components/WhySection.vue'
import FooterSection from '@/components/FooterSection.vue'
import Socios from "@/components/Socios.vue"
import AboutSection from "@/components/AboutSection.vue"
import Marcas from "@/components/Marcas.vue"
</script>

<template>
  <div>
    <NavBar />
    <SliderSection />
    <Marcas />
    <AboutSection/>
    
    <WhySection />
    <Socios/> 

    <FooterSection/>
    <slot></slot>
  </div>
</template>
