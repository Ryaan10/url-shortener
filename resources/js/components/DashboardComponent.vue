<template>
    <div class="container">
        <div class="ui grid">
            <div class="five wide column">
                <div class="ui card" style="width: 100%">
                    <div class="content">
                        <div class="header">{{this.add}}</div>
                    </div>
                    <div class="content">
                        <div class="ui feed">
                        <div class="event">
                            <div class="content">
                                <form class="ui form" @submit.prevent="create()">
                                    <div class="field">
                                        <label>Full Name</label>
                                        <input type="text" name="fullname" v-model="user.fullname" placeholder="Full Name">
                                    </div>
                                    <div class="fields">
                                        <div class="field" style="width: 100%">
                                        <label>Gender</label>
                                        <select v-model="user.gender" name="Gender">
                                            <option value="">Gender</option>
                                            <option value="male">Male</option>
                                            <option value="female">Female</option>
                                        </select>
                                        </div>
                                        <div class="field">
                                        <label>Age</label>
                                        <input type="text" name="age" v-model="user.age" placeholder="Age">
                                        </div>
                                    </div>
                                    <div class="field">
                                        <label>Profession</label>
                                        <input type="text" name="profession" v-model="user.profession" placeholder="Profession">
                                    </div>
                                    <div class="field">
                                        <label>Email</label>
                                        <input type="text" name="email" v-model="user.email" placeholder="Email">
                                    </div>
                                    <button class="ui button" type="submit" v-on:click.prevent="create">Create</button>
                                </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
                <flash-message></flash-message>
            </div>
            <div class="eleven wide column">
                <table class="ui yellow celled table">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Fullname</th>
                            <th>Gender</th>
                            <th>Age</th>
                            <th>Profession</th>
                            <th>Email</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody v-if="empty == 0">
                      <tr>
                          <td colspan="4">No users...</td>
                      </tr>
                  </tbody>
                    <tbody v-else v-for="user in users" :key="user.id">
                        <tr>
                            <td>{{user.id}}</td>
                            <td>{{user.fullname}}</td>
                            <td>{{user.gender}}</td>
                            <td>{{user.age}}</td>
                            <td>{{user.profession}}</td>
                            <td>{{user.email}}</td>
                            <td>
                                <router-link :to='"/edit/" + user.id'><i class="edit outline icon"></i></router-link>
                                <i class="trash alternate outline icon" v-on:click="destroy(user.id)"></i>
                            </td>
                        </tr>
                    </tbody>

                </table>
            </div>
        </div>
    </div>
</template>
<script>
    export default {
        data() {
            return {
                add: "Add new user",
                users: {},
                empty: null,
                user: {'fullname': '', 'gender': '', 'age': '', 'profession': '', 'email': ''},
                message: {
                    show: false,
                    message: "Please fill all fields"
                }
            }
        },
        methods: {
            view: function() {
                axios.get('api/view').then(response => {
                    this.users = response.data
                    this.empty = response.data.length
                })
            },
            create: function() {
                var _user = this.user

                if (_user.fullname == '' || _user.gender == '' || _user.age == '' || _user.profession == '' || _user.email == '') {
                    Bus.$emit('flash-message', this.message);
                } else {
                    axios.get('api/store', {params: this.user}).then(response => {
                        this.view();
                        this.user = {
                             user: {'fullname': '', 'gender': '', 'age': '', 'profession': '', 'email': ''},
                        }
                    })
                }
            },
            destroy: function(id) {
                axios.get('api/destroy/'+ id).then(response => {
                    console.log(response.data)
                    this.view();
                })
            }
        },
        mounted: function() {
            console.log('Component mounted.')
            this.view();
        }
    }
</script>
