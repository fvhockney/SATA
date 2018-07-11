// initial state
const state = {
    errorPresent: false,
    error: [],
};

// getters
const getters = {};

// actions
const actions = {};

// mutations
const mutations = {
    clearError(state){
        state.errorPresent = false
        state.error = []
    },
    setError(state, error){
        state.errorPresent = true
        state.error = error
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};