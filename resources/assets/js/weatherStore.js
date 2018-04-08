import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

export const weatherStore = new Vuex.Store({
  debug: true,
  state: {
    options: {
      responsive: true,
      maintainAspectRatio: false,
      legend: {display: false},
      scales: {
        yAxes: [{
          ticks: {
            max: 45,
            min: 5
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
    cities: {
      telAviv: {
        isChecked: true,
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

  getters: {
    displayData: state => {
      const displayData = { datasets: [] };
        for (var object in state.cities) {
          if (state.cities[object].isChecked) {
            displayData.datasets.push(state.cities[object].data[0])
            displayData.datasets.push(state.cities[object].data[1])
          }
        }
        return displayData;
    }
  },

  mutations: {
    updateChecked(state,payload){
      let city = payload.target.value;
      let status = payload.target.checked;
      state.cities[city].isChecked = status;
    }
  },

  actions: {

  }

})
