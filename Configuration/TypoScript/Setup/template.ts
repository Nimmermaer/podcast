# Initiate template (used by page)
lib.templates.base = FLUIDTEMPLATE
lib.templates.base {
    partialRootPath = EXT:podcast/Resources/Private/Partials/
    layoutRootPath = EXT:podcast/Resources/Private/Layouts/
    dataProcessing {
        100 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
        100 {
            references.fieldName = media
            as = files
        }

        120 = TYPO3\CMS\Frontend\DataProcessing\FilesProcessor
        120 {
            references.fieldName = tx_podcast_facebook_image
            as = facebook
        }
    }

    variables {
        columnMain =< lib.contents.columns.main
        columnSpecial =< lib.contents.columns.special
        columnFooterLeft =< lib.contents.columns.footerLeft
        columnFooterMiddle =< lib.contents.columns.footerMiddle
        columnFooterRight =< lib.contents.columns.footerRight

        homePagePid = TEXT
        homePagePid {
            value = {$globals.homePageUid}
        }
        homePageTitle = TEXT
        homePageTitle {
            value = {$globals.homePageTitle}
        }

        footerStartPid = TEXT
        footerStartPid {
            value = {$globals.navigation.footerStartPoint}
        }

        serviceStartPid = TEXT
        serviceStartPid {
            value = {$globals.navigation.serviceStartPoint}
        }

        metaStartPoint = TEXT
        metaStartPoint {
            value = {$globals.navigation.metaStartPoint}
        }

        searchPid = TEXT
        searchPid {
            value = {$globals.page.search.pid}
        }

        copyright = TEXT
        copyright {
            data = date:U
            strftime = %Y
            wrap = &copy; &nbsp; | &nbsp; Podcast
        }
    }

    settings {
        opengraph {
            type ={$globalss.page.type}
            site_name = {$globalss.page.title}
            admins ={$globalss.page.admins}
            email = {$globalss.page.email}
            country-name =  {$globalss.page.country-name}
        }
    }
}

# Choose template file (based on backend_layout, respecting heredity)
lib.templates.base.file.stdWrap.cObject = CASE
lib.templates.base.file.stdWrap.cObject {
    key.field = backend_layout
    key.ifEmpty.data = levelfield : -1 , backend_layout_next_level, slide

    pagets__Default = TEXT
    pagets__Default.value = EXT:podcast/Resources/Private/Templates/Page/Default.html
    pagets__Start = TEXT
    pagets__Start.value = EXT:podcast/Resources/Private/Templates/Page/Start.html
}