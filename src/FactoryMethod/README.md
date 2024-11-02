# Factory Method

Factory method es un patrón de diseño creacional que resuelve el problema de crear objetos sin especificar sus clases concretas.

El patrón Factory Method define un método que debe utilizarse para crear objetos, en lugar de una llamada directa al constructor (operador new).

Las subclases pueden sobrescribir este método para cambiar las clases de los objetos que se crearán.

## Ejemplos de uso

El patrón Factory Method se utiliza mucho en el código PHP. Resulta muy útil cuando necesitas proporcionar un alto nivel de flexibilidad a tu código.

## Identificación

Los métodos fábrica pueden ser reconocidos por métodos de creación, que crean objetos de clases concretas, pero los devuelven como objetos del tipo abstracto o interfaz.

## Ejemplo del mundo real

En este ejemplo, el patrón Factory Method proporciona una interfaz para crear conectores en redes sociales, que pueden utilizarse para iniciar sesión en la red, crear publicaciones y, potencialmente, realizar otras actividades; y todo ello sin acoplar el código cliente a clases específicas de la red social particular.

## Articulo original

El articulo original lo puedes encontrar [aca](https://refactoring.guru/es/design-patterns/factory-method/php/example#example-1)

## Mi estructura

- Abstracts
    - SocialNetworkPoster.php
- Interfaces
    - SocialNetworkConnector.php
- Posters
    - FacebookPoster.php
    - LinkedInPoster.php
- Connectors
    - FacebookConnector.php
    - LinkedInConnector.php

## Como ejecutar

Copia y pega el contenido del archivo `index.php` de esta carpeta en `public/index.php` y claro solo reemplaza el `phpinfo();`