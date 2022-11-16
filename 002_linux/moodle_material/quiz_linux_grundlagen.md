# Linux-Grundlagen

## Beschreibung

Das folgende Quiz dient dazu, dass Sie sich selbständig mit den Linux-Shell-Grundlagen vertraut machen können.

* Recherchieren Sie im Internet, damit Sie die Fragen beantworten können
* Diskutieren Sie mit dem Nachbarn!
* Versuchen / Spielen Sie mit Ihrem Ubuntu-Container!

## Fragen

### Linux-Verzeichnisbaum

(Multiple Choice)

Was ist der grösste Unterschied vom Windows-Dateisystem / Verzeichnisbaum zum Linux-Dateisystem / Verzeichnisbaum?

Feedback:
in Linux gibt es den so genannten "Wurzel-Knoten", auch "root-Folder" genannt. Er wird mit "/" adressiert. Windows hat mehrere "Top Levels", nämlich die einzelnen "Drives".

* Es gibt keinen. Beide funktionieren genau gleich. (falsch)
* Windows hat keinen "Top-Level-Folder" (Ordner), sondern einzelne "Drives". Linux hat einen einzigen "Top-Level-Folder, "root" genannt. Beide kennen aber Dateien und Ordner. (richtig)
* Windows kennt Ordner und Dateien, Linux nicht: in Linux gibt es nur "inodes". (falsch)

### Verzeichnisbaum untersuchen

(Multiple Choice)

Führen Sie in Ihrem Ubuntu-Container das Kommando

tree -d -L 2 /

aus. Was zeigt Ihnen das Programm an?

Feedback:

`tree` zeigt grundsätzlich den Dateibaum an, ob mit oder ohne Dateien, und wie tief, kann konfiguriert werden.
Das Kommando `tree --help` zeigt Ihnen eine detaillierte Anleitung mit allen Schaltern.


- Eine Liste von Dateien im Wurzel-Verzeichnis, welche mind. 2 Zeichen lang sind (falsch)
- Den Inhalt des Home-Verzeichnis des Benutzers, wenn mind. 2 Dateien vorhanden sind (falsch)
- Alle Verzeichnisse (ohne Dateien) im Root-Folder (/), bis zu einer Tiefe von 2 Unter-Verzeichnissen (richtig)
- Die aktuelle Prozessor-Auslastung von max. 2 Prozessoren (falsch)


### Bewegen im Dateibaum 1

(Kurzantwort)

Aktuelles Verzeichnis wechseln:
Sie möchten in Ihrer Shell in das Verzeichnis '/home/myuser/myfolder' wechseln. Wie lautet das korrekte (vollständige)  Kommando dazu?


- cd /home/myuser/myfolder

### Bewegen im Dateibaum 2

(Kurzantwort)

Sie befinden sich in Ihrer Shell im Folder '/home/myuser/subfolder1/subfolder2'. Nun möchten Sie in den eins höheren Ordner, subfolder1, wechseln. Wie lautet das korrekte (vollständige) Kommando dazu?

- cd ..
- cd /home/myuser/subfolder1


### Bewegen im Dateibaum 3

(Kurzantwort)

Sie haben eine Shell geöffnet, aber Sie wissen aktuell nicht, in welchem Ordner in der Dateistruktur sie sich befinden.
Welches Kommando zeigt Ihnen, wo Sie sich aktuell im Verzeichnisbaum befinden?

- pwd

### Verzeichnisse 1

(Kurzantwort)

Sie befinden sich in Ihrem Home-Verzeichnis (/home/myuser), und möchten einen Ordner mit Unter-Ordner anlegen:
/home/myuser/subfolder1/subfolder2. Wie lautet das EINE Kommando, mit dem Sie diese Struktur erstellen können?

- mkdir -p subfolder1/subfolder2
- mkdir -p /home/myuser/subfolder1/subfolder2

### Verzeichnisse 2

(Kurzantwort)

