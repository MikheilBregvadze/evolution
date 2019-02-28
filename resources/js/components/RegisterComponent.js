import axios from 'axios';
import Events from '../Events';
//import { userInfo } from 'os';
export default {

  data() {
    return {
      isVisible: false,     
      errors: {},
      form: {
      },
    }
  },

  methods: {
    getUrlParameter(name) {
      name = name.replace(/[\[]/, '\\[').replace(/[\]]/, '\\]');
      const regex = new RegExp('[\\?&]' + name + '=([^&#]*)');
      let results = regex.exec(location.search);
      
      return results === null
        ? ''
        : decodeURIComponent(results[1].replace(/\+/g, ' '));
    },
    closeModal() {
      this.isVisible = false;
    },
    clearError(name) {
      this.errors[name] = false;
    },
    changeflag(code, flag){
      this.flag = flag;
      this.phone = code;
      this.showflaglist = false;
    },
    onSubmit() {  
      axios
        .post('/register', {
          'email': this.form.email,
          'password': this.form.password,
          'password_confirmation': this.form.password_confirmation,
          'agreement': this.form.agreement
        })
        .then(({ data }) => {
          if (data.intended) {
            console.log('data', data)
            window.location.href = data.intended;
          }
        })
        .catch(errors => {
          console.log('errors', errors.response)
          this.errors = errors.response.data.errors;
        });
    },
    onClick() {
      this.closeModal();
      Events.$emit('login:open');
    },
  },

  created() {
    Events.$on('register:open', () => {
      this.isVisible = true;
      this.form = {};
      this.errors = {};
      // /console.log('name', this.errors.name)
    });
  },
};
