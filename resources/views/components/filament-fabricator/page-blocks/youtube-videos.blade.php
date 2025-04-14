@aware(['page'])
@props(['videos','youtube_id','title', 'description' ])
<section id="content">
    <div class="content-wrap">
        <div class="container clearfix">

            <div id="posts" class="clearfix post-grid row grid-container gutter-50" data-layout="fitRows">
                @foreach ($videos as $video)
                    <div class="entry">
                        <div class="grid-inner">
                            <div class="entry-image">
                                <iframe src="https://www.youtube.com/embed/{{ $video['youtube_id'] }}" allowfullscreen></iframe>
                            </div>
                            <div class="entry-title">
                                <h2><a href="#">{{ $video['title'] }}</a></h2>
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
            margin: -15px;
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
            border-radius: 4px;
        }

        .entry-title h2 {
            font-size: 18px;
            margin: 10px 0;
            text-align: center;
        }

        .entry-content {
            margin-top: 10px;
        }

        .entry-content p {
            font-size: 14px;
            color: #333;
            margin: 0;
        }

        /* Responsive Styles */
        @media (max-width: 991px) {
            .post-grid .entry {
                width: 100%;
            }

            .entry-image iframe {
                height: 250px;
            }

            .entry-title h2 {
                font-size: 16px;
            }

            .entry-content p {
                font-size: 13px;
            }
        }

        @media (max-width: 576px) {
            .entry-image iframe {
                height: 200px;
            }

            .grid-inner {
                padding: 15px;
            }

            .entry-title h2 {
                font-size: 15px;
            }

            .entry-content p {
                font-size: 12.5px;
            }
        }
    </style>
</section>
