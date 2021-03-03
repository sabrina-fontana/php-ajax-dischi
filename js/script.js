var app = new Vue({
el: '#app',
data: {
  discsArray: [],
  genresArray: [],
  genreSelected: '',
  error: false
},
mounted() {
  let that = this;
  // chiamata axios a server.php
  axios
  .get("http://localhost/php-ajax-dischi/app/server.php")
  .then(function(resp) {
    // creo array di generi
    resp.data.forEach((element) => {
      if (!that.genresArray.includes(element.genre)) {
        that.genresArray.push(element.genre);
      }
    })
    return that.discsArray = resp.data;
  })
},
methods: {
  changeGenre: function() {
    this.error = false;
    let that = this;
    axios
    .get("http://localhost/php-ajax-dischi/app/server.php?genre=" + that.genreSelected)
    .then(function(resp) {
      return that.discsArray = resp.data;
    })
    .catch(function(error) {
      console.log(error);
      that.discsArray = [];
      that.error = true;
    })
  }
}
});
Vue.config.devtools = true;
