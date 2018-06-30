<template>
    <div class="panel-body">
        <form class="form-horizontal" @submit.prevent="register">
            <div class="form-group" :class="{'has-error': errors.has('name')}">
                <label for="email" class="col-md-4 control-label">用户名</label>
                <div class="col-md-6">
                    <input v-validate="'required|min:3'" v-model="name" id="name" type="text" class="form-control" name="name" value="" required>
                    <span class="help-block" v-show="errors.has('name')">{{ errors.first('name') }}</span>
                </div>
            </div>

            <div class="form-group" :class="{'has-error': errors.has('email')}">
                <label for="email" class="col-md-4 control-label">邮箱</label>
                <div class="col-md-6">
                    <input v-validate="'required|email'" v-model="email" id="email" type="email" class="form-control" name="email" value="" required>
                    <span class="help-block" v-show="errors.has('email')">{{ errors.first('email') }}</span>
                </div>
            </div>

            <div class="form-group" :class="{'has-error': errors.has('password')}">
                <label for="password" class="col-md-4 control-label">密码</label>

                <div class="col-md-6">
                    <input v-validate="'required|min:6'" v-model="password" id="password" type="password" class="form-control" name="password" required>
                    <span class="help-block" v-show="errors.has('password')">{{ errors.first('password') }}</span>
                </div>
            </div>

            <div class="form-group" :class="{'has-error': errors.has('password_confirmation')}">
                <label for="password-confirm" class="col-md-4 control-label">确认密码</label>
                <div class="col-md-6">
                    <input v-validate="'required|min:6'" id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                    <span class="help-block" v-show="errors.has('password_confirmation')">{{ errors.first('password_confirmation') }}</span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        注册
                    </button>
                </div>
            </div>
        </form>
    </div>
</template>

<script>
    export default {
       data() {
           return {
               name: '',
               email: '',
               password: ''
           }
       },
        methods: {
            register() {
                let formData = {
                    name: this.name,
                    email: this.email,
                    password: this.password
                };

                axios.post('/api/register', formData).then(response => {
                    console.log(response);
                    this.$router.push({name: 'confirm'});
                });
            }
        }
    }
</script>

<style scoped>

</style>