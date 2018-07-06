// initial state
const emptyService = function () {
    return {
        name: '',
        type: null,
        restaurants: [],
        rooms: [],
        dishes: [],
        fares: [],
        notes: [],
        contacts: [],
    }
}

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
    proofService: {},
    sendingStatus: false,
    errorPresent: false,
    created: false,
    error: '',
    service: {
        name: '',
        type: null,
        restaurants: [],
        rooms: [],
        dishes: [],
        fares: [],
        notes: [],
        contacts: [],
    }
};

// getters
const getters = {
    serviceName(state) {
        return state.service.name
    },
    serviceType(state) {
        return state.service.type
    }

};

// actions
const actions = {
    getAllHotels({commit, state}) {
        return axios.get(state.hotelBaseLink)
            .then((response) => {
                commit('setService', {response, type: 'hotels'})
            })
    },
    getAllRestaurants({commit, state}) {
        return axios.get(state.restaurantBaseLink)
            .then((response) => {
                commit('setService', {response, type: 'restaurants'})
            })
    },
    getAllTours({commit, state}) {
        return axios.get(state.toursBaseLink)
            .then((response) => {
                commit('setService', {response, type: 'tours'})
            })
    },
    getAllTransports({commit, state}) {
        return axios.get(state.transportBaseLink)
            .then((response) => {
                commit('setService', {response, type: 'transports'})
            })
    },
    getAllAttractions({commit, state}) {
        return axios.get(state.attractionBaseLink)
            .then((response) => {
                commit('setService', {response, type: 'attractions'})
            })
    },
    sendService({commit, state}, contacts) {
        state.service.contacts = contacts
        state.sendingStatus = true
        return axios.post('/admin/' + state.service.type, state.service)
            .then(response => {
                state.sendingStatus = false
                if (response.statusText === "Created") {
                    commit('setProofService', response.data.data)
                    commit('Contacts/resetNewContacts', null, { root: true })
                    commit('resetService')
                } else {
                    commit('setError', response.data.error)
                }
            })
    },
};

// mutations
const mutations = {
    setService(state, payload) {
        state[payload.type] = payload.response.data.data.service
    },
    makeAll(state) {
        state.all = _.groupBy(_.concat(state.all, state.hotels, state.restaurants, state.tours, state.transports, state.attractions), (b) => {
            return b.type;
        })
        state.loadStatus = 'loaded'
    },
    setServiceName(state, payload) {
        state.service.name = payload
    },
    setServiceType(state, payload) {
        state.service.type = payload
    },
    saveAddOn(state, payload) {
        let existing = _.filter(state.service[payload[0]], c => {
            return c.localId === payload[1].localId
        })[0]
        typeof existing !== "undefined" ?
            existing = payload[1] :
            state.service[payload[0]].push(payload[1]);
    },
    removeServiceAddOn(state, payload) {
        state.service[payload[0]].splice(_.indexOf(state.service[payload[1]]), 1)
    },
    setProofService(state, payload) {
        state.created = true
        state.proofService = payload
    },
    resetService(state) {
        Object.assign(state.service, emptyService())
    },
    setError(state, payload) {
        state.errorPresent = true
        state.error = payload
    },
    resetProofService(state) {
        state.proofService = {}
        state.created = false
    },
    clearError(state){
        state.error = ''
        state.errorPresent = false
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};