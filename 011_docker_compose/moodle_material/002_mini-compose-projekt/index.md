# Mini-Projekt mit Docker-Compose

## Ziel

Sie erstellen in den nächsten 2 Einheiten ein eigenes Mini-Projekt mit Docker Compose: Ziel ist, dass Sie einen selbstgewählten Dienst mit docker compose erstellen und orchestrieren können. Eine kleine **Dokumentation** dazu geben Sie ab und wird **bewertet** (20% Modul-Anteil).

## Vorgaben

* Wählen Sie ein Projekt, ein Dienst Ihrer Wahl
* Es müssen **mind. 2 Docker-Container** dafür konfiguriert werden (es dürfen aber auch mehr sein).
* die Dienste müssen mit `docker compose` erstellt und orchestriert werden. Sie dürfen bestehende Images nutzen
* **mind. 1 Container muss mittels Dockerfile erstellt/angepasst/konfiguriert werden** (also nicht einfach 2 fertige Images "zusammenstöpseln")
* Sie erstellen eine kleine Dokumentation dazu:
  * **Siehe unten**, ausführliche Beschreibung und Bewertung der Dokumentation

Das Projekt muss so gewählt werden, dass Sie in 2 Einheiten fertig werden!

## Abgabe, Präsentation

Sie geben das ganze Projekt als zip-File mit allen notwendigen Dateien ab. Die Dokumentation (ebenfalls im zip) beschreibt, wie das Projekt in Betrieb genommen werden muss.

Sie stellen das Projekt in ein paar wenigen Minuten im Plenum (oder Ihren Kollegen, das werden wir noch definieren) vor.

## Ideen

Hier ein paar Ideen, was Sie implementieren _könnten_:

* [Wordpress](https://de.wordpress.org/download/)-Installation mit MySQL-Datenbank
* [Nextcloud](https://hub.docker.com/_/nextcloud/)-Instanz
* [Mediawiki](https://www.mediawiki.org/wiki/Manual:Installing_MediaWiki): Erstellen Sie Ihre eigene Wikipedia-Instanz!
* YOURLS URL Shortener: <https://hub.docker.com/_/yourls>
* Bildergalerie mit HomeGallery: <https://github.com/xemle/home-gallery>
* Issue-Tracking-System "Redmine": <https://hub.docker.com/_/redmine/>
* Minecraft-Server (Java)

... und so weiter! Weitere Inspirationen finden Sie auch hier: <https://awesome-docker-compose.com/>

## Vorgaben und Bewertung Dokumentation

Als zusätzliche Modulnote (20%-Anteil am Modul) bewerte ich eine kleine Dokumentation zu Ihrem Projekt, welche Sie als Teil des Projektes abgeben.

### technische Vorgaben

* Sie schreiben die Dokumentation in Markdown (.md)
* Sie wandeln die Markdown-Dokumentation in HTML um (.html). Nutzen Sie dazu ein Werkzeug Ihrer Wahl.
* Sie geben die .md UND die .html-Dokumentation als Teil Ihres Projekt-Zips mit ab.

### Inhaltliche Vorgaben

* kurze Beschreibung, was Ihr Dienst anbietet, was er macht
* How-to (wie starte ich die Dienste, was muss ich tun, damit alles läuft)
* Beschreibung der Architektur
  * Komponentendiagramm der Dienste inkl. Container, Ports, Netzwerke, Volumes, und wie diese zusammenhängen
  * textuelle Beschreibung der einzelnen Container: Was machen sie, welche Rolle haben sie im Projekt
* Kommentieren des eigenen Dockerfiles:
  * Vorgabe ist, dass Sie einen der Dienst-Container mittels eigenem Dockerfile erstellen
  * nennen Sie den Container, das Dockerfile dazu
  * erklären Sie Schritt für Schritt, Zeile für Zeile, was in dem Dockerfile passiert.
* **Umfang**: Ca. 2-3 A4-Seiten

### Abgabe

* Dokumentation im Rohformat (Markdown, .md) UND als fertiges HTML (.html)
* Dokumentation als Teil des Projekt-Zips, welches Sie abgeben

### Bewertung

| Bewertungspunkt                                                        | max. Punkte |
| ---------------------------------------------------------------------- | ----------- |
| .md-File vorhanden                                                     | 1           |
| .html-File vorhanden, alle notwendigen Ressourcen (z.B. Bilder) auch.  | 1           |
| Projektbeschreibung vorhanden und verständlich                         | 2           |
| Howto vorhanden und durchführbar                                       | 2           |
| Architekturdiagramm korrekt und Vollständig, entspricht der Abgabe     | 4           |
| Architekturbeschreibung vorhanden, entspricht und ergänzt das Diagramm | 2           |
| Dockerfile-Erklärung vorhanden, vollständig, korrekt                   | 4           |
| Umfang erfüllt                                                         | 1           |
| Alles abgegeben, gute Rechtschreibung, Formalitäten erfüllt            | 2           |
| **Total**                                                              | **19**      |


