var app = new Vue({
el: '#app',
data: {
  discsArray: []
},
mounted() {
  let that = this;

  // chiamata axios a server.php
  axios
  .get("http://localhost/php-ajax-dischi/app/server.php")
  .then(function(resp) {
    that.discsArray = resp.data;
    console.log(that.discsArray);
  })
}
});
Vue.config.devtools = true;
