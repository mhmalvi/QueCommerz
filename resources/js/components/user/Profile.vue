<template>
	<div>
		<h3>Profile</h3>
		<hr>

		<p>You can update your profile information here.</p>

		<form class="col-md-8">
			<div class="form-group">
				<label>Name</label>
				<input type="text" name="name" class="form-control" v-model="user.name">
			</div>

			<div class="form-group">
				<label>Email</label>
				<input type="email" name="email" class="form-control" v-model="user.email">
			</div>

			<button class="btn btn-primary float-right">
				Save
			</button>
		</form>
	</div>
</template>

<script>
	export default
	{
		props: ['user_info'],
		data()
		{
			return {
				user: {}
			}
		},
		created()
		{
			this.user = JSON.parse(this.user_info);
		}
	};
</script>