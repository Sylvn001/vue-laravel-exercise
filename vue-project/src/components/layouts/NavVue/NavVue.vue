<template>
    <nav class="navbar navbar-expand-lg navbar-light bg-light" id="menu">
        <div class="collapse navbar-collapse" id="navbarColor03">
            <ul class="navbar-nav m-auto">
                <li class="nav-item ">
                <a class="nav-link" href="/">List <span class="sr-only">List</span></a>
                </li>

                <li class="nav-item active">
                <a class="nav-link" href="/form">Form</a>
                </li>
            </ul>
        </div>
</nav>

</template>

<script>

export default {
  name: 'NavVue',
  data () {
    return {
     
    }
  },
  components:{
  }
}
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->
<style scoped>
  #menu{
      font-size: 20px;
  }
</style>
