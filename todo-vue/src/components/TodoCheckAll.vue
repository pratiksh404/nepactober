<template>
  <div>
    <label for="checkAllTodos">Check all</label>
    <input type="checkbox" name id="checkAllTodos" :checked="!anyRemaining" @change="allChecked" />
  </div>
</template>
<script>
export default {
  name: "todo-check-all",
  computed: {
    anyRemaining: function () {
      return this.$store.getters.anyRemaining;
    },
  },
  methods: {
    allChecked: function () {
      this.$store.dispatch("checkAll", event.target.checked);
    },
  },
};
</script>
