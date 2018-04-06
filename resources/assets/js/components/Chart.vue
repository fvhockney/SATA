<template>
  <div class="container">
    <!-- <button class="btn btn-primary">Tel Aviv</button>
    <button class="btn btn-secondary">Jerusalem</button>
    <button class="btn btn-danger">Haifa</button>
    <button class="btn btn-warning">Tiberius</button>
    <button class="btn btn-info">Eilat</button>
    <button class="btn btn-dark">Dead Sea</button> -->
    <input name="telAviv" id="telAviv" type="checkbox" class="d-none" value="telAviv" @click="update($event)">
    <label for="telAviv" class="btn" :class="[telAviv.isChecked ? 'btn-primary' : 'btn-outline-primary']">Tel Aviv</label>

    <input name="jerusalem" id="jerusalem" type="checkbox" class="d-none" value="jerusalem" @click="update($event)">
    <label for="jerusalem" class="btn btn-secondary" :class="[jerusalem.isChecked ? 'btn-secondary' : 'btn-outline-secondary']">Jerusalem</label>

    <input name="haifa" id="haifa" type="checkbox" class="d-none" value="haifa" @click="update($event)">
    <label for="haifa" class="btn btn-danger" :class="[haifa.isChecked ? 'btn-danger' : 'btn-outline-danger']">Haifa</label>

    <input name="tiberius" id="tiberius" type="checkbox" class="d-none" value="tiberius" @click="update($event)">
    <label for="tiberius" class="btn btn-warning" :class="[tiberius.isChecked ? 'btn-warning' : 'btn-outline-warning']">Tiberius</label>

    <input name="eilat" id="eilat" type="checkbox" class="d-none" value="eilat" @click="update($event)">
    <label for="eilat" class="btn btn-info" :class="[eilat.isChecked ? 'btn-info' : 'btn-outline-info']">Eilat</label>

    <input name="deadSea" id="deadSea" type="checkbox" class="d-none" value="deadSea" @click="update($event)">
    <label for="deadSea" class="btn btn-dark" :class="[deadSea.isChecked ? 'btn-dark' : 'btn-outline-dark']">Dead Sea</label>

    <weather-temps :chart-data="dataCollection" :options="options"></weather-temps>
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
      options: {
        responsive: true,
        maintainAspectRatio: false,
        legend: {display: false},
        scales: {
          yAxes: [{
            ticks: {
              max: 45
            }
          }],
          xAxes: [{
            type: 'category',
            labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December']
          }]
        },
        tooltips: {
          intersect: false,
          mode: 'index',
        }
      },
      telAviv: {
        isChecked: false,
        data: [
          {
            label: 'Tel Aviv Low',
            borderColor: '#FC2525',
            lineTension:0.15,
            fill: '+1',
            borderwidth: 1,
            backgroundColor: 'rgba(255,0,0,0.5)',
            data: [9,9,10,12,17,19,21,22,20,15,12,9]
          },
          {
            label: 'Tel Aviv High',
            borderColor: '#FC2525',
            lineTension:0.15,
            fill: false,
            borderwidth: 1,
            data: [18,19,20,22,25,28,30,30,31,28,25,19]
          }
        ]
      },

      jerusalem: {
        isChecked: false,
        data: [
          {
            label: 'Jerusalem Low',
            borderColor: '#05CBE1',
            lineTension:0.15,
            fill: '+1',
            borderwidth: 1,
            backgroundColor: 'rgba(5,203,255,0.5)',
            data: [6,7,8,12,15,17,19,19,18,16,12,8]
          },
          {
            label: 'Jerusalem High',
            borderColor: '#05CBE1',
            lineTension:0.15,
            fill: false,
            borderwidth: 1,
            data: [11,15,16,21,25,27,29,29,28,26,19,14]
          }
        ]
      },


      haifa: {
        isChecked: false,
        data: [
          {
            label: 'Haifa Low',
            borderColor: '#FF00CE',
            lineTension:0.15,
            fill: '+1',
            borderwidth: 1,
            backgroundColor: 'rgba(255,0,206,0.5)',
            data: [8,9,12,13,15,18,20,21,20,16,13,9]
          },
          {
            label: 'Haifa High',
            borderColor: '#FF00CE',
            lineTension:0.15,
            fill: false,
            borderwidth: 1,
            data: [17,18,21,26,25,28,30,30,30,27,23,18]
          }
        ]
      },

      tiberius: {
        isChecked: false,
        data: [
          {
            label: 'Tiberius Low',
            borderColor: '#00FF42',
            lineTension:0.15,
            fill: '+1',
            borderwidth: 1,
            backgroundColor: 'rgba(0,255,66,0.5)',
            data: [9,9,11,13,17,20,23,24,22,19,15,11]
          },
          {
            label: 'Tiberius High',
            lineTension:0.15,
            borderColor: '#00FF42',
            fill: false,
            borderwidth: 1,
            data: [18,20,22,27,32,35,37,37,35,32,26,20]
          }
        ]
      },

      eilat:{
        isChecked: false,
        data: [
          {
            label: 'Eilat Low',
            borderColor: '#FF7B00',
            lineTension:0.15,
            fill: '+1',
            borderwidth: 1,
            backgroundColor: 'rgba(255,123,0,0.5)',
            data: [10,11,13,17,21,24,25,26,24,20,16,11]
          },
          {
            label: 'Eilat High',
            borderColor: '#FF7B00',
            lineTension:0.15,
            fill: false,
            borderwidth: 1,
            data: [21,23,26,31,35,37,40,40,36,33,28,23]
          }
        ]
      },

      deadSea: {
        isChecked: false,
        data: [
          {
            label: 'Dead Sea Low',
            borderColor: '#AA00FF',
            lineTension:0.15,
            fill: '+1',
            borderwidth: 1,
            backgroundColor: 'rgba(170,0,255,0.5)',
            data: [11,13,16,20,24,27,28,29,27,24,18,13]
          },
          {
            label: 'Dead Sea High',
            borderColor: '#AA00FF',
            lineTension:0.15,
            fill: false,
            borderwidth: 1,
            data: [20,22,25,29,34,37,39,38,34,32,27,21]
          }
        ]
      }
    }
  },
  mounted () {
    // this.update();
    // this.dataCollection = {
    //   datasets: [
    // {
    //   label: 'Tel Aviv Low',
    //   borderColor: '#FC2525',
    //   lineTension:0.15,
    //   fill: '+1',
    //   borderwidth: 1,
    //   backgroundColor: 'rgba(255,0,0,0.5)',
    //   data: [9,9,10,12,17,19,21,22,20,15,12,9]
    // },
    // {
    //   label: 'Tel Aviv High',
    //   borderColor: '#FC2525',
    //   lineTension:0.15,
    //   fill: false,
    //   borderwidth: 1,
    //   data: [18,19,20,22,25,28,30,30,31,28,25,19]
    // },


    // {
    //   label: 'Jerusalem Low',
    //   borderColor: '#05CBE1',
    //   lineTension:0.15,
    //   fill: '+1',
    //   borderwidth: 1,
    //   backgroundColor: 'rgba(5,203,255,0.5)',
    //   data: [6,7,8,12,15,17,19,19,18,16,12,8]
    // },
    // {
    //   label: 'Jerusalem High',
    //   borderColor: '#05CBE1',
    //   lineTension:0.15,
    //   fill: false,
    //   borderwidth: 1,
    //   data: [11,15,16,21,25,27,29,29,28,26,19,14]
    // },


    // {
    //   label: 'Haifa Low',
    //   borderColor: '#FF00CE',
    //   lineTension:0.15,
    //   fill: '+1',
    //   borderwidth: 1,
    //   backgroundColor: 'rgba(255,0,206,0.5)',
    //   data: [8,9,12,13,15,18,20,21,20,16,13,9]
    // },
    // {
    //   label: 'Haifa High',
    //   borderColor: '#FF00CE',
    //   lineTension:0.15,
    //   fill: false,
    //   borderwidth: 1,
    //   data: [17,18,21,26,25,28,30,30,30,27,23,18]
    // },


    // {
    //   label: 'Tiberius Low',
    //   borderColor: '#00FF42',
    //   lineTension:0.15,
    //   fill: '+1',
    //   borderwidth: 1,
    //   backgroundColor: 'rgba(0,255,66,0.5)',
    //   data: [9,9,11,13,17,20,23,24,22,19,15,11]
    // },
    // {
    //   label: 'Tiberius High',
    //   lineTension:0.15,
    //   borderColor: '#00FF42',
    //   fill: false,
    //   borderwidth: 1,
    //   data: [18,20,22,27,32,35,37,37,35,32,26,20]
    // },


    // {
    //   label: 'Eilat Low',
    //   borderColor: '#FF7B00',
    //   lineTension:0.15,
    //   fill: '+1',
    //   borderwidth: 1,
    //   backgroundColor: 'rgba(255,123,0,0.5)',
    //   data: [10,11,13,17,21,24,25,26,24,20,16,11]
    // },
    // {
    //   label: 'Eilat High',
    //   borderColor: '#FF7B00',
    //   lineTension:0.15,
    //   fill: false,
    //   borderwidth: 1,
    //   data: [21,23,26,31,35,37,40,40,36,33,28,23]
    // },


    // {
    //   label: 'Dead Sea',
    //   borderColor: '#AA00FF',
    //   lineTension:0.15,
    //   fill: '+1',
    //   borderwidth: 1,
    //   backgroundColor: 'rgba(170,0,255,0.5)',
    //   data: [11,13,16,20,24,27,28,29,27,24,18,13]
    // },
    // {
    //   label: 'Dead Sea',
    //   borderColor: '#AA00FF',
    //   lineTension:0.15,
    //   fill: false,
    //   borderwidth: 1,
    //   data: [20,22,25,29,34,37,39,38,34,32,27,21]
    // }
    //
    //   ]
    // }
  },

  computed: {
  },

  methods: {
    update: function (event){
      this.$data[event.target.value].isChecked = event.target.checked
      this.$data.dataCollection.datasets = this.$data[event.target.value].data
      console.log(this.$children[0])
      this.$root.$emit('dataChanged', this.$children[0])
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
