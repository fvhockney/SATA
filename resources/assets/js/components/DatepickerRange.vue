<template>
  <div class="form-group">
    <datepicker-start
    :bootstrap-styling="true"
    :class="genClass"
    :placeholder='startPlaceholder'
    @input='updateEnd($event)'
    :disabled="disabledStart"></datepicker-start>
    <datepicker-end
    :bootstrap-styling="true"
    :class="genClass"
    :placeholder="endPlaceholder"
    :disabled="disabledEnd"
    ></datepicker-end>
  </div>
</template>

<script>
import Datepicker from 'vuejs-datepicker';

export default {
  name: 'DatepickerRange',

  components: {'datepicker-start':Datepicker, 'datepicker-end':Datepicker,},

  data(){
    return {
      startPlaceholder: 'Start Date',
      endPlaceholder: 'End Date',
      genClass: 'text-dark'
    }
  },
  methods: {
    updateEnd (payload){
      return this.$store.commit('updateEnd', payload)
    }
  },
  computed: {
    disabledStart: function() {
      return this.$store.getters.startDisabled
    },

    disabledEnd: function(){
      return this.$store.getters.endDisabled
    }
  }
}

</script>
