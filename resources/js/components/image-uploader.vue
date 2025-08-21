<template>
  <div class="image-uploader">
    <input type="file" />
    <p style="color: #888; font-size: 14px;">Image Uploader Placeholder</p>
  </div>
</template>

<script>
export default {
  name: 'ImageUploader',
};
</script>

<style scoped>
.image-uploader {
  border: 1px dashed #ccc;
  padding: 16px;
  border-radius: 8px;
  text-align: center;
}
</style>
