// initial state
const state = {
    all: [],
    hotels: [],
    restaurants: [],
    tours: [],
    transports: [],
    attractions: [],
    hotelBaseLink: '/admin/hotel',
    restaurantBaseLink: '/admin/restaurant',
    toursBaseLink: '/admin/tour',
    transportBaseLink: '/admin/transport',
    attractionBaseLink: '/admin/attraction',
    loadStatus: 'loading',
    types: ['hotel', 'restaurant', 'tour', 'transport', 'attraction'],
    service: {
        name: '',
        type: null,
        restaurants: [],
        rooms: [],
        dishes: [],
        fares: [],
        notes: [],
    }
};

// getters
const getters = {
    serviceName(state){
        return state.service.name
    },
    serviceType(state){
        return state.service.type
    }

};

// actions
const actions = {
    getAllHotels({ commit, state }) {
        return axios.get(state.hotelBaseLink)
            .then((response)=>{
                commit('setService', { response, service:'hotels' })
            })
    },
    getAllRestaurants({ commit, state }){
        return axios.get(state.restaurantBaseLink)
            .then((response)=>{
                commit('setService', { response, service:'restaurants' })
            })
    },
    getAllTours({ commit, state }){
        return axios.get(state.toursBaseLink)
            .then((response) => {
                commit('setService', { response, service:'tours' })
            })
    },
    getAllTransports({ commit, state }){
        return axios.get(state.transportBaseLink)
            .then((response) => {
                commit('setService', { response, service:'transports' })
            })
    },
    getAllAttractions({ commit, state }){
        return axios.get(state.attractionBaseLink)
            .then((response) => {
                commit('setService', { response, service:'attractions' })
            })
    },
};

// mutations
const mutations = {
    setService(state, payload){
        state[payload.service] = payload.response['data'][payload.service]
    },
    makeAll(state){
        state.all = _.groupBy(_.concat(state.all, state.hotels, state.restaurants, state.tours, state.transports, state.attractions), (b)=>{return b.type;})
        state.loadStatus = 'loaded'
    },
    setServiceName(state, payload){
        state.service.name = payload
    },
    setServiceType(state,payload){
        state.service.type = payload
    },
    saveAddOn(state,payload){
        state.service[payload[0]].push(payload[1])
    },
    removeServiceAddOn(state,payload){
        console.log(payload)
        state.service[payload[0]].splice(_.indexOf(state.service[payload[1]]), 1)
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};