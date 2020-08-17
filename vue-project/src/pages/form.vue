<template>
    <basic-template-vue class="menu">
      <nav-vue/>
      <div class="container mt-5">

        <form>

          <div class="form-group">
            <label for="name">Name  </label>
            <input v-model="person.name" class="form-control" placeholder="Name" id="name">
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Gender</label>
            <select v-model="person.gender" class="form-control" id="exampleFormControlSelect1">
              <option>Male</option>
              <option>Female</option>
            </select>
          </div>

          <div class="form-group">
            <label for="exampleFormControlInput1">Email address</label>
            <input v-model="person.email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="Email">
          </div>

          <div class="form-group">
            <label for="exampleFormControlTextarea1">Address</label>
            <textarea v-model="person.address" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
          </div>

          <div class="form-group">
            <label for="height"> Height </label>
            <input v-model="person.height" class="form-control" type="text">  
          </div>
          <button :v-on="register()" class="btn btn-info">Submit </button>
        </form>
      </div>
    </basic-template-vue>
</template>

<script>
import BasicTemplateVue from '@/components/templates/BasicTemplate/BasicTemplateVue'
import NavVue from '@/components/layouts/NavVue/NavVue'
export default {
  name: 'home',
  data () {
    return {
      person: {name: '' , gender: '', email: '', address: '' , height: ''}
    }
  },
  components:{
    BasicTemplateVue,
    NavVue
  },
  methods:{
     register(){
        this.$http.post(this.$urlAPI+`create`, {
          name: this.person.name,
          gender: this.person.gender,
          email: this.person.email, 
          address: this.person.address,
          height: this.person.height
  
        })
        .then(response => {
        
          if(response.data.status){
            console.log(person);
            this.$router.push('/')
          }else{
            alert('Erro, nao foi possivel cadastrar');
          }
        })
        .catch(e => {
          console.log(e)
         
        })
      }

  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  .menu span{
    font-size: 30px;
    border-bottom: 15px solid purple;
  }
</style>
