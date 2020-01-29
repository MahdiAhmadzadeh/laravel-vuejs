<template>
    <form class="form">
        <textarea
                id="body"
                cols="28"
                rows="5"
                class="form-input"
                @keydown="typing"
                v-model="body">
        </textarea>
        <span class="notice">
            Hit Return to send a message
        </span>
    </form>
</template>
<script>
    export default {
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>

<style>
    .form {
        padding: 8px;
    }
    .form-input {
        width: 100%;
        border: 1px solid #d3e0e9;
        padding: 5px 10px;
        outline: none;
    }
    .notice {
        color: #aaa
    }

</style>