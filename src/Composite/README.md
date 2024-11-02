# Composite

Composite es un patrón de diseño estructural que permite componer objetos en una estructura en forma de árbol y trabajar con ella como si fuera un objeto único.

El patrón Composite se convirtió en una solución muy popular para la mayoría de problemas que requieren la creación de una estructura de árbol. La gran característica del Composite es la capacidad para ejecutar métodos de forma recursiva por toda la estructura de árbol y recapitular los resultados.

## Ejemplos de uso

El patrón Composite se utiliza habitualmente al trabajar con árboles de objetos. El ejemplo más sencillo sería aplicar el patrón a elementos del árbol DOM, trabajando con elementos compuestos y simples del árbol de la misma manera.

## Identificación

El Composite es fácil de reconocer por los métodos de comportamiento que toman una instancia del mismo tipo abstracto/interfaz y lo hacen una estructura de árbol.

## Ejemplo del mundo real

El patrón Composite puede agilizar el trabajo con cualquier estructura recursiva con forma de árbol. El árbol DOM HTML es un ejemplo de dicha estructura. Por ejemplo, mientras varios elementos de entrada pueden actuar como hojas, los elementos complejos como formas y grupos de campo (fieldsets) juegan el papel de compuestos.

Con esto en mente, puedes utilizar el patrón Composite para aplicar varios comportamientos a todo el árbol HTML, del mismo modo que a sus elementos internos, sin acoplar tu código a clases concretas del árbol DOM. Ejemplos de estos comportamientos serían representar los elementos DOM, exportarlos a varios formatos, validar sus partes, etc.

Con el patrón Composite, no tienes que comprobar si se trata del tipo de elemento simple o complejo antes de ejecutar el comportamiento. Dependiendo del tipo de elemento, se ejecuta directamente o se pasa a todos los hijos del elemento.

## Articulo original

El articulo original lo puedes encontrar [aca](https://refactoring.guru/es/design-patterns/composite/php/example#example-1)

## Mi estructura

- Abstracts
    - FormElement.php
    - FieldComposite.php
- FormElements
    - Input.php
    - Fieldset.php
    - Form.php

## Como ejecutar

Copia y pega el contenido del archivo `index.php` de esta carpeta en `public/index.php` y claro solo reemplaza el `phpinfo();`