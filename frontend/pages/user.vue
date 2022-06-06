<template >
  <v-card flat>
    <v-card-title primary-title> Halaman user </v-card-title>
    <v-card-text>
      data disini <br />
      <v-simple-table>
        <thead>
          <tr>
            <th>Nama</th>
            <th>Email</th>
          </tr>
        </thead>
        <tbody>
          <tr v-for="(d, i) in data.data" :key="i">
            <td>{{ d.name }}</td>
            <td>{{ d.email }}</td>
          </tr>
        </tbody>
      </v-simple-table>

      <v-divider class=""></v-divider>

      <v-data-table
        :headers="headers"
        :items="desserts.data"
        :items-per-page="desserts.per_page"
        class="elevation-1 mt-5"
      ></v-data-table>
    </v-card-text>
  </v-card>
</template>
<script>
export default {
  data() {
    return {
      data: {},
      headers: [
        {
          text: "Nama",
          value: "name",
        },
        { text: "Email", value: "email" },
      ],
      desserts: [],
    };
  },
  mounted() {
    this.getUser();
  },
  methods: {
    getUser() {
      this.$axios.$get("api/user").then((r) => {
        this.data = r.data;
        this.desserts = r.data;
      });
    },
  },
};
</script>
<style lang="">
</style>