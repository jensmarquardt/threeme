TCEFORM {
    pages {
        alias.disabled = 1

        backend_layout {
            removeItems = -1
        }
        backend_layout_next_level {
            removeItems = -1
        }
        
        layout {
            removeItems = 1,2,3
        }
    }

    tt_content {
        header_layout {
            removeItems = 5
            altLabels.0 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.header_layout.altLabels.0
            altLabels.1 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.header_layout.altLabels.1
            altLabels.2 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.header_layout.altLabels.2
            altLabels.3 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.header_layout.altLabels.3
            altLabels.4 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.header_layout.altLabels.4
            altLabels.5 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.header_layout.altLabels.5
            
            types {
                mask_threeme-carousel {
                    removeItems = 1,5
                }
                mask_threeme-panel {
                    removeItems = 1,5
                }
            }
        }

        # Content layout depending on CType
        layout {
            removeItems = 1,2,3
            types {
                header {
                    addItems.100 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.header.addItems.100
                    addItems.101 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.header.addItems.101
                    addItems.102 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.header.addItems.102
                    addItems.103 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.header.addItems.103
                }
                textmedia {
                    removeItems = 1,2,3
                    addItems.200 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.textmedia.addItems.200
                    addItems.201 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.textmedia.addItems.201
                    addItems.202 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.textmedia.addItems.202
                }
                table {
                    removeItems = 1,2,3
                    addItems.200 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.table.addItems.200
                    addItems.201 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.table.addItems.201
                    addItems.202 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.table.addItems.202
                    addItems.203 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.table.addItems.203
                }
                bullets {
                    removeItems = 1,2,3
                    addItems.200 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.bullets.addItems.200
                    addItems.201 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.bullets.addItems.201
                }
            }
        }

        # Image settings
        # If you use responsive images by "lib.threemeResponsiveImage" or a thrid party extension, you might disable some image settings like "imagewidth".
        imagecols {
            removeItems = 5,6,7,8
        }
        imageorient {
            removeItems = 8,9,10
        }
#        imageheight.disabled = 1
#        imagewidth.disabled = 1
#        imageborder.disabled = 1

        # Bullets settings
        bullets_type {
            removeItems = 2
        }
    }

    tx_powermail_domain_model_form {
        css {
            removeItems = layout1,layout2,layout3
            altLabels.nolabel = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tx_powermail_domain_model_form.css.altLabels.nolabel
        }
    }
    tx_powermail_domain_model_page {
        css {
            removeItems = layout1,layout2,layout3
            altLabels.nolabel = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tx_powermail_domain_model_page.css.altLabels.nolabel
        }
    }
    tx_powermail_domain_model_field {
        css {
            removeItems = layout1,layout2,layout3
            altLabels.nolabel = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tx_powermail_domain_model_field.css.altLabels.nolabel
        }
    }
}