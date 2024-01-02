# Detailplan Lektion 1

## Infrastruktur

* Jeder Schüler hat Docker lokal installiert, oder nutzt die abgegebene VM
* Github Classroom Repo für jeden Schüler, mit Template aus (github classroom url), beinhaltet:
  * Starter-Repo: https://github.com/bylexus/m347-dienste-mit-containern-starter
  * Classroom URL: <https://classroom.github.com/classrooms/50485268-m347-in22-26c>
  * Assignement URL: <https://classroom.github.com/classrooms/50485268-m347-in22-26c/assignments/m347>
  * Invitation URL: <https://classroom.github.com/a/G8tDzbCY>
  * Inhalt:
    * `mkdocs`-Template
    * Web-Infrastruktur aus M293 (static site build)
    * einfache api für form-daten (nodejs, ein server.js)

## Material

* Jahresplan (Moodle)
* Projekt-Beschrieb (Moodle)
* Github Classroom-Repos parat
* Projekt-Skelett (Code, Repo)
* Infos zum Setup auf Moodle:
  * VS Code: https://code.visualstudio.com/
  * git: SourceTree (https://www.sourcetreeapp.com/)
  * Github classroom Invitation URL: 

**ACHTUNG!** Seit Mitte August 2021 muss ein Personal Access Token für github erstellt werden, um
auf github repositories zuzugreifen:

https://docs.github.com/en/github/authenticating-to-github/keeping-your-account-and-data-secure/creating-a-personal-access-token

Linux: Einfacher geht es mit einem ssh public key, den man auf dem Github-Profil hinterlegt

## Ziele

* Jahresplan: Sie kennen die wichtigsten Daten des Jahres
* Sie kennen die Aufgabenstellung der Projektarbeit
* Sie haben eine lauffähige Entwicklungsumgebung, und das Projekt-Skelett funktioniert

## Detailplan

| Zeit         | Task                                                                                      |
| ------------ | ----------------------------------------------------------------------------------------- |
| ( 5min )     | Begrüssung, Beschreibung des Moduls, Ziel                                                 |
| ( ca. 5min ) | Jahresplan, Hinweise auf Prouektarbeit und Abgabetermine, Moodle                          |
| (rest)       | Setup Entwicklungsumgebung mit Docker                                                     |
|              | * Schüler installieren Docker lokal                                                       |
|              | * ssh-key generieren, in github hinterlegen, oder access token generieren                 |
|              | * Clone des Classroom-Repos (github authentication sicherstellen (access token, ssh key)) |
|              | * Test der Infrastruktur:                                                                 |
|              | ** Start des Monolith-Servers mittels Docker                                              |
|              | ** VS Code mit PlantUML                                                                   |
| Ende         |

Ziel
----

- Alle Schüler haben das Skeleton-Projekt von Git Classroom geklont
- Alle Schüler haben eine lauffähige Entwicklungsumgebung mit Docker
- Alle Schüler konnten das Skeleton-Projekt mit Docker in Betrieb nehmen
