page {
    includeCSS {
        bootstrap = EXT:podcast/Resources/Public/Css/bootstrap.css
        fonts = EXT:podcast/Resources/Public/Css/font-awesome.min.css
        hoverex = EXT:podcast/Resources/Public/Css/hoverex-all.css
        prettyphoto = EXT:podcast/Resources/Public/Css/prettyPhoto.css
        style = EXT:podcast/Resources/Public/Css/style.css
    }
    includeJSLibs {
        jquery = https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js
        jquery.external = 1
        html5shiv = https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.j
        html5shiv.external = 1
        html5shiv.disableCompression = 1
        html5shiv.excludeFromConcatenation = 1
        html5shiv.allWrap =<!--[if lt IE 9]>|<![endif]-->
        respond = https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js
        respond.external = 1
        respond.disableCompression = 1
        respond.excludeFromConcatenation = 1
        respond.allWrap =<!--[if lt IE 9]>|<![endif]-->
    }

    includeJSFooter {
        bootstrap = EXT:podcast/Resources/Public/Js/bootstrap.min.js
        bootstrap.async = 1

        hover = EXT:podcast/Resources/Public/Js/jquery.hoverdir.js
        hover.async = 1
        rex = EXT:podcast/Resources/Public/Js/jquery.hoverex.min.js
        rex.async = 1
        isotope = EXT:podcast/Resources/Public/Js/jquery.isotope.min.js
        isotope.async = 1
        photos = EXT:podcast/Resources/Public/Js/jquery.prettyPhoto.js
        photos.async = 1

        retina = EXT:podcast/Resources/Public/Js/retina-1.1.0.js
        retina.async = 1
        custom = EXT:podcast/Resources/Public/Js/custom.js
        custom.async = 1
        scripts = EXT:podcast/Resources/Public/Js/scripts.js
        scripts.async = 1
    }
}