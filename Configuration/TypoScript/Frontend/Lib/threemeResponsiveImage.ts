/*
Responsive images
Alternative implementation for responsive image rendering

Usage, see partial FSC > MediaGallery:
<f:cObject
    typoscriptObjectPath="lib.threemeResponsiveImage"
    currentValueKey="uid"
    data="{column.media.properties}"
/>
*/
lib.threemeResponsiveImage = IMAGE
lib.threemeResponsiveImage {
    file {
        import.current = 1
        treatIdAsReference = 1
    }

    altText = TEXT
    altText {
        field = alternative
        htmlSpecialChars = 1
    }

    titleText < .altText
    titleText.field = title

    layoutKey = picture
    layout {
        default {
            element = <img src="###SRC###" width="###WIDTH###" height="###HEIGHT###" ###PARAMS### ###ALTPARAMS### ###BORDER### ###SELFCLOSINGTAGSLASH###>
            source =
        }

        srcset {
            element = <img src="###SRC###" srcset="###SOURCECOLLECTION###" ###PARAMS### ###ALTPARAMS### ###SELFCLOSINGTAGSLASH###>
            source = |*|###SRC### ###SRCSETCANDIDATE###,|*|###SRC### ###SRCSETCANDIDATE###
        }

        picture {
            element = <picture>###SOURCECOLLECTION###<img src="###SRC###" ###PARAMS### ###ALTPARAMS### ###SELFCLOSINGTAGSLASH###></picture>
            source = <source src="###SRC###" media="###MEDIAQUERY###" ###SELFCLOSINGTAGSLASH###>
        }

        data {
            element = <img src="###SRC###" ###SOURCECOLLECTION### ###PARAMS### ###ALTPARAMS### ###SELFCLOSINGTAGSLASH###>
            source.noTrimWrap = | data-###DATAKEY###="###SRC###"|
        }
    }

    sourceCollection {
        xs {
            maxW = 480px
            mediaQuery = (max-width: 480px)
            dataKey = xs
            srcsetCandidate = 480w
        }

        sm {
            maxW = 768px
            mediaQuery = (min-width: 481px) AND (max-width: 768px)
            dataKey = sm
            srcsetCandidate = 768w
        }

        md {
            maxW = 992px
            mediaQuery = (min-width: 769px) AND (max-width: 992px)
            dataKey = md
            srcsetCandidate = 992w
        }

        lg {
            maxW = 1200px
            mediaQuery = (min-width: 1200px)
            dataKey = lg
            srcsetCandidate = 1200w
        }
    }
}
