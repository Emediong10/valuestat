@aware(['page'])

@props(['url_prefix', 'blogs', 'news_pagination'])

<section id="page-title">
    <div class="container clearfix">
        <h1>Check Our Blog News </h1>
    </div>
</section>
<section id="content">
    <div class="pb-0 content-wrap">
        <div class="container mb-5">
            <div class="post-grid row col-mb-30">
                @forelse($blogs as $post)
                    <div class="entry col-lg-4 col-md-6">
                        <div class="grid-inner card">
                            <div class="entry-image">
                                <a href="{{ $url_prefix }}/{{ $post->slug }}">
                                    <img src="{{ asset('storage/' . $post['image']) }}" alt="{{ $post['title'] }}" class="img-fluid" width="70" height="300" style="height: 300px !important;">
                                </a>
                            </div>
                            <div class="p-4">
                                <div class="entry-title title-sm">
                                    <h3 class="nott ls0 h5">
                                        <a href="{{ $url_prefix }}/{{ $post->slug }}">{{ $post['title'] }}</a>
                                    </h3>
                                </div>
                                <div class="entry-meta">
                                    <ul>
                                        <li><i class="icon-calendar3"></i> {{ date('d M Y', strtotime($post['published_date'])) }}</li>
                                        <li><i class="icon-user"></i> {{ $post->author->name }}</li>
                                        <li><i class="icon-comments"></i> {{ $post->comments->count() }}</li>
                                    </ul>
                                </div>
                                <div class="mt-4 entry-content">
                                    <p class="mb-0">{!! \Illuminate\Support\Str::limit($post['content'], 130, '...') !!}
                                        <a href="{{ $url_prefix }}/{{ $post->slug }}" class="more-link">Read More</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                @empty
                    <div class="col-12">
                        <div style="background-color: rgba(61, 128, 228, 0.08); border: 1px solid rgba(61, 128, 228, 0.2); border-radius: 8px;"
                             class="py-5 text-center shadow-sm alert card">
                            <h4 class="mb-2 text-primary">No Blogs Available Now</h4>
                            <p class="mb-0 text-muted">Please check back soon or explore other pages.</p>
                        </div>
                    </div>
                @endforelse
            </div>
            <div style="float: right; padding: 10px;">{!! $blogs->appends(Illuminate\Support\Facades\Request::except('per_page'))->links() !!}
            </div>
        </div>
        <div class="clear"></div>
    </div>
</section>
