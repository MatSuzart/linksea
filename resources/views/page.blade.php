<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{title}}</title>
    <style type="text/css">
        body{
            display: flex;
            flex-direction: colum;
            align-items: center;
            margin: 0;
            padding: 20px;
            font-family: Helvetica, Arial;
            color:{{$font_color}};
        }
        .profileImage img{
            width: auto;
            height: 100px;

        }
        .profileTitle{
            font-size: 17px;
            font-weight:bold;
            margin-top:10px;

        }
        .profileDescription{
            font-size:15px;
            margin-top:5px;
        }

        .linkArea{
            width:100%;
            marign: 50px 0;
        }
        .linkArea a {
            display: block;
            padding: 20px;
            text-align: center;
            text-decoration: none;
            font-size: 18px;
            font-weight: bold;
            margin-bottom:20px
        }
        .banner a {
            color: {{$font_color}};
        }
    </style>
</head>
<body>
    <div class="profileImage">
        <img src="{{$profile_image}}" />
    </div>

    <div class="profileTitle">{{$title}}}</div>
    <div class="profileDescription">{{$description}}</div>
    <div class="linkArea">
        @foreach ($links as $link)
            <a href="{{$link->href}}">{{$link->title}}</a>
        @endforeach
    </div>

    <div class="banner">
        Create <a href="https://github/matsuzart"></a>
    </div>
    @if (!empty($fb_pixel))
    <!-- Facebook Pixel Code -->
    <script>
        !function(f, b, e, v, n, t, s) {
            if (f.fbq) return;
            n = f.fbq = function() {
                n.callMethod ? n.callMethod.apply(n, arguments) : n.queue.push(arguments);
            };
            if (!f._fbq) f._fbq = n;
            n.push = n;
            n.loaded = !0;
            n.version = '2.0';
            n.queue = [];
            t = b.createElement(e);
            t.async = !0;
            t.src = v;
            s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s);
        }(window, document, 'script', 'https://connect.facebook.net/en_US/fbevents.js');
        fbq('init', '{{ $fb_pixel }}');
        fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id={{ $fb_pixel }}&ev=PageView&noscript=1"
    /></noscript>
@endif

</body>
</html>