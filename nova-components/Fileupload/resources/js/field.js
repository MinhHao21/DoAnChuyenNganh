Nova.booting((Vue, router, store) => {
  Vue.component('index-fileupload', require('./components/IndexField'))
  Vue.component('detail-fileupload', require('./components/DetailField'))
  Vue.component('form-fileupload', require('./components/FormField'))
})
