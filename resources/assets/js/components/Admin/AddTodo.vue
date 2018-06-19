<template>
<div class="input-group">
  <input class="form-control" type="text" placeholder="Add TODO" v-model='newTodo'>
  <div class="input-group-append">
    <button class="btn btn-success" @click="addTodo()">Add</button>
  </div>
</div>
</template>

<script>
export default {
  name: 'AddTodo',
  data() {
    return {
      newTodo: ''
    }
  },

  methods: {
    addTodo: function() {
      this.$emit('addTodo', this.newTodo)
      return this.newTodo = ''
    }
  }
}
</script>

<style lang="scss">
</style>
