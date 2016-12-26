<!-- begin navbar -->
<nav class="navbar navbar-default">
  <div class="container-fluid">
    <!-- brand / toggle -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">woodman.io</a>
    </div>
    <!-- //// links //// -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li class="{{ Request::is('/') ? "active" : "" }}"><a href="/">home <span class="sr-only">(current)</span></a></li>
        <li class="{{ Request::is('about') ? "active" : "" }}"><a href="/about">about</a></li>
        <li class="{{ Request::is('portfolio') ? "active" : "" }}"><a href="/portfolio">portfolio</a></li>
        <li class="{{ Request::is('blog') ? "active" : "" }}"><a href="/blog">blog</a></li>
        <li class="{{ Request::is('contact') ? "active" : "" }}"><a href="/contact">contact</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">account <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="{{ route('posts.index') }}">Posts</a></li>
            <li><a href="{{ route('posts.create') }}">Create Post</a></li>
            <li><a href="#">Something</a></li>
            <li role="separator" class="divider"></li>
            <li><a href="#">Unplug</a></li>
          </ul>
        </li>
      </ul>
    </div> <!-- end navbar collapse -->
  </div> <!-- end container fluid -->
</nav> <!-- end navbar -->
