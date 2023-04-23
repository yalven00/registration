<template>
    <div class="container">
    <div class="post">
    <div class="postinfotop">
       <h2>Create New Member:</h2>
    </div>
    <form action="#" class="form newtopic" @submit.prevent="registed">
       
        <div class="accsection">
            <div class="topwrap">
                <div class="userinfo pull-left">
                </div>
                <div class="posttext pull-left">
                    <div>
                        <input v-model="form.name" type="text" placeholder="Name" class="form-control" :class="{ 'is-invalid': form.errors.has('name') }" name="name">
                        <has-error :form="form" field="name"></has-error>
                    </div>
                       <div>
                        <input v-model="form.surname" type="text" placeholder="Surname" class="form-control" :class="{ 'is-invalid': form.errors.has('surname') }" name="surname">
                        <has-error :form="form" field="username"></has-error>
                    </div>
                    <div>
                       <input v-model="form.email" type="text" placeholder="Email" class="form-control" :class="{ 'is-invalid': form.errors.has('email') }" name="email">
                        <has-error :form="form" field="email"></has-error>
                    </div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6">
                             <input v-model="form.password" type="text" placeholder="password" class="form-control" :class="{ 'is-invalid': form.errors.has('password') }" name="password">
                             <has-error :form="form" field="password"></has-error>
                        </div>
                        <div class="col-lg-6 col-md-6">
                            <input v-model="form.password_confirmation" type="text" placeholder="Confirm password" class="form-control" :class="{ 'is-invalid': form.errors.has('password_confirmation') }" name="password_confirmation">
                           <has-error :form="form" field="password_confirmation"></has-error>
                        </div>
                    </div>
                </div>
                <div class="clearfix"></div>
            </div>  
        </div>
       <button type="submit" class="btn btn-primary">New member registration</button>
    </form>
    </div>
</div>
</template>
<script>
    export default {
        data () {
            return {
            form: new Form({
                name: '',
                surname: '',
                email: '',
                password: '',
                password_confirmation: '',
              })
            }
        },
        methods: {
            register () {
                this.form.post('/register/registed')
                    .then(( response ) => { 
                        var attr = document.getElementById("text");
                        attr.innerHTML = response.data.message;  
                        this.form.reset();
                    })
            },
        }       
    }
</script> 