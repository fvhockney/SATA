<template>
<div class="card">
  <div class="card-header">
    <add-todo @addTodo="addTodo"></add-todo>
  </div>
  <div class="card-body">
    <show-todo :items='todos' @statusUpdate="statusUpdate" :show-status="ShowStatus" :show-user='false'></show-todo>
  </div>
</div>
</template>

<script>
export default {
  name: 'FullTodo',
  data() {
    return {
      todos: [],
      ShowStatus: 'active'
    }
  },

  methods: {
    statusUpdate: function(event) {
      const id = event.id
      const status = event.status
      axios.put(`todo/${id}`, {
          status
        })
        .then(response => {
          this.todos[event.id - 1].status = response.data.status
        })
        .catch(error => {
          console.log(error)
        })
    },

    addTodo: function(newTodo) {
      axios.post('todo', {
          newTodo
        })
        .then(response => {
          console.log(response)
          this.todos.push(response.data[0])
        })
        .catch(error => {
          console.log(error)
        })
    },

    updateShown: function(display) {
      this.ShowStatus = (display == 'all') ? '' : display
    }
  },

  mounted() {
    axios.get('todo')
      .then(response => {
        // console.log(response)
        this.todos = response.data
      })
      .catch(error => {
        console.log(error)
      })
  }

}
</script>

<style lang="css">
</style>
