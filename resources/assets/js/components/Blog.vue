<template>
    <article>
    dadzdza
    </article>
</template>


<script>
  export default {
    data: () => ({
      posts: []
    }),
    created () {
      this.fetchPosts();
    },
    methods: {
        fetchPosts() {
          axios.get('/posts')
            .then(response => {
                console.log(response.data);
            })
            .catch(error => {
                console.log(error.data);
            });
        }
    }
  };
</script>
