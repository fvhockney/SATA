// initial state
const state = {
    addressbook: [],
    newContacts: []
};

// getters
const getters = {
    searchableContacts: (state) => {
       return _.map(state.addressbook, c=>{
           return _.pick(c, ['id', 'name'])
       })
    }
};

// actions
const actions = {
    getAddressbook({commit}) {
        axios.get('/admin/contact')
            .then(response => {
                commit('initAddressbook', response.data.data.addressbook)
            })
    }
};

// mutations
const mutations = {
    initAddressbook(state, addressbook){
        state.addressbook = addressbook

    },
    saveContact(state, contact) {
        let existing = _.filter(state.newContacts, c=>{return c.localId === contact.localId})[0]
        if (typeof existing !== 'undefined') {
            existing = contact
        } else {
            state.newContacts.push(contact)
        }
    },
    removeContact(state, contact){
        state.newContacts.splice(_.indexOf(state.newContacts, contact), 1)
    },
    resetNewContacts(state){
        state.newContacts = []
    }
};

export default {
    namespaced: true,
    state,
    getters,
    actions,
    mutations
};