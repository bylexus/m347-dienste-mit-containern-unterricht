# Lektion 5 - Microservices, Container für die Entwicklung

## Themen

- Aufzeigen der einzelnen Komponenten der Monolith-Architektur
- Auseinandernehmen des Front/Backends in einzelne Services
- Docker für Frontend soweit umsetzen, dass damit die Frontend-Seite entwickelt und gestartet werden kann und mit dem
  separierten Backend kommuniziert
- Monnolith entschlanken
- Docker-Image und Container für Docsify
- Docker-Image und Container für den Maildienst

## Ziele

* Sie können mittels **Dockerfiles** Container für die Entwicklung der Applikation bauen
* Sie können Container mit den notwendigen Ressourcen (Bound Volumes, Ports) starten
* Sie wissen, was **Docker Volumes und Bound Volumes** sind, und wann Sie welche verwenden
* Sie können verschiedene Container-Dienste miteinander verbinden (Networking)
* Endziel: Folgende Dienste laufen als separate Container: 
  * Frontend (statische Webseiten) mit Feedback- und Api-Demo-HTML-Seiten
  * bestehender Monolith mit Feedback- und API-Backend 
  * Docsify-Dokumentation
  * (ev., je nach Fortschritt): Maildienst mit smtp4dev, verbunden mit Feedback-Dienst



## Material

- git-Repo https://github.com/bylexus/m347-dienste-mit-containern-code.git
  - Branch 002_dockerfile_mkdocs --> finale Version: 005_frontend_service


## Detailplan


Lektion: xx:xx - yy:yy
Dauer: 90min

| Dauer | Task                                                                | Sozform              |
| ----- | ------------------------------------------------------------------- | -------------------- |
| 10min | 2 Folien "Monolith -> Microservice"                                 | Frontal, Erklärung   |
| 60min | Schülerarbeit: Services anhand Architektur fertigstellen            | Einzelarbeit         |
|       | Ziel: frontend, monolith (bereinigt), docsify mit Dockerfile laufen |                      |
|       | Schüler arbeiten selbständig, ich unterstütze, wo notwendig         |                      |
| 20min | Review, Aufgabe zusammen besprechen / anschauen                     | zusammen, interaktiv |
