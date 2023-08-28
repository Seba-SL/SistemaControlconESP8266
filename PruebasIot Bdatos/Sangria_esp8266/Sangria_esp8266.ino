#include <ESP8266WiFi.h>
#include <ESP8266WebServer.h>
#include <ESP8266HTTPClient.h>
#include <ESP8266WiFiMulti.h>


const char *ssid = "RT5390_1-plus";
const char *password = "papasfritas525"; 

const char* host = "localhost";

void connectionWifi();

void setup() 
{

  Serial.begin(115200);

   Serial.println("WiFi configurado como estacion");
  WiFi.mode(WIFI_STA);
  WiFi.begin(ssid,password);

  Serial.print("Conectando...");
  while(WiFi.status() != WL_CONNECTED)
  {
    delay(500);
    Serial.print(".");
  }

  Serial.println("\nWifi listo");


}

int value = 0;

void loop() 
{
  delay(2000);
  ++value;
   //declaro los objetos a utilizar
  WiFiClient client;
  HTTPClient http;
  const int httpPort = 80;

  Serial.print("Conectandose a :");
  Serial.print(host);

  if(!client.connect(host,httpPort))
  {
	Serial.println("conexion fallida");
	return;
  }else 	Serial.println("\nse conecto wachin\n");

  String url = "http://10.10.10.7/PruebasIot%20Bdatos/";
  String data = "serie=777&temp=33";

  Serial.print("Requesting URL:");
  Serial.println(url);



  client.print(String("POST ") + url + " HTTP/1.1" + "\r\n" + 
               "Host: " + host + "\r\n" +
               "Accept: */*" + "*\r\n" +
               "Content-Length: " + data.length() + "\r\n" +
               "Content-Type: application/x-www-form-urlencoded" + "\r\n" +
               "\r\n" + data);   

  delay(10); 

Serial.println("Respond: ");

while(client.available())
{
	String line = client.readStringUntil('\r');
	Serial.print(line);
}

Serial.println();

Serial.println("Close conection");

  


}

void connectionWifi()
{
  Serial.println("WiFi configurado como estacion");
  WiFi.mode(WIFI_STA);
  WiFi.begin(ssid,password);

  Serial.print("Conectando...");
  while(WiFi.status() != WL_CONNECTED)
  {
    delay(500);
    Serial.print(".");
  }

  Serial.println("\nWifi listo");

}
