<template>
  <div class="card-body">
    <table class="table">
      <thead>
        <tr>
          <th scope="col">#Id</th>
          <th scope="col">libelle Name</th>
          <th scope="col">Prix</th>
          <th scope="col">Quantit</th>
          <th scope="col">Status</th>
        </tr>
      </thead>
      <tbody>
        <tr v-for="article in articles" :key="article.id">
          <th scope="row">{{ article.id }}</th>
          <td>{{ article.libelle }}</td>
          <td>{{ article.prix }}</td>
          <td>{{ article.quantit }}</td>
          <td>{{ article.status }}</td>
        </tr>
      </tbody>
    </table>
  </div>
</template>

<script>
export default {
  data() {
    return {
      articles: [],
    };
  },

  created() {
    this.getArticles();
  },
  methods: {
    getArticles() {
      axios
        .get("/api/articles")

        .then((res) => {
          this.articles = res.data.data;
        })
        .catch((error) => {
          console.log(error);
        });
    },
  },
};
</script>

<style></style>