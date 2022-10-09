import { createStore } from 'vuex'
import axios from 'axios'

export default createStore({
  state: {
    count: 0,
    values: [],
    loading: false,
  },
  mutations: {
      increment (state, value) {
        state.count += value;
        state.values.push(state.count);
      },
      decrement (state, value) {
        state.count -= value;
        state.values.push(state.count);
      },
      loadingStatus(state, status){
        state.loading = status;
      }
  },
  actions: {
    async addRandomNumber(context) {
      context.commit('loadingStatus', true);
       await axios.get("https://www.random.org/integers/?num=1&min=1&max=1000&col=1&base=10&format=plain&rnd=new").then(res => {
        context.commit('loadingStatus', false);
        context.commit('increment', res.data);
      });
    }
  },
  getters: {
      searchedValues: (state) => (value) => {
            let searched_values = [];
            state.values.forEach((number, index) => {
                if(number === value) {
                    searched_values.push(value)
                }
            });
            return [...new Set(searched_values)];
        },
        loadingStatus: (state) => {
            return state.loading;
        }
  }
})
