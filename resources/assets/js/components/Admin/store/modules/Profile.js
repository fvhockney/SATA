// initial state
const state = {
    user: {},
    loadStatus: 'loading',
};

// getters
const getters = {};

// actions
const actions = {
    getProfile({ commit, state }, id) {
        axios.get("/admin/profile/"+id)
            .then((response)=>{
                state.loadStatus = 'loaded'
                commit('setProfile', response.data)
            })
    }
};

// mutations
const mutations = {
    setProfile(state,profile){
        state.user = profile
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};