// initial state
const state = {
    newContacts: []
};

// getters
const getters = {};

// actions
const actions = {};

// mutations
const mutations = {
    saveContact(state, contact){
        state.newContacts.push(contact)
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};