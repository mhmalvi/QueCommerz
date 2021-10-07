<template>
  <div>
    <h6>Change password</h6>

    <form>
      <div class="form-group">
        <label>New Password</label>
        <input type="password" v-model="password" class="form-control" />
      </div>

      <div class="form-group">
        <label>Password confirmation</label>
        <input
          type="password"
          v-model="password_confirmation"
          class="form-control"
        />
      </div>

      <button class="btn btn-primary">Update Password</button>
    </form>
  </div>
</template>

<script>
export default {};
</script>