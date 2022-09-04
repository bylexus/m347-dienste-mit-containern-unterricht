# Lektion 3 - Grundlagen Container

## Themen

- Was sind Container? Was ist Docker?
- Architektur-Übersicht
- Konzepte: Container, Volumes, Networks, Ports
- Docker-Hub, erste Images nutzen (docker run, Management-Kommandos), am Beispiel des abgegebenen Monoliths

## Ziele

- Sie wissen, was 'Linux Container' sind
- Sie kennen die grundlegende Architektur von Containern
- Sie kennen den Unterschied zu virtuellen Maschinen
- Sie können selber bestehende Images vom Docker Hub laden und in Betrieb nehmen

## Unterrichts-Ablauf

1. Theorieblock: Container, Docker, Architektur, Konzepte
2. Praxis: Docker-Hub, bestehende Images laufen lassen:
   1. getting-started-Docker
   2. Apache Web-Server für statische Seite: Schüler sollen
      selber herausfinden, wie ihre Seite von einem Apache-Image angezeigt werden kann:
      - Apache HTTP Image in Betrieb nehmen
      - Port mapping
      - lokaler Volume Bind
      - Container-Start
   3. Zusammen anschauen, in Betrieb nehmen


## Detailplan

xx:yy Ende

Lektion: xx:xx - yy:yy
Dauer: 90min

| Dauer | Task                                                                                   | Sozform              |
| ----- | -------------------------------------------------------------------------------------- | -------------------- |
| 20min | Einstieg Container, Folien                                                             | Vortrag              |
| 10min | Wichtige Docker-Kommandos anschauen                                                    | Interaktiv, zusammen |
| 30min | Aufgabe: Erstellen eines Apache-HTTP-Containers mit M293-Seite                         | Einzelarb, Selbst.   |
|       | Schüler erarbeiten Wissen selbständig aus Internet                                     |                      |
|       | Notwendiges Wissen: Shared Volume, Port mapping, Container-Start                       |                      |
| 20min | Review, Aufgabe zusammen besprechen / anschauen                                        | zusammen, interaktiv |
|       | Ziel: alle Schüler können die eigene Seite mit dem http-Image als Container definieren |                      |
