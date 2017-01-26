lib.parseFunc_RTE {
    # AST: See RTE.txt -> exitHTMLparser_db
    # Remap b,i to strong,em
    # https://typo3.org/documentation/snippets/sd/286/
#    tags {
#        b = TEXT
#        b {
#            current = 1
#            wrap= <strong>|</strong>
#        }
#        i = TEXT
#        i {
#            current = 1
#            wrap= <em>|</em>
#        }
#    }
    
    # https://wiki.typo3.org/Faq/EM_and_STRONG
    # rewrites the tags - but not in ul and ol...
#    nonTypoTagStdWrap.HTMLparser = 1
#    nonTypoTagStdWrap.HTMLparser {
#        tags.b.remap = strong
#        tags.i.remap = em
#    }
    # this adds the rewriting to ul and ol but now there are ps wrapped around li...
#    externalBlocks {
#        ul.callRecursive=1
#        ul.callRecursive.tagStdWrap.HTMLparser = 1
#        ol.callRecursive=1
#        ol.callRecursive.tagStdWrap.HTMLparser = 1
#    }
    # no more ps araound li...
#    nonTypoTagStdWrap.encapsLines.encapsTagList = div,p,pre,h1,h2,h3,h4,h5,h6,li


    # Fonticons styled link classes
    tags.link < lib.parseFunc.tags.link

    externalBlocks {
        table.stdWrap.HTMLparser.tags.table.fixAttrib.class.default = table
        table.stdWrap.HTMLparser.tags.table.fixAttrib.class.list = table, table-striped, table-bordered, table-hover, table-condensed
        table.stdWrap.wrap = <div class="table-responsive">|</div>
    }
}