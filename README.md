# SistemaControlconESP8266
Simulacion de control de banco de sangre.

Introduccion
El proyecto se basa en simular un sistema de monitoreo o control de banco de sangre.

A modo de ejemplo : https://www.testo.com/es-AR/aplicacion/bancos-de-sangre

En mi computadora tengo el servidor local WAMP (https://www.wampserver.com/en/) , donde hago uso de una base de datos local MySql 
de nombre "iot_resources"  con la tabla "`temperatura`(`id`, `fecha`, `temperatura`, `serie`)" .

'id' es autoincremental
'fecha' se asigna la actual automaticamente  

'temperatura' y 'serie' son los datos que enviara el ESP8266 con algun metodo de envio "POST" o "GET"

Luego se creara una app en android ,una web y otra de escritorio donde consultar la informacion.
Todo esto se trabajara localmente , ya que es un simulacion para practicar el desarollo IoT.

La carpeta "PruebasIot Bdatos" esta alojada en la carpeta "www" en donde esta instalado Wamp.

