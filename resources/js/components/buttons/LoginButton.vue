<template>
  <button v-on:click="onClick" class="login-button" v-text="text"><slot></slot></button>
</template>
<script>
import Events from '../../Events';
export default {
  props: ['text'],
  methods: {
    onClick() {
      Events.$emit('login:open');
    },
  },
};
</script>