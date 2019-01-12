<a class="header__toggle-menu" href="#0" title="Menu"><span>Menu</span></a>

                <nav class="header__nav-wrap">

                    <h2 class="header__nav-heading h6">Site Navigation</h2>

                    <?php 
                        wp_nav_menu( array(
                            'theme_location'    => "primary",
                            'menu'              => "primary", // (int|string|WP_Term) Desired menu. Accepts a menu ID, slug, name, or object.
                            'menu_class'        => "header__nav", // (string) CSS class to use for the ul element which forms the menu. Default 'menu'.
                            'menu_id'           => "primary_menu", // (string) The ID that is applied to the ul element which forms the menu. Default is the menu slug, incremented.
                            'container'         => "ul", // (string) Whether to wrap the ul, and what to wrap it with. Default 'div'.
                            'container_class'   => "", // (string) Class that is applied to the container. Default 'menu-{menu slug}-container'.
                            'container_id'      => "", // (string) The ID that is applied to the container.
                            'fallback_cb'       => "", // (callable|bool) If the menu doesn't exists, a callback function will fire. Default is 'wp_page_menu'. Set to false for no fallback.
                            'depth'             => "2", // (int) How many levels of the hierarchy are to be included. 0 means all. Default 0.
                            'walker'            => "", // (object) Instance of a custom walker class.
                         )
                        );
                    ?>


                   <!-- <ul class="header__nav">
                        <li class="current"><a href="index.html" title="">Home</a></li>
                        <li class="has-children">
                            <a href="#0" title="">Categories</a>
                            <ul class="sub-menu">
                            <li><a href="category.html">Lifestyle</a></li>
                            <li><a href="category.html">Health</a></li>
                            <li><a href="category.html">Family</a></li>
                            <li><a href="category.html">Management</a></li>
                            <li><a href="category.html">Travel</a></li>
                            <li><a href="category.html">Work</a></li>
                            </ul>
                        </li>
                        <li class="has-children">
                            <a href="#0" title="">Blog</a>
                            <ul class="sub-menu">
                            <li><a href="single-video.html">Video Post</a></li>
                            <li><a href="single-audio.html">Audio Post</a></li>
                            <li><a href="single-gallery.html">Gallery Post</a></li>
                            <li><a href="single-standard.html">Standard Post</a></li>
                            </ul>
                        </li>
                        <li><a href="style-guide.html" title="">Styles</a></li>
                        <li><a href="about.html" title="">About</a></li>
                        <li><a href="contact.html" title="">Contact</a></li>
                    </ul>  end header__nav -->

                    <a href="#0" title="Close Menu" class="header__overlay-close close-mobile-menu">Close</a>

                </nav> <!-- end header__nav-wrap -->