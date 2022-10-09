<template>
  <h1>{{ title }}</h1>
 <div v-if="showModal">
    <Modal :title="title" :description="description" theme="sale" @closeModal="toggleModal">
      <template v-slot:links>
          <a href="#">Sign Up Now</a>
          <a href="#">More Info</a>
      </template>
    </Modal>
 </div>
 <button @click="toggleModal">Toggle Modal</button>
</template>

<script>
import Modal from './components/Modal.vue'
export default {
  name: 'App',
  components: {
    Modal
  },
  data() {
    return {
      title: 'Hello Vue!',
      description: "This is a modal component",
      showModal: false
    }
  },
  methods: {
    toggleModal() {
      this.showModal = !this.showModal
    }
  },
}
</script>

<style>
#app {
  font-family: Avenir, Helvetica, Arial, sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
  text-align: center;
  color: #2c3e50;
  margin-top: 60px;
}

</style>
