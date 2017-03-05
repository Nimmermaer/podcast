mod.web_layout.BackendLayouts.Default {
    title = LLL:EXT:podcast/Resources/Private/Language/locallang.xlf:Default.title
    config {
        backend_layout {
            colCount = 5
            rowCount = 2
            rows {
                1 {
                    columns {
                        1 {
                            name = LLL:EXT:podcast/Resources/Private/Language/BackendLayouts/locallang.xlf:Default.col.0
                            colPos = 0
                            colspan = 6
                        }
                    }
                }

                2 {
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