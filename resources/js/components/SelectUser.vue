<template>
    <select class="form-control" v-model="selected_user" @change="changeSelectedUser">
        <option v-for="user in user_list" :value="{id: user.id, text: user.name}">
            {{user.name}}
        </option>
    </select>
</template>
<script>
    export default {
        data() {
            return {
                user_list: null,
                selected_user: null
            }
        },
        beforeCreate() {
            // console.log(this.user_list);
            axios.get('/users')
                .then(response => (this.user_list = response.data));
            console.log(this.user_list);
        },
        methods: {
            changeSelectedUser() {
                this.$parent.$data.selected_user = this.selected_user;
                // console.log(this.$parent.$data.selected_user);
            }
        }
    }
</script>
