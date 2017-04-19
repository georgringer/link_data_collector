# TYPO3 extension `link_data_collector`

If a website user clicks on a download link, a modal box opens and asks the website user for some additional data which is then persisted in the database and sent via email.

## Requirements

- TYPO3 7.6 LTS
- jQuery
- fancybox (http://fancyapps.com/fancybox/3/) Please watch out the requirement for a commercial license

## Configuration

The provided configuration is meant for a demo. Fancybox is used.
Please adopt those to your needs.

### 1) Include the TypoScript

```

# Load some CSS/JS
page.includeCSS {
    fancy = EXT:link_data_collector/Resources/Public/Contrib/fancybox/jquery.fancybox.min.css
}

page.includeJS {
    jquery = EXT:link_data_collector/Resources/Public/Contrib/jquery-3.2.1.min.js
    fancy = EXT:link_data_collector/Resources/Public/Contrib/fancybox/jquery.fancybox.min.js
    init = EXT:link_data_collector/Resources/Public/JavaScript/link_data_collector.js
}

pageLinkDataCollector < page
pageLinkDataCollector = PAGE
pageLinkDataCollector {
    typeNum = 9615
    10 < tt_content.list.20.linkdatacollector_ldc
    10 {
        settings {

        }
    }

    config {
        admPanel = 0
        disablePrefixComment = 1
    }
}
```

### 2) Adopt the JS

The example at `Resources/Public/JavaScript/link_data_collector.js` **must** be adopted.

### 3) Configuration of mail & persistence

The file `ext_typoscript_setup.txt` includes the full possible configuration. It should be self explaining.

```
plugin.tx_linkdatacollector {
    settings {
        pidForNewRecord = 123
        mail {
            enable = 1
            subject = New notification
            fromMailAddress = noreply@example.com
            fromMailName = Admin
            to = admin@example.com
        }
    }
}

```


