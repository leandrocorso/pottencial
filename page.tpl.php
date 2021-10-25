<!doctype html>

<html 
    lang="<?php print $language->language; ?>" 
    dir="<?php print $language->dir; ?>" 
    <?php print $rdf_namespaces; ?>
    >

    <head 
        profile="<?php print $grddl_profile; ?>"
        >
    
        <?php print $head; ?>

        <title><?php print $head_title; ?></title>

        <?php print $styles; ?>

        <?php print $scripts; ?>
    </head>

    <body 
        class="<?php print $classes; ?>" 
        <?php print $attributes; ?>
        >

        <div id="skip-link">
            <a href="#main-content" class="element-invisible element-focusable">
                <?php print t('Skip to main content'); ?>
            </a>
        </div>
    
        <?php print $page_top; ?>
        
        <div class="app">

            <?php if( $page[header] ): ?>

                
            <header class="region region--header">

                <?php if( $page[header] ): ?>
                <nav class="main-navigation">
                    <a class="logo" href="#"><img src="/themes/pottencial/images/logo-alternative.svg" alt="Pottencial logo"/></a>
                    <?php if ($main_menu) print render($main_menu); ?> 
                <?php endif; ?>

                <div class="hero">
                    <h1>Pottencial APIs</h1>
                    <h2>Explore o portal, acesse a documentação, conheça a API e desenvolva sua App.</h2>
                    <a href="#" class="button primary">Primeiros passos</a>
                </div>
            </header>
            <?php endif; ?>

            <article class="region region--content">
            </article>

            <?php if( $page['footer'] ): ?>
            <footer class="region region--footer">
            </footer>
            <?php endif; ?>

        </div>
  
        <?php print $page_bottom; ?>

    </body>
    
</html>