# Endpoints


## Display Swagger API page.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/swagg" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/swagg"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>L5 Swagger UI</title>
    <link rel="stylesheet" type="text/css" href="http://localhost/docs/asset/swagger-ui.css?v=0755b7093afdd36d03212b65315f0209">
    <link rel="icon" type="image/png" href="http://localhost/docs/asset/favicon-32x32.png?v=40d4f2c38d1cd854ad463f16373cbcb6" sizes="32x32"/>
    <link rel="icon" type="image/png" href="http://localhost/docs/asset/favicon-16x16.png?v=f0ae831196d55d8f4115b6c5e8ec5384" sizes="16x16"/>
    <style>
    html
    {
        box-sizing: border-box;
        overflow: -moz-scrollbars-vertical;
        overflow-y: scroll;
    }
    *,
    *:before,
    *:after
    {
        box-sizing: inherit;
    }

    body {
      margin:0;
      background: #fafafa;
    }
    </style>
    </head>

<body >
<div id="swagger-ui"></div>

<script src="http://localhost/docs/asset/swagger-ui-bundle.js?v=6c23777357d2beae9650f9aa035d93fb"></script>
<script src="http://localhost/docs/asset/swagger-ui-standalone-preset.js?v=6b2892eb9458da5c3224817b3984d14c"></script>
<script>
    window.onload = function() {
        // Build a system
        const ui = SwaggerUIBundle({
            dom_id: '#swagger-ui',
            url: "http://localhost/docs/api-docs.json",
            operationsSorter: null,
            configUrl: null,
            validatorUrl: null,
            oauth2RedirectUrl: "http://localhost/api/oauth2-callback",

            requestInterceptor: function(request) {
                request.headers['X-CSRF-TOKEN'] = '';
                return request;
            },

            presets: [
                SwaggerUIBundle.presets.apis,
                SwaggerUIStandalonePreset
            ],

            plugins: [
                SwaggerUIBundle.plugins.DownloadUrl
            ],

            layout: "StandaloneLayout",
            docExpansion : "none",
            deepLinking: true,
            filter: true,
            persistAuthorization: "false",

        })

        window.ui = ui

            }
</script>
</body>
</html>

