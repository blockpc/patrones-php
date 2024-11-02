# Bridge

Bridge es un patrón de diseño estructural que divide la lógica de negocio o una clase muy grande en jerarquías de clases separadas que se pueden desarrollar independientemente.

Una de estas jerarquías (a menudo denominada Abstracción) obtendrá una referencia a un objeto de la segunda jerarquía (Implementación). La abstracción podrá delegar algunas (en ocasiones, la mayoría) de sus llamadas al objeto de las implementaciones. Como todas las implementaciones tendrán una interfaz común, serán intercambiables dentro de la abstracción.

## Ejemplos de uso

El patrón Bridge es de especial utilidad para soportar varios tipos de servidores de bases de datos o trabajar con varios proveedores de API de cierto tipo (por ejemplo, plataformas en la nube, redes sociales, etc.).

## Identificación

El patrón Bridge se puede reconocer por una distinción clara entre alguna entidad controladora y varias plataformas diferentes en las que se basa.

## Ejemplo del mundo real

En este ejemplo, la jerarquía Página actúa como Abstracción, y la jerarquía Procesador actúa como Implementación. Los objetos de la clase Página pueden ensamblar páginas web de un tipo particular utilizando elementos básicos proporcionados por un objeto Procesador adjunto a esa página. Al estar ambas jerarquías de clases separadas, puedes añadir una nueva clase Procesador sin cambiar ninguna de las clases Página y viceversa.

## Articulo original

El articulo original lo puedes encontrar [aca](https://refactoring.guru/es/design-patterns/bridge/php/example#example-1)

## Mi estructura

- Abstracts
    - Page.php
- Interfaces
    - Renderer.php
- ConcreteAbstractions
    - SimplePage.php
    - ProductPage.php
- ConcreteImplementations
    - HTMLRenderer.php
    - JsonRenderer.php
- Product.php

## Como ejecutar

Copia y pega el contenido del archivo `index.php` de esta carpeta en `public/index.php` y claro solo reemplaza el `phpinfo();`