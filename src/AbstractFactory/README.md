# Abstract Factory

Abstract Factory es un patrón de diseño creacional que resuelve el problema de crear familias enteras de productos sin especificar sus clases concretas.

El patrón Abstract Factory define una interfaz para crear todos los productos, pero deja la propia creación de productos para las clases de fábrica concretas. Cada tipo de fábrica se corresponde con cierta variedad de producto.

El código cliente invoca los métodos de creación de un objeto de fábrica en lugar de crear los productos directamente con una llamada al constructor (operador new). Como una fábrica se corresponde con una única variante de producto, todos sus productos serán compatibles.

El código cliente trabaja con fábricas y productos únicamente a través de sus interfaces abstractas. Esto permite al mismo código cliente trabajar con productos diferentes. Simplemente, creas una nueva clase fábrica concreta y la pasas al código cliente.

## Ejemplo del mundo real

En este ejemplo, el patrón Abstract Factory proporciona una infraestructura para crear varios tipos de plantillas para distintos elementos de una página web.

Una aplicación web puede soportar diferentes motores de renderización al mismo tiempo, pero sólo si sus clases son independientes de las clases concretas de esos motores. Por ello, los objetos de la aplicación sólo deben comunicarse con los objetos de plantilla a través de sus interfaces abstractas. Tu código no debe crear los objetos de plantilla directamente, sino delegar su creación a objetos de fábrica especiales. Por último, tu código tampoco debe depender de los objetos de fábrica sino, en su lugar, debe trabajar con ellos a través de la interfaz de fábrica abstracta.

Como resultado, podrás proporcionar a la aplicación el objeto de fábrica que se corresponde con uno de los motores de renderización. Todas las plantillas creadas en la aplicación serán creadas por esa fábrica y su tipo coincidirá con el tipo de la fábrica. Si decides cambiar el motor de representación, podrás pasar una nueva fábrica al código cliente sin descomponer el código existente.

## Articulo original

El articulo original lo puedes encontrar [aca](https://refactoring.guru/es/design-patterns/abstract-factory/php/example#lang-features)

## Mi estructura

- Interfaces
    - PageTemplateInterface.php
    - TemplateFactoryInterface.php
    - TemplateRendererInterface.php
    - TitleTemplateInterface.php
- Factories
    - TwigTemplateFactory.php
    - PHPTemplateFactory.php
- Templates
    - BasePageTemplate.php
    - Twig
        - TwigPage.php
        - TwigRenderer.php
        - TwigTitle.php
    - Php
        - PHPTemplatePage.php
        - PHPTemplateRenderer.php
        - PHPTemplateTitle.php
- Page.php

## Como ejecutar

Copia y pega el contenido del archivo `index.php` de esta carpeta en `public/index.php` y claro solo reemplaza el `phpinfo();`