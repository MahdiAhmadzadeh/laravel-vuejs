<template>
    <div class="message-area" ref="message">
        <message-component
                v-for="message in messages"
                :key="message.id"
                :message="message">
        </message-component>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
<style>
    .message-area {
        height: 400px;
        max-height: 400px;
        overflow-y: scroll;
        padding: 15px;
        border-bottom: 1px solid #eee;
    }
</style>