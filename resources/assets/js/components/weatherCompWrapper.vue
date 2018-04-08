<template>
  <div class="container">
    <weather-buttons></weather-buttons>
    <weather-temps :chart-data="dataCollection" :options="options"></weather-temps>
  </div>

</template>

<script>
import weatherTemps from './weatherChart.js';
import weatherButtons from './Chart.vue';
import {weatherState} from '../weatherStore.js'


export default {
  name: 'weatherCharts',
  components: {
    'weather-temps': weatherTemps,
    'weather-buttons': weatherButtons
  },
  data() {
    return {
      sharedState: weatherState.state,
      dataCollection: {datasets: []},
      options: sharedState.options
    }
  }
}
</script>

<style>
</style>
