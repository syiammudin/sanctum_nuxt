<template >
  <div>
    <v-text-field
      placeholder="Contoh"
      label="contoh"
      outlined
      prefix="IDR"
      color
      append-icon="mdi-folder"
      @click:append="dialog = true"
    >
    </v-text-field>
    <v-select
      color
      v-model="form.jenis_kelamin"
      :items="user"
      item-text="umur"
      filled
      label="User"
      placeholder="User"
    >
    </v-select>
    <v-btn small elevation="" color="primary" @click="dialog = true"
      >Show dialog</v-btn
    >

    testing disini
    <Deskripsi :nama="user" :data="'isi datanya disni'" />
    <FolderDeskripsi2 />
    <FolderForm :show="dialog" @close="dialog = false" />
  </div>
</template>
<script>
export default {
  data() {
    return {
      dialog: false,
      form: {},
      user: [
        { nama: "farhan", umur: "24" },
        { nama: "nazwan", umur: "25" },
      ],
    };
  },
};
</script>
<style lang="">
</style>