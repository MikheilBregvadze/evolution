import Events from '../../Events';
export default {
  props: ['text'],
  methods: {
    onClick() {
      Events.$emit('send-money:open');
    },
  },
};