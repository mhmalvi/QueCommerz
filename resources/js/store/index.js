import { createStore } from "vuex";
export default createStore({
    state() {
        return {
            count: 0,
            cart: {},
            products: [],
        };
    },
    getters: {
        count(state) {
            return state;
        },
        cart(state) {
            return state;
        },
    },
    actions: {
        cartItems(context, payload) {
            context.commit("mutateCart", payload);
        },
    },
    mutations: {
        increment(state, payload) {
            return (state.cart = payload);
        },
        mutateCart(state, payload) {
            return (state.cart = payload);
        },
    },
});
