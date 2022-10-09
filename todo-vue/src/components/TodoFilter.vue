<template>
  <div>
    <div class="filters">
      <button :class="{active : filter == 'all'}" @click="changeFilter('all')">All</button>
      <button :class="{active : filter == 'active'}" @click="changeFilter('active')">Active</button>
      <button :class="{active : filter == 'completed'}" @click="changeFilter('completed')">Completed</button>
    </div>
  </div>
</template>
<script>
export default {
  name: "todo-filter",
  computed: {
    filter: function () {
      return this.$store.state.filter;
    },
  },
  methods: {
    changeFilter: function (filter) {
      this.$store.dispatch("updateFilter", filter);
    },
  },
};
</script>