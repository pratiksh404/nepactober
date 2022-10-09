import TodoList from "./components/TodoList";
import Landing from "./components/marketing/Landing";
import About from "./components/marketing/About";
import Login from "./components/auth/Login";
import Register from "./components/auth/Register";

const routes = [
  { path: "/", component: Landing },
  { path: "/todo", component: TodoList },
  { path: "/about", component: About },
  { path: "/login", component: Login },
  { path: "/register", component: Register }
];

export default routes;
