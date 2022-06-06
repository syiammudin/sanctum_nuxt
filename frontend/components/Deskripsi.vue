<template >
  <div>
    Lorem ipsum, utawa ringkesé lipsum, iku tèks standar sing dipasang kanggo
    nuduhaké èlemèn grafis utawa presentasi visual kaya font, tipografi, lan
    tata letak.
    <br />
    <div v-for="(item, index) in nama" :key="index">
      nama saya : {{ item.nama }}
    </div>
    {{ data }}

    <FolderSubdeskripsi />
  </div>
</template>
<script>
export default {
  props: ["nama", "data"],
};
</script>
<style lang="">
</style>