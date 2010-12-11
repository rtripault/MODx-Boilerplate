<rss version="2.0">
    <channel>
    <title>[[*pagetitle]]</title>
    <link>[[++site_url]]</link>
    <description>[[*description]]</description>
    <lastBuildDate>[[!getTime?format=`%a, %d %b %Y %H:%M:%S %z`]]</lastBuildDate>
    <language>[[++cultureKey]]-[[++cultureKey:ucase]]</language>

[[!getResources? 
   &parents=`0`
   &cache=`0`
   &limit=`10`
   &sortby=`createdon`
   &sortdir=`DESC`
   &includeTVs=`1`
   &includeContent=`1`
   &hideContainers=`1`
   &tpl=`rss.item`
]]

    </channel>
</rss>