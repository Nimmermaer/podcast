mod.web_layout.BackendLayouts.Start {
    title = LLL:EXT:podcast/Resources/Private/Language/locallang.xlf:Start.title
    config {
        backend_layout {
            colCount = 5
            rowCount = 3
            rows {
                1 {
                    columns {
                        1 {
                            name = LLL:EXT:podcast/Resources/Private/Language/BackendLayouts/locallang.xlf:Start.col.0
                            colPos = 1
                            colspan = 6
                        }
                    }
                }

                2 {
                    columns {
                        1 {
                            name = LLL:EXT:podcast/Resources/Private/Language/BackendLayouts/locallang.xlf:Content
                            colPos = 0
                            colspan = 6
                        }
                    }
                }

                3 {
                    columns {
                        1 {
                            name = LLL:EXT:podcast/Resources/Private/Language/BackendLayouts/locallang.xlf:Footer.col.0
                            colPos = 2
                            colspan = 2
                        }

                        2 {
                            name = LLL:EXT:podcast/Resources/Private/Language/BackendLayouts/locallang.xlf:Footer.col.1
                            colPos = 3
                            colspan = 2
                        }

                        3 {
                            name = LLL:EXT:podcast/Resources/Private/Language/BackendLayouts/locallang.xlf:Footer.col.2
                            colPos = 4
                            colspan = 2
                        }
                    }
                }
            }
        }
    }
}