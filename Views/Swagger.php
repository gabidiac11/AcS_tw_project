<!DOCTYPE html>
<html lang="en">

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, maximum-scale=1, minimal-ui" />
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="icon" type="image/png" href="./../assets/favicon/logo.ico" />

    <title> Swagger </title>
    <link href="../../assets/css/index.css" media="all" rel="stylesheet" type="text/css" />
    <link href="../../assets/css/header.css" media="all" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="/assets/packages/swagger-ui/dist/swagger-ui.css" />

    <style>
        html {
            box-sizing: border-box;
            overflow: -moz-scrollbars-vertical;
            overflow-y: scroll;
        }

        *,
        *:before,
        *:after {
            box-sizing: inherit;
        }

        body {
            margin: 0;
            background: #fafafa;
        }
    </style>
</head>

<body>
    <div id="swagger-ui"></div>
    <script src="/assets/packages/swagger-ui/dist/swagger-ui-standalone-preset.js"></script>
    <script src="/assets/packages/swagger-ui/dist/swagger-ui-bundle.js"></script>

    <script>
        window.onload = function() {
            // Begin Swagger UI call region
            const ui = SwaggerUIBundle({
                url: window.location.protocol + "//" + window.location.hostname + "/swagger.json",
                dom_id: '#swagger-ui',
                deepLinking: true,
                presets: [
                    SwaggerUIBundle.presets.apis,
                    SwaggerUIStandalonePreset
                ],
                layout: "StandaloneLayout"
            })
            // End Swagger UI call region
            window.ui = ui
        }
    </script>
</body>

</html>