<template>
	<tr>
		<td class="product-remove">
			<div>
				<a title="Remove this product" class="remove remove_from_wishlist" href="#">×</a>
			</div>
		</td>
		<td class="product-thumbnail">
			<a href="single-product-fullwidth.html">
				<img width="180" height="180" alt="" class="wp-post-image" :src="item.product.productimages[0].image">
			</a>
		</td>
		<td class="product-name">
			<a href="single-product-fullwidth.html">{{ item.product.product }}</a>
		</td>
		<td class="product-price">
			<ins>
				<span class="woocommerce-Price-amount amount">
					<span class="woocommerce-Price-currencySymbol">£</span>{{ item.product.price }}
				</span>
			</ins>
			<!-- <del>
				<span class="woocommerce-Price-amount amount">
				<span class="woocommerce-Price-currencySymbol">£</span>229.99</span>
			</del> -->
		</td>
		<td class="product-stock-status">
			<span class="wishlist-in-stock">In Stock</span>
		</td>
		<td class="product-add-to-cart">
			<form @submit.prevent="onAddToCart">
				<button class="button add_to_cart_button" type="submit" :disabled="isAdding">{{ isAdding ? "Adding" : "Add to Cart" }}</button>
			</form>
		</td>
	</tr>
</template>

<script>
	import axios from 'axios';

	export default {
		props: ['item'],
		data()
		{
			return {
				isAdding: false
			}
		},
		methods:
		{
			onAddToCart()
			{
				this.isAdding = true;

				axios.post(this.item.product.slug + '/add-to-cart', {
					quantity: 1
				}).then(res => {

				}).finally(() => {
					this.isAdding = false;
				})
			}
		}
	};
</script>