@aware(['page'])
<section id="content">
    <div class="content-wrap">

        <section id="page-title">

            <div class="container clearfix">
                <h1>Read the {{ $blog->title }} Event below</h1>

            </div>

        </section>
        <div class="container clearfix">


            <!-- Posts
                ============================================= -->
            <div id="posts" class="row gutter-30">

                <div class="entry col-12">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <img  width="500" height="700" style="height: 600px !important;" src="{{ asset('storage/' . $blog->image) }}" alt="{{ $blog->name }}">
                        </div>




                            <div class="entry-meta">
								<ul>
									<li><i class="icon-calendar3"></i>{{ $blog->created_at->diffForHumans() }} </li>
									<li><i class="icon-user"></i> <strong>{{ $blog->author->name }} </strong></li>
									<li><i class="icon-comments"></i> {{ $blog->comments->count() }} Comments</li>

								</ul>
							</div>


                    </div>
                    <div class="entry-content entry-title">
                        <h2 class="center"><strong>{{ ucfirst($blog->title) }}</strong></h2>
                        {!! Str::markdown($blog->content)!!}
                    </div>
                    @livewire('blog-comment', ['blog' => $blog])

                </div>
            </div>

        </div><!-- #posts end -->

    </div>
    </div>
</section>

