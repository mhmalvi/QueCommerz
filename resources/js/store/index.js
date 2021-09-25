import { createStore } from "vuex";
import axios from "axios";
export default createStore({
    state() {
        return {
            cart: [],
        };
    },
    getters: {
        getCart: (state) => state.cart,
    },
    actions: {
        loadCartItems({ commit }) {
            axios
                .get("mini-cart")
                .then((res) => {
                    if (res.data.data) {
                        commit("SAVE_CART", res.data.data);
                    }
                })
                .catch((error) => {
                    console.error(error);
                });
        },
    },
    mutations: {
        SAVE_CART(state, payload) {
            state.cart = payload;
        },
    },
});
