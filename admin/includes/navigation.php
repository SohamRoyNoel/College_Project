<script>
    var theme = $.cookie('protonTheme') || 'default';
    $('body').removeClass (function (index, css) {
        return (css.match (/\btheme-\S+/g) || []).join(' ');
    });
    if (theme !== 'default') $('body').addClass(theme);
</script>
<nav class="main-menu">
    <ul>
        <li>
            <a href="index.html">
                <i class="fa fa-home nav_icon"></i>
                <span class="nav-text">
					Dashboard
					</span>
            </a>
        </li>
        <li class="has-subnav">
            <a href="javascript:;">
                <i class="fa fa-cogs" aria-hidden="true"></i>
                <span class="nav-text">
					UI Components
				</span>
                <i class="icon-angle-right"></i><i class="icon-angle-down"></i>
            </a>
            <ul>
                <li>
                    <a class="subnav-text" href="buttons.html">
                        Buttons
                    </a>
                </li>
                <li>
                    <a class="subnav-text" href="grids.html">
                        Grids
                    </a>
                </li>
            </ul>
        </li>
    </ul>
    <ul class="logout">
        <li>
            <a href="login.html">
                <i class="icon-off nav-icon"></i>
                <span class="nav-text">
			Logout
			</span>
            </a>
        </li>
    </ul>
</nav>