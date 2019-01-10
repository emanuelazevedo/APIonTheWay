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
[Get Postman Collection](http://localhost/docs/collection.json)

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
        "created_at": "2019-01-06 17:33:41",
        "updated_at": "2019-01-06 17:33:41"
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
    "created_at": "2019-01-06 17:33:41",
    "updated_at": "2019-01-06 17:33:41"
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
## Display a listing of the resource.

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
        "estado": "pendente",
        "user_id": 1,
        "produto_id": null,
        "tipo_id": 1,
        "created_at": "2019-01-06 17:33:49",
        "updated_at": "2019-01-06 17:33:49"
    },
    {
        "id": 3,
        "origem": "aveiro",
        "destino": "porto",
        "dataInicio": "2019-01-02",
        "dataFim": "2019-01-02",
        "horaInicio": "00:00:00",
        "horaFim": "12:00:00",
        "estado": "pendente",
        "user_id": 1,
        "produto_id": null,
        "tipo_id": 2,
        "created_at": "2019-01-06 18:09:33",
        "updated_at": "2019-01-06 18:09:33"
    },
    {
        "id": 6,
        "origem": "aveiro",
        "destino": "porto",
        "dataInicio": "2019-01-02",
        "dataFim": "2019-01-02",
        "horaInicio": "00:00:00",
        "horaFim": "12:00:00",
        "estado": "pendente",
        "user_id": 1,
        "produto_id": 4,
        "tipo_id": 2,
        "created_at": "2019-01-06 18:37:53",
        "updated_at": "2019-01-06 18:37:53"
    }
]
```

### HTTP Request
`GET api/viagem`


<!-- END_32f44fe1023a6498ad01976b2aa324e9 -->

<!-- START_889352be0fa4105fec64f682987d4a0d -->
## Store a newly created resource in storage.

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
## Display the specified resource.

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
    "estado": "pendente",
    "user_id": 1,
    "produto_id": null,
    "tipo_id": 1,
    "created_at": "2019-01-06 17:33:49",
    "updated_at": "2019-01-06 17:33:49"
}
```

### HTTP Request
`GET api/viagem/{viagem}`


<!-- END_6925d628aa5b82b8d427f9443679a82a -->

<!-- START_dbc331269073970ac565ffd3d05b57d6 -->
## Update the specified resource in storage.

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
## Remove the specified resource from storage.

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
## api/viagem/search
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
## Display a listing of the resource.

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
## Remove the specified resource from storage.

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
## Display a listing of the resource.

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
        "tamanho": 10,
        "peso": 10,
        "preco": 10,
        "foto": null,
        "created_at": "2019-01-06 18:09:33",
        "updated_at": "2019-01-06 18:09:33"
    },
    {
        "id": 2,
        "nome": "cadeira",
        "tamanho": 10,
        "peso": 10,
        "preco": 10,
        "foto": null,
        "created_at": "2019-01-06 18:11:23",
        "updated_at": "2019-01-06 18:11:23"
    },
    {
        "id": 3,
        "nome": "cadeira",
        "tamanho": 10,
        "peso": 10,
        "preco": 10,
        "foto": null,
        "created_at": "2019-01-06 18:14:06",
        "updated_at": "2019-01-06 18:14:06"
    },
    {
        "id": 4,
        "nome": "cadeira",
        "tamanho": 10,
        "peso": 10,
        "preco": 10,
        "foto": null,
        "created_at": "2019-01-06 18:37:53",
        "updated_at": "2019-01-06 18:37:53"
    }
]
```

### HTTP Request
`GET api/produto`


<!-- END_698405941abcd460cfc5342a0228b65d -->

<!-- START_a2004754d7dd7a2d32cdb988d6bdfee0 -->
## Store a newly created resource in storage.

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
## Display the specified resource.

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
    "tamanho": 10,
    "peso": 10,
    "preco": 10,
    "foto": null,
    "created_at": "2019-01-06 18:09:33",
    "updated_at": "2019-01-06 18:09:33"
}
```

### HTTP Request
`GET api/produto/{produto}`


<!-- END_7f8516938ae1193eb85c8f75ea379fe2 -->

<!-- START_97abbcf4cd4371b5349a47c0220e6526 -->
## Update the specified resource in storage.

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
## Remove the specified resource from storage.

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


