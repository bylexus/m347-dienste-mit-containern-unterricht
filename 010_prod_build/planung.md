# Lektion 6 - Production-Container, Multistage-Builds

## Themen

Prod-Build Frontend:
- Ziel 2: die Schüler können eine Applikation builden und in den Container verpacken
- Ziel: alles separiert im Repo, git commit/push, gitignore
- Am Beispiel der statischen Webseite, mit Multi-Stage-Build:
  - dev-build für statische Files
  - dann diese in 2. stage in prod-image verpacken

## Ziele

- Sie wissen, wie Sie eine Applikation komplett in einen Container "verpacken"
- Sie können Dockerfiles erstellen, welche Ihre Applikation in mehreren Schritten bildet und startet
- Sie wissen, was "Multistage-Builds" sind und für was sie verwendet werden
- **Endziel**:
  - Sie haben einen Production-Build, welcher Ihre gesamte Frontend-Applikation (inkl. statischer Files) beinhaltet


## Material

- git-Repo https://github.com/bylexus/m347-dienste-mit-containern-code.git
  - Branch 005_frontend_service --> 006_prod_build



## Detailplan


Lektion: xx:xx - yy:yy
Dauer: 90min

| Dauer | Task                                                                              | Sozform              |
| ----- | --------------------------------------------------------------------------------- | -------------------- |
| 10min | 2 Folien "Monolith -> Microservice"                                               | Frontal, Erklärung   |
| 5min  | Erklärung / Abgabe Aufgabe "Frontend-Dienst entwickeln"                           | Erklärung            |
| 55min | Schülerarbeit: Service entwickeln                                                 | Einzelarbeit         |
|       | Ziel: Schüler haben selbständig ein Dockerfile für den Frontend-Dienst entworfen, |                      |
|       | und haben daraus einen Container gebaut, der die statische Site ausliefern kann.  |                      |
| 20min | Review, Aufgabe zusammen besprechen / anschauen                                   | zusammen, interaktiv |

