<template>
  <ul class="list-group mt-3">
    <template v-for="item in items" v-if="showiness(item)">
      <template v-if="item.status == 0">
        <li class="list-group-item">
          <div class="row text-muted">
            <div class="col-1">
              <input :id=item.id type="checkbox" :value=item.status
              @change="statusUpdate($event)"
              checked disabled/>
            </div>
            <div class="col">
              <s>{{item.name}}</s>
            </div>
            <!-- <div :class="{'d-md-flex' : ShowUser}" class="d-none col-md-2">
              <s>Added by: {{item.user}}</s>
            </div> -->
          </div>
        </li>
      </template>
      <template v-else>
        <li class="list-group-item">
          <div class="row">
            <div class="col-1">
              <input :id=item.id type="checkbox" :value=item.status
              @change="statusUpdate($event)"
              />
            </div>
            <div class="col">
              {{item.name}}
            </div>
            <!-- <div :class="{'d-md-flex' : ShowUser}" class="d-none col-md-2">
              Added by: {{item.user}}
            </div> -->
          </div>
        </li>
      </template>
    </template>
  </ul>
</template>

<script>
export default {
  name: 'ShowTodo',
  props: ['items', 'ShowStatus', 'ShowUser'],
  data() {
    return {}
  },

  methods: {
    statusUpdate: function(event) {
      const transport = {
        'id': event.target.id,
        'status': event.target.value
      }
      return this.$emit('statusUpdate', transport)
    },

    showiness: function(item) {
      return (this.ShowStatus !== '') ? item.status == this.ShowStatus : true
    },

  }
}
</script>

<style lang="css">
</style>
