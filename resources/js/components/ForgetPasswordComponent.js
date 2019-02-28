import axios from 'axios';
import Events from '../Events';

export default {
  data() {
    return {
      isVisible: false,
      pending: false,
      form: {},
      errors: {},
      sent: false
    };
  },
  methods: {
    closeModal() {
      this.isVisible = false;
      this.sent = false;
      this.form = {};
      this.errors = {}
    },
    onSubmit() {
      this.pending = true;

      axios
        .post('/password/email', this.form)
        .then(({ data }) => {
          this.errors = {};
          this.sent = true;
          setTimeout(function(){
            //window.location.reload();
            this.closeModal()
          }.bind(this),5000);
          //this.$toasted.show(data.message, TOAST_SUCCESS_OPTIONS);

          this.pending = false;
        })
        .catch(errors => {
          this.errors = errors.errors;
          this.pending = false;
        });
    },
    
    openLoginModal(){
      this.closeModal();
      Events.$emit('login:open');
    },
  },

  mounted() {
    Events.$on('forgot-password:open', () => {
      this.isVisible = true,
      this.pending = false;
      this.form = {};
      this.errors = {};
    });
  },
};
