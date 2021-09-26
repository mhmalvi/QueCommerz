<template>
  <form
    enctype="multipart/form-data"
    method="post"
    class="cart"
    @submit.prevent="addToCart"
  >
    <button
      class="single_add_to_cart_button button alt mx-0 my-3"
      type="submit"
      :disabled="isLoading"
    >
      <i class="fa fa-spinner fa-spin" v-if="isLoading"></i>
      <span v-else>Add to cart</span>
    </button>
  </form>
</template>
<script>
export default {
  props: ["slug"],
  data() {
    return {
      productSlug: this.slug,
      isLoading: false,
    };
  },
  methods: {
    addToCart() {
      this.isLoading = !this.isLoading;
    },
  },
};
</script>
<style>
</style>