RTE.default.preset = Threeme

/*
RTE {
    classes {
        text-left {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.text-left
        }
        text-center {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.text-center
        }
        text-right {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.text-right
        }
        text-justify {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.text-justify
        }
        text-uppercase {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.text-uppercase
        }
        lead {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.lead
        }
        threeme-text-small {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.threeme-text-small
        }
        threeme-text-note {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.threeme-text-note
        }

        table {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.table
        }
        table-striped {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.table-striped
            requires = table
        }
        table-bordered {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.table-bordered
            requires = table
        }
        table-hover {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.table-hover
            requires = table
        }
        table-condensed {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.table-condensed
            requires = table
        }

        list-unstyled {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.list-unstyled
        }
        list-inline {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.list-inline
        }

        internal-link {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.internal-link
        }
        external-link {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.external-link
        }
        mail {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.mail
        }
        download {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.download
        }

        lightbox {
            selectable = 0
        }
        lightbox-iframe {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.lightbox.iframe
            requires = lightbox fancybox.iframe
        }
        lightbox-media {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.lightbox.media
            requires = lightbox fancybox.media
        }

        btn {
            selectable = 0
        }
        btn-default {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.btn-default
            requires = btn
        }
        btn-primary {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.btn-primary
            requires = btn
        }
        btn-success {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.btn-success
            requires = btn
        }
        btn-info {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.btn-info
            requires = btn
        }
        btn-warning {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.btn-warning
            requires = btn
        }
        btn-danger {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.btn-danger
            requires = btn
        }
        btn-lg {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.btn-lg
            requires = btn
        }
        btn-sm {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.btn-sm
            requires = btn
        }
        btn-xs {
            name = LLL:EXT:threeme/Resources/Private/Language/locallang_rte.xlf:class.btn-xs
            requires = btn
        }
    }

    # Basic settings
    default {
        contentCSS = EXT:threeme/Resources/Public/Css/styles-rte.css

        # Disable buttons
        # blockstylelabel, blockstyle, textstylelabel, textstyle,formatblock, bold, italic, subscript, superscript,orderedlist, unorderedlist, outdent, indent, textindicator,insertcharacter, link, table, findreplace, chMode, removeformat, undo, redo, about
        # toggleborders, tableproperties,rowproperties, rowinsertabove, rowinsertunder, rowdelete, rowsplit,columninsertbefore, columninsertafter, columndelete, columnsplit,cellproperties, cellinsertbefore, cellinsertafter, celldelete, cellsplit, cellmerge
        hideButtons = subscript, superscript, outdent, indent, textindicator, table, about

        # Disable context menu
        contextMenu.disabled = 1

        # Disable table wizard fieldsets that are not suitable for the editor
        hideTableOperationsInToolbar = 0
        disableSpacingFieldsetInTableOperations = 0
        disableAlignmentFieldsetInTableOperations = 0
        disableColorFieldsetInTableOperations = 1
        disableLayoutFieldsetInTableOperations = 1
        disableBordersFieldsetInTableOperations = 1

        # Button settings
        buttons {
            # Remove html tags that are not suitable for an editor
            formatblock {
                removeItems = address, article, aside, div, header, footer, section, h5, h6, nav
            }

            link {
                targetSelector.disabled = 1
                popupSelector.disabled = 1
                queryParametersSelector.enabled = 0
                relAttribute.enabled = 0

                properties {
                    class {
                        allowedClasses := addToList(lightbox-iframe, lightbox-media)
                        allowedClasses := removeFromList(internal-link-new-window, external-link-new-window)
                    }
                }

                url {
                    properties {
                        class {
                            default =  external-link
                        }
                    }
                }
            }

            blockstyle {
                showTagFreeClasses = 1

                tags {
                    all {
                        allowedClasses := addToList(text-left, text-center, text-right, text-justify, text-uppercase)
                        allowedClasses := addToList(lead, threeme-text-small, threeme-text-note)
                        allowedClasses := addToList(list-unstyled, list-inline)
                        allowedClasses := addToList(table, table-striped, table-bordered, table-hover, table-condensed)
                    }
                    table {
                        allowedClasses := addToList(table, table-striped, table-bordered, table-hover, table-condensed)
                    }
                    td {
                        allowedClasses := addToList(text-left, text-center, text-right)
                    }
                    ul {
                        allowedClasses := addToList(list-unstyled, list-inline)
                    }
                }
            }

            textstyle {
                showTagFreeClasses = 1

                tags {
                    all {
                        allowedClasses := addToList(internal-link, external-link, download, mail)
                        allowedClasses := addToList(lightbox-iframe, lightbox-media)
                        allowedClasses := addToList(btn, btn-default, btn-primary, btn-success, btn-info, btn-warning, btn-danger)
                    }
                    span {
                        allowedClasses := addToList(text-left, text-center, text-right, text-justify, text-uppercase)
                        allowedClasses := addToList(lead, threeme-text-small, threeme-text-note)
                    }
                }
            }

            # Use bootstrap css classes for text alignment
            left.useClass = text-left
            center.useClass = text-center
            right.useClass = text-right
            justifyfull.useClass = text-justify
        }

        # Processing settings
        proc {
            # Do not preserve div section and remap them to p
            preserveDIVSections = 0

            # List of tags that don't have to be wrapped in a paragraph
            allowTagsOutside (
                blockquote, h1, h2, h3, h4, hr, pre, table, ul, ol
            )

            # We have no option to set special attributes outside html view so remove all
            keepPDIVattribs =

            # List of allowed classes in the RTE
            allowedClasses := addToList(btn, btn-default, btn-primary, btn-success, btn-info, btn-warning, btn-danger)
            allowedClasses := addToList(lightbox, lightbox-iframe, fancybox.iframe, lightbox-media, fancybox.media)
            allowedClasses := addToList(table, table-striped, table-bordered, table-hover, table-condensed)
            allowedClasses := addToList(text-left, text-center, text-right, text-justify, text-uppercase)
            allowedClasses := addToList(lead, threeme-text-small, threeme-text-note)
            allowedClasses := addToList(list-unstyled, list-inline)

            # Remap bold and italics to strong and emphasis and vice versa
            transformBoldAndItalicTags = 1

            # Remap bold and italics to strong and emphasis
            exitHTMLparser_db = 1
            exitHTMLparser_db {
                tags.b.remap = strong
                tags.i.remap = em
            }
        }
    }

    # deprecated?
    classesAnchor {
        internalLink.titleText >
        externalLink.titleText >
        download.titleText >
        mail.titleText >

        internalLinkInNewWindow >
        externalLinkInNewWindow >

        lightboxPage {
            class = lightbox-iframe
            type = page
        }
        # Fancybox settings for external links as iFrame
        lightboxUrlIframe {
            class = lightbox-iframe
            type = url
        }
        # Fancybox settings for external media
        lightboxUrlMedia {
            class = lightbox-media
            type = url
        }
        lightboxFile {
            class = lightbox-media
            type = file
        }
    }
}

*/
