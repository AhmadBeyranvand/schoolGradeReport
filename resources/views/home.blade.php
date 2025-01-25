<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
        }

        body {
            text-align: center;
        }

        section {
            margin:auto;
        }

        img {
            height: 30svh;
            opacity: 0;
        }

        img:first-child {
            margin-bottom: 30svh;
        }

        img:last-child {
            margin-top: 30svh;
        }

        h2 {
            display: block;
            color: white;
            font-family: sans-serif;
            font-size: 24svh;
            margin: 8svw 0;
        }
    </style>
</head>

<body>
    <section>
        <img src="https://amagi.dev/vfx-js/vfx-js-logo-no-padding.svg" data-delay="0.3" />
    </section>
    <script type="module" src="/static/js/vfx.js"></script>
</body>

</html>