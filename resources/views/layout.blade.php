<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	
	<title>Nexus</title>

    <link href="//fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

    <style>
        html, body {
            height: 100%;
        }

        body {
            margin: 0;
            padding: 0;
            width: 100%;
            display: table;
            font-weight: 100;
            font-family: 'Lato';
        }

        .container {
            text-align: center;
            display: table-cell;
            vertical-align: middle;
        }

        .content {
            text-align: center;
            display: inline-block;
        }

        .title {
            font-size: 96px;
        }

        .sub-title {
            font-size: 32px;
        }

        a {
            text-decoration: none;
            color: #CCC;
        }

        a:hover {
            color: #000;
        }

        .post {
            width: 960px;
        }

        p {
            margin: 10px 0;
        }
    </style>
</head>

<body>

	@yield('content')

</body>

</html>