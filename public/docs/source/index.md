---
title: API Reference

language_tabs:
- bash
- javascript

includes:

search: true

toc_footers:
- <a href='http://github.com/mpociot/documentarian'>Documentation Powered by Documentarian</a>
---
<!-- START_INFO -->
# Info

Welcome to the generated API reference.

<!-- END_INFO -->

#general
<!-- START_2b6e5a4b188cb183c7e59558cce36cb6 -->
## Listar todos os Users

> Example request:

```bash
curl -X GET -G "http://localhost/api/user" 
```

```javascript
const url = new URL("http://localhost/api/user");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
[
    {
        "id": 1,
        "name": "emanuel",
        "email": "emanuel@mail",
        "email_verified_at": null,
        "created_at": "2019-01-19 21:57:19",
        "updated_at": "2019-01-19 21:57:19"
    },
    {
        "id": 2,
        "name": "leo",
        "email": "leo@mail",
        "email_verified_at": null,
        "created_at": "2019-01-19 21:57:19",
        "updated_at": "2019-01-19 21:57:19"
    }
]
```

### HTTP Request
`GET api/user`


<!-- END_2b6e5a4b188cb183c7e59558cce36cb6 -->

<!-- START_f0654d3f2fc63c11f5723f233cc53c83 -->
## Criar um User

> Example request:

```bash
curl -X POST "http://localhost/api/user" 
```

```javascript
const url = new URL("http://localhost/api/user");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST api/user`


<!-- END_f0654d3f2fc63c11f5723f233cc53c83 -->

<!-- START_ceec0e0b1d13d731ad96603d26bccc2f -->
## Mostrar um User

> Example request:

```bash
curl -X GET -G "http://localhost/api/user/{user}" 
```

```javascript
const url = new URL("http://localhost/api/user/{user}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 1,
    "name": "emanuel",
    "email": "emanuel@mail",
    "email_verified_at": null,
    "created_at": "2019-01-19 21:57:19",
    "updated_at": "2019-01-19 21:57:19"
}
```

### HTTP Request
`GET api/user/{user}`


<!-- END_ceec0e0b1d13d731ad96603d26bccc2f -->

<!-- START_a4a2abed1e8e8cad5e6a3282812fe3f3 -->
## Editar um User

> Example request:

```bash
curl -X PUT "http://localhost/api/user/{user}" 
```

```javascript
const url = new URL("http://localhost/api/user/{user}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT api/user/{user}`

`PATCH api/user/{user}`


<!-- END_a4a2abed1e8e8cad5e6a3282812fe3f3 -->

<!-- START_4bb7fb4a7501d3cb1ed21acfc3b205a9 -->
## Remover um User

> Example request:

```bash
curl -X DELETE "http://localhost/api/user/{user}" 
```

```javascript
const url = new URL("http://localhost/api/user/{user}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE api/user/{user}`


<!-- END_4bb7fb4a7501d3cb1ed21acfc3b205a9 -->

<!-- START_32f44fe1023a6498ad01976b2aa324e9 -->
## Listar todas as Viagens

> Example request:

```bash
curl -X GET -G "http://localhost/api/viagem" 
```

