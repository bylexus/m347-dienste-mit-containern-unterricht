# Detailplan Lektion 3 - Netzwerk-Grundlagen

## Infrastruktur

* Jeder Schüler hat Docker lokal (unter Windows, Docker for Windows) installiert
* kein Starter-Projekt. Wir bauen alles im Unterricht, keine Projektarbeit.


## Material

* VS Code: https://code.visualstudio.com/
* PlantUML mit VS Code: jebbs.plantuml-Plugin
* PlantUML-Docker, um VS Code-Plugin gleich damit zu verbinden (<https://hub.docker.com/r/plantuml/plantuml-server/>)

## Ideensammlung

Schüler haben im 1. LJ noch nicht gross Ahnung von TCP/IP, Netzwerk etc. Sie wissen nicht, was ein "Port" ist, wenn wir im Docker-
Context davon reden.
Diese Lektion soll ihnen die absoluten Basics beibringen, damit sie wissen, von was wir reden, wenn wir von Hosts, Ports, IP-Adressen etc.
reden.

Themen / Vorgehen:

1. Leitfrage: Was muss (in Ihrem Computer, sonstwo) alles geschehen, dass Sie im Browser eine gewünschte Webseite angezeigt bekommen?
2. Grundlagen anhand OSI-Schichtenmodell (<https://de.wikipedia.org/wiki/OSI-Modell#/media/Datei:ISO-OSI-7-Schichten-Modell_(in_Deutsch).svg>)
3. Begriffe abgeben, Schüler müssen Reihenfolge erarbeiten und diese erklären
4. Experimente mit network-tools-Container gegen aussen
   1. host / dns lookup mit dig
   2. ping / traceroute (traceroute -n google.ch -I (-I --> icmp echo, geht viel besser/schneller))
   3. nmap -sT google.ch
5. Kommunikation von 2 Containern über Ports
  netcat, nmap, dig, im gleichen netzwerk,
6. Aufzeichnen mittels plantuml


003: Grundlagen Netzwerk: 
    docker run --rm -it jonlabelle/network-tools
     TCP/IP, Übungen mit Netcat-Container (https://github.com/subfuzion/docker-netcat) (server: docker run --rm -ti --net host subfuzion/netcat -vl 1234, client: docker run --rm -ti --net host subfuzion/netcat 10.2.0.210 1234), hostname/dns --> ip
     Grundlagen PlantUML / Container-Diagramme

## Ziele

Netzwerk-Grundlagen für das Verständnis von Container-Diensten kennenlernen

* Sie kennen die grundlegenden Begriffe rund um Netzwerk-Technologien
* Sie kennen die Begriffe "TCP", "IP", "TCP-Port", "DNS", "Hostname", "Router/Routing" und können diese grob erklären
* Sie wissen, wie Netzwerk-Dienste  und Clients über TCP/IP miteinander kommunizieren können


## Detailplan

| Zeit                         | Task                                                                                      |
| ---------------------------- | ----------------------------------------------------------------------------------------- |
| 1. Lektion                   | Quiz: von der URL zur Webseite:                                                           |
| 30min                        | Begriffe und Bilder rund um TCP/IP/Request/Routing etc. verteilen                         |
| (15min Aufbau, 15min Bespr.) | Schüler bringen diese in eine Reihenfolge für die Leitfrage und erklären diese            |
|                              | und verbinden diese mit Bildern zu  einem Diagramm                                        |
|                              | 2 Folien als Erklärung TCP/IP                                                             |
| ---------------------------- | ----------------------------------------------------------------------------------------- |
| (rest 1. Lektion)            | Übung DNS-Lookup mit dig                                                                  |
|                              | Übung IP-Routing-Verfolgung mit Traceroute                                                |
|                              | Übung Port-Inspektion mit nmap                                                            |
|                              | Übung TCP-Service mit nc (netcat)                                                         |
|                              | Übung TCP-Service mit nc, 2 Schüler verbinden ihre PCs                                    |
| ---------------------------- | ----------------------------------------------------------------------------------------- |
| 2. Lektion                   | Übungen siehe oben                                                                        |
| ---------------------------- | ----------------------------------------------------------------------------------------- |
| 5 min vor Schluss            | Zusammenfassung, Wichtig für Sie / für Container: grundlegendes Verständnis TCP/IP, Ports |
| ---------------------------- | ----------------------------------------------------------------------------------------- |
| Ende                         |                                                                                           |
| ---------------------------- | ----------------------------------------------------------------------------------------- |


## Quiz und Begriffe

Leitfrage: 

Was muss (in Ihrem Computer und ausserhalb) alles geschehen, dass Sie im Browser eine gewünschte Webseite angezeigt bekommen?

Versuchen Sie, die Bilder/Icons, Begriffe und Vorgänge richtig anzuordnen
und mit Pfeilen zu verbinden

Erklären Sie den Ablauf, die Begriffe und Vorgänge!

Siehe File [web-requests.drawio](./web-requests.drawio)


Vorgänge:                            Begriffe

- DNS-Anfrage                        - DNS-Server
                                     - Host-Name
                                     - IP-Address-Lookup
- TCP-Pakete versenden               - Ethernet-Switch
                                     - Internet
- IP-Route finden
- TCP-Paket weiterleiten             - IP-Router
                                     - Paket-Routing
- TCP-Verbindung aufbauen            - TCP-Port
                                     - IP-Adresse
                                     - TCP-Dienst
- Web-Request erstellen              - HTTP Request
                                     - URL
                                     - Client/Browser

Icons  / Bilder


- Browser
- DNS-Server
- Router (3x)
- Server
- Internet-Wolke

