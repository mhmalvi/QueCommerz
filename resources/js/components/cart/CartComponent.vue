<template>
  <div class="cart-wrapper">
    <form method="post" action="#" class="woocommerce-cart-form">
      <table class="shop_table shop_table_responsive cart">
        <thead>
          <tr>
            <th class="product-remove">&nbsp;</th>
            <th class="product-thumbnail">&nbsp;</th>
            <th class="product-name">Product</th>
            <th class="product-price">Price</th>
            <th class="product-quantity">Quantity</th>
            <th class="product-subtotal">Total</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(item, index) in getCartItems.Products" :key="index">
            <td class="product-remove">
              <a class="remove" href="#">×</a>
            </td>
            <td class="product-thumbnail">
              <a href="">
                <img
                  width="180"
                  height="180"
                  alt=""
                  class="wp-post-image"
                  :src="item.thumbnail"
                />
              </a>
            </td>
            <td data-title="Product" class="product-name">
              <div class="media cart-item-product-detail">
                <a href="">
                  <img
                    width="180"
                    height="180"
                    alt=""
                    class="wp-post-image"
                    :src="item.thumbnail"
                  />
                </a>
                <div class="media-body align-self-center">
                  <a href="">{{ item.Title }}</a>
                </div>
              </div>
            </td>
            <td data-title="Price" class="product-price">
              <span class="woocommerce-Price-amount amount">
                <span class="woocommerce-Price-currencySymbol"
                  >${{ item.Price }}</span
                >
              </span>
            </td>
            <td class="product-quantity" data-title="Quantity">
              <div class="quantity">
                <label for="quantity-input">Quantity</label>
                <input
                  id="quantity-input"
                  type="number"
                  :value="item.Quantity"
                  title="Qty"
                  class="input-text qty text"
                  size="4"
                  min="1"
                  max="5"
                />
              </div>
            </td>
            <td data-title="Total" class="product-subtotal">
              <span class="woocommerce-Price-amount amount">
                <span class="woocommerce-Price-currencySymbol">$</span>
                {{ item.TotalPrice }}
              </span>
              <a
                title="Remove this item"
                class="remove"
                href="javascript:void(0)"
                @click="removeFromCart(item.Slug)"
                >×</a
              >
            </td>
          </tr>
          <tr>
            <td class="actions" colspan="6">
              <div class="coupon">
                <label for="coupon_code">Coupon:</label>
                <input
                  type="text"
                  placeholder="Coupon code"
                  value=""
                  id="coupon_code"
                  class="input-text"
                  name="coupon_code"
                />
                <input
                  type="submit"
                  value="Apply coupon"
                  name="apply_coupon"
                  class="button"
                />
              </div>
              <input
                type="submit"
                value="Update cart"
                name="update_cart"
                class="button"
              />
            </td>
          </tr>
        </tbody>
      </table>
      <!-- .shop_table shop_table_responsive -->
    </form>
    <!-- .woocommerce-cart-form -->
    <cart-totals></cart-totals>
    <!-- .cart-collaterals -->
  </div>
  <!-- .cart-wrapper -->
</template>
<script>
import axios from "axios";
import CartTotals from "./CartTotals.vue";
export default {
  components: {
    CartTotals,
  },
  methods: {
    updateCartItem(id, quantity) {
      console.log(id, quantity);
    },
    removeFromCart(product) {
      axios
        .delete(`${product}/remove-from-cart`)
        .then((res) => {
          if (res.data.cart == false) {
            this.message = "Your haven't shop yet!";
            window.location.reload();
          } else {
            this.$store.dispatch("cartItems", res.data.data);
          }
        })
        .catch((error) => {
          console.error(error);
        });
    },
  },
  computed: {
    getCartItems() {
      return this.$store.state.cart;
    },
  },
};
</script>
<style>
</style>