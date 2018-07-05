<template>
    <b-modal size="lg" no-cloe-on-backdrop no-close-on-esc ok-only lazy :visible="created" @hidden="$emit('hidden')">
        <h4 class="modal-header">Your Record Was Created!!!</h4>
        <div>
            <ul v-for="(value, group) in message">
                <li>{{ group }}</li>
                <template v-if="Array.isArray(value)">
                    <ul v-for="item in value">
                        <li v-if="typeof value === 'string'">{{ value }}</li>
                        <li v-else v-for="(value, key) in item">{{key}}: {{value}}</li>
                    </ul>
                </template>
                <template v-else>
                    <ul>
                        <li v-for="(value, key) in message[group]">{{key}}: {{value}}</li>
                    </ul>
                </template>
            </ul>
        </div>
    </b-modal>
</template>

<script>
    export default {
        name: "CreateConfirm",
        props: {
            message: {
                required: true,
            },
            created: {
                required: true,
            }
        },
    }
</script>

<style scoped>

</style>