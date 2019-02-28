import axios from 'axios';
// import { TOAST_SUCCESS_OPTIONS } from '../constants';
export default {
  props: ['token'],
  data() {
    return {
      isVisible: window.location.pathname.indexOf('password/reset') > -1 ? true : false, 
      //isVisible: true, 
      pending: false,
      errors: {},
      form: {},
    };
  },
  methods: {
    closeModal() {
      this.isVisible = false;
    },
    getUrlParameter(name) {
      name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
      const regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
      let results = regex.exec(location.search);
      return results === null
        ? ''
        : decodeURIComponent(results[1].replace(/\+/g, ' '));
    },
    clearError(name) {
      this.errors[name] = false;
    },
    onSubmit() {
      this.pending = true;
      // console.log(1123);
      const form = this.token ? { ...this.form, token: this.token } : this.form;

      axios
        .post('/password/reset', form)
        .then(({ data }) => {
          //console.log(data);
          console.log(window.location.host + '/dashboard');
          //window.location.replace(window.location.host+'/dashboard');
          window.location.replace('https://'+window.location.host+'/dashboard');
          this.$toasted.show(data.message, TOAST_SUCCESS_OPTIONS);
          this.errors = {};
          this.pending = false;
          window.setTimeout(() => {
            window.location.reload();
          }, TOAST_SUCCESS_OPTIONS.duration);
        })
        .catch(errors => {
          this.pending = false;
          this.errors = errors.errors;
        });
    },
  },
  mounted(){
    //console.log(window.location.pathname.indexOf('password/reset'))
  }
};
