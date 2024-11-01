# Adapter

Adapter es un patrón de diseño estructural que permite colaborar a objetos incompatibles.

El patrón Adapter actúa como envoltorio entre dos objetos. Atrapa las llamadas a un objeto y las transforma a un formato y una interfaz reconocible para el segundo objeto.

El Adapter permite que objetos con interfaces incompatibles trabajen juntos. Esto puede ser útil cuando queremos utilizar una clase existente en nuestro programa, pero su interfaz no coincide con la que necesitamos.

## Ejemplos de uso

El patrón Adapter es muy común en el código PHP. Se utiliza muy a menudo en sistemas basados en algún código heredado. En estos casos, los adaptadores crean código heredado con clases modernas.

## Identificación

Adapter es reconocible por un constructor que toma una instancia de distinto tipo de clase abstracta/interfaz. Cuando el adaptador recibe una llamada a uno de sus métodos, convierte los parámetros al formato adecuado y después dirige la llamada a uno o varios métodos del objeto envuelto.

## Ejemplo del mundo real

El patrón Adapter te permite utilizar clases de terceros o heredadas incluso aunque sean incompatibles con el grueso de tu código. Por ejemplo, en lugar de reescribir la interfaz de notificación de tu aplicación para que soporte todos los servicios de terceros, como Slack, Facebook, SMS u otros, puedes crear un grupo de envoltorios especiales que adaptan las llamadas desde tu aplicación a una interfaz y formato requerido por cada una de las clases de terceros.

## Articulo original

El articulo original lo puedes encontrar [aca](https://refactoring.guru/es/design-patterns/adapter/php/example#lang-features)

## Mi estructura

- Interfaces
    - NotificationInterface.php
- Notifications
    - EmailNotification.php
    - SlackNotification.php
- SlackApi.php

## Como ejecutar

Copia y pega el contenido del archivo `index.php` de esta carpeta en `public/index.php` y claro solo reemplaza el `phpinfo();`