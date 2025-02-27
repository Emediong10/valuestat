@aware(['page'])


@props(['url_prefix', 'blogs', 'news_pagination'])

<section id="content">
    <div class="content-wrap pb-0">
        <div class="container mb-5">
            <div class="post-grid row col-mb-30">
                @foreach ($blogs as $post)
                <div class="entry col-lg-4 col-md-6">
                    <div class="grid-inner card">
                        <div class="entry-image">
                            <a href="{{ $url_prefix }}/{{ $post->slug }}">
                                <img src="{{ asset('storage/' . $post['image']) }}" alt="{{ $post['title'] }}" class="img-fluid" width="70" height="300" style="height: 300px !important;" >
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
                                    <li><i class="icon-comments"></i>{{ $post->comments->count() }}</li>

                                </ul>
                            </div>
                            <div class="entry-content mt-4">
                                <p class="mb-0">{!! \Illuminate\Support\Str::limit($post['content'], 130, '...') !!}
                                    <a href="{{ $url_prefix }}/{{ $post->slug }}" class="more-link">Read More</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
        <div class="clear"></div>
    </div>
</section>


