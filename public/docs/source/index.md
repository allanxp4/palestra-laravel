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
<!-- START_c3fa189a6c95ca36ad6ac4791a873d23 -->
## api/login

> Example request:

```bash
curl -X POST "http://localhost/api/login" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/login",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/login`


<!-- END_c3fa189a6c95ca36ad6ac4791a873d23 -->

<!-- START_a8e64b5cd4b48ca7d9356fc101451219 -->
## api/loja

> Example request:

```bash
curl -X GET "http://localhost/api/loja" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/loja",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/loja`

`HEAD api/loja`


<!-- END_a8e64b5cd4b48ca7d9356fc101451219 -->

<!-- START_6dd916e0b6e157138380a39b938233fc -->
## api/loja/{id}

> Example request:

```bash
curl -X GET "http://localhost/api/loja/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/loja/{id}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/loja/{id}`

`HEAD api/loja/{id}`


<!-- END_6dd916e0b6e157138380a39b938233fc -->

<!-- START_7a149a7eb811c8c2dd5d640c79166e08 -->
## api/loja/{id}/veiculos

> Example request:

```bash
curl -X GET "http://localhost/api/loja/{id}/veiculos" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/loja/{id}/veiculos",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "error": "token_not_provided"
}
```

### HTTP Request
`GET api/loja/{id}/veiculos`

`HEAD api/loja/{id}/veiculos`


<!-- END_7a149a7eb811c8c2dd5d640c79166e08 -->

<!-- START_6166b43e58759dc17dba25c743d09d89 -->
## api/loja

> Example request:

```bash
curl -X POST "http://localhost/api/loja" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/loja",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/loja`


<!-- END_6166b43e58759dc17dba25c743d09d89 -->

<!-- START_22d0d51805beb03ae7960f3cbb723f37 -->
## api/loja/{id}

> Example request:

```bash
curl -X DELETE "http://localhost/api/loja/{id}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/loja/{id}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/loja/{id}`


<!-- END_22d0d51805beb03ae7960f3cbb723f37 -->

<!-- START_3bfb767122eb30b34beb9c0d099d6095 -->
## Display a listing of the resource.

> Example request:

