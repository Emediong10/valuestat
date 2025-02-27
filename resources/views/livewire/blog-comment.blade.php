<div>
    @if (session()->has('message'))
        <div class="bg-blue-100 text-blue-800 p-2 rounded mb-4">
            {{ session('message') }}
        </div>
    @endif


<div id="comments" class="clearfix">

    <h3 id="comments-title"><span>{{ $blog->comments->count() }}</span> Comments</h3>

    <!-- Comments List
    ============================================= -->
    <ol class="commentlist clearfix">

        @forelse ($comments as $comment)
            <li class="comment byuser comment-author-_smcl_admin even thread-odd thread-alt depth-1" id="li-comment-2">

                <div id="comment-2" class="comment-wrap clearfix">

                    <div class="comment-meta">

                        <div class="comment-author vcard">

                            <span class="comment-avatar clearfix">
                                <img alt='Image'
                                    src=https://img.icons8.com/quill/100/chat-message.png
                                    class='avatar avatar-60 photo' height='70' width='70'/></span>
                                    {{-- <span class="comment-avatar clearfix">
                                        <img alt='Image'
                                         width="100" height="100" src="https://img.icons8.com/quill/100/chat-message.png"
                                        <i class="fas fa-envelope" style="font-size: 24px; margin-left: 10px; color: #555;"></i>
                                    </span> --}}


                        </div>

                    </div>

                    <div class="comment-content clearfix">

                        <div class="comment-author"><a href='https://themeforest.net/user/semicolonweb'
                                rel='external nofollow' class='url'> {{ $comment->name }}</a><span><a href="#"
                                    title="Permalink to this comment">
                                    {{ $comment->created_at->diffForHumans() }}</a></span></div>

                        <p> {{ $comment->comment }}</p>

                        {{-- <a class='comment-reply-link' href='#'><i class="icon-reply"></i></a> --}}

                    </div>




                    <div class="clear"></div>

                </div>

            </li>
        @empty

            <div class="text-center text-muted py-4 center">
                <p class="mb-0">No comments yet. Be the first to comment!</p>
            </div>
        @endforelse


    </ol><!-- .commentlist end -->
    {{-- {{ $this->comments->links() }} --}}

    <div class="clear"></div>

    <!-- Comment Form
    ============================================= -->
    <div id="respond">

        <h3>Leave a <span>Comment</span></h3>

        <form class="row" wire:submit.prevent="submitComment" id="commentform">
            @csrf
            <div class="col-md-12 form-group">
                <label for="author">Name</label>
                <input type="text" name="author" wire:model="name" id="author" value="" size="22"
                    tabindex="1" class="sm-form-control" placeholder="your name" />
                @error('name')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>

            {{-- <div class="col-md-4 form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email" value="" size="22" tabindex="2" class="sm-form-control" />
            </div>

            <div class="col-md-4 form-group">
                <label for="url">Website</label>
                <input type="text" name="url" id="url" value="" size="22" tabindex="3" class="sm-form-control" />
            </div> --}}

            <div class="w-100"></div>

            <div class="col-12 form-group">
                <label for="comment">Comment</label>
                <textarea name="comment" placeholder="your message" wire:model="comment" cols="58" rows="7" tabindex="4" class="sm-form-control"></textarea>
                @error('comment')
                    <div class="text-danger small">{{ $message }}</div>
                @enderror
            </div>

            <div class="col-12 form-group">
                <button wire:click="submitComment" tabindex="5" class="button button-3d m-0">Submit Comment</button>
               
            </div>
        </form>

    </div><!-- #respond end -->

</div>
</div>
