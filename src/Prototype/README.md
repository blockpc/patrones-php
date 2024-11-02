# Prototype

Prototype es un patrón de diseño creacional que permite la clonación de objetos, incluso los complejos, sin acoplarse a sus clases específicas.

Todas las clases prototipo deben tener una interfaz común que haga posible copiar objetos incluso si sus clases concretas son desconocidas. Los objetos prototipo pueden producir copias completas, ya que los objetos de la misma clase pueden acceder a los campos privados de los demás.

## Ejemplos de uso

El patrón Prototype está disponible en PHP listo para usarse. Puedes utilizar la palabra clave clone para crear un copia exacta de un objeto. Para añadir soporte de clonación a una clase, debes implementar un método __clone.

## Identificación

El prototipo puede reconocerse fácilmente por un método clone o copy, etc.

## Ejemplo del mundo real

El patrón Prototype proporciona una forma cómoda de replicar objetos existentes en lugar de intentar reconstruirlos copiando directamente todos sus campos. La vía directa no solo te acopla a las clases de los objetos clonados, sino que además no te permite copiar los contenidos de los campos privados. El patrón Prototype te permite realizar la clonación dentro del contexto de la clase clonada, donde el acceso a los campos privados de la clase no está restringido.

Este ejemplo te muestra cómo clonar un objeto Page (Página) complejo utilizando el patrón Prototype. La clase Page tiene muchos campos privados, que se trasladarán al objeto clonado gracias al patrón Prototype.

## Articulo original

El articulo original lo puedes encontrar [aca](https://refactoring.guru/es/design-patterns/prototype/php/example#example-1)

## Mi estructura

- Page.php
- Author.php

## Como ejecutar

Copia y pega el contenido del archivo `index.php` de esta carpeta en `public/index.php` y claro solo reemplaza el `phpinfo();`