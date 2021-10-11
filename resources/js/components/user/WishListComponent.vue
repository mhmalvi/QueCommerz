<template>
	<div>
		<div class="entry-content">
			<form class="woocommerce" method="post" action="#">
				<table class="shop_table cart wishlist_table">
					<thead>
						<tr>
							<th class="product-remove"></th>
							<th class="product-thumbnail"></th>
							<th class="product-name">
								<span class="nobr">Product Name</span>
							</th>
							<th class="product-price">
								<span class="nobr">
									Unit Price
								</span>
							</th>
							<th class="product-stock-status">
								<span class="nobr">
									Stock Status
								</span>
							</th>
							<th class="product-add-to-cart"></th>
						</tr>
					</thead>
					<tbody>
						<!-- wish product component -->
						<wishlist-product-component v-for="(item, index) in wishlist" :key="index" :item="item" @remove="onItemRemoved"/>
					</tbody>
					<tfoot>
						<tr>
							<td colspan="6">
								<div class="yith-wcwl-share">
									<h4 class="yith-wcwl-share-title">Share on:</h4>
									<ul>
										<li style="list-style-type: none; display: inline-block;">
											<a title="Facebook" href="https://www.facebook.com/sharer.php?s=100&amp;p%5Btitle%5D=My+wishlist+on+Tech+Market&amp;p%5Burl%5D=http%3A%2F%2Flocalhost%2F%7Efarook%2Ftechmarket%2Fhome-v1.html%2Fwishlist%2Fview%2FD5ON1PW1PYO1%2F" class="facebook" target="_blank"></a>
										</li>
										<li style="list-style-type: none; display: inline-block;">
											<a title="Twitter" href="https://twitter.com/share?url=http%3A%2F%2Flocalhost%2F%7Efarook%2Ftechmarket%2Fhome-v1.html%2Fwishlist%2Fview%2FD5ON1PW1PYO1%2F&amp;text=" class="twitter" target="_blank"></a>
										</li>
										<li style="list-style-type: none; display: inline-block;">
											<a onclick="window.open(this.href); return false;" title="Pinterest" href="http://pinterest.com/pin/create/button/?url=http%3A%2F%2Flocalhost%2F%7Efarook%2Ftechmarket%2Fhome-v1.html%2Fwishlist%2Fview%2FD5ON1PW1PYO1%2F&amp;description=&amp;media=" class="pinterest" target="_blank"></a>
										</li>
										<li style="list-style-type: none; display: inline-block;">
											<a onclick="javascript:window.open(this.href, &quot;&quot;, &quot;menubar=no,toolbar=no,resizable=yes,scrollbars=yes,height=600,width=600&quot;);return false;" title="Google+" href="https://plus.google.com/share?url=http%3A%2F%2Flocalhost%2F%7Efarook%2Ftechmarket%2Fhome-v1.html%2Fwishlist%2Fview%2FD5ON1PW1PYO1%2F&amp;title=My+wishlist+on+Tech+Market" class="googleplus" target="_blank"></a>
										</li>
										<li style="list-style-type: none; display: inline-block;">
											<a title="Email" href="mailto:?subject=I+wanted+you+to+see+this+site&amp;body=http%3A%2F%2Flocalhost%2F%7Efarook%2Ftechmarket%2Fhome-v1.html%2Fwishlist%2Fview%2FD5ON1PW1PYO1%2F&amp;title=My+wishlist+on+Tech+Market" class="email"></a>
										</li>
									</ul>
								</div>
							</td>
						</tr>
					</tfoot>
				</table>
				<!-- .wishlist_table -->
			</form>
		<!-- .woocommerce -->
		</div>
	</div>
</template>

<script>
	import WishlistProductComponent from './WishlistProductComponent.vue';

	export default
	{
		props: ['wishlist_data'],
		components: {
			WishlistProductComponent
		},
		data(){
			return {
				wishlist: []
			}
		},
		created()
		{
			this.wishlist = JSON.parse(this.wishlist_data);
			console.log(">>>", this.wishlist);
		},
		methods:
		{
			onItemRemoved(item)
			{
				let index = this.wishlist.indexOf(item)
				console.log("removing", index, this.wishlist, item);
				this.wishlist = this.wishlist.slice(index, 1);
			}
		}
	};
</script>