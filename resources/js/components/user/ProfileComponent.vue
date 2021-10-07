<template>
  <div>
    <h6>Profile</h6>

    <form>
      <div class="form-group">
        <label>Name</label>
        <input
          type="text"
          name="name"
          class="form-control"
          v-model="user.name"
        />
      </div>

      <div class="form-group">
        <label>Email</label>
        <input
          type="email"
          name="email"
          class="form-control"
          v-model="user.email"
        />
      </div>

      <button class="btn btn-primary">Save</button>
    </form>
  </div>
</template>

<script>
export default {
  props: ["user_info"],
  data() {
    return {
      user: {},
    };
  },
  created() {
    this.user = JSON.parse(this.user_info);
  },
};
</script>