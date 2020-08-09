<script>
  import Nav from '../components/Nav.svelte';

  export let segment;
</script>

<style>
  main {
    position: relative;
    /* max-width: 56em; */
    background-color: white;
    /* padding: 2em; */
    margin: 0 auto;
    box-sizing: border-box;
    height: calc(100% - 5em);
  }

  .main-container {
    width: 100%;
    height: 100%;
    background-color: white;
    border-radius: 5px;
    box-shadow: 0 14px 28px rgba(0, 0, 0, 0.25), 0 10px 10px rgba(0, 0, 0, 0.22);
  }
</style>

<div class="main-container">
  <Nav {segment} />

  <main>
    <slot />
  </main>
</div>
