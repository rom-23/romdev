<template>
  <v-footer padless class="parallax6">
    <v-row justify="center" no-gutters>
      <v-col class="foot py-4 text-center white--text" cols="12">
        {{ new Date().getFullYear() }} — <strong>Vuetify</strong>
      </v-col>
    </v-row>
  </v-footer>
</template>
<script>
export default {
  name: 'Footer',
  data() {
    return {};
  },
  created() {

  },
  methods: {},


};
</script>

<style scoped>
.foot {
  background-color: #1867C0;
}
</style>
