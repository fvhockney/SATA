<template>
<div class="d-flex justify-content-around">
  <button id="all" class="btn btn-outline-dark" @click="updateShown($event)">All</button>
  <button id="active" class="btn btn-outline-dark" @click="updateShown($event)">Active</button>
  <button id="completed" class="btn btn-outline-dark" @click="updateShown($event)">Completed</button>
</div>
</template>

<script>
export default {
  name: 'FilterTodo',
  methods: {
    updateShown: function(event) {
      this.$emit('updateShown', event.target.id)
    }
  }
}
</script>

<style lang="scss">

</style>