```javascript
const url = new URL("http://localhost/api/viagem");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
[
    {
        "id": 1,
        "origem": "aveiro",
        "destino": "porto",
        "dataInicio": "2019-01-02",
        "dataFim": "2019-01-02",
        "horaInicio": "00:00:00",
        "horaFim": "12:00:00",
        "estado": "concluido",
        "preco": 10,
        "user_id": 1,
        "produto_id": null,
        "tipo_id": 1,
        "viagems_id": 3,
        "created_at": "2019-01-19 21:58:30",
        "updated_at": "2019-01-19 22:19:30",
        "tipo": {
            "id": 1,
            "tipoViagem": "viagem criada",
            "created_at": "2019-01-19 21:57:18",
            "updated_at": "2019-01-19 21:57:18"
        },
        "produto": null
    },
    {
        "id": 2,
        "origem": "aveiro",
        "destino": "porto",
        "dataInicio": "2019-01-02",
        "dataFim": "2019-01-02",
        "horaInicio": "00:00:00",
        "horaFim": "12:00:00",
        "estado": "pendente",
        "preco": null,
        "user_id": 1,
        "produto_id": null,
        "tipo_id": 1,
        "viagems_id": null,
        "created_at": "2019-01-19 21:58:59",
        "updated_at": "2019-01-19 21:58:59",
        "tipo": {
            "id": 1,
            "tipoViagem": "viagem criada",
            "created_at": "2019-01-19 21:57:18",
            "updated_at": "2019-01-19 21:57:18"
        },
        "produto": null
    },
    {
        "id": 3,
        "origem": "aveiro",
        "destino": "porto",
        "dataInicio": "2019-01-02",
        "dataFim": "2019-01-02",
        "horaInicio": "00:00:00",
        "horaFim": "12:00:00",
        "estado": "concluido",
        "preco": null,
        "user_id": 1,
        "produto_id": 1,
        "tipo_id": 2,
        "viagems_id": 1,
        "created_at": "2019-01-19 22:00:16",
        "updated_at": "2019-01-19 22:19:30",
        "tipo": {
            "id": 2,
            "tipoViagem": "pedido viagem",
            "created_at": "2019-01-19 21:57:18",
            "updated_at": "2019-01-19 21:57:18"
        },
        "produto": {
            "id": 1,
            "nome": "cadeira",
            "tamanho": "pequeno",
            "foto": "1547935216.jpg",
            "created_at": "2019-01-19 22:00:16",
            "updated_at": "2019-01-19 22:00:16"
        }
    }
]
```

### HTTP Request
`GET api/viagem`


<!-- END_32f44fe1023a6498ad01976b2aa324e9 -->

<!-- START_889352be0fa4105fec64f682987d4a0d -->
## Criar uma Viagem

> Example request:

```bash
curl -X POST "http://localhost/api/viagem" 
```

```javascript
const url = new URL("http://localhost/api/viagem");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST api/viagem`


<!-- END_889352be0fa4105fec64f682987d4a0d -->

<!-- START_6925d628aa5b82b8d427f9443679a82a -->
## Mostrar uma Viagem

> Example request:

```bash
curl -X GET -G "http://localhost/api/viagem/{viagem}" 
```

```javascript
const url = new URL("http://localhost/api/viagem/{viagem}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 1,
    "origem": "aveiro",
    "destino": "porto",
    "dataInicio": "2019-01-02",
    "dataFim": "2019-01-02",
    "horaInicio": "00:00:00",
    "horaFim": "12:00:00",
    "estado": "concluido",
    "preco": 10,
    "user_id": 1,
    "produto_id": null,
    "tipo_id": 1,
    "viagems_id": 3,
    "created_at": "2019-01-19 21:58:30",
    "updated_at": "2019-01-19 22:19:30",
    "tipo": {
        "id": 1,
        "tipoViagem": "viagem criada",
        "created_at": "2019-01-19 21:57:18",
        "updated_at": "2019-01-19 21:57:18"
    },
    "produto": null
}
```

### HTTP Request
`GET api/viagem/{viagem}`


<!-- END_6925d628aa5b82b8d427f9443679a82a -->

<!-- START_dbc331269073970ac565ffd3d05b57d6 -->
## Editar uma Viagem

> Example request:

```bash
curl -X PUT "http://localhost/api/viagem/{viagem}" 
```

```javascript
const url = new URL("http://localhost/api/viagem/{viagem}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT api/viagem/{viagem}`

`PATCH api/viagem/{viagem}`


<!-- END_dbc331269073970ac565ffd3d05b57d6 -->

<!-- START_6b2fec7ca511aa269e8d50892a874158 -->
## Remover uma Viagem

> Example request:

```bash
curl -X DELETE "http://localhost/api/viagem/{viagem}" 
```

```javascript
const url = new URL("http://localhost/api/viagem/{viagem}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE api/viagem/{viagem}`


<!-- END_6b2fec7ca511aa269e8d50892a874158 -->

<!-- START_102750eaa98309a278b18c450a32339a -->
## Pesquisar por Viagens

> Example request:

```bash
curl -X POST "http://localhost/api/viagem/search" 
```

```javascript
const url = new URL("http://localhost/api/viagem/search");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST api/viagem/search`


<!-- END_102750eaa98309a278b18c450a32339a -->

<!-- START_07e7f3ae367cb99564afa991e133a461 -->
## Listar todos os Tipos

> Example request:

```bash
curl -X GET -G "http://localhost/api/tipo" 
```

```javascript
const url = new URL("http://localhost/api/tipo");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
null
```

### HTTP Request
`GET api/tipo`


<!-- END_07e7f3ae367cb99564afa991e133a461 -->

<!-- START_80a06024db4f0d37a70ede1272c3a4d5 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/tipo" 
```

```javascript
const url = new URL("http://localhost/api/tipo");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST api/tipo`


<!-- END_80a06024db4f0d37a70ede1272c3a4d5 -->

<!-- START_f695ab48314b4d59f8f1ea5d829afe74 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/tipo/{tipo}" 
```

```javascript
const url = new URL("http://localhost/api/tipo/{tipo}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
null
```

### HTTP Request
`GET api/tipo/{tipo}`


<!-- END_f695ab48314b4d59f8f1ea5d829afe74 -->

<!-- START_208c69de33e9cfaba5c8dccd74aebec5 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/tipo/{tipo}" 
```

```javascript
const url = new URL("http://localhost/api/tipo/{tipo}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT api/tipo/{tipo}`

`PATCH api/tipo/{tipo}`


<!-- END_208c69de33e9cfaba5c8dccd74aebec5 -->

<!-- START_7c0de1b3482697b6ea2f65ccaa6f0c49 -->
## Remover um Tipo

> Example request:

```bash
curl -X DELETE "http://localhost/api/tipo/{tipo}" 
```

```javascript
const url = new URL("http://localhost/api/tipo/{tipo}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE api/tipo/{tipo}`


<!-- END_7c0de1b3482697b6ea2f65ccaa6f0c49 -->

<!-- START_698405941abcd460cfc5342a0228b65d -->
## Listar todos os Produtos

> Example request:

```bash
curl -X GET -G "http://localhost/api/produto" 
```

```javascript
const url = new URL("http://localhost/api/produto");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
[
    {
        "id": 1,
        "nome": "cadeira",
        "tamanho": "pequeno",
        "foto": "1547935216.jpg",
        "created_at": "2019-01-19 22:00:16",
        "updated_at": "2019-01-19 22:00:16"
    }
]
```

### HTTP Request
`GET api/produto`


<!-- END_698405941abcd460cfc5342a0228b65d -->

<!-- START_a2004754d7dd7a2d32cdb988d6bdfee0 -->
## Criar um Produto

> Example request:

```bash
curl -X POST "http://localhost/api/produto" 
```

```javascript
const url = new URL("http://localhost/api/produto");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST api/produto`


<!-- END_a2004754d7dd7a2d32cdb988d6bdfee0 -->

<!-- START_7f8516938ae1193eb85c8f75ea379fe2 -->
## Mostrar um Produto

> Example request:

```bash
curl -X GET -G "http://localhost/api/produto/{produto}" 
```

```javascript
const url = new URL("http://localhost/api/produto/{produto}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
{
    "id": 1,
    "nome": "cadeira",
    "tamanho": "pequeno",
    "foto": "1547935216.jpg",
    "created_at": "2019-01-19 22:00:16",
    "updated_at": "2019-01-19 22:00:16"
}
```

### HTTP Request
`GET api/produto/{produto}`


<!-- END_7f8516938ae1193eb85c8f75ea379fe2 -->

<!-- START_97abbcf4cd4371b5349a47c0220e6526 -->
## Editar um Produto

> Example request:

```bash
curl -X PUT "http://localhost/api/produto/{produto}" 
```

```javascript
const url = new URL("http://localhost/api/produto/{produto}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT api/produto/{produto}`

`PATCH api/produto/{produto}`


<!-- END_97abbcf4cd4371b5349a47c0220e6526 -->

<!-- START_762b93bd07a15358325db32e6e6bff1b -->
## Remover um Produto

> Example request:

```bash
curl -X DELETE "http://localhost/api/produto/{produto}" 
```

```javascript
const url = new URL("http://localhost/api/produto/{produto}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE api/produto/{produto}`


<!-- END_762b93bd07a15358325db32e6e6bff1b -->

<!-- START_2754857aaac2f36f8ecfa54b77c3362b -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/review" 
```

```javascript
const url = new URL("http://localhost/api/review");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
[]
```

### HTTP Request
`GET api/review`


<!-- END_2754857aaac2f36f8ecfa54b77c3362b -->

<!-- START_47933aaa9ff2663fb4dba3e0d6481476 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/review/create" 
```

```javascript
const url = new URL("http://localhost/api/review/create");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
null
```

### HTTP Request
`GET api/review/create`


<!-- END_47933aaa9ff2663fb4dba3e0d6481476 -->

<!-- START_59ad28c6b6c5ba495ef823bb089bbbc3 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/review" 
```

```javascript
const url = new URL("http://localhost/api/review");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST api/review`


<!-- END_59ad28c6b6c5ba495ef823bb089bbbc3 -->

<!-- START_3f08780c084feca94bee4876b1b4e7fb -->
## Display the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/review/{review}" 
```

```javascript
const url = new URL("http://localhost/api/review/{review}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (404):

```json
{
    "message": "No query results for model [App\\Review].",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Exceptions\/Handler.php",
    "line": 200,
    "trace": [
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Exceptions\/Handler.php",
            "line": 176,
            "function": "prepareException",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/app\/Exceptions\/Handler.php",
            "line": 49,
            "function": "render",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/nunomaduro\/collision\/src\/Adapters\/Laravel\/ExceptionHandler.php",
            "line": 68,
            "function": "render",
            "class": "App\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 83,
            "function": "render",
            "class": "NunoMaduro\\Collision\\Adapters\\Laravel\\ExceptionHandler",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 55,
            "function": "handleException",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 684,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 659,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 625,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 614,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/barryvdh\/laravel-cors\/src\/HandlePreflight.php",
            "line": 29,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Tools\/ResponseStrategies\/ResponseCallStrategy.php",
            "line": 272,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Tools\/ResponseStrategies\/ResponseCallStrategy.php",
            "line": 256,
            "function": "callLaravelRoute",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Tools\/ResponseStrategies\/ResponseCallStrategy.php",
            "line": 33,
            "function": "makeApiCall",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Tools\/ResponseResolver.php",
            "line": 49,
            "function": "__invoke",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Tools\/ResponseResolver.php",
            "line": 68,
            "function": "resolve",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseResolver",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Tools\/Generator.php",
            "line": 54,
            "function": "getResponse",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseResolver",
            "type": "::"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Commands\/GenerateDocumentation.php",
            "line": 196,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Tools\\Generator",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Commands\/GenerateDocumentation.php",
            "line": 57,
            "function": "processRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 572,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 183,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 255,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 170,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/symfony\/console\/Application.php",
            "line": 901,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/symfony\/console\/Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/symfony\/console\/Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/review/{review}`


<!-- END_3f08780c084feca94bee4876b1b4e7fb -->

<!-- START_2de24b242e1d182750aefe4cdf894577 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET -G "http://localhost/api/review/{review}/edit" 
```

```javascript
const url = new URL("http://localhost/api/review/{review}/edit");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (404):

```json
{
    "message": "No query results for model [App\\Review].",
    "exception": "Symfony\\Component\\HttpKernel\\Exception\\NotFoundHttpException",
    "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Exceptions\/Handler.php",
    "line": 200,
    "trace": [
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Exceptions\/Handler.php",
            "line": 176,
            "function": "prepareException",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/app\/Exceptions\/Handler.php",
            "line": 49,
            "function": "render",
            "class": "Illuminate\\Foundation\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/nunomaduro\/collision\/src\/Adapters\/Laravel\/ExceptionHandler.php",
            "line": 68,
            "function": "render",
            "class": "App\\Exceptions\\Handler",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 83,
            "function": "render",
            "class": "NunoMaduro\\Collision\\Adapters\\Laravel\\ExceptionHandler",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 55,
            "function": "handleException",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Middleware\/ThrottleRequests.php",
            "line": 58,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Routing\\Middleware\\ThrottleRequests",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 684,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 659,
            "function": "runRouteWithinStack",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 625,
            "function": "runRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Router.php",
            "line": 614,
            "function": "dispatchToRoute",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 176,
            "function": "dispatch",
            "class": "Illuminate\\Routing\\Router",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 30,
            "function": "Illuminate\\Foundation\\Http\\{closure}",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/fideloper\/proxy\/src\/TrustProxies.php",
            "line": 57,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Fideloper\\Proxy\\TrustProxies",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/TransformsRequest.php",
            "line": 31,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\TransformsRequest",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/ValidatePostSize.php",
            "line": 27,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\ValidatePostSize",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Middleware\/CheckForMaintenanceMode.php",
            "line": 62,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Middleware\\CheckForMaintenanceMode",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/barryvdh\/laravel-cors\/src\/HandlePreflight.php",
            "line": 29,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 151,
            "function": "handle",
            "class": "Barryvdh\\Cors\\HandlePreflight",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Routing\/Pipeline.php",
            "line": 53,
            "function": "Illuminate\\Pipeline\\{closure}",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Pipeline\/Pipeline.php",
            "line": 104,
            "function": "Illuminate\\Routing\\{closure}",
            "class": "Illuminate\\Routing\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 151,
            "function": "then",
            "class": "Illuminate\\Pipeline\\Pipeline",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Http\/Kernel.php",
            "line": 116,
            "function": "sendRequestThroughRouter",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Tools\/ResponseStrategies\/ResponseCallStrategy.php",
            "line": 272,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Http\\Kernel",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Tools\/ResponseStrategies\/ResponseCallStrategy.php",
            "line": 256,
            "function": "callLaravelRoute",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Tools\/ResponseStrategies\/ResponseCallStrategy.php",
            "line": 33,
            "function": "makeApiCall",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Tools\/ResponseResolver.php",
            "line": 49,
            "function": "__invoke",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseStrategies\\ResponseCallStrategy",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Tools\/ResponseResolver.php",
            "line": 68,
            "function": "resolve",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseResolver",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Tools\/Generator.php",
            "line": 54,
            "function": "getResponse",
            "class": "Mpociot\\ApiDoc\\Tools\\ResponseResolver",
            "type": "::"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Commands\/GenerateDocumentation.php",
            "line": 196,
            "function": "processRoute",
            "class": "Mpociot\\ApiDoc\\Tools\\Generator",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/mpociot\/laravel-apidoc-generator\/src\/Commands\/GenerateDocumentation.php",
            "line": 57,
            "function": "processRoutes",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "function": "handle",
            "class": "Mpociot\\ApiDoc\\Commands\\GenerateDocumentation",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 29,
            "function": "call_user_func_array"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 87,
            "function": "Illuminate\\Container\\{closure}",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/BoundMethod.php",
            "line": 31,
            "function": "callBoundMethod",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Container\/Container.php",
            "line": 572,
            "function": "call",
            "class": "Illuminate\\Container\\BoundMethod",
            "type": "::"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 183,
            "function": "call",
            "class": "Illuminate\\Container\\Container",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/symfony\/console\/Command\/Command.php",
            "line": 255,
            "function": "execute",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Command.php",
            "line": 170,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Command\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/symfony\/console\/Application.php",
            "line": 901,
            "function": "run",
            "class": "Illuminate\\Console\\Command",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/symfony\/console\/Application.php",
            "line": 262,
            "function": "doRunCommand",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/symfony\/console\/Application.php",
            "line": 145,
            "function": "doRun",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Console\/Application.php",
            "line": 89,
            "function": "run",
            "class": "Symfony\\Component\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/vendor\/laravel\/framework\/src\/Illuminate\/Foundation\/Console\/Kernel.php",
            "line": 122,
            "function": "run",
            "class": "Illuminate\\Console\\Application",
            "type": "->"
        },
        {
            "file": "\/home\/emanuel\/Desktop\/Desktop\/APIonTheWay\/artisan",
            "line": 37,
            "function": "handle",
            "class": "Illuminate\\Foundation\\Console\\Kernel",
            "type": "->"
        }
    ]
}
```

### HTTP Request
`GET api/review/{review}/edit`


<!-- END_2de24b242e1d182750aefe4cdf894577 -->

<!-- START_057a70a03f1dfd288f5ca17033a90ed8 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/review/{review}" 
```

```javascript
const url = new URL("http://localhost/api/review/{review}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "PUT",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`PUT api/review/{review}`

`PATCH api/review/{review}`


<!-- END_057a70a03f1dfd288f5ca17033a90ed8 -->

<!-- START_97a164ea1d7bbba9951a3e709814ac5e -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/review/{review}" 
```

```javascript
const url = new URL("http://localhost/api/review/{review}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "DELETE",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`DELETE api/review/{review}`


<!-- END_97a164ea1d7bbba9951a3e709814ac5e -->

<!-- START_66e08d3cc8222573018fed49e121e96d -->
## Show the application&#039;s login form.

> Example request:

```bash
curl -X GET -G "http://localhost/login" 
```

```javascript
const url = new URL("http://localhost/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
null
```

### HTTP Request
`GET login`


<!-- END_66e08d3cc8222573018fed49e121e96d -->

<!-- START_ba35aa39474cb98cfb31829e70eb8b74 -->
## Handle a login request to the application.

> Example request:

```bash
curl -X POST "http://localhost/login" 
```

```javascript
const url = new URL("http://localhost/login");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST login`


<!-- END_ba35aa39474cb98cfb31829e70eb8b74 -->

<!-- START_e65925f23b9bc6b93d9356895f29f80c -->
## Log the user out of the application.

> Example request:

```bash
curl -X POST "http://localhost/logout" 
```

```javascript
const url = new URL("http://localhost/logout");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST logout`


<!-- END_e65925f23b9bc6b93d9356895f29f80c -->

<!-- START_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->
## Show the application registration form.

> Example request:

```bash
curl -X GET -G "http://localhost/register" 
```

```javascript
const url = new URL("http://localhost/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
null
```

### HTTP Request
`GET register`


<!-- END_ff38dfb1bd1bb7e1aa24b4e1792a9768 -->

<!-- START_d7aad7b5ac127700500280d511a3db01 -->
## Handle a registration request for the application.

> Example request:

```bash
curl -X POST "http://localhost/register" 
```

```javascript
const url = new URL("http://localhost/register");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST register`


<!-- END_d7aad7b5ac127700500280d511a3db01 -->

<!-- START_d72797bae6d0b1f3a341ebb1f8900441 -->
## Display the form to request a password reset link.

> Example request:

```bash
curl -X GET -G "http://localhost/password/reset" 
```

```javascript
const url = new URL("http://localhost/password/reset");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset`


<!-- END_d72797bae6d0b1f3a341ebb1f8900441 -->

<!-- START_feb40f06a93c80d742181b6ffb6b734e -->
## Send a reset link to the given user.

> Example request:

```bash
curl -X POST "http://localhost/password/email" 
```

```javascript
const url = new URL("http://localhost/password/email");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST password/email`


<!-- END_feb40f06a93c80d742181b6ffb6b734e -->

<!-- START_e1605a6e5ceee9d1aeb7729216635fd7 -->
## Display the password reset view for the given token.

If no token is present, display the link request form.

> Example request:

```bash
curl -X GET -G "http://localhost/password/reset/{token}" 
```

```javascript
const url = new URL("http://localhost/password/reset/{token}");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (200):

```json
null
```

### HTTP Request
`GET password/reset/{token}`


<!-- END_e1605a6e5ceee9d1aeb7729216635fd7 -->

<!-- START_cafb407b7a846b31491f97719bb15aef -->
## Reset the given user&#039;s password.

> Example request:

```bash
curl -X POST "http://localhost/password/reset" 
```

```javascript
const url = new URL("http://localhost/password/reset");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "POST",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```


### HTTP Request
`POST password/reset`


<!-- END_cafb407b7a846b31491f97719bb15aef -->

<!-- START_cb859c8e84c35d7133b6a6c8eac253f8 -->
## Show the application dashboard.

> Example request:

```bash
curl -X GET -G "http://localhost/home" 
```

```javascript
const url = new URL("http://localhost/home");

let headers = {
    "Accept": "application/json",
    "Content-Type": "application/json",
}

fetch(url, {
    method: "GET",
    headers: headers,
})
    .then(response => response.json())
    .then(json => console.log(json));
```

> Example response (401):

```json
{
    "message": "Unauthenticated."
}
```

### HTTP Request
`GET home`


<!-- END_cb859c8e84c35d7133b6a6c8eac253f8 -->


