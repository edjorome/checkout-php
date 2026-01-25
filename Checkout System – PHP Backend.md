* Checkout System – PHP Backend



Proyecto backend desarrollado en PHP enfocado en buenas prácticas, separación de responsabilidades y diseño orientado a dominio.



Este sistema simula un flujo de checkout donde se aplican descuentos e impuestos de forma extensible y mantenible.



Objetivo del proyecto



-Aplicar programación orientada a objetos



-Separar la lógica de negocio del flujo de aplicación



-Evitar código acoplado y condicionales por tipo



-Permitir extender reglas de negocio sin modificar código existente



* Arquitectura



El proyecto está organizado en dos capas principales:



-Domain



Contiene toda la lógica de negocio:



-Cálculo de descuentos



-Cálculo de impuestos



-Reglas y validaciones



Se utiliza el Strategy Pattern para permitir agregar nuevos tipos de descuentos o impuestos sin modificar la lógica existente (principio Open/Closed).



-Services



Los servicios actúan como orquestadores:



-Coordinan el flujo del checkout



-Delegan la lógica al dominio



-Mantienen el código desacoplado y testeable



* Tecnologías y conceptos utilizados



-PHP 8



-Programación Orientada a Objetos



-Composer y PSR-4 Autoload



-Strategy Pattern



-Principios SOLID



-Separación Domain / Services



-Código mantenible y extensible



* Ejemplo de uso



$checkoutService = new CheckoutService(

&nbsp;   new PriceCalculator(),

&nbsp;   new TaxCalculator()

);



$total = $checkoutService->checkout(

&nbsp;   100,

&nbsp;   new PercentageDiscount(10),

&nbsp;   new PercentageTax(16)

);



echo $total;



* Testing



El proyecto está preparado para ser testeado con PHPUnit.

Actualmente enfocado en tests unitarios sobre la lógica de dominio.



* Posibles mejoras



-Agregar más estrategias de descuento/impuesto



-Implementar persistencia



-Ampliar cobertura de tests



-Integración con framework (Laravel)



Autor



Proyecto desarrollado por Eduardo Rojas

Backend PHP Developer Junior

