import Vue from 'vue';
import Vuex from 'vuex';

Vue.use(Vuex);

const date = new Date();

export const store = new Vuex.Store({
  state: {
    events: [
      {id: 1, title: "Shakira: Hips don't lie", country: "Israel", type:"Music", startDate: '21/4/2018', endDate:'22/4/2018', description: "Blah Blah Blah"},
      {id: 2, title: "Hamlet in the Park", country: "Israel", type:"Theater", startDate: '25/4/2018', endDate:'1/5/2018', description: "Blah Blah Blah"},
      {id: 3, title: "Cooking on a Budget", country: "Israel", type:"Cooking", startDate: '28/4/2018', endDate:'28/4/2018', description: "Blah Blah Blah"},
      {id: 4, title: "The Coming Storm: Israel and Lebanon", country: "Israel", startDate: '2/5/2018', endDate:'2/5/2018', type:"Academic", description: "Blah Blah Blah"},
      {id: 5, title: "Celebration of Life: Rabin", country: "Israel", type:"Other", startDate: '5/5/2018', endDate:'7/5/2018', description: "Blah Blah Blah"},
      {id: 6, title: "A New Partnership", country: "Israel", type:"Political", startDate: '10/5/2018', endDate:'10/5/2018', description: "Blah Blah Blah"}
    ],
    selectCountries: [
      {value:'', display:'All'},
      {value:'germany', display:'Germany'},
      {value:'israel', display:'Israel'}
    ],
    selectEvents: [
      {value:'', display:'All'},
      {value:'arts', display:'Arts'},
      {value:'cooking', display:'Cooking'},
      {value:'music', display:'Music'},
      {value:'theater', display:'Theater'},
      {value:'academic', display:'Academic'},
      {value:'political', display:'Political'},
      {value:'other', display:'Other'},
    ],
    search: '',
    type:'',
    country:'',
    displayEvents: [],
    startDisabled: {to: new Date(date.getFullYear(),date.getMonth(),date.getDate())},
    endDisabled: {to: new Date(date.getFullYear(),date.getMonth(),date.getDate())}

  },
  getters: {
    startDisabled: state => {
      return state.startDisabled
    },
    endDisabled: state => {
      return state.endDisabled
    },
    eventsDisplay: state => {
      state.displayEvents = state.events

      return state.displayEvents.filter(event=>{
        return event.title.toLowerCase().match(state.search) && event.type.toLowerCase().match(state.type) && event.country.toLowerCase().match(state.country)
      })
    }
  },

  mutations: {
    updateEnd(state, payload){
      return state.endDisabled.to = payload
    },

    updateSearch(state, search) {
      state.search = search
    },

    updateType(state, type){
      state.type = type
    },

    updateCountry(state, country){
      state.country = country
    }

  },

  actions: {

  }
})
