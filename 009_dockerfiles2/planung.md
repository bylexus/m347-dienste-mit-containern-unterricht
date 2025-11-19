# Lektion 9 - Eigene Images erstellen
# Definieren des Basis-Images:
FROM <name/version des Basis-Images>

# Anweisungen für die Build-Schritte: Diese Schritte werden nacheinander abgearbeitet.
# Sie definieren die Schritte so, wie Sie sie benötigen
RUN <Linux-Befehl, der im Zwischen-Container ausgeführt wird>
COPY <lokales File/Dir> <Container-File/Dir>
WORKDIR <aktuelles Arbeitsverzeichnis im Container>
ENV <Definieren von Umgebungsvariablen>
ARG <Definieren von Build-Zeit-Variablen>
...

# Container-Start-Kommando (Optional, wenn das Basis-Image dies schon definiert):
CMD [array, mit, kommandos]

## Themen

- eigene Images mit Dockerfiles erstellen
- Wie setzt sich ein Dockerfile zusammen
- Dokumentation zum Dockerfile

## Ziele

- Sie wissen, wie Sie eigene Container-Images erstellen können
- Sie kennen die Rolle von Dockerfiles und die wichtigsten Anweisungen darin
- Sie können angepasste Applikations-Images mit eigenen Dockerfiles erstellen und dokumentieren 
- Sie können eine ganze Applikation in einen Container verpacken


## Unterrichts-Ablauf

2 Einheiten geplant, genug Zeit für Übungen

1. Einstieg Folien: eigene Images erstellen
2. einfaches Beispiel zusammen erstellen
3. Übungen: eigene Images erstellen, Teil 1 (Teil 2 in nächster Woche)
   - Entwicklungscontainer PHP, apache, composer installiert
   - nginx load balancer von vorheriger Übung mit reinkopiertem Config
   - novagallery(https://novagallery.org/): komplexeres Beispiel
   - docsify
   - M293-Build: fertige Webseite builden, in Container packen



## Detailplan

xx:yy Ende

Lektion: xx:xx - yy:yy
Dauer: 90min

| Dauer | Task                                                | Sozform  |
| ----- | --------------------------------------------------- | -------- |
| 10min | Rekapitulation / Fragen beantworten letzter Lektion | zusammen |
| min   | Thema Images erstellen, Dockerfiles                 |          |

