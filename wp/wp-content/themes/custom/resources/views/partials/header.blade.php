<header class="site-header">
  <nav class="navbar navbar-site navbar-default navbar-static-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="{{ home_url('/') }}">
            <p class="brand-name">
                {{ get_bloginfo('name', 'display') }}
            </p>
          </a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          	@if (has_nav_menu('primary_navigation'))
			        {!! wp_nav_menu(['theme_location' => 'primary_navigation', 'menu_class' => 'nav navbar-nav navbar-right']) !!}
			      @endif
        </div><!--/.navbar-collapse -->
      </div>
    </nav>
</header>
