# Lektion 7/8 - Volumes / Networks - Datenbank-Service

## Themen

Wir extrahieren den API-Demo-Service:

1. in einen eigenen Container / Dienst
2. wir bauen diesen um, sodass er nicht mehr eine In-Memory-Datenbank, sondern
   eine file-basierte (oder optional richtige PostgreSQL-Datenbank) verwendet.
3. Dies ist die Wissensbasis für Ihre spätere Projektarbeit.

Dazu behandeln wir die benötigten neuen Themen: Docker Networks, Docker Volumes:
Wir persistieren die Datenbank-Daten in einem Docker-Volume, und verbinden den Dienst
mittels Network mit unserem Backend-Server.


## Ziele

- Sie kennen das **Networking**-Konzept in Docker und können Dienste via Netzwerk miteinander verbinden
- Sie kennen das **Volumes**-Konzept in Docker und können Daten persistent für Container zur Verfügung stellen
- Sie haben den API-Backend-Dienst vom Monolithen in einen eigenen Container / Dienst "verpackt"
- Der API-Dienst speichert / liest die Daten von einem (persistenten) sqlite/PostgreSQL-Datenbank-Dienst

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

-> Implementation / Setup der persistenten DB erfolgt in der nächsten Lektion

Ablauf:
- Ziel-Architektur aufzeigen
- Frontend-Reverse-Proxy-Konzept zeigen
- Erstellen eigener Docker für Form-Service: server.js extrahieren, Dockerfile: Schülerarbeit
- Form-Container starten, mit Network verbinden: zusammen / nach Anleitung selbständig


Lektion 8: Ziel: 2. Teil persistente SQLite -Datenbank ODER PostgreSQL

--> die Schüler können wählen, ob sie die einfache Variante mit sqlite / named volume, oder
    die komplexere Variante mit PostgreSQL-Datenbank nutzen.

| Dauer | Task                                                 | Sozform              |
| ----- | ---------------------------------------------------- | -------------------- |
| 5min  | Auftrag erklären: Anhand Folien 5-7 von Lektion 7    | Frontal, Erklärung   |
| 70min | Schüleraufgabe Auftrag 1 (Umbau für SQLite):         | Einzelarbeit         |
|       | - Named Volume                                       |                      |
|       | - Config-Anpassung                                   |                      |
| 10min | Zusammenfassen, Hilfestellung                        | gemeinsam, Vorzeigen |
| 5min  | Abschluss,  Stand aufnehmen, für nächstes Mal planen |                      |


--> das Thema hat sich als zu komplex erwiesen, sodass wir auf einen eigenen DB-Service verzichten.
Schüler, welche bereits weiter sind, können aber die Postgresql-Lösung umsetzen, wenn sie wollen.

