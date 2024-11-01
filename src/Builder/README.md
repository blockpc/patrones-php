# Builder

Builder es un patrón de diseño creacional que permite construir objetos complejos paso a paso.

Al contrario que otros patrones creacionales, Builder no necesita que los productos tengan una interfaz común. Esto hace posible crear distintos productos utilizando el mismo proceso de construcción.

## Ejemplos de uso

El patrón Builder es muy conocido en el mundo PHP. Resulta especialmente útil cuando debes crear un objeto con muchas opciones posibles de configuración.

## Identificación

El patrón Builder se puede reconocer por una clase, que tiene un único método de creación y varios métodos para configurar el objeto resultante. A menudo, los métodos del Builder soportan el encadenamiento 

`algúnBuilder->establecerValorA(1)->establecerValorB(2)->crear()`

## Ejemplo del mundo real

Una de las mejores aplicaciones del patrón Builder es un constructor de una consulta SQL. La interfaz del constructor define los pasos comunes necesarios para construir una consulta SQL genérica. Por otro lado, los constructores concretos, que se corresponden con distintos dialectos SQL, implementan estos pasos devolviendo partes de consultas SQL que se pueden ejecutar en un motor de base de datos particular.

## Articulo original

El articulo original lo puedes encontrar [aca](https://refactoring.guru/es/design-patterns/builder/php/example#lang-features)

## Mi estructura

- Interfaces
    - SQLQueryBuilderInterface.php
- Builders
    - MysqlQueryBuilder.php
    - PostgresQueryBuilder.php

## Como ejecutar

Copia y pega el contenido del archivo `index.php` de esta carpeta en `public/index.php` y claro solo reemplaza el `phpinfo();`