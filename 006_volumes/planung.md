# Lektion 6 - Docker Volumes

## Themen

- verschiedene Docker-Volume-Typen anschauen
- wann wird welcher Typ verwendet?
- Beispiele von beiden Typen konfigurieren, Üben
- Zugriff auf Manage Volumes mit Hilfscontainer / Backup

## Ziele

- Sie kennen die Problematik von Daten, die den Lifecycle der Container überleben sollen
- Sie können externe Daten und Speicherplatz für Container bereitstellen
- Sie kennen den Unterschied zwischen Bound Volumes und Managed Volumes und wissen, wann Sie welchen Typ verwenden
- Sie wissen, wie Sie Managed Volumes mittels Hilfscontainer zugreifen / sichern können


## Unterrichts-Ablauf

1. Start mit https://github.com/bpatrik/pigallery2 ohne Volumes, Problematik der persistenten Daten erklären
2. Selben Container konfigurieren mit bound volumes (photos), managed volume (config)
3. Theorie auf Folien, Diagramme zu den Containern
4. Aufbau eines Maria-DB-Containers mit volume, Adminer, verbinden mit Network etc.
5. ---> 2 Lektionen?



## Detailplan

xx:yy Ende

Lektion: xx:xx - yy:yy
Dauer: 90min

Einheit 1 
| Dauer | Task                                                                       | Sozform                    |
| ----- | -------------------------------------------------------------------------- | -------------------------- |
| 10min | Experiment zum Einstieg: Container ohne Persistenz, siehe Folien           | zusammen                   |
| 25min | Theorie: Docker Volumes, Folien                                            | Interaktiv, zusammen       |
| 10min | 2. Experiment zum Einstieg: Container nun MIT Persistenz, siehe Folien     | zusammen                   |
| 45min | Moodle-Aufgaben:                                                           | Einzelarb, Selbst., Moodle |
|       | Erstellen MySQL-Container mit DB + PHPMyAdmin                              | Einzel, zusammen           |
|       | Am SChluss der Lektion Stand abfragen, ev. in nächster Lekton weiterfahren |                            |

Einheit 2
Thema: Volume für Entwicklung
Thema: Zugriff auf Storage von anderen Containern aus, Backup

| Dauer | Task | Sozform |
| ----- | ---- | ------- |



