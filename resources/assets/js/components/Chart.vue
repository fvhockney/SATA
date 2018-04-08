<template>
  <div class="container">
    <input name="telAviv" id="telAviv" type="checkbox" class="d-none" value="telAviv" @click="updateChecked($event)">
    <label for="telAviv" class="btn" :class="[this.$store.state.cities.telAviv.isChecked ? 'btn-primary' : 'btn-outline-primary']">Tel Aviv</label>

    <input name="jerusalem" id="jerusalem" type="checkbox" class="d-none" value="jerusalem" @click="updateChecked($event)">
    <label for="jerusalem" class="btn btn-secondary" :class="[this.$store.state.cities.jerusalem.isChecked ? 'btn-secondary' : 'btn-outline-secondary']">Jerusalem</label>

    <input name="haifa" id="haifa" type="checkbox" class="d-none" value="haifa" @click="updateChecked($event)">
    <label for="haifa" class="btn btn-danger" :class="[this.$store.state.cities.haifa.isChecked ? 'btn-danger' : 'btn-outline-danger']">Haifa</label>

    <input name="tiberius" id="tiberius" type="checkbox" class="d-none" value="tiberius" @click="updateChecked($event)">
    <label for="tiberius" class="btn btn-warning" :class="[this.$store.state.cities.tiberius.isChecked ? 'btn-warning' : 'btn-outline-warning']">Tiberius</label>

    <input name="eilat" id="eilat" type="checkbox" class="d-none" value="eilat" @click="updateChecked($event)">
    <label for="eilat" class="btn btn-info" :class="[this.$store.state.cities.eilat.isChecked ? 'btn-info' : 'btn-outline-info']">Eilat</label>

    <input name="deadSea" id="deadSea" type="checkbox" class="d-none" value="deadSea" @click="updateChecked($event)">
    <label for="deadSea" class="btn btn-dark" :class="[this.$store.state.cities.deadSea.isChecked ? 'btn-dark' : 'btn-outline-dark']">Dead Sea</label>

    <weather-temps :chart-data="this.$store.getters.displayData" :options="this.$store.state.options"></weather-temps>
  </div>
</template>

<script>
import weatherTemps from './weatherChart.js';

export default {
  name: 'weatherTemps',
  components: {
    'weather-temps': weatherTemps
  },
  data () {
    return {
      dataCollection: {datasets: []},

    }
  },
  mounted () {
    // this.update();

  },

  computed: {

  },

  methods: {
    updateChecked: function (event){
      return this.$store.commit('updateChecked', event)
    }
  }
}
</script>

<style>
#weatherTemps {
  font-family: 'Avenir', Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}
.container {
  max-width: 800px;
  margin:  0 auto;
}
</style>
