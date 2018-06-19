// initial state
const state = {
    all: [],
    loadStatus: 'loading',
};

// getters
const getters = {};

// actions
const actions = {
    getAllVendors({ commit, state }) {
        axios.get('/admin/vendor')
            .then((response)=>{
                console.log(response)
                state.loadStatus = 'loaded'
                commit('setVendors', response.data)
            })
    }
};

// mutations
const mutations = {
    setVendors(state,vendors){
        state.all = vendors
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};