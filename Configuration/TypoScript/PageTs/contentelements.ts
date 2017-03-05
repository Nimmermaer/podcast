mod {
    wizards.newContentElement.wizardItems {
        podcast {
            header = Podcast
            elements {

                podcast_portfolio {
                    iconIdentifier = portfolio
                    title = LLL:EXT:podcast/Resources/Private/Language/locallang_be.xlf:podcast_portfolio.title
                    description = LLL:EXT:podcast/Resources/Private/Language/locallang_be.xlf:podcast_portfolio.description
                    tt_content_defValues {
                        CType = podcast_portfolio
                    }
                }

                podcast_related {
                    iconIdentifier = related
                    title = LLL:EXT:podcast/Resources/Private/Language/locallang_be.xlf:podcast_related.title
                    description = LLL:EXT:podcast/Resources/Private/Language/locallang_be.xlf:podcast_related.description
                    tt_content_defValues {
                        CType = podcast_related
                    }
                }

#                podcast_sociallink {
#                    iconIdentifier = sociallink
#                    title = LLL:EXT:podcast/Resources/Private/Language/locallang_be.xlf:podcast_sociallink.title
#                    description = LLL:EXT:podcast/Resources/Private/Language/locallang_be.xlf:podcast_sociallink.description
#                    tt_content_defValues {
#                        CType = podcast_sociallink
#                    }
#                }
            }

            show = *
        }
    }
}
