# Lektion 5 - Microservices, Container für die Entwicklung

## Themen

Nochmals Übersicht über Ziel: vom Monolith zur Microservice-Architektur

- Schritt 1 Umbau: Separieren des Frontends und Backends: 
  - Trennen des Monolith-Containers in Frontend und Backend, 
  - für Dev (mounted volume)
  - Prod folgt nächstes Mal (express app mit gebuildetem HTML)
- Ziel 1: die Schüler wissen, wie man ein Docker-Container für Entwicklung baut (Volume-Mount, Ports, Networks)
- Aufzeigen der einzelnen Komponenten der Monolith-Architektur
- Auseinandernehmen des Front/Backends in einzelne Services
- Docker für Frontend soweit umsetzen, dass damit die Frontend-Seite entwickelt und gestartet werden kann und mit dem
  separierten Backend kommuniziert

## Ziele

- Sie können mittels Dockerfiles Container für die Entwicklung der Applikation bauen
- Sie können Container mit den notwendigen Ressourcen (Bound Volumes, Networks) starten
- Sie können Container als Entwicklungswerkzeug anwenden
- Sie können verschiedene Container-Dienste miteinander verbinden (Networking)
- Endziel: Sie haben das Frontend (statische Webseiten) als separaten Dienst konfiguriert

Die Schüler versuchen im 1. Teil selbständig, den Frontend-Teil aus dem Monolithen zu extrahieren, und in einen eigenen Service zu verpacken.
Im zweiten Teil schauen wir uns dies an, und erarbeiten die Endlösung gemeinsam, wo dies noch nicht der Fall ist.

**Hinweis**: Der Teil **Networking** (Verbinden Fronten-Proxy mit Monolith) kann auch in der nächsten Lektion durchgenommen werden,
falls dies zeitlich nicht mehr reicht. In der nächsten Lektion wird Networking behandelt.


## Material

- git-Repo https://github.com/bylexus/m347-dienste-mit-containern-code.git
  - Branch 002_dockerfile_mkdocs --> finale Version: 005_frontend_service


## Detailplan


Lektion: xx:xx - yy:yy
Dauer: 90min

| Dauer | Task                                                                              | Sozform              |
| ----- | --------------------------------------------------------------------------------- | -------------------- |
| 10min | 2 Folien "Monolith -> Microservice"                                               | Frontal, Erklärung   |
| 5min  | Erklärung / Abgabe Aufgabe "Frontend-Dienst entwickeln"                           | Erklärung            |
| 35min | Schülerarbeit: Service entwickeln                                                 | Einzelarbeit         |
|       | Ziel: Schüler haben selbständig ein Dockerfile für den Frontend-Dienst entworfen, |                      |
|       | und haben daraus einen Container gebaut, der die statische Site ausliefern kann.  |                      |
| 20min | Review, Aufgabe zusammen besprechen / anschauen                                   | zusammen, interaktiv |
| 20min | (ev. nächstes Mal) Networking: Verbinden mit dem Form+API des Monolithen          | zusammen, interaktiv |

