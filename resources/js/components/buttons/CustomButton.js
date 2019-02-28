import Events from '../../Events';
export default {
  props: ['emit'],
  methods: {
    onClick() {
      Events.$emit(this.emit);
    },
  },
};