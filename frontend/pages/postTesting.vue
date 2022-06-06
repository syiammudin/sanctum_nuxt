<template >
  <div>
    <v-text-field
      placeholder="Nama"
      label="Nama"
      v-model="form.name"
      outlined
      color
    ></v-text-field>
    <v-text-field
      placeholder="Email"
      label="Email"
      v-model="form.email"
      outlined
      color
    ></v-text-field>
    <v-text-field
      placeholder="Email"
      label="Email"
      v-model="form.password"
      outlined
      color
    ></v-text-field>
    <v-btn class="" color="" dark @click="save">
      <v-icon dark>mdi-check</v-icon> Save
    </v-btn>
  </div>
</template>
<script>
export default {
  data() {
    return {
      form: {},
    };
  },
  methods: {
    save() {
      this.$axios
        .$post("/api/user", this.form)
        .then((r) => {
          alert(r.message);
          console.log(r);
          this.form = {};
        })
        .catch((e) => {
          console.log(e);
        });
    },
  },
};
</script>
<style lang="">
</style>