@aware(['page'])
@props(['videos','youtube_id','title', 'description' ])
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">


            <div id="posts" class="post-grid row grid-container gutter-50 clearfix" data-layout="fitRows">
                @foreach ($videos as $video)
                    <div class="entry col-sm-6 col-12">
                        <div class="grid-inner">
                            <div class="entry-image">
                                <iframe src="https://www.youtube.com/embed/{{ $video['youtube_id'] }}" allowfullscreen></iframe>
                            </div>
                            <div class="entry-title">
                                <h2><a href="#">{{ $video['title'] }}</a></h2>
                            </div>
                            <div class="entry-meta">
                               
                            </div>
                            <div class="entry-content">
                                <p>{{ $video['description'] }}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

        </div>
    </div>

    <style>
        .post-grid {
            display: flex;
            flex-wrap: wrap;
        }

        .post-grid .entry {
            width: 50%;
            padding: 15px;
            box-sizing: border-box;
            display: flex;
        }

        .grid-inner {
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            background: #fff;
            border: 1px solid #e0e0e0;
            border-radius: 10px;
            padding: 20px;
            width: 100%;
            height: 100%;
            box-shadow: 0 2px 8px rgba(0,0,0,0.05);
        }

        .entry-image iframe {
            width: 100%;
            height: 300px;
            border-radius: 6px;
        }

        .entry-title h2 {
            font-size: 18px;
            margin: 10px 0;
            text-align: center;
        }

        .entry-content {
            height: 200px;
            overflow-y: auto;
            margin-top: 10px;
        }

        .entry-content p {
            font-size: 14px;
            color: #333;
            margin: 0;
        }
    </style>
</section>
