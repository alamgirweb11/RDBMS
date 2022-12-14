<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="{{ route('home') }}">RDBMS</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link {{ request()->is('users') ? 'active' : '' }}" href="{{ route('users') }}">Users</a>
        <a class="nav-link {{ request()->is('categories') ? 'active' : '' }}" href="{{ route('category') }}">Category</a>
        <a class="nav-link {{ request()->is('mechanics') ? 'active' : '' }}" href="{{ route('mechanics') }}">Mechanic</a>
        <a class="nav-link {{ request()->is('projects') ? 'active' : '' }}" href="{{ route('projects') }}">Projects</a>
        <a class="nav-link {{ request()->is('images') ? 'active' : '' }}" href="{{ route('images') }}">Image Path</a>
        <a class="nav-link {{ request()->is('comments') ? 'active' : '' }}" href="{{ route('comments') }}">Comments</a>
      </div>
    </div>
  </nav>