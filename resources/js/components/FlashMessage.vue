<template>
    <div >
        <div class="ui negative message position" v-bind:class="{hidden: message.show}">
            <div class="header">
                Message
            </div>
                <p>{{message.message}}</p>
        </div>
    </div>
</template>
<script>
export default {
    data() {
        return {
            message: {
                message: '',
                show: true 
            }
        }
    },
    mounted: function() {
        Bus.$on('flash-message', (message) => {
            this.message = message
            console.log(this.message)

            setTimeout(() => {
                this.message = {
                    message: '',
                    show: true 
                }
            }, 3000)
        })
    }
}
</script>

<