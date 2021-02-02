<template>
    <div class="container">
        <div class="ui card" style="width: 30%">
                    <div class="content">
                        <div class="header">Upddate user</div>
                    </div>
                    <div class="content">
                        <div class="ui feed">
                        <div class="event">
                            <div class="content">
                                <form class="ui form">
                                    <div class="field">
                                        <label>Full Name</label>
                                        <input type="text" name="fullname" placeholder="Full Name">
                                    </div>
                                    <div class="fields">
                                        <div class="field" style="width: 100%">
                                        <label>Gender</label>
                                        <select>
                                            <option value="">Gender</option>
                                            <option value="1">Male</option>
                                            <option value="0">Female</option>
                                        </select>
                                        </div>
                                        <div class="field">
                                        <label>Age</label>
                                        <input type="text" placeholder="Age">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label>Profession</label>
                                        <input type="text" name="profession" placeholder="Profession">
                                    </div>
                                    <div class="field">
                                        <label>Email</label>
                                        <input type="text" name="email" placeholder="Email">
                                    </div>
                                    <button class="ui button" type="submit">Update</button>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
    </div>
</template>

<script>
    export default {
        mounted() {
            console.log('Component mounted.')
            console.log($routes.params.id)
        }
    }
</script>
