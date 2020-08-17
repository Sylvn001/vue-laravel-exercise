<template>
    <basic-template-vue class="menu">
      <nav-vue/>
      <div class="container">
      
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
  .menu span{
    font-size: 30px;
    border-bottom: 15px solid purple;
  }
</style>
