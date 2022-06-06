<template >
  <div>
    <v-dialog v-model="show" max-width="800px" transition="dialog-transition">
      <v-card flat>
        <v-card-title primary-title> Contoh Dialog </v-card-title>
        <v-divider class=""></v-divider>
        <v-card-text class="mt-5">
          <div class="ml-10 custom">Tulisan disini</div>
          <v-chip class="" color="primary"> status disini </v-chip>
        </v-card-text>
        <v-divider class=""></v-divider>
        <v-card-actions>
          <v-spacer></v-spacer>
          <v-btn text color="" @click="$emit('close')"> save</v-btn>
          <v-btn text color="" @click="$emit('close')"> Close</v-btn>
        </v-card-actions>
      </v-card>
    </v-dialog>
  </div>
</template>
<script>
export default {
  props: ["show"],
};
</script>
<style scoped>
.custom {
  font-size: 20px !important;
}
</style>