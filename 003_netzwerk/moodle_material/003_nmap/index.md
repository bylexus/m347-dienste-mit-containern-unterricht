# Übung zu TCP-Ports

TCP-Dienste werden unter so genannten "Ports" (TCP-Ports) angeboten: Ein Programm kann auf einem TCP-Port eine Verbindung zur Verfügung stellen, welche dann über das Netzwerk erreicht werden kann:

Eine TCP-Anfrage / TCP-Paket wird über IP an einen Dienst-Port geleitet.

Wir wollen die TCP-Dienste etwas genauer anschauen.

## Starten des Netzwerk-Utils-Containers

Für diese Übungen benötigen wir DNS-Tools. Diese stellt das Docker-Image `jonlabelle/network-tools` zur Verfügung.

**Starten Sie einen Container dieses Images mit einer Linux-Shell (bash)**:

```
docker run --rm -ti jonlabelle/network-tools bash
```

Danach haben Sie die notwendigen Tools (`nmap`, `netcat`) zur Verfügung.

## Beantworten Sie folgende Fragen

Die folgenden Fragen können Sie mit den Tools `nmap` und `netcat` beantworten. Informieren Sie sich selbständig via Internet, wie die richtigen Kommandos dazu lauten.
Beantworten Sie die Fragen, und geben Sie als Lösung jeweils die Antwort UND das zugehörige Kommando in der Moodle-Abgabe ab!

**Hinweis**: Bei dieser Übung müssen Sie nichts abgeben - sie dient dem Experimentieren.

1. Offene Ports: `nmap` ist ein Netzwerk-Scanner, der ganz unterschiedliche "Dinge" über Netzwerk-Dienste herausfinden kann. Unter anderem kann er bei einen Server "abklappern", welche TCP-Ports geöffnet sind (also hinter welchem TCP-Port ein Programm auf Verbindung wartet).

    Mit `nmap -sT -n -T5 [hostname/IP]` ermittelt nmap die gängigen, offenen TCP-Ports eines Hosts. Ermitteln Sie die offenen Ports von:

	- `www.google.ch`
	- `www.bztf.ch`
	- Ihre lokale IP-Adresse
	- Die IP-Adresse Ihres Nachbarn/Ihrer Nachbarin

2. TCP-Ports nutzen / bedienen:
   
    Sie können TCP-Port-Dienste auch direkt "verbinden", und, wenn Sie das Protokoll kennen, damit Daten austauschen. Gut geeignet dafür ist das HTTP-Protokoll (Web-Requests), da das Protokoll auch Menschen-Les- und Schreibbar ist.

	Versuchen Sie, mittels `netcat` den TCP-Port eines HTTP-Servers zu verbinden (Port 80), und dann eine Webseite abzuholen!

	```
	# Verbinden auf TCP-Port:
	netcat www.bztf.ch 80

	# dann können Sie Daten hin- und herschicken:
	GET / http/1.1
	Host: bztf.ch
	(2x enter)
	```

	Frage: Versuchen Sie dasselbe auf den https-Port (443). Warum klappt dies nicht?

