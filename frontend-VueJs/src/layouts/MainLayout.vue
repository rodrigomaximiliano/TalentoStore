<script setup>
import NavBar from '@/components/NavBar.vue'
import SliderSection from '@/components/SliderSection.vue'
import WhySection from '@/components/WhySection.vue'
import FooterSection from '@/components/FooterSection.vue'
import ContactSection from "@/components/ContactSection.vue"
import AboutSection from "@/components/AboutSection.vue"
import Marcas from "@/components/Marcas.vue"
</script>

<template>
  <NavBar />
  <SliderSection />
  <Marcas />
  <AboutSection/>
  <WhySection />
  <ContactSection/>
  <FooterSection/>
  <slot></slot>
</template>
