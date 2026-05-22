<script type="application/ld+json">
                                                {
                                                "@context": "https://schema.org",
                                                "@type": "NewsArticle",
                                                "mainEntityOfPage": {
                                                    "@type": "WebPage",
                                                    "@id": "{{ url()->current() }}"
                                                },
                                                "headline": "{{ $post->title }}",
                                                "description": "{{ Str::limit(strip_tags($post->description), 160) }}",
                                                "datePublished": "{{ $post->published_at?->toIso8601String() ?? $post->created_at->toIso8601String() }}",
                                                "dateModified": "{{ $post->updated_at->toIso8601String() }}",
                                                "image": {
                                                    "@type": "ImageObject",
                                                    "url": "{{ $post->thumbnail_url }}",
                                                    "height": 675,
                                                    "width": 1200
                                                },
                                                "author": {
                                                    "@type": "Person",
                                                    "name": "{{ $post->author->name ?? 'Unknown Author' }}"
                                                },
                                                "publisher": {
                                                    "@type": "Organization",
                                                    "name": "The Evident",
                                                    "logo": {
                                                    "@type": "ImageObject",
                                                    "url": "{{ asset('logocolor.png') }}",
                                                    "width": 206,
                                                    "height": 60
                                                    }
                                                }
                                                }
                                     </script>
<script type="application/ld+json">
                                                        {
                                                        "@context": "http://schema.org",
                                                        "@type": "BreadcrumbList",
                                                        "itemListElement": [
                                                            {
                                                            "@type": "ListItem",
                                                            "position": 1,
                                                            "name": "Home",
                                                            "item": "{{ url('/') }}"
                                                            },
                                                            {
                                                            "@type": "ListItem",
                                                            "position": 2,
                                                            "name": "{{ $category->name }}",
                                                            "item": "{{ route('category.show', $category->scheme) }}"
                                                            },
                                                            {
                                                            "@type": "ListItem",
                                                            "position": 3,
                                                            "name": "{{ $post->title }}",
                                                            "item": "{{ route('home.show', [$category->scheme, $post->slug]) }}"
                                                            }
                                                                            ]
                                                            }
                                                        </script>