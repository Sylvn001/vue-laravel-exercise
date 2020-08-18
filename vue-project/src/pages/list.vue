<template>
    <basic-template-vue>
      <nav-vue/>
      <div class="container">
          <table class="table table-bordered mt-2">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Name</th>
                <th scope="col">Gender</th>
                <th scope="col">Email</th>
                <th scope="col">Address</th>
                <th scope="col">Height</th>
                <th scope="col"></th>
                <th scope="col"></th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="people in peoples" :key="people.id">
                <td scope="row">{{people.id}}</td>
                <td scope="row">{{people.name}}</td>
                <td scope="row">{{people.gender}}</td>
                <td scope="row">{{people.email}}</td>
                <td scope="row">{{people.address}}</td>
                <td scope="row">{{people.height}}</td>
                <td scope="row"> <a href="#"> <i class="fas fa-pen text-dark" v-on:click="edit(people.id)">  </i></a></td>
                <td scope="row"> <a href="#"> <i class="fas fa-trash text-dark" v-on:click="del(people.id)"></i></a></td>
              </tr>
            </tbody>
          </table>

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
    edit(id){
      alert('Ae')
    },
    del(id)
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
  created(){
      this.$http.get(this.$urlAPI+`list`, {

      })
      .then(response => {
      this.peoples = response.data.data;
    
      })
      .catch(e => {
        console.log(e)
        
      })
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
