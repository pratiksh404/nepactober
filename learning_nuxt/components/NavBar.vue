<template>
<div>
  <b-navbar toggleable="lg" type="dark" variant="primary">
    <b-navbar-brand href="#">NavBar</b-navbar-brand>

    <b-navbar-toggle target="nav-collapse"></b-navbar-toggle>

    <b-collapse id="nav-collapse" is-nav>
    
        <nuxt-link class="nav-link" to="/">Home</nuxt-link>
        <nuxt-link class="nav-link" to="/product">Products</nuxt-link>


      <!-- Right aligned nav items -->
      <b-navbar-nav class="ml-auto">
        <b-nav-form>
          <b-form-input size="sm" class="mr-sm-2" placeholder="Search"></b-form-input>
          <b-button size="sm" class="my-2 my-sm-0" type="submit">Search</b-button>
        </b-nav-form>

        <b-button size="sm" class="btn btn-danger m-2" @click="back" type="button"> Back </b-button>
        <b-button size="sm" class="btn btn-info m-2" @click="forward" type="button"> Forward </b-button>
      
        <b-nav-item-dropdown right>
          <!-- Using 'button-content' slot -->
          <template #button-content>
            <em>User</em>
          </template>
          <b-dropdown-item><nuxt-link to="/my-rents">My Rents - <b>{{ myRentals.length }}</b></nuxt-link></b-dropdown-item>
        </b-nav-item-dropdown>
      </b-navbar-nav>
    </b-collapse>
  </b-navbar>
</div>
</template>

<script>
import { mapState } from 'vuex';
    export default {
        name: "NavBar",
        methods: {
            back() {
                this.$router.back()
            },
            forward() {
                this.$router.forward()
            }
        },
        computed: {
            ...mapState([
                'myRentals'
            ])
        }
    }
</script>

<style scoped>
.nav-link{
    color: white;
    text-decoration: none;
}
</style>