<template>
  <button v-on:click="onClick" :class="btn" v-text="text"></button>
</template>
<script>
import Events from '../../Events';
export default {
  props: ['btn', 'text'],
  data(){
  	return{}
  },
  methods: {
    onClick() {
      Events.$emit('register:open');
    },
  },
};
</script>