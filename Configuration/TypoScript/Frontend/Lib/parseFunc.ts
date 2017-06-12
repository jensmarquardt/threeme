lib.parseFunc {
    tags {
        link {
            typolink {
                # Fonticons styled link classes
                ATagBeforeWrap = 1
                wrap.prepend = TEXT
                wrap.prepend {
                    data = parameters : allParams
                    listNum = 2
                    listNum.splitChar = 32
                    required = 1
                    wrap = <i class="fa threeme-ui-|" aria-hidden="true"></i>

                    # If more than one class is set, they are wrapped with " - we need to remove them.
                    replacement {
                        10.search = "
                        10.replace =
                    }
                }
            }
        }

        a {
            typolink {
                # CK Editor Bug : https://forge.typo3.org/issues/80985
                parameter.HTMLparser = 1
                parameter.HTMLparser {
                    htmlSpecialChars = -1
                }

                # Fonticons styled link classes
                ATagBeforeWrap = 1
                wrap.prepend = TEXT
                wrap.prepend {
                    data = parameters : allParams
                    # parameters : allParams returns 'class="abc" href="url" ...'
                    # Split by first space will return the full class attribute, we don't need to use 'listNum'
                    #                    listNum = 2
                    listNum.splitChar = 32
                    required = 1
                    wrap = <i class="fa threeme-ui-|" aria-hidden="true"></i>

                    # Remove " and class attribute form wanted string
                    replacement {
                        10.search = "
                        10.replace =
                        20.search = class=
                        20.replace =
                    }
                }
            }
        }
    }
}
