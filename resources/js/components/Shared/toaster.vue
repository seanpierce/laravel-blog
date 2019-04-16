<template>
    <div>
        <div
            v-if="$root.success.popped"
            @click="hideToaster('success')"
            class="pop-success">
            {{ $root.success.message }}
        </div>
        <div
            v-if="$root.error.popped"
            @click="hideToaster('error')"
            class="pop-error">
            {{ $root.error.message }}
        </div>
    </div>
</template>

<script>
    export default {
        mounted() {
        },
        methods: {
            hideToaster(type) {
                switch (type) {
                    case "success":
                        this.$root.clearSuccess();
                        break;
                    case "error":
                        this.$root.clearError();
                        break;;
                }
            }
        }
    }
</script>

<style scoped>
.pop-success,
.pop-error {
    width: 90%;
    max-width: 300px;
    padding: 2em;
    color: white;
    opacity: 0.8;
    position: fixed;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    border-radius: 2px;
    font-size: 1.25em;
    z-index: 10;
    cursor: pointer;
}

.pop-success {
    background: #28a745;
}

.pop-error {
    background: #dc3545;
}
</style>