```bash
curl -X GET "http://localhost/api/veiculo" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/veiculo",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
[
    {
        "id": 1,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 17:33:24",
        "updated_at": "2017-11-07 17:33:24",
        "loja_id": 1
    },
    {
        "id": 2,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:09",
        "updated_at": "2017-11-07 18:02:09",
        "loja_id": 1
    },
    {
        "id": 3,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:10",
        "updated_at": "2017-11-07 18:02:10",
        "loja_id": 1
    },
    {
        "id": 4,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:11",
        "updated_at": "2017-11-07 18:02:11",
        "loja_id": 1
    },
    {
        "id": 5,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:11",
        "updated_at": "2017-11-07 18:02:11",
        "loja_id": 1
    },
    {
        "id": 6,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:11",
        "updated_at": "2017-11-07 18:02:11",
        "loja_id": 1
    },
    {
        "id": 7,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:12",
        "updated_at": "2017-11-07 18:02:12",
        "loja_id": 1
    },
    {
        "id": 8,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:12",
        "updated_at": "2017-11-07 18:02:12",
        "loja_id": 1
    },
    {
        "id": 9,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:12",
        "updated_at": "2017-11-07 18:02:12",
        "loja_id": 1
    },
    {
        "id": 10,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:12",
        "updated_at": "2017-11-07 18:02:12",
        "loja_id": 1
    },
    {
        "id": 11,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:12",
        "updated_at": "2017-11-07 18:02:12",
        "loja_id": 1
    },
    {
        "id": 12,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:13",
        "updated_at": "2017-11-07 18:02:13",
        "loja_id": 1
    },
    {
        "id": 13,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:13",
        "updated_at": "2017-11-07 18:02:13",
        "loja_id": 1
    },
    {
        "id": 14,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:13",
        "updated_at": "2017-11-07 18:02:13",
        "loja_id": 1
    },
    {
        "id": 15,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:13",
        "updated_at": "2017-11-07 18:02:13",
        "loja_id": 1
    },
    {
        "id": 16,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:13",
        "updated_at": "2017-11-07 18:02:13",
        "loja_id": 1
    },
    {
        "id": 17,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:13",
        "updated_at": "2017-11-07 18:02:13",
        "loja_id": 1
    },
    {
        "id": 18,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:14",
        "updated_at": "2017-11-07 18:02:14",
        "loja_id": 1
    },
    {
        "id": 19,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:14",
        "updated_at": "2017-11-07 18:02:14",
        "loja_id": 1
    },
    {
        "id": 20,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:14",
        "updated_at": "2017-11-07 18:02:14",
        "loja_id": 1
    },
    {
        "id": 21,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:14",
        "updated_at": "2017-11-07 18:02:14",
        "loja_id": 1
    },
    {
        "id": 22,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:14",
        "updated_at": "2017-11-07 18:02:14",
        "loja_id": 1
    },
    {
        "id": 23,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:14",
        "updated_at": "2017-11-07 18:02:14",
        "loja_id": 1
    },
    {
        "id": 24,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:15",
        "updated_at": "2017-11-07 18:02:15",
        "loja_id": 1
    },
    {
        "id": 25,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:15",
        "updated_at": "2017-11-07 18:02:15",
        "loja_id": 1
    },
    {
        "id": 26,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:15",
        "updated_at": "2017-11-07 18:02:15",
        "loja_id": 1
    },
    {
        "id": 27,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:15",
        "updated_at": "2017-11-07 18:02:15",
        "loja_id": 1
    },
    {
        "id": 28,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:15",
        "updated_at": "2017-11-07 18:02:15",
        "loja_id": 1
    },
    {
        "id": 29,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:15",
        "updated_at": "2017-11-07 18:02:15",
        "loja_id": 1
    },
    {
        "id": 30,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:16",
        "updated_at": "2017-11-07 18:02:16",
        "loja_id": 1
    },
    {
        "id": 31,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:16",
        "updated_at": "2017-11-07 18:02:16",
        "loja_id": 1
    },
    {
        "id": 32,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:16",
        "updated_at": "2017-11-07 18:02:16",
        "loja_id": 1
    },
    {
        "id": 33,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:16",
        "updated_at": "2017-11-07 18:02:16",
        "loja_id": 1
    },
    {
        "id": 34,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:16",
        "updated_at": "2017-11-07 18:02:16",
        "loja_id": 1
    },
    {
        "id": 35,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:16",
        "updated_at": "2017-11-07 18:02:16",
        "loja_id": 1
    },
    {
        "id": 36,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:16",
        "updated_at": "2017-11-07 18:02:16",
        "loja_id": 1
    },
    {
        "id": 37,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:17",
        "updated_at": "2017-11-07 18:02:17",
        "loja_id": 1
    },
    {
        "id": 38,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:17",
        "updated_at": "2017-11-07 18:02:17",
        "loja_id": 1
    },
    {
        "id": 39,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:17",
        "updated_at": "2017-11-07 18:02:17",
        "loja_id": 1
    },
    {
        "id": 40,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:02:17",
        "updated_at": "2017-11-07 18:02:17",
        "loja_id": 1
    },
    {
        "id": 41,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:05:21",
        "updated_at": "2017-11-07 18:05:21",
        "loja_id": 4
    },
    {
        "id": 42,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:05:22",
        "updated_at": "2017-11-07 18:05:22",
        "loja_id": 4
    },
    {
        "id": 43,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:05:22",
        "updated_at": "2017-11-07 18:05:22",
        "loja_id": 4
    },
    {
        "id": 44,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:05:22",
        "updated_at": "2017-11-07 18:05:22",
        "loja_id": 4
    },
    {
        "id": 45,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:05:22",
        "updated_at": "2017-11-07 18:05:22",
        "loja_id": 4
    },
    {
        "id": 46,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:05:23",
        "updated_at": "2017-11-07 18:05:23",
        "loja_id": 4
    },
    {
        "id": 47,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:05:23",
        "updated_at": "2017-11-07 18:05:23",
        "loja_id": 4
    },
    {
        "id": 48,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:05:23",
        "updated_at": "2017-11-07 18:05:23",
        "loja_id": 4
    },
    {
        "id": 49,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:05:23",
        "updated_at": "2017-11-07 18:05:23",
        "loja_id": 4
    },
    {
        "id": 50,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:25:08",
        "updated_at": "2017-11-07 18:25:08",
        "loja_id": 4
    },
    {
        "id": 51,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:25:09",
        "updated_at": "2017-11-07 18:25:09",
        "loja_id": 4
    },
    {
        "id": 52,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:25:10",
        "updated_at": "2017-11-07 18:25:10",
        "loja_id": 4
    },
    {
        "id": 53,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:25:10",
        "updated_at": "2017-11-07 18:25:10",
        "loja_id": 4
    },
    {
        "id": 54,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:25:10",
        "updated_at": "2017-11-07 18:25:10",
        "loja_id": 4
    },
    {
        "id": 55,
        "placa": "AAA1234",
        "renavam": "iuahduiadh",
        "marca": "2012",
        "ano": "2012",
        "created_at": "2017-11-07 18:25:10",
        "updated_at": "2017-11-07 18:25:10",
        "loja_id": 4
    }
]
```

### HTTP Request
`GET api/veiculo`

`HEAD api/veiculo`


<!-- END_3bfb767122eb30b34beb9c0d099d6095 -->

<!-- START_2205b1f321ed8929cd4849e01fe00bb9 -->
## Show the form for creating a new resource.

> Example request:

```bash
curl -X GET "http://localhost/api/veiculo/create" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/veiculo/create",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/veiculo/create`

`HEAD api/veiculo/create`


<!-- END_2205b1f321ed8929cd4849e01fe00bb9 -->

<!-- START_5f239609ba2ae851360b96b438183b91 -->
## Store a newly created resource in storage.

> Example request:

```bash
curl -X POST "http://localhost/api/veiculo" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/veiculo",
    "method": "POST",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`POST api/veiculo`


<!-- END_5f239609ba2ae851360b96b438183b91 -->

<!-- START_9ae893e66d2e07ef4eafbc0ca23f6791 -->
## Display the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/veiculo/{veiculo}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/veiculo/{veiculo}",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
{
    "id": 1,
    "placa": "AAA1234",
    "renavam": "iuahduiadh",
    "marca": "2012",
    "ano": "2012",
    "created_at": "2017-11-07 17:33:24",
    "updated_at": "2017-11-07 17:33:24",
    "loja_id": 1
}
```

### HTTP Request
`GET api/veiculo/{veiculo}`

`HEAD api/veiculo/{veiculo}`


<!-- END_9ae893e66d2e07ef4eafbc0ca23f6791 -->

<!-- START_48e68d269d9bc232d6e20393a931f299 -->
## Show the form for editing the specified resource.

> Example request:

```bash
curl -X GET "http://localhost/api/veiculo/{veiculo}/edit" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/veiculo/{veiculo}/edit",
    "method": "GET",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```

> Example response:

```json
null
```

### HTTP Request
`GET api/veiculo/{veiculo}/edit`

`HEAD api/veiculo/{veiculo}/edit`


<!-- END_48e68d269d9bc232d6e20393a931f299 -->

<!-- START_7b2045683878e6da14f9a06db7f57571 -->
## Update the specified resource in storage.

> Example request:

```bash
curl -X PUT "http://localhost/api/veiculo/{veiculo}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/veiculo/{veiculo}",
    "method": "PUT",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`PUT api/veiculo/{veiculo}`

`PATCH api/veiculo/{veiculo}`


<!-- END_7b2045683878e6da14f9a06db7f57571 -->

<!-- START_af5c347618bd8961513250d03fbf1f07 -->
## Remove the specified resource from storage.

> Example request:

```bash
curl -X DELETE "http://localhost/api/veiculo/{veiculo}" \
-H "Accept: application/json"
```

```javascript
var settings = {
    "async": true,
    "crossDomain": true,
    "url": "http://localhost/api/veiculo/{veiculo}",
    "method": "DELETE",
    "headers": {
        "accept": "application/json"
    }
}

$.ajax(settings).done(function (response) {
    console.log(response);
});
```


### HTTP Request
`DELETE api/veiculo/{veiculo}`


<!-- END_af5c347618bd8961513250d03fbf1f07 -->

