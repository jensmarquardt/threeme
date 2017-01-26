TCEMAIN {
    table {
        pages {
            disablePrependAtCopy = 0
            disableHideAtCopy = 0
        }
        tt_content {
            disablePrependAtCopy = 0
            disableHideAtCopy = 0
        }
    }

    permissions {
        # UID of group ". Access: Website Root"
        # @TODO: Hardcoded UID
        groupid = 10
        user = show,edit,delete,new,editcontent
        group = show,edit,delete,new,editcontent
        everybody =
    }
    
    translateToMessage = LLL:EXT:threeme/Resources/Private/Language/locallang_pagets.xlf:translateToMessage
}