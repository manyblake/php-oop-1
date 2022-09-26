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
        console.log(response);
        this.movies.push(...response.data.response);
      });
    },
  },

  mounted() {
    this.getMovies();
  },
});
