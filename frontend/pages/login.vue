<template >
  <div>
    <v-text-field
      placeholder="Email"
      label="Email"
      v-model="email"
      outlined
      color
    ></v-text-field>
    <v-text-field
      placeholder="Password"
      label="Password"
      v-model="password"
      outlined
      color
    ></v-text-field>

    <v-btn small elevation="" color="primary" @click="login">Login </v-btn>
  </div>
</template>
<script>
export default {
  layout: "auth",
  name: "login",
  data() {
    return {
      email: "",
      password: "",
    };
  },
  methods: {
    login() {
      this.$auth
        .loginWith("laravelSanctum", {
          data: {
            email: this.email,
            password: this.password,
          },
        })
        .then((r) => {
          this.$router.push("/testing");
        });
    },
  },
};
</script>
<style lang="">
</style>