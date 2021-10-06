<template>
	<ul class="dashboard-sidebar list-group">
		<li class="list-group-item"><a href="/dashboard" :class="[isActive('/dashboard') ? 'text-primary' : '']">Dashboard</a></li>
		<li class="list-group-item"><a href="/profile" :class="[isActive('/profile') ? 'text-primary' : '']">Profile</a></li>
		<li class="list-group-item"><a href="/track-orders" :class="[isActive('/track-orders') ? 'text-primary' : '']">Track your orders</a></li>
		<li class="list-group-item">
			<a href="/change-password" :class="[isActive('/change-password') ? 'text-primary' : '']">Change password</a>
		</li>
	</ul>
</template>

<script>
	export default
	{
		data()
		{
			return {

			}
		},
		methods:
		{
			isActive(link)
			{
				return link == window.location.pathname;
			}
		}
	};
</script>

<style scoped>
	.dashboard-sidebar
	{
		margin-left: 0;
	}
</style>