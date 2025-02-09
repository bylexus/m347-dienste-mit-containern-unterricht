# Lektion 5 - Microservices, Container für die Entwicklung

## Themen

Nochmals Übersicht über Ziel: vom Monolith zur Microservice-Architektur

- Schritt 1 Umbau: Separieren des Frontends und Backends: 
  - Trennen des Monolith-Containers in Frontend und Backend: eigener Container für Frontend
  - Einführen Volume-Konzept: bind mount, volume mounts
  - für Dev (mounted volume)
  - für prod (copy des html in den container)
  - Prod folgt nächstes Mal (express app mit gebuildetem HTML)
- Ziel 1: die Schüler wissen, wie man ein Docker-Container für Entwicklung baut (Volume-Mount, Ports, Networks)
- Aufzeigen der einzelnen Komponenten der Monolith-Architektur
- Auseinandernehmen des Front/Backends in einzelne Services
- Docker für Frontend soweit umsetzen, dass damit die Frontend-Seite entwickelt und gestartet werden kann und mit dem
  separierten Backend kommuniziert

## Ziele

* Sie können mittels Dockerfiles Container für die Entwicklung der Applikation bauen
* Sie wissen, was Docker Volumes und Bound Volumes sind, und wann Sie welche verwenden
* Sie können Container mit den notwendigen Ressourcen (Bound Volumes, Ports) starten
* Sie können Container als Entwicklungswerkzeug anwenden
* Sie können verschiedene Container-Dienste miteinander verbinden (Networking)
* Endziel: Sie haben das Frontend (statische Webseiten) als separaten Dienst konfiguriert

**Doppellektion, 2x2 Lektionen**

1. 2 Lektionen:
  - Ziel aufzeigen: Extrahieren Frontend in eigenen Container / statischen Webserver
  - 2 Möglichkeiten für Daten/statische Webseite: bound volume, in Image builden
    - Konzept Volumes erklären: Bound volume
    - Schüler erstellen eigenen Container mit httpd-Daemon, und bringen ihre statische Webseite zum Laufen
2. 2 Lektionen:
  - Ziel aufzeigen: Eigener Email-Dienst mit smtp4dev als Container
  - Konzept docker volume
  - Schüler versuchen, Container zu starten, und port gegen aussen zu exponieren.
  - Thema: Backup von Docker Volume besprechen: Hilfs-Container für Backups erstellen
  - Netzwerk kommt nächstes 

Die Schüler versuchen im 1. Teil selbständig, den Frontend-Teil aus dem Monolithen zu extrahieren, und in einen eigenen Service zu verpacken.
Im zweiten Teil schauen wir uns dies an, und erarbeiten die Endlösung gemeinsam, wo dies noch nicht der Fall ist.

**Hinweis**: Der Teil **Networking** wird in der nächsten Lektion durchgenommen werden. In der nächsten Lektion wird Networking behandelt.


## Material

- git-Repo https://github.com/bylexus/m347-dienste-mit-containern-code.git
  - Branch 002_dockerfile_mkdocs --> finale Version: 005_frontend_service


## Detailplan


Lektion: xx:xx - yy:yy
Dauer: 90min

Lektion 1+2
| Dauer | Task                                                                              | Sozform              |
| ----- | --------------------------------------------------------------------------------- | -------------------- |
| 10min | 2 Folien "Monolith -> Microservice"                                               | Frontal, Erklärung   |
| 10min | Recherchen Schüler zum Thema Bound Volume, Data Copy                              | Selbst. Arbeit       |
| 5min  | Erklärungen Schüler zum Thema (je 1 Schüler drannehmen)                           | zusammen             |
| 5min  | Erklärung / Abgabe Aufgabe "Frontend-Dienst entwickeln"                           | Erklärung            |
| 35min | Schülerarbeit: Service entwickeln                                                 | Einzelarbeit         |
|       | Ziel: Schüler haben selbständig ein Dockerfile für den Frontend-Dienst entworfen, |                      |
|       | und haben daraus einen Container gebaut, der die statische Site ausliefern kann.  |                      |
| 20min | Review, Aufgabe zusammen besprechen / anschauen                                   | zusammen, interaktiv |

Lektion 3+4
| Dauer | Task                                                                                       | Sozform              |
| ----- | ------------------------------------------------------------------------------------------ | -------------------- |
| 10min | 2 Folien "eigener Maildienst / Docker Volumes"                                             | Frontal, Erklärung   |
| 5min  | Erklärung / Abgabe Aufgabe "Eigener maildienst"                                            | Erklärung            |
| 45min | Schülerarbeit: Service entwickeln                                                          | Einzelarbeit         |
|       | Ziel: Schüler haben selbständig smtp4dev in Betrieb genommen, mit Ports und managed volume |                      |
| 15min | Review, Aufgabe zusammen besprechen / anschauen                                            | zusammen, interaktiv |
| 15min | Thema Backup von bound volume                                                              | zusammen, interaktiv |
