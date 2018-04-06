<template>
  <div>
    <input class="form-control" type="text" :value="search" @input='updateSearch' placeholder="Search">
  </div>
</template>

<script>
export default {
  name: 'SearchBox',

  data(){
    return {

    }
  },

  methods: {
    updateSearch (e){
      return this.$store.commit('updateSearch', e.target.value)
    }
  },
  computed: {
    search: function(){
      return this.$store.state.search
    }
  }
}
</script>

<style lang="scss">
</style>
