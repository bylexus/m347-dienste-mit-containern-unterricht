# Lektion 4 - Images und Container

## Themen

- Theorie:
  - Was sind Images?
  - wie sind sie aufgebaut? (siehe: docker history)
- Images mit Dockerfiles selber bauen (am Beispiel mkdoks)
- mkdoks-Image + Container bauen: Dockerfile, COPY, RUN, bestehendes mkdocs überführen: Dockerfile für Container erstellen + laufen lassen

## Ziele

* Sie wissen, was 'Container Images' sind
* Sie wissen, wie man eigene Images von Basis-Images ableitet
* Sie wissen, was ein Dockerfile ist und kennen die wichtigsten Dockerfile-Befehle
* Sie können mit einem Dockerfile eigene Images und Container bauen
* Endziel: Sie haben ein Image gebaut, welches mittels mkdocs Ihre Dokumentationsseite ausliefern kann.


## Unterrichts-Ablauf

1. Selbständiges Lesen: Was sind Images, wie sind sie aufgebaut?
2. Einführung Dockerfiles: Kurzes Beispiel zeigen
   1. kurzes Beispiel zeigen
   2. Schüler lesen selbständig Dockerfile-Doc für benötigte Befehle
   3. Schüler bauen selber ein Dockerfile, welches ein Image für mkdocs baut
3. gemeinsame Besprechung, Dockerfile-Analyse



## Detailplan

xx:yy Ende

Lektion: xx:xx - yy:yy
Dauer: 90min

| Dauer | Task                                                                                   | Sozform                       |
| ----- | -------------------------------------------------------------------------------------- | ----------------------------- |
| 10min | Einstieg Images: Schüler [lesen Artikel][1]                                            | Einzelarbeit                  |
| 10min | Wir beantworten die gestellten fragen zusammen                                         | Plenum                        |
| 10min | Einführung Dockerfiles: Anschauen eines einfachen Beispiels. Schüler machen gleich mit | Zeigen auf Folien+Interaktion |
| 40min | Aufgabe: Einlesen in Dockerfile-Dokumentation:                                         | Einzelarb, Selbst.            |
|       | Schüler erhalten Anweisung, um mkdocs-Image mittels Dockerfile zu erstellen            |                               |
|       | Sie lesen sich selbständig in die entsprechenden Dockerfile-Abschnitte ein und setzen  |                               |
|       | dies um                                                                                |                               |
| 20min | Review, Aufgabe zusammen besprechen / anschauen                                        | zusammen, interaktiv          |
|       | Ziel: alle Schüler haben ein Dockerfile für mkdocs ertellt und daraus ein Container    |                               |
|       | zum Laufen gebracht                                                                    |                               |

[1]: https://www.ionos.de/digitalguide/server/knowhow/docker-image/