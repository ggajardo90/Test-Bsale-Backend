
# Test Bsale 🖋

Bienvenidos mi nombre es Gonsalo Andrés Gajardo Mora 
egresado de la Universidad Tecnológica de Chile Inacap
de la carrera Analista Programador el propósito de este proyecto
es la solución de la prueba técnica de empresas Bsale la cual consiste en crear una Api-Rest y consumirla con JavaScript vanilla.



## Pre-requisitos 📋

- Xampp https://www.apachefriends.org/es/download.html 
- PHP 8.0 
- COMPOSER 2.0 https://getcomposer.org/download/

##  Tecnologias Utilizadas 👨🏽‍💻


- PHP 
- Framework Laravel
- JavaScript

## Comenzando 🚀

Para iniciar el proyecto 
primero debes clonar los repositorios
del Backend y el Frontend.

```
git clone https://github.com/ggajardo90/Test-Bsale-Backend.git
```
```
git clone https://github.com/ggajardo90/Test-Bsale-Frontend.git
```
2.- Ejecturar desde la terminal los siguientes comandos
 de instalación de composer y el archivo .env para la configuracion de las base de datos aportadas por Bsale.

```
composer install
```
```
cp .env.example .env
```
```
php artisan key:generate
```


3.- Correr el proyecto desde la terminal para ejecutar el servidor local de Laravel.
```
php artisan serve
```

## Lista de Endpoint

```
[GET] api/category
[GET] api/product
[POST] api/searchProduc`
```
## Estructura Json

Al realizar una petición HTTP, el servicio retornara un Array de productos con la siguiente estructura:
```
[
    {
        "id": int,
        "name": string,
        "url_image": string,
        "price": int,
        "discount": int,
        "category": int
    },
    {
        "id": int,
        "name": string,
        "url_image": string,
        "price": int,
        "discount": int,
        "category": int
    }
]
```
