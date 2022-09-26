const app = new Vue({
  el: "#app",

  data() {
    return {
      movies: [],
    };
  },

  methods: {
    getMovies() {
      axios.get("http://localhost/php-oop-1/app/").then((response) => {
        this.movies = response.data.response;
      });
    },
  },

  mounted() {
    this.getMovies();
  },
});
