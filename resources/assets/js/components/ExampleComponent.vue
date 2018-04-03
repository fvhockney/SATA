<template>
  <div class="form-inline justify-content-around">
    <search-box></search-box>

    <select class="form-control" name="eventType" :value="type" @input="updateType">
      <option value="" selected disabled>Type of Event</option>
      <option v-for="option in selectEvents" :value="option.value">{{ option.display }}</option>
    </select>

    <select class="form-control" :value="country" @input="updateCountry" name="eventCountry">
      <option value='' selected disabled>Select Country</option>
      <option  v-for="option in selectCountries" :value="option.value">{{ option.display }}</option>
    </select>

    <datepicker-range></datepicker-range>

    <div v-for="event in eventsDisplay" class="w-100">
      <h3>{{event.title }}</h3>
      <span class="small text-muted">{{ event.startDate }} to {{ event.endDate }} in {{ event.country }}</span>
      <br>
      <span class="small text-muted">{{ event.type }}</span>
      <p>{{ event.description }}</p>
    </div>

  </div>
</template>

<script>

import DatepickerRange from './DatepickerRange.vue';
import SearchBox from './searchBox.vue';


export default {
  components: {DatepickerRange, SearchBox},

  data(){
    return {

    }
  },

  methods: {
    updateType(e){
      return this.$store.commit('updateType', e.target.value)
    },

    updateCountry(e){
      return this.$store.commit('updateCountry', e.target.value)
    }
  },

  computed: {
    eventsDisplay: function() {
      return this.$store.getters.eventsDisplay
    },

    type: function(){
      return this.$store.state.type
    },

    country: function(){
      return this.$store.state.country
    },

    selectCountries: function(){
      return this.$store.state.selectCountries
    },

    selectEvents: function(){
      return this.$store.state.selectEvents
    }
  }
}

</script>