Sie befinden sich in Ihrem Home-Verzeichnis (/home/myuser), und möchten den Ordner "subfolder1" inkl. Inhalt und allfälliger
Unter-Ordner löschen. Wie lautet das Kommando dazu?

- rm -r subfolder1
- rm -rf subfolder1
- rm -r /home/myuser/subfolder1
- rm -rf /home/myuser/subfolder1

### Dateien 1

(Kurzantwort)

Sie möchten die Datei /etc/apt/sources.list in Ihr Home-Verzeichnis kopieren. Wie lautet die Anweisung dazu?

- cp /etc/apt/sources.list $HOME
- cp /etc/apt/sources.list ${HOME}
- cp /etc/apt/sources.list /home/myuser
- cp /etc/apt/sources.list .

### Inhalt sichten 1

(Kurzantwort)

Sie möchten den Inhalt der Datei /etc/apt/sources.list ausgeben / anzeigen (nicht editieren). Wie lautet das / ein Kommando dazu? (Hinweis: dies kann auf ganz viele Arten gelöst werden: Recherchieren Sie hier die Befehle `less` und `cat`)

- cat /etc/apt/sources.list
- less /etc/apt/sources.list
- cat /etc/apt/sources.list | less
- cat /etc/apt/sources.list | more

### Inhalt sichten 2

(Kurzantwort)

Sie möchten den Inhalt der Datei /var/log/bootstrap.log ausgeben / anzeigen (nicht editieren). Die Datei hat aber
nicht Platz auf einer Bildschirmseite, und Sie möchten alles sehen. Was haben Sie für Möglichkeiten (Kommandos angeben!)?

- cat /var/log/bootstrap.log | less
- cat /var/log/bootstrap.log | more
- less /var/log/bootstrap.log
- more /var/log/bootstrap.log

### Zählen 1

(Kurzantwort)

Sie möchten wissen, wieviele Zeilen die Datei /var/log/bootstrap.log beinhaltet. Wie lautet das Kommando dazu?

- wc -l /var/log/bootstrap.log
- cat /var/log/bootstrap.log | wc -l

### Output Redirect 1

(Kurzantwort)

Sie möchten die Ausgabe von `tree -L 2 -d /` nicht auf dem Bildschirm sehen, sondern wollen diese in eine Datei, `filetree.txt`, speichern. Wie lautet das Kommando dazu? Hinweis: `tree` selber kennt KEINE Option, um die Ausgabe in eine Datei zu speichern!

- tree -L 2 -d / > filetree.txt

### Piping 1

(Kurzantwort)

Sie möchten die Ausgabe von `tree /` auf dem Bildschirm sehen, die Ausgabe ist aber viel zu lange! Sie möchten alles sehen,
und auch Hin- und Herscrollen können. Wie lautet das vollständige Kommando dazu? (Hinweis: Hier geht es um die Kombination der Befehle `tree` und `less`, aber wie?)

- tree / | less

### Piping 2 (Advanced)

(Kurzantwort)

Das folgende Kommando gibt Ihnen alle Dateien (ohne Verzeichnisse) mit der Dateigrösse aus:

find / -type f -printf "%s %p\n"

Erstellen Sie ein Kommando, welches eine Liste der 10 grössten Dateien mit deren Grösse ausgibt, die grösste zuoberst!
Hinweise: Sie benötigen dazu weitere Kommandos: `sort` und `head`: Versuchen Sie dies mit dem `find`-Befehl zu kombinieren!

- find / -type f -printf "%s %p\n" | sort -nr | head -n 10

### apt-Paketmanager

(Kurzantwort)

`apt` ist der Paket-Manager unter debian-basierten Linux-Systmen (Debian, Ubuntu, Mint, ...).
Installieren Sie das Paket `cowsay` mit apt.

Wie heisst / heissen die dazu notwendigen Kommandos?

Nach der Installation sollten Sie folgendes ausführen können:

```
docker> /usr/games/cowsay 'Mooooh!'
```

- apt-get update && apt-get install -y cowsay
