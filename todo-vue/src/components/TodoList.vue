<template>
  <div>
    <input
      type="text"
      class="title-input"
      placeholder="What's on your mind.. ?"
      v-model="title"
      @keyup.enter="addTodo"
    />
    <todo-item
      v-for="(todo, index) in todosFiltered"
      :key="todo.id"
      :todo="todo"
      :index="index"
      :checkAll="!anyRemaining"
      class="my_todos"
    ></todo-item>

    <div class="option-container space-between">
      <todo-check-all />
      <todo-filter />
      <todo-items-remaining></todo-items-remaining>
    </div>
    <br />
    <div class="center">
      <todo-clear-completed />
    </div>
  </div>
</template>

<script>
import TodoItem from "./TodoItem";
import TodoItemsRemaining from "./TodoItemsRemaining";
import TodoCheckAll from "./TodoCheckAll";
import TodoFilter from "./TodoFilter";
import TodoClearCompleted from "./TodoClearCompleted";

export default {
  name: "todo-list",
  components: {
    TodoItem,
    TodoItemsRemaining,
    TodoCheckAll,
    TodoFilter,
    TodoClearCompleted,
  },
  data() {
    return {
      title: "",
      beforeEditCache: "",
      idForTodo: 3, // Initial Test
    };
  },
  created(){
this.$store.dispatch('retriveTodos')
  },
  methods: {
    addTodo: function () {
      if (this.title != "") {
        this.$store.dispatch("addTodo", {
          id: this.idForTodo,
          title: this.title,
        });
      }
      this.title = "";
      this.idForTodo++;
    },
  },
  computed: {
    remaining: function () {
      return this.$store.getters.remaining;
    },
    anyRemaining: function () {
      return this.$store.getters.anyRemaining;
    },
    todosFiltered: function () {
      return this.$store.getters.todosFiltered;
    },
    showClearCompletedButton: function () {
      return this.$store.getters.showClearCompletedButton;
    },
  },
};
</script>

<!-- Add "scoped" attribute to limit CSS to this component only -->

<style>
.title-input {
  width: 100%;
  padding: 10px 10px;
  font-size: 18px;
  margin-bottom: 16px;
}

.my_todos {
  width: 100%;
  padding: 10px 10px;
  border: 1px solid grey;
  margin-bottom: 16px;
  display: flex;
  align-items: center;
  justify-content: space-between;
}

.remove_item:hover {
  background-color: red;
  color: white;
}

.title-item {
  font-size: 16px;
}

.title-item-edit {
  font-size: 16px;
}

input {
  outline: none;
}

.space-between {
  display: flex;
  justify-content: space-between;
}

.title_completed {
  color: red;
  text-decoration: line-through;
}
.option-container {
  padding: 2em;
}
.active {
  background-color: green;
  color: white;
  padding: 0.5em;
}
.center {
  display: flex;
  justify-content: center;
}
.fade-enter-active,
.fade-leave-active {
  transition: opacity 0.4s;
}

.fade-enter .fade-leave-to {
  opacity: 0;
}
</style>