```
<div id="execution-results-GETapi-swagg" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-swagg"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-swagg"></code></pre>
</div>
<div id="execution-error-GETapi-swagg" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-swagg"></code></pre>
</div>
<form id="form-GETapi-swagg" data-method="GET" data-path="api/swagg" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-swagg', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-swagg" onclick="tryItOut('GETapi-swagg');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-swagg" onclick="cancelTryOut('GETapi-swagg');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-swagg" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/swagg</code></b>
</p>
</form>


## Dump api-docs content endpoint. Supports dumping a json, or yaml file.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/docs/unde" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/docs/unde"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json
{
    "message": "Unable to locate documentation file at: \"\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/storage\/api-docs\/unde\"",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Application.php",
    "line": 1129,
    "trace": [
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/helpers.php",
            "line": 44,
            "function": "abort",
            "class": "Illuminate\\Foundation\\Application",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/darkaonline\/l5-swagger\/src\/Http\/Controllers\/SwaggerController.php",
            "line": 80,
            "function": "abort"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
            "line": 54,
            "function": "docs",
            "class": "L5Swagger\\Http\\Controllers\\SwaggerController",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 262,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 205,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 721,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/darkaonline\/l5-swagger\/src\/Http\/Middleware\/Config.php",
            "line": 44,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "L5Swagger\\Http\\Middleware\\Config",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 723,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 698,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 662,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 651,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 167,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ConvertEmptyStringsToNull.php",
            "line": 31,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TrimStrings.php",
            "line": 40,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TrimStrings",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 38,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 142,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 111,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 653,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 298,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/symfony\/console\/Application.php",
            "line": 1040,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/symfony\/console\/Application.php",
            "line": 301,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/symfony\/console\/Application.php",
            "line": 171,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 94,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETdocs--jsonFile--" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdocs--jsonFile--"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdocs--jsonFile--"></code></pre>
</div>
<div id="execution-error-GETdocs--jsonFile--" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdocs--jsonFile--"></code></pre>
</div>
<form id="form-GETdocs--jsonFile--" data-method="GET" data-path="docs/{jsonFile?}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdocs--jsonFile--', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdocs--jsonFile--" onclick="tryItOut('GETdocs--jsonFile--');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdocs--jsonFile--" onclick="cancelTryOut('GETdocs--jsonFile--');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdocs--jsonFile--" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>docs/{jsonFile?}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>jsonFile</code></b>&nbsp;&nbsp;<small>string</small>     <i>optional</i> &nbsp;
<input type="text" name="jsonFile" data-endpoint="GETdocs--jsonFile--" data-component="url"  hidden>
<br>

</p>
</form>


## docs/asset/{asset}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/docs/asset/molestias" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/docs/asset/molestias"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (404):

```json
{
    "message": "(molestias) - this L5 Swagger asset is not allowed",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Application.php",
    "line": 1129,
    "trace": [
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/helpers.php",
            "line": 44,
            "function": "abort",
            "class": "Illuminate\\Foundation\\Application",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/darkaonline\/l5-swagger\/src\/Http\/Controllers\/SwaggerAssetController.php",
            "line": 34,
            "function": "abort"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
            "line": 54,
            "function": "index",
            "class": "L5Swagger\\Http\\Controllers\\SwaggerAssetController",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 262,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 205,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 721,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/darkaonline\/l5-swagger\/src\/Http\/Middleware\/Config.php",
            "line": 44,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "L5Swagger\\Http\\Middleware\\Config",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 723,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 698,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 662,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 651,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 167,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ConvertEmptyStringsToNull.php",
            "line": 31,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TrimStrings.php",
            "line": 40,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TrimStrings",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 38,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 142,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 111,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 653,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 298,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/symfony\/console\/Application.php",
            "line": 1040,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/symfony\/console\/Application.php",
            "line": 301,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/symfony\/console\/Application.php",
            "line": 171,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 94,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETdocs-asset--asset-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETdocs-asset--asset-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETdocs-asset--asset-"></code></pre>
</div>
<div id="execution-error-GETdocs-asset--asset-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETdocs-asset--asset-"></code></pre>
</div>
<form id="form-GETdocs-asset--asset-" data-method="GET" data-path="docs/asset/{asset}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETdocs-asset--asset-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETdocs-asset--asset-" onclick="tryItOut('GETdocs-asset--asset-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETdocs-asset--asset-" onclick="cancelTryOut('GETdocs-asset--asset-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETdocs-asset--asset-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>docs/asset/{asset}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>asset</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="asset" data-endpoint="GETdocs-asset--asset-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display Oauth2 callback pages.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/oauth2-callback" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/oauth2-callback"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!doctype html>
<html lang="en-US">
<head>
    <title>Swagger UI: OAuth2 Redirect</title>
</head>
<body>
<script>
    'use strict';
    function run () {
        var oauth2 = window.opener.swaggerUIRedirectOauth2;
        var sentState = oauth2.state;
        var redirectUrl = oauth2.redirectUrl;
        var isValid, qp, arr;

        if (/code|token|error/.test(window.location.hash)) {
            qp = window.location.hash.substring(1).replace('?', '&');
        } else {
            qp = location.search.substring(1);
        }

        arr = qp.split("&");
        arr.forEach(function (v,i,_arr) { _arr[i] = '"' + v.replace('=', '":"') + '"';});
        qp = qp ? JSON.parse('{' + arr.join() + '}',
                function (key, value) {
                    return key === "" ? value : decodeURIComponent(value);
                }
        ) : {};

        isValid = qp.state === sentState;

        if ((
          oauth2.auth.schema.get("flow") === "accessCode" ||
          oauth2.auth.schema.get("flow") === "authorizationCode" ||
          oauth2.auth.schema.get("flow") === "authorization_code"
        ) && !oauth2.auth.code) {
            if (!isValid) {
                oauth2.errCb({
                    authId: oauth2.auth.name,
                    source: "auth",
                    level: "warning",
                    message: "Authorization may be unsafe, passed state was changed in server. The passed state wasn't returned from auth server."
                });
            }

            if (qp.code) {
                delete oauth2.state;
                oauth2.auth.code = qp.code;
                oauth2.callback({auth: oauth2.auth, redirectUrl: redirectUrl});
            } else {
                let oauthErrorMsg;
                if (qp.error) {
                    oauthErrorMsg = "["+qp.error+"]: " +
                        (qp.error_description ? qp.error_description+ ". " : "no accessCode received from the server. ") +
                        (qp.error_uri ? "More info: "+qp.error_uri : "");
                }

                oauth2.errCb({
                    authId: oauth2.auth.name,
                    source: "auth",
                    level: "error",
                    message: oauthErrorMsg || "[Authorization failed]: no accessCode received from the server."
                });
            }
        } else {
            oauth2.callback({auth: oauth2.auth, token: qp, isValid: isValid, redirectUrl: redirectUrl});
        }
        window.close();
    }

    if (document.readyState !== 'loading') {
        run();
    } else {
        document.addEventListener('DOMContentLoaded', function () {
            run();
        });
    }
</script>
</body>
</html>

```
<div id="execution-results-GETapi-oauth2-callback" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-oauth2-callback"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-oauth2-callback"></code></pre>
</div>
<div id="execution-error-GETapi-oauth2-callback" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-oauth2-callback"></code></pre>
</div>
<form id="form-GETapi-oauth2-callback" data-method="GET" data-path="api/oauth2-callback" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-oauth2-callback', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-oauth2-callback" onclick="tryItOut('GETapi-oauth2-callback');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-oauth2-callback" onclick="cancelTryOut('GETapi-oauth2-callback');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-oauth2-callback" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/oauth2-callback</code></b>
</p>
</form>


## Return an empty response simply to trigger the storage of the CSRF cookie in the browser.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/sanctum/csrf-cookie" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/sanctum/csrf-cookie"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETsanctum-csrf-cookie" hidden>
    <blockquote>Received response<span id="execution-response-status-GETsanctum-csrf-cookie"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETsanctum-csrf-cookie"></code></pre>
</div>
<div id="execution-error-GETsanctum-csrf-cookie" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETsanctum-csrf-cookie"></code></pre>
</div>
<form id="form-GETsanctum-csrf-cookie" data-method="GET" data-path="sanctum/csrf-cookie" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETsanctum-csrf-cookie', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETsanctum-csrf-cookie" onclick="tryItOut('GETsanctum-csrf-cookie');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETsanctum-csrf-cookie" onclick="cancelTryOut('GETsanctum-csrf-cookie');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETsanctum-csrf-cookie" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>sanctum/csrf-cookie</code></b>
</p>
</form>


## api/user




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/user" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/user"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```
<div id="execution-results-GETapi-user" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-user"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-user"></code></pre>
</div>
<div id="execution-error-GETapi-user" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-user"></code></pre>
</div>
<form id="form-GETapi-user" data-method="GET" data-path="api/user" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-user', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-user" onclick="tryItOut('GETapi-user');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-user" onclick="cancelTryOut('GETapi-user');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-user" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/user</code></b>
</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/pegawai" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/pegawai"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
[
    {
        "id": 38,
        "namaPegawai": "Piyo Aswandi",
        "email": "piyoaswandi@gmail.com",
        "noTelepon": "081234567890",
        "alamat": "sebagai derektur",
        "foto": "http:\/\/localhost\/storage\/uploads\/foto\/67323bdbbb81f_1714975299899.jpeg",
        "tglLahir": "2024-12-11",
        "tglGabung": "2024-12-11",
        "jabatan_id": 1,
        "departemen_id": 2,
        "created_at": "2024-11-11 17:16:11",
        "updated_at": "2024-11-11 17:16:11",
        "statusenable": true,
        "namaDepartemen": "DEREKTUR",
        "namaJabatan": "Direktur"
    },
    {
        "id": 34,
        "namaPegawai": "nina",
        "email": "nisa@gmail.com",
        "noTelepon": "086548374893345",
        "alamat": "test",
        "foto": "http:\/\/localhost\/storage\/uploads\/foto\/6731c97118b89_img_crome.png",
        "tglLahir": "2024-11-11",
        "tglGabung": "2024-11-11",
        "jabatan_id": 1,
        "departemen_id": 2,
        "created_at": "2024-11-11 09:08:01",
        "updated_at": "2024-11-14 07:26:00",
        "statusenable": true,
        "namaDepartemen": "DEREKTUR",
        "namaJabatan": "Direktur"
    }
]
```
<div id="execution-results-GETapi-pegawai" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-pegawai"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pegawai"></code></pre>
</div>
<div id="execution-error-GETapi-pegawai" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pegawai"></code></pre>
</div>
<form id="form-GETapi-pegawai" data-method="GET" data-path="api/pegawai" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-pegawai', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-pegawai" onclick="tryItOut('GETapi-pegawai');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-pegawai" onclick="cancelTryOut('GETapi-pegawai');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-pegawai" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/pegawai</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/pegawai" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/pegawai"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-pegawai" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-pegawai"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-pegawai"></code></pre>
</div>
<div id="execution-error-POSTapi-pegawai" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-pegawai"></code></pre>
</div>
<form id="form-POSTapi-pegawai" data-method="POST" data-path="api/pegawai" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-pegawai', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-pegawai" onclick="tryItOut('POSTapi-pegawai');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-pegawai" onclick="cancelTryOut('POSTapi-pegawai');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-pegawai" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/pegawai</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/pegawai/neque" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/pegawai/neque"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for type bigint: \"neque\"\nCONTEXT:  unnamed portal parameter $1 = '...' (SQL: select * from \"pegawai_M\" where \"pegawai_M\".\"id\" = neque limit 1)",
    "exception": "Illuminate\\Database\\QueryException",
    "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
    "line": 712,
    "trace": [
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
            "line": 672,
            "function": "runQueryCallback",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
            "line": 376,
            "function": "run",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2414,
            "function": "select",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2402,
            "function": "runSelect",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2936,
            "function": "Illuminate\\Database\\Query\\{closure}",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2403,
            "function": "onceWithColumns",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 625,
            "function": "get",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 609,
            "function": "getModels",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Concerns\/BuildsQueries.php",
            "line": 294,
            "function": "get",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 400,
            "function": "first",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Support\/Traits\/ForwardsCalls.php",
            "line": 23,
            "function": "find",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Model.php",
            "line": 2132,
            "function": "forwardCallTo",
            "class": "Illuminate\\Database\\Eloquent\\Model",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Model.php",
            "line": 2144,
            "function": "__call",
            "class": "Illuminate\\Database\\Eloquent\\Model",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/app\/Http\/Controllers\/PegawaiController.php",
            "line": 98,
            "function": "__callStatic",
            "class": "Illuminate\\Database\\Eloquent\\Model",
            "type": "::"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
            "line": 54,
            "function": "show",
            "class": "App\\Http\\Controllers\\PegawaiController",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 262,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 205,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 721,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 50,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 63,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 723,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 698,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 662,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 651,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 167,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ConvertEmptyStringsToNull.php",
            "line": 31,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TrimStrings.php",
            "line": 40,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TrimStrings",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 52,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 142,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 111,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 653,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 298,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/symfony\/console\/Application.php",
            "line": 1040,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/symfony\/console\/Application.php",
            "line": 301,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/symfony\/console\/Application.php",
            "line": 171,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 94,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-pegawai--pegawai-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-pegawai--pegawai-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-pegawai--pegawai-"></code></pre>
</div>
<div id="execution-error-GETapi-pegawai--pegawai-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-pegawai--pegawai-"></code></pre>
</div>
<form id="form-GETapi-pegawai--pegawai-" data-method="GET" data-path="api/pegawai/{pegawai}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-pegawai--pegawai-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-pegawai--pegawai-" onclick="tryItOut('GETapi-pegawai--pegawai-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-pegawai--pegawai-" onclick="cancelTryOut('GETapi-pegawai--pegawai-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-pegawai--pegawai-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/pegawai/{pegawai}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>pegawai</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="pegawai" data-endpoint="GETapi-pegawai--pegawai-" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/pegawai/tenetur" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/pegawai/tenetur"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-pegawai--pegawai-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-pegawai--pegawai-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-pegawai--pegawai-"></code></pre>
</div>
<div id="execution-error-PUTapi-pegawai--pegawai-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-pegawai--pegawai-"></code></pre>
</div>
<form id="form-PUTapi-pegawai--pegawai-" data-method="PUT" data-path="api/pegawai/{pegawai}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-pegawai--pegawai-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-pegawai--pegawai-" onclick="tryItOut('PUTapi-pegawai--pegawai-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-pegawai--pegawai-" onclick="cancelTryOut('PUTapi-pegawai--pegawai-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-pegawai--pegawai-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/pegawai/{pegawai}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/pegawai/{pegawai}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>pegawai</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="pegawai" data-endpoint="PUTapi-pegawai--pegawai-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/pegawai/distinctio" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/pegawai/distinctio"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-pegawai--pegawai-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-pegawai--pegawai-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-pegawai--pegawai-"></code></pre>
</div>
<div id="execution-error-DELETEapi-pegawai--pegawai-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-pegawai--pegawai-"></code></pre>
</div>
<form id="form-DELETEapi-pegawai--pegawai-" data-method="DELETE" data-path="api/pegawai/{pegawai}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-pegawai--pegawai-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-pegawai--pegawai-" onclick="tryItOut('DELETEapi-pegawai--pegawai-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-pegawai--pegawai-" onclick="cancelTryOut('DELETEapi-pegawai--pegawai-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-pegawai--pegawai-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/pegawai/{pegawai}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>pegawai</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="pegawai" data-endpoint="DELETEapi-pegawai--pegawai-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/jabatan




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/jabatan" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/jabatan"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 2,
            "namaJabatan": "Hrd",
            "deskripsiJabatan": "Hrd",
            "golonganGaji": "2",
            "created_at": "2024-11-05T14:40:08.000000Z",
            "updated_at": "2024-11-05T14:40:08.000000Z",
            "statusEnable": null
        },
        {
            "id": 4,
            "namaJabatan": "Hrd",
            "deskripsiJabatan": "Hrd",
            "golonganGaji": "2",
            "created_at": "2024-11-10T07:05:07.000000Z",
            "updated_at": "2024-11-10T07:05:07.000000Z",
            "statusEnable": null
        },
        {
            "id": 1,
            "namaJabatan": "Direktur",
            "deskripsiJabatan": "Direktur",
            "golonganGaji": "1",
            "created_at": "2024-11-06T00:01:14.000000Z",
            "updated_at": "2024-11-06T00:01:35.000000Z",
            "statusEnable": null
        },
        {
            "id": 5,
            "namaJabatan": "Hrd",
            "deskripsiJabatan": "Hrd",
            "golonganGaji": "2",
            "created_at": "2024-11-10T07:53:28.000000Z",
            "updated_at": "2024-11-10T07:53:28.000000Z",
            "statusEnable": true
        },
        {
            "id": 18,
            "namaJabatan": "Project Manager",
            "deskripsiJabatan": "PM",
            "golonganGaji": "2",
            "created_at": "2024-11-10T09:20:38.000000Z",
            "updated_at": "2024-11-10T09:20:38.000000Z",
            "statusEnable": true
        },
        {
            "id": 19,
            "namaJabatan": "as",
            "deskripsiJabatan": "as",
            "golonganGaji": "2",
            "created_at": "2024-11-10T09:27:03.000000Z",
            "updated_at": "2024-11-10T09:27:03.000000Z",
            "statusEnable": true
        },
        {
            "id": 20,
            "namaJabatan": "asas",
            "deskripsiJabatan": "assa",
            "golonganGaji": "2",
            "created_at": "2024-11-10T09:27:26.000000Z",
            "updated_at": "2024-11-10T09:27:26.000000Z",
            "statusEnable": true
        },
        {
            "id": 21,
            "namaJabatan": "asda",
            "deskripsiJabatan": "asda",
            "golonganGaji": "2",
            "created_at": "2024-11-10T09:28:42.000000Z",
            "updated_at": "2024-11-10T09:28:42.000000Z",
            "statusEnable": true
        },
        {
            "id": 22,
            "namaJabatan": "Programer",
            "deskripsiJabatan": "simrs",
            "golonganGaji": "2",
            "created_at": "2024-11-10T09:39:50.000000Z",
            "updated_at": "2024-11-10T09:39:50.000000Z",
            "statusEnable": true
        }
    ],
    "message": "success"
}
```
<div id="execution-results-GETapi-jabatan" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-jabatan"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-jabatan"></code></pre>
</div>
<div id="execution-error-GETapi-jabatan" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-jabatan"></code></pre>
</div>
<form id="form-GETapi-jabatan" data-method="GET" data-path="api/jabatan" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-jabatan', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-jabatan" onclick="tryItOut('GETapi-jabatan');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-jabatan" onclick="cancelTryOut('GETapi-jabatan');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-jabatan" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/jabatan</code></b>
</p>
</form>


## api/jabatan




> Example request:

```bash
curl -X POST \
    "http://localhost/api/jabatan" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/jabatan"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-jabatan" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-jabatan"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-jabatan"></code></pre>
</div>
<div id="execution-error-POSTapi-jabatan" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-jabatan"></code></pre>
</div>
<form id="form-POSTapi-jabatan" data-method="POST" data-path="api/jabatan" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-jabatan', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-jabatan" onclick="tryItOut('POSTapi-jabatan');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-jabatan" onclick="cancelTryOut('POSTapi-jabatan');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-jabatan" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/jabatan</code></b>
</p>
</form>


## api/jabatan/{jabatan}




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/jabatan/velit" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/jabatan/velit"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (500):

```json
{
    "message": "SQLSTATE[22P02]: Invalid text representation: 7 ERROR:  invalid input syntax for type bigint: \"velit\"\nCONTEXT:  unnamed portal parameter $1 = '...' (SQL: select * from \"jabatan_M\" where \"jabatan_M\".\"id\" = velit limit 1)",
    "exception": "Illuminate\\Database\\QueryException",
    "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
    "line": 712,
    "trace": [
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
            "line": 672,
            "function": "runQueryCallback",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Connection.php",
            "line": 376,
            "function": "run",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2414,
            "function": "select",
            "class": "Illuminate\\Database\\Connection",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2402,
            "function": "runSelect",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2936,
            "function": "Illuminate\\Database\\Query\\{closure}",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Query\/Builder.php",
            "line": 2403,
            "function": "onceWithColumns",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 625,
            "function": "get",
            "class": "Illuminate\\Database\\Query\\Builder",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 609,
            "function": "getModels",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Concerns\/BuildsQueries.php",
            "line": 294,
            "function": "get",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Builder.php",
            "line": 400,
            "function": "first",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Support\/Traits\/ForwardsCalls.php",
            "line": 23,
            "function": "find",
            "class": "Illuminate\\Database\\Eloquent\\Builder",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Model.php",
            "line": 2132,
            "function": "forwardCallTo",
            "class": "Illuminate\\Database\\Eloquent\\Model",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Database\/Eloquent\/Model.php",
            "line": 2144,
            "function": "__call",
            "class": "Illuminate\\Database\\Eloquent\\Model",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/app\/Http\/Controllers\/JabatanController.php",
            "line": 97,
            "function": "__callStatic",
            "class": "Illuminate\\Database\\Eloquent\\Model",
            "type": "::"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Controller.php",
            "line": 54,
            "function": "show",
            "class": "App\\Http\\Controllers\\JabatanController",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/ControllerDispatcher.php",
            "line": 45,
            "function": "callAction",
            "class": "Illuminate\\Routing\\Controller",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 262,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\ControllerDispatcher",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Route.php",
            "line": 205,
            "function": "runController",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 721,
            "function": "run",
            "class": "Illuminate\\Routing\\Route",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/SubstituteBindings.php",
            "line": 50,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\SubstituteBindings",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 127,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 63,
            "function": "handleRequest",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 723,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 698,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 662,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 651,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 167,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 128,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ConvertEmptyStringsToNull.php",
            "line": 31,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ConvertEmptyStringsToNull",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 21,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TrimStrings.php",
            "line": 40,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TrimStrings",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/PreventRequestsDuringMaintenance.php",
            "line": 86,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\PreventRequestsDuringMaintenance",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/fruitcake\/laravel-cors\/src\/HandleCors.php",
            "line": 52,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fruitcake\\Cors\\HandleCors",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 167,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 103,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 142,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 111,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 324,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 305,
            "function": "callLaravelOrLumenRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 76,
            "function": "makeApiCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 51,
            "function": "makeResponseCall",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Strategies\/Responses\/ResponseCalls.php",
            "line": 41,
            "function": "makeResponseCallIfEnabledAndNoSuccessResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 236,
            "function": "__invoke",
            "class": "Knuckles\\Scribe\\Extracting\\Strategies\\Responses\\ResponseCalls",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 172,
            "function": "iterateThroughStrategies",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Extracting\/Generator.php",
            "line": 127,
            "function": "fetchResponses",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 119,
            "function": "processRoute",
            "class": "Knuckles\\Scribe\\Extracting\\Generator",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/knuckleswtf\/scribe\/src\/Commands\/GenerateDocumentation.php",
            "line": 73,
            "function": "processRoutes",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 36,
            "function": "handle",
            "class": "Knuckles\\Scribe\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Util.php",
            "line": 40,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 93,
            "function": "unwrapIfClosure",
            "class": "Illuminate\\Container\\Util",
            "type": "::"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 37,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 653,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 136,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 298,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 121,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/symfony\/console\/Application.php",
            "line": 1040,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/symfony\/console\/Application.php",
            "line": 301,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/symfony\/console\/Application.php",
            "line": 171,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 94,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 129,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/media\/jasamedika\/DATA LIN\/backup lin\/cod\/projek\/sdm-projek\/backend\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```
<div id="execution-results-GETapi-jabatan--jabatan-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-jabatan--jabatan-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-jabatan--jabatan-"></code></pre>
</div>
<div id="execution-error-GETapi-jabatan--jabatan-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-jabatan--jabatan-"></code></pre>
</div>
<form id="form-GETapi-jabatan--jabatan-" data-method="GET" data-path="api/jabatan/{jabatan}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-jabatan--jabatan-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-jabatan--jabatan-" onclick="tryItOut('GETapi-jabatan--jabatan-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-jabatan--jabatan-" onclick="cancelTryOut('GETapi-jabatan--jabatan-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-jabatan--jabatan-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/jabatan/{jabatan}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>jabatan</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="jabatan" data-endpoint="GETapi-jabatan--jabatan-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/jabatan/{jabatan}




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/jabatan/quas" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/jabatan/quas"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-jabatan--jabatan-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-jabatan--jabatan-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-jabatan--jabatan-"></code></pre>
</div>
<div id="execution-error-PUTapi-jabatan--jabatan-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-jabatan--jabatan-"></code></pre>
</div>
<form id="form-PUTapi-jabatan--jabatan-" data-method="PUT" data-path="api/jabatan/{jabatan}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-jabatan--jabatan-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-jabatan--jabatan-" onclick="tryItOut('PUTapi-jabatan--jabatan-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-jabatan--jabatan-" onclick="cancelTryOut('PUTapi-jabatan--jabatan-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-jabatan--jabatan-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/jabatan/{jabatan}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/jabatan/{jabatan}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>jabatan</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="jabatan" data-endpoint="PUTapi-jabatan--jabatan-" data-component="url" required  hidden>
<br>

</p>
</form>


## api/jabatan/{jabatan}




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/jabatan/dolores" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/jabatan/dolores"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-jabatan--jabatan-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-jabatan--jabatan-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-jabatan--jabatan-"></code></pre>
</div>
<div id="execution-error-DELETEapi-jabatan--jabatan-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-jabatan--jabatan-"></code></pre>
</div>
<form id="form-DELETEapi-jabatan--jabatan-" data-method="DELETE" data-path="api/jabatan/{jabatan}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-jabatan--jabatan-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-jabatan--jabatan-" onclick="tryItOut('DELETEapi-jabatan--jabatan-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-jabatan--jabatan-" onclick="cancelTryOut('DELETEapi-jabatan--jabatan-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-jabatan--jabatan-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/jabatan/{jabatan}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>jabatan</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="jabatan" data-endpoint="DELETEapi-jabatan--jabatan-" data-component="url" required  hidden>
<br>

</p>
</form>


## Display a listing of the resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/departemen" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/departemen"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json
{
    "data": [
        {
            "id": 1,
            "namaDepartemen": "HR",
            "deskripsi": "hr",
            "jabatan_id": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 2,
            "namaDepartemen": "DEREKTUR",
            "deskripsi": "DIRUT",
            "jabatan_id": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 3,
            "namaDepartemen": "ISIMRS",
            "deskripsi": "ISIM",
            "jabatan_id": 1,
            "created_at": null,
            "updated_at": null
        },
        {
            "id": 4,
            "namaDepartemen": "RAWAT JALAN",
            "deskripsi": "RJ",
            "jabatan_id": 1,
            "created_at": null,
            "updated_at": null
        }
    ],
    "message": "piy@"
}
```
<div id="execution-results-GETapi-departemen" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-departemen"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-departemen"></code></pre>
</div>
<div id="execution-error-GETapi-departemen" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-departemen"></code></pre>
</div>
<form id="form-GETapi-departemen" data-method="GET" data-path="api/departemen" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-departemen', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-departemen" onclick="tryItOut('GETapi-departemen');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-departemen" onclick="cancelTryOut('GETapi-departemen');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-departemen" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/departemen</code></b>
</p>
</form>


## Store a newly created resource in storage.




> Example request:

```bash
curl -X POST \
    "http://localhost/api/departemen" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/departemen"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "POST",
    headers,
}).then(response => response.json());
```


<div id="execution-results-POSTapi-departemen" hidden>
    <blockquote>Received response<span id="execution-response-status-POSTapi-departemen"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-POSTapi-departemen"></code></pre>
</div>
<div id="execution-error-POSTapi-departemen" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-POSTapi-departemen"></code></pre>
</div>
<form id="form-POSTapi-departemen" data-method="POST" data-path="api/departemen" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('POSTapi-departemen', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-POSTapi-departemen" onclick="tryItOut('POSTapi-departemen');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-POSTapi-departemen" onclick="cancelTryOut('POSTapi-departemen');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-POSTapi-departemen" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-black">POST</small>
 <b><code>api/departemen</code></b>
</p>
</form>


## Display the specified resource.




> Example request:

```bash
curl -X GET \
    -G "http://localhost/api/departemen/voluptatibus" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/departemen/voluptatibus"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


<div id="execution-results-GETapi-departemen--departeman-" hidden>
    <blockquote>Received response<span id="execution-response-status-GETapi-departemen--departeman-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GETapi-departemen--departeman-"></code></pre>
</div>
<div id="execution-error-GETapi-departemen--departeman-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GETapi-departemen--departeman-"></code></pre>
</div>
<form id="form-GETapi-departemen--departeman-" data-method="GET" data-path="api/departemen/{departeman}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GETapi-departemen--departeman-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GETapi-departemen--departeman-" onclick="tryItOut('GETapi-departemen--departeman-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GETapi-departemen--departeman-" onclick="cancelTryOut('GETapi-departemen--departeman-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GETapi-departemen--departeman-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>api/departemen/{departeman}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>departeman</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="departeman" data-endpoint="GETapi-departemen--departeman-" data-component="url" required  hidden>
<br>

</p>
</form>


## Update the specified resource in storage.




> Example request:

```bash
curl -X PUT \
    "http://localhost/api/departemen/fugiat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/departemen/fugiat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "PUT",
    headers,
}).then(response => response.json());
```


<div id="execution-results-PUTapi-departemen--departeman-" hidden>
    <blockquote>Received response<span id="execution-response-status-PUTapi-departemen--departeman-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-PUTapi-departemen--departeman-"></code></pre>
</div>
<div id="execution-error-PUTapi-departemen--departeman-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-PUTapi-departemen--departeman-"></code></pre>
</div>
<form id="form-PUTapi-departemen--departeman-" data-method="PUT" data-path="api/departemen/{departeman}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('PUTapi-departemen--departeman-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-PUTapi-departemen--departeman-" onclick="tryItOut('PUTapi-departemen--departeman-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-PUTapi-departemen--departeman-" onclick="cancelTryOut('PUTapi-departemen--departeman-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-PUTapi-departemen--departeman-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-darkblue">PUT</small>
 <b><code>api/departemen/{departeman}</code></b>
</p>
<p>
<small class="badge badge-purple">PATCH</small>
 <b><code>api/departemen/{departeman}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>departeman</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="departeman" data-endpoint="PUTapi-departemen--departeman-" data-component="url" required  hidden>
<br>

</p>
</form>


## Remove the specified resource from storage.




> Example request:

```bash
curl -X DELETE \
    "http://localhost/api/departemen/repellat" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/api/departemen/repellat"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "DELETE",
    headers,
}).then(response => response.json());
```


<div id="execution-results-DELETEapi-departemen--departeman-" hidden>
    <blockquote>Received response<span id="execution-response-status-DELETEapi-departemen--departeman-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-DELETEapi-departemen--departeman-"></code></pre>
</div>
<div id="execution-error-DELETEapi-departemen--departeman-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-DELETEapi-departemen--departeman-"></code></pre>
</div>
<form id="form-DELETEapi-departemen--departeman-" data-method="DELETE" data-path="api/departemen/{departeman}" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('DELETEapi-departemen--departeman-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-DELETEapi-departemen--departeman-" onclick="tryItOut('DELETEapi-departemen--departeman-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-DELETEapi-departemen--departeman-" onclick="cancelTryOut('DELETEapi-departemen--departeman-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-DELETEapi-departemen--departeman-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-red">DELETE</small>
 <b><code>api/departemen/{departeman}</code></b>
</p>
<h4 class="fancy-heading-panel"><b>URL Parameters</b></h4>
<p>
<b><code>departeman</code></b>&nbsp;&nbsp;<small>string</small>  &nbsp;
<input type="text" name="departeman" data-endpoint="DELETEapi-departemen--departeman-" data-component="url" required  hidden>
<br>

</p>
</form>


## /




> Example request:

```bash
curl -X GET \
    -G "http://localhost/" \
    -H "Content-Type: application/json" \
    -H "Accept: application/json"
```

```javascript
const url = new URL(
    "http://localhost/"
);

let headers = {
    "Content-Type": "application/json",
    "Accept": "application/json",
};


fetch(url, {
    method: "GET",
    headers,
}).then(response => response.json());
```


> Example response (200):

```json

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #636b6f;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            
            <div class="content">
                <div class="title m-b-md">
                    Laravel
                </div>

                <div class="links">
                    <a href="https://laravel.com/docs">Docs</a>
                    <a href="https://laracasts.com">Laracasts</a>
                    <a href="https://laravel-news.com">News</a>
                    <a href="https://blog.laravel.com">Blog</a>
                    <a href="https://nova.laravel.com">Nova</a>
                    <a href="https://forge.laravel.com">Forge</a>
                    <a href="https://vapor.laravel.com">Vapor</a>
                    <a href="https://github.com/laravel/laravel">GitHub</a>
                </div>
            </div>
        </div>
    </body>
</html>

```
<div id="execution-results-GET-" hidden>
    <blockquote>Received response<span id="execution-response-status-GET-"></span>:</blockquote>
    <pre class="json"><code id="execution-response-content-GET-"></code></pre>
</div>
<div id="execution-error-GET-" hidden>
    <blockquote>Request failed with error:</blockquote>
    <pre><code id="execution-error-message-GET-"></code></pre>
</div>
<form id="form-GET-" data-method="GET" data-path="/" data-authed="0" data-hasfiles="0" data-headers='{"Content-Type":"application\/json","Accept":"application\/json"}' onsubmit="event.preventDefault(); executeTryOut('GET-', this);">
<h3>
    Request&nbsp;&nbsp;&nbsp;
        <button type="button" style="background-color: #8fbcd4; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-tryout-GET-" onclick="tryItOut('GET-');">Try it out ⚡</button>
    <button type="button" style="background-color: #c97a7e; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-canceltryout-GET-" onclick="cancelTryOut('GET-');" hidden>Cancel</button>&nbsp;&nbsp;
    <button type="submit" style="background-color: #6ac174; padding: 5px 10px; border-radius: 5px; border-width: thin;" id="btn-executetryout-GET-" hidden>Send Request 💥</button>
    </h3>
<p>
<small class="badge badge-green">GET</small>
 <b><code>/</code></b>
</p>
</form>



