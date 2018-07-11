<template>
    <b-alert :show='errorPresent' dismissible variant="danger" class="overlay-error" @dismissed="clearError">
        <h4 class="alert-heading">Error!</h4>
        <p>
            {{ error }}
        </p>
    </b-alert>
</template>

<script>
    import {mapState, mapMutations} from 'vuex';

    export default {
        name: "Error",
        computed:{
            ...mapState('Error', {
                errorPresent: 'errorPresent',
                error: 'error'
            })
        },
        methods: {
            ...mapMutations('Error', [
                'clearError'
            ])
        }
    }
</script>

<style lang="scss" scoped>
.overlay-error{
    position: absolute;
    left: 50%;
    top: 10%;
    transform: translateX(-50%);
}
</style>