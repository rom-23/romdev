
<template>
<v-container fluid class="parallax1" id="propos" data-spy>
  <v-container fluid class="headingParallax">
    Development Lab
  </v-container>
<!--  <v-container fluid class="headingParallax">-->
<!--    Php and Javascript-->
<!--  </v-container>-->
</v-container>
</template>

<script>
export default {
  name: 'Jumbotron',

  data() {
    return {};
  },
  methods: {},
  created() {
    // crochets
  },
};
</script>

<style scoped>
 .parallax1{
    background-image: url("../assets/coding-924920_1920.jpg");
   height: 40em;
   position: relative;
   background-position: center;
   background-size: cover;
   background-repeat: no-repeat;
   background-attachment: fixed;
  }
  .headingParallax{
    position: relative;
    text-align: center;
    color: #989898;
    font-size: 350%;
    top: 35%;
    width: 100%;
    text-transform: uppercase;
    letter-spacing: 8px;
    text-shadow: 0 0 10px #000;
  }

 @media (max-width: 768px) {
   .headingParallax{
     font-size: 250%;
   }
 }
</style>
