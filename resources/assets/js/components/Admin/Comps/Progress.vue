<template>
    <b-modal id="progress-modal" lazy busy centered no-close-on-backdrop no-close-on-esc body-bg-variant="light" hide-header hide-footer hide-header-close size="md" v-model="progressShow">
        <p class="text-center">Processing</p>
        <div class="d-flex justify-content-center">
            <progress></progress>
        </div>
    </b-modal>
</template>

<script>
    export default {
        name: "VueProgress",
        props: {
            progressShow: {
                type: Boolean,
                required: true,
                default: false,
            }
        }
    }
</script>

<style scoped>

</style>