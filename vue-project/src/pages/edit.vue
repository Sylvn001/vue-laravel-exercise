<template>
    <basic-template-vue>
      <nav-vue/>
      <div class="container">
        <form>

          <div class="form-group">
            <label for="name">Name  </label>
            <input v-model="person.name" class="form-control" placeholder="Name" id="name">
          </div>

          <div class="form-group">
            <label for="exampleFormControlSelect1">Gender</label>
            <select v-model="person.gender" class="form-control" id="exampleFormControlSelect1">
              <option>male</option>
              <option>female</option>
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
            <input v-model="person.height" class="form-control" id="height" type="text">  
          </div>
          <a href="/" class="btn btn-outline-info">Cancel </a>
          <button v-on:click="register()" type="submit" class="btn btn-info">Save </button> 
        </form>
      </div>
    </basic-template-vue>
</template>

<script>
import BasicTemplateVue from '@/components/templates/BasicTemplate/BasicTemplateVue'
import NavVue from '@/components/layouts/NavVue/NavVue'
export default {
  name: 'list',
  data () {
    return {
      peoples: { }
    } 
  },
  methods:{

    edit(id)
    {
      alert('to aqui')
      console.log(`delete/${id}`)
       this.$http.delete(this.$urlAPI+`delete/${id}`, {

      })
      .then(response => {
        console.log(response)
      })
      .catch(e => {
        console.log(e)
        
      })
    }
   
  },
  components:{
    BasicTemplateVue,
    NavVue
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
 
</style>
