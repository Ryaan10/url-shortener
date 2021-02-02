<template>
    <div class="container" style="margin: 2%">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">

                    <div class="card-body">
                        <div class="ui card" style="width: 35%">
                            <div class="content">
                                <div class="header">Url Shortener</div>
                            </div>
                            <div class="content">
                                <form class="ui form" method="GET" @submit.prevent="shortenedUrl">
                                    
                                    <div class="field">
                                        <div class="ui action input">
                                            <input type="text" v-model="url" name="url" placeholder="URL">
                                            <button class="ui button blue" v-bind:disabled="isDisabled" type="submit">Submit</button>
                                        </div>
                                        <i style="font-size: 14px">{{ answer }}</i>
                                    </div>  

                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="ui positive transition message" v-bind:hidden="success">
                        <div class="header">
                            Message
                        </div>
                        <p>Shorten link generated successfully.</p>
                    </div>
                    <table class="ui celled table red" >
                        <thead>
                            <tr><th>No.</th>
                            <th>Short Link</th>
                            <th>Original Link</th>
                        </tr></thead>
                        <tbody v-if="empty == 0">
                            <tr>
                                <td colspan="4">No data...</td>
                            </tr>
                        </tbody>
                        <tbody v-else v-for="(url, index) in urls" :key="url.id">
                            <tr>
                            <td data-label="Name">{{ index + 1 }}</td>
                            <td data-label="Age"><a :href="url.original_link" target="_blank">{{ url.short_link }}</a></td>
                            <td data-label="Job">{{ url.original_link }}</td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data() {
            return {
                url: "",
                urls: "",
                answer: "Please enter a url..",
                isDisabled: true,
                empty: "",
                success: true,
                value: "https://www.google.com"
            }
        },

        methods: {
            shortenedUrl: function() {
                this.split = this.url.split("/")[2]
                axios.get('/store-url', {params: {url: this.url, split_url: this.split}}).then(res => {
                    this.get_url()
                    this.url = "";
                    if(res.data.success == true) {
                        this.success = false;
                         setTimeout(() => {
                            this.success = {
                                show: true 
                            }
                        }, 3000)
                    }
                })
            },

            get_url: function() {
                axios.get('/urls').then(res => {
                    this.urls = res.data
                    this.empty = res.data.length
                })
            },

        },

        watch: {
            url: function(){
                if(this.url.split("/")[0] == "https:") {
                    this.answer = 'Valid url..';
                    this.isDisabled = false;

                } else {
                    this.answer = 'Url contains https..';
                    this.isDisabled = true;
                }
                
            }
        }, 

        mounted() {
            this.get_url();
        },

    }
</script>

