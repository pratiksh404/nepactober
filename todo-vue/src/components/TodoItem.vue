<template>
  <div class="todo-item">
    <input type="checkbox" v-model="completed" @change="doneEdit" />
    <div v-if="!editing" class="todo-item" @dblclick="editTodo" :class="isTodoCompleted">{{ title }}</div>
    <input
      v-if="editing"
      type="text"
      class="todo-item-edit"
      v-model="title"
      @blur="doneEdit"
      @keyup.enter="doneEdit"
      @keyup.esc="cancelEdit"
      @change="doneEdit"
      v-focus
    />

    <div>
      <button @click="pluralize">Plural</button>
      <button class="remove_item" @click="removeTodo(todo.id)">X</button>
    </div>
  </div>
</template>

<script>
export default {
  name: "todo-item",
  props: {
    todo: {
      type: Object,
      required: true,
    },
    index: {
      type: Number,
      required: true,
    },
    checkAll: {
      type: Boolean,
      required: true,
    },
  },
  watch: {
    checkAll() {
      this.completed = this.checkAll ? true : this.todo.completed;
    },
  },
  directives: {
    focus: {
      // directive defination
      inserted: function (el) {
        el.focus();
      },
    },
  },
  data: function () {
    return {
      id: this.todo.id,
      title: this.todo.title,
      completed: this.todo.completed,
      editing: this.todo.editing,
      beforeEditingCache: "",
    };
  },
  created() {
    eventBus.$on("pluralize", this.handlePluralize);
  },
  beforeDestroy() {
    eventBus.$off("pluralize", this.handlePluralize);
  },
  methods: {
    removeTodo: function (id) {
      this.$store.dispatch("deleteTodo", id);
    },
    editTodo: function () {
      this.beforeEditCache = this.title;
      this.editing = true;
    },
    doneEdit: function () {
      if (this.title == "") {
        this.title = this.beforeEditCache;
      }
      this.editing = false;
      this.$store.dispatch("updateTodo", {
        id: this.id,
        title: this.title,
        completed: this.completed,
        editing: this.editing,
      });
    },
    cancelEdit: function () {
      this.editing = false;
      this.title = this.beforeEditCache;
    },
    isTodoCompleted: function () {
      return {
        title_completed: this.completed,
      };
    },
    pluralize: function () {
      eventBus.$emit("pluralize");
    },
    handlePluralize: function () {
      this.title = this.title + "s";
      this.$store.dispatch("updateTodo", {
        id: this.id,
        title: this.title,
        completed: this.completed,
        editing: this.editing,
      });
    },
  },
};
</script>