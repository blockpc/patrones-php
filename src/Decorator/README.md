# Decorator

Decorator es un patrón de diseño estructural que permite añadir dinámicamente nuevos comportamientos a objetos colocándolos dentro de objetos especiales que los envuelven (_wrappers_).

Utilizando decoradores puedes envolver objetos innumerables veces, ya que los objetos objetivo y los decoradores siguen la misma interfaz. El objeto resultante obtendrá un comportamiento de apilado de todos los wrappers.

## Ejemplos de uso

El patrón Decorator es bastante común en el código PHP, especialmente en el código relacionado con los flujos (streams).

## Identificación

El patrón Decorator puede ser reconocido por métodos de creación o el constructor que acepta objetos de la misma clase o interfaz que la clase actual.

## Ejemplo del mundo real

En este ejemplo, el patrón Decorator te ayuda a construir reglas complejas de filtrado de texto para limpiar el contenido antes de representarlo en una página web. Los distintos tipos de contenido, como comentarios, publicaciones en foros, o mensajes privados, requieren distintos grupos de filtros.

Por ejemplo, aunque quieras eliminar todo el HTML de los comentarios, quizá desees mantener algunas etiquetas HTML básicas en publicaciones en el foro. Además, puede que quieras permitir publicar en formato Markdown, que debe procesarse antes de que se realice el filtrado HTML. Todas estas reglas de filtrado pueden representarse como clases decoradoras separadas, que se pueden apilar de otra forma, dependiendo de la naturaleza del contenido que tengas.

## Articulo original

El articulo original lo puedes encontrar [aca](https://refactoring.guru/es/design-patterns/decorator/php/example#example-1)

## Mi estructura

- Interfaces
    - InputFormat.php
- Texts
    - TextInput.php
    - TextFormat.php
- Decorators
    - PlainTextFilter.php
    - DangerousHTMLTagsFilter.php
    - MarkdownFormat.php

## Como ejecutar

Copia y pega el contenido del archivo `index.php` de esta carpeta en `public/index.php` y claro solo reemplaza el `phpinfo();`