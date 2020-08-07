<script>
  export let segment;
</script>

<style>
  nav {
    border-bottom: 1px solid rgba(0, 0, 0, 0.1);
    font-weight: 300;
    padding: 0 5rem;
  }

  ul {
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: flex-end;
  }

  /* clearfix */
  ul::after {
    content: '';
    display: block;
    clear: both;
  }

  li {
    display: block;
  }

  [aria-current] {
    position: relative;
    display: inline-block;
  }

  [aria-current]::after {
    position: absolute;
    content: '';
    width: calc(100% - 1em);
    height: 2px;
    background-color: rgb(255, 62, 0);
    display: block;
    bottom: 0px;
  }

  a {
    text-decoration: none;
    padding: 1em 0.5em;
    margin: 0 1rem;
    display: block;
  }
</style>

<nav>
  <ul>
    <li>
      <a aria-current={segment === undefined ? 'page' : undefined} href=".">
        Home
      </a>
    </li>
    <li>
      <a
        aria-current={segment === 'profile' ? 'page' : undefined}
        href="profile">
        Profile
      </a>
    </li>
  </ul>
</nav>
