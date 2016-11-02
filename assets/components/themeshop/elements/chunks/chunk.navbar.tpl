<!-- Static navbar -->
<nav class="uk-navbar uk-margin-large-bottom uk-navbar-attached">
    <ul class="uk-navbar-nav uk-hidden-small">
        [[!pdoMenu?
            &parents=`15`
            &level=`1`
            &tplOuter=`@INLINE [[+wrapper]]`
        ]]
    </ul>
</nav>
<nav class="uk-navbar uk-margin-large-bottom uk-navbar-attached data-uk-sticky">
    <a class="uk-navbar-brand uk-hidden-small" href="/">[[++site_name]]</a>
    <ul class="uk-navbar-nav uk-hidden-small">
        [[!pdoMenu?
            &parents=`1`
            &level=`2`
            &tplParentRow=`@INLINE
            <li class="[[+classnames]] uk-parent"  data-uk-dropdown="{ mode:'click' }">
                <a href="#" class="" [[+attributes]]>[[+menutitle]] <i class="uk-icon-caret-down"></i></a>
                <div class="uk-dropdown uk-dropdown-navbar uk-dropdown-bottom">[[+wrapper]]</div>
            </li>`
            &tplInner=`@INLINE <ul class="uk-nav uk-nav-dropdown uk-panel">[[+wrapper]]</ul>`
            &tplOuter=`@INLINE [[+wrapper]]`
        ]]
    </ul>
    <a href="#offcanvas" class="uk-navbar-toggle uk-visible-small" data-uk-offcanvas=""></a>
    <div class="uk-navbar-brand uk-navbar-center uk-visible-small">[[++site_name]]</div>
</nav>
