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
        }

        header_position {
            altLabels.left = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.header_position.left
            altLabels.center = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.header_position.center
            altLabels.right = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.header_position.right
            addItems.justify = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.header_position.justify
            addItems.justify.icon = threeme-tca-icon
        }

        # Header layout CSS
        tx_threeme_header_css {
            addItems.200 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.threeme_header_css.addItems.200
            addItems.200.icon = threeme-tca-icon
            addItems.201 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.threeme_header_css.addItems.201
            addItems.201.icon = threeme-tca-icon
        }

        # Content layout depending on CType
        layout {
            removeItems = 1,2,3
            types {
                textmedia {
                    removeItems = 1,2,3
                    addItems.200 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.textmedia.addItems.200
                    addItems.200.icon = threeme-tca-icon
                    addItems.201 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.textmedia.addItems.201
                    addItems.201.icon = threeme-tca-icon
                    addItems.202 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.textmedia.addItems.202
                    addItems.202.icon = threeme-tca-icon
                }
                table {
                    removeItems = 1,2,3
                    addItems.200 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.table.addItems.200
                    addItems.200.icon = threeme-tca-icon
                    addItems.201 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.table.addItems.201
                    addItems.201.icon = threeme-tca-icon
                    addItems.202 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.table.addItems.202
                    addItems.202.icon = threeme-tca-icon
                    addItems.203 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.table.addItems.203
                    addItems.203.icon = threeme-tca-icon
                }
                bullets {
                    removeItems = 1,2,3
                    addItems.200 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.bullets.addItems.200
                    addItems.200.icon = threeme-tca-icon
                    addItems.201 = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:tt_content.layout.types.bullets.addItems.201
                    addItems.201.icon = threeme-tca-icon
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

        # Bullets settings
        bullets_type {
            removeItems = 2
        }
    }

    # Image manipulation, override cropVariants
#    sys_file_reference {
#        crop {
#            config {
#                cropVariants {
#
#                }
#            }
#        }
#    }

    # EXT:Powermail settings
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
