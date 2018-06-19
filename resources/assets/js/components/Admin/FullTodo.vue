<template>
        <div class="card">
            <div class="card-header">
                <add-todo @addTodo="addTodo"></add-todo>
            </div>
            <div class="card-body">
                <filter-todo @updateShown="updateShown"></filter-todo>
                <show-todo :items='todos' @statusUpdate="statusUpdate" :show-status="ShowStatus"
                           :show-user='true'></show-todo>
            </div>

        </div>
</template>

<script>
    import AddTodo from './AddTodo';
    import FilterTodo from './FilterTodo';
    import ShowTodo from './ShowTodo';

    export default {
        name: 'FullTodo',
        components: {AddTodo, FilterTodo, ShowTodo},
        data() {
            return {
                todos: [],
                ShowStatus: 1
            }
        },

        methods: {

            statusUpdate: function (event) {
                const todo = event.id
                const status = event.status
                axios.put(`/admin/todo/${todo}`, {
                    status
                })
                    .then(response => {
                        const updateItem = this.todos.find((element) => {
                            return element.id == event.id
                        })
                        updateItem.status = response.data.status
                    })
                    .catch(error => {
                        console.log(error)
                    })
            },

            addTodo: function (newTodo) {
                axios.post('/admin/todo', {
                    newTodo
                })
                    .then(response => {
                        console.log(response.data)
                        this.todos.unshift(response.data)
                    })
                    .catch(error => {
                        console.log(error)
                    })
            },

            updateShown: function (display) {
                this.ShowStatus = (display == 'all') ? '' : (display == 'active') ? 1 : 0
            }
        },

        computed: {
            reversedTodos: function () {
                return this.todos.reverse()
            }
        },

        mounted() {
            axios.get('/admin/todo')
                .then(response => {
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
