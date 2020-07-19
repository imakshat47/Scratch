<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        body {
            background-color: #f1f1f1;
            text-align: center;
        }

        img {
            max-width: 100%;
            height: auto;
            align-items: center;
            align-self: center;
        }

        button {
            font-size: 1.5rem;
            font-weight: bolder;
        }
    </style>

    <title>404 | Page Not Found</title>
</head>

<body>
    <div>
        <img src="<?= HTTP_IMAGES .  '404.png' ?>" alt="404 Page Not Found">
    </div>
    <a href="<?= base_url() ?>">
        <button>
            <b>Go to <i> Home</i></b>
        </button>
    </a>
</body>

</html>