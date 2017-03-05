lib.fluidContent {
    templateName = Podcast
    templateRootPaths {
        1 = EXT:podcast/Resources/Private/Contentelements/Templates
    }

    partialRootPaths {
        1 = EXT:podcast/Resources/Private/Contentelements/Partials/
    }

    layoutRootPaths {
        1 = EXT:podcast/Resources/Private/Contentelements/Layouts/
    }

    settings {
        defaultHeaderType = {$styles.content.defaultHeaderType}
        offerPid = {$global.page.offerPid}
    }
}


tt_content {
#    podcast_sociallink < lib.fluidContent
#    podcast_sociallink {
#        templateName = Podcast/Social
#    }

    podcast_related < lib.fluidContent
    podcast_related {
        templateName = Podcast/Related
    }

    header {
        templateName = Podcast/Header
    }
    textmedia {
        dataProcessing {
            100 = PodcastTeam\Podcast\DataProcessing\ContentElementProcessor
            100 {
                references.fieldName = tx_podcast_domain_model_sociallinks
            }
        }
    }

}
