import axios from 'axios';
import Events from '../Events';
export default {
  data() {
    return {
      isVisible: false,
      errors: {},
      form: {},
    };
  },

  methods: {
    closeModal() {
      this.isVisible = false;
    },
    openForgotPasswordModal() {
      this.closeModal();
      Events.$emit('forgot-password:open');
    },
    onSubmit() {
      axios
        .post('/login', this.form)
        .then(({ data }) => {
          window.location.href = data.intended;
          this.errors = {};
        })
        .catch(errors => {
          this.errors = errors.response.data.errors;
        });
    },
    //registration open
    onClick() {
      this.closeModal();
      Events.$emit('register:open');
    },
  },

  mounted() {
    Events.$on('login:open', () => {
      this.isVisible = true;
      this.form = {};
      this.errors = {};
    });
  },
};
