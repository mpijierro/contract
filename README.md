Este es un código de ejemplo para utilizar invariantes de clase con PHP

Acompaña al artículo siguiente: https://medium.com/@mpijierro/invariantes-de-clase-e588bd84c16e

Los invariantes de clase son propiedades de una clase que tienen que ser conservadas por todas las rutinas de la clase.
Dichas propiedades capturan las propiedades semánticas más profundas y las restricciones de integridad que caracterizan a 
la clase.

En este ejemplo, la clase Product define el invariante de la clase sobre los atributos 'price' y 'name'.
Además, contiene un ejemplo de un método que satisface el invariante de clase y otro no lo hace.

El código utiliza el componente PhpDeal [https://github.com/php-deal/framework] para las anotaciones que definen los 
invariantes.
