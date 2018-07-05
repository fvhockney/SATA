<template>
    <b-alert :show='errorPresent' dismissible variant="danger" class="overlay-error">
        <h4 class="alert-heading">Error!</h4>
        <p>
            {{ error }}
        </p>
    </b-alert>
</template>

<script>
    export default {
        name: "Error",
        props: {
            error: {
                required: true,
            },
            errorPresent: {
                type: Boolean,
                required: true,
            }
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