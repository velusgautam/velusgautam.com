<script>
  import Nav from '../components/Nav.svelte';

  export let segment;
</script>

<style>
  main {
    position: relative;
    max-width: 56em;
    background-color: white;
    padding: 2em;
    margin: 0 auto;
    box-sizing: border-box;
  }

  .main-container {
    width: 1200px;
    background-color: white;
    min-height: 650px;
    border-radius: 5px;
  }
</style>

<div class="main-container">
  <Nav {segment} />

  <main>
    <slot />
  </main>
</div>
