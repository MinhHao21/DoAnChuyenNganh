Nova.booting((Vue, router, store) => {
  Vue.component('index-selecttree', require('./components/IndexField'))
  Vue.component('detail-selecttree', require('./components/DetailField'))
  Vue.component('form-selecttree', require('./components/FormField'))
})
