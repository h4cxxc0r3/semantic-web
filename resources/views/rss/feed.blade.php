<?=
'<?xml version="1.0" encoding="UTF-8"?>'.PHP_EOL
?>
<rss version="2.0">
    <channel>
        <title>Semantic Web></title>
        <link><![CDATA[ https://127.0.0.1:8000/feed ]]></link>
        <description>Prototype Semantic Web Database HP</description>
        <language>en</language>

        @foreach($phones as $phone)
            <item>
                <name>{{ $phone->name }}</name>
                <brand>{{ $phone->brand }}</brand>
                <os>{!! $phone->os !!}</os>
                <processor><![CDATA[{{ $phone->processor }}]]></processor>
                <display><![CDATA[{{ $phone->display }}]]></display>
                <memory>{{ $phone->memory }}</memory>
                <battery>{{ $phone->battery }}</battery>
                <price>{{ $phone->price }}</price>
                <phoneid>{{ $phone->id }}</phoneid>
            </item>
        @endforeach
    </channel>
</rss>
