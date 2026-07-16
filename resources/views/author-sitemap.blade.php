{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}

<urlset
    xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">

    @foreach($authors as $author)

        @if($author->meta && $author->meta->slug)

            <url>

                <loc>
                    {{ url('/author/' . $author->meta->slug) }}
                </loc>

                <lastmod>
                    {{ optional($author->updated_at)->tz('UTC')->toAtomString() }}
                </lastmod>

                <changefreq>monthly</changefreq>

                <priority>0.5</priority>

            </url>

        @endif

    @endforeach

</urlset>