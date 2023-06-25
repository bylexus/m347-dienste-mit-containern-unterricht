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
  - Branch 009_orchestrierung --> 009_prod_build


## Detailplan


Lektion: xx:xx - yy:yy
Dauer: 90min

| Dauer | Task                                                                             | Sozform              |
| ----- | -------------------------------------------------------------------------------- | -------------------- |
| 5min  | Folien zu Production/Multistage-Builds                                           | Frontal, Erklärung   |
| 5min  | Erklärung / Abgabe Aufgabe "Produktions-Image"                                   | Erklärung            |
| 55min | Schülerarbeit: Multistage-Dockerfile entwickeln                                  | Einzelarbeit         |
|       | Ziel: Schüler haben ein Multistage-Dockerfile für den Frontend-Dienst entwickelt |                      |
|       | welches ein minimales Image mit allen Files beinhaltet.                          |                      |
| 5min  | Review, Aufgabe zusammen besprechen / anschauen                                  | zusammen, interaktiv |
| 20min | Einführung Projektarbeit                                                         | Frontal, Folien      |

