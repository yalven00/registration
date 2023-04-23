<template>
    <div class="row">
    <div class="col-sm-4" >
     <h2 align="center">Member Login</h2>
     <form @submit.prevent="LoginData">
     <div class="form-group" align="left">
       <label>Email</label>
       <input type="email" v-model="user.email" class="form-control"  placeholder="Email">
     </div>
    <div class="form-group" align="left">
    <label>Password</label>
    <input type="password" v-model="user.password" class="form-control"  placeholder="Password">
    </div>
     <button type="submit" class="btn btn-primary">Submit</button>
     </form>
   </div>
   </div>
 
</template>
  
   <script>
       import Vue from 'vue';
       import axios from 'axios';
  
     Vue.use(axios)
     export default {
       name: 'Registation',
       data () {
         return {
           result: {},
           user:{
                      email: '',
                      password: ''
           }
         }
       },
       created() {
       },
       mounted() {
             console.log("mounted() called.......");
         },
       methods: {
              LoginData()
              {
               axios.post("login", this.user)
               .then(
                 ({data})=>{
                  console.log(data);
                  try {
                  if (data.status === true) {
                        alert("Login Successfully");
                        this.$router.push({ name: 'Dashboard' })
                        } else {
                        alert("Login failed")
                        }
                        } catch (err) {
                        alert("Error, please try again");
                        }    
                 }
               )
              }
         }
     }
</script>