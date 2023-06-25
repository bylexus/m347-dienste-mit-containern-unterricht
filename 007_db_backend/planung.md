# Lektion 7/8 - Volumes / Networks - Datenbank-Service

## Themen

Wir extrahieren den API-Demo-Service:

1. in einen eigenen Container / Dienst
2. wir bauen diesen um, sodass er nicht mehr eine In-Memory-Datenbank, sondern
   eine richtige PostgreSQL-Datenbank verwendet.
3. Dies ist die Wissensbasis für Ihre spätere Projektarbeit.

Dazu behandeln wir die benötigten neuen Themen: Docker Networks, Docker Volumes:
Wir persistieren die Datenbank-Daten in einem Docker-Volume, und verbinden den Dienst
mittels Network mit unserem Backend-Server.


## Ziele

- Sie kennen das **Networking**-Konzept in Docker und können Dienste via Netzwerk miteinander verbinden
- Sie kennen das **Volumes**-Konzept in Docker und können Daten persistent für Container zur Verfügung stellen
- Sie haben den API-Backend-Dienst vom Monolithen in einen eigenen Container / Dienst "verpackt"
- Der API-Dienst speichert / liest die Daten von einem (persistenten) PostgreSQL-Datenbank-Dienst

**Dafür nehmen wir uns 2 Lektionen Zeit, da dies recht viel Stoff beinhaltet.**


## Material

- git-Repo https://github.com/bylexus/m347-dienste-mit-containern-code.git
  - Branch 006_form_service --> finale Version: 007_db_backend


## Detailplan

Lektion: xx:xx - yy:yy
Dauer: 90min

| Dauer | Task                                                            | Sozform              |
| ----- | --------------------------------------------------------------- | -------------------- |
| 10min | Folien zur gewünschten Ziel-Architektur erklären                | Frontal, Erklärung   |
| 5min  | Schüleraufgabe: Extrahieren des API-Dienstes in eigenen Service | Frontal, Erklärung   |
| 60min | Schüleraufgabe:                                                 | Einzelarbeit         |
|       | - Container für API-Dienst, Dockerfile                          |                      |
|       | - API-Dienst in eigenen Container extrahieren                   |                      |
|       | - Frontend darauf "zeigen" (via ReverseProxy)                   |                      |
| 10min | Zusammenfassen, Hilfestellung                                   | gemeinsam, Vorzeigen |
| 5min  | Abschluss,  Stand aufnehmen, für nächstes Mal planen            |                      |

-> Implementation / Setup des Postgres-Dienstes erfolgt in der nächsten Lektion

Ablauf:
- Ziel-Architektur aufzeigen
- Frontend-Reverse-Proxy-Konzept zeigen
- Erstellen eigener Docker für Form-Service: server.js extrahieren, Dockerfile: Schülerarbeit
- Form-Container starten, mit Network verbinden: zusammen / nach Anleitung selbständig


Lektion 8: Ziel: 2. Teil PostgreSQL-Datenbank

| Dauer | Task                                                      | Sozform              |
| ----- | --------------------------------------------------------- | -------------------- |
| 5min  | Auftrag erklären: Anhand Folien 5-7 von Lektion 7         | Frontal, Erklärung   |
| 55min | Schüleraufgabe Auftrag 1 (Postgres-Container erstellen):  | Einzelarbeit         |
|       | - Container für Postgres-Dienst, Dockerfile               |                      |
|       | - Netzwerk konfigurieren                                  |                      |
|       | - Port exponieren                                         |                      |
|       | - PGAdmin installieren, verbinden                         |                      |
| 20min | Schüleraufgabe Auftrag 2 (Umbau API-Service):             | Einzelarbeit         |
|       | - Datenbank-Config anpassen, sodass Postgres genutzt wird |                      |
| 10min | Zusammenfassen, Hilfestellung                             | gemeinsam, Vorzeigen |
| 5min  | Abschluss,  Stand aufnehmen, für nächstes Mal planen      |                      |


