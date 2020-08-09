<script>
  export let segment;
</script>

<style>
  nav {
    padding: 0 5rem;
  }

  ul {
    margin: 0;
    padding: 0;
    padding-top: 10px;
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
    background-color: #7207d7;
    display: block;
    bottom: 0px;
  }

  a {
    font-size: 1.2rem;
    text-decoration: none;
    padding: 1em 0.5em 0.5em 0.5em;
    margin: 0 1rem;
    display: block;
  }
</style>

<nav>
  <ul>
    <li>
      <a
        aria-current={segment === undefined ? 'page' : undefined}
        href="."
        rel="prefetch">
        Home
      </a>
    </li>
    <li>
      <a
        aria-current={segment === 'profile' ? 'page' : undefined}
        href="profile"
        rel="prefetch">
        Profile
      </a>
    </li>
  </ul>
</nav>
