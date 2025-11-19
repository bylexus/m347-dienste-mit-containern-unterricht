# Notizen M347 - Dienste mit Containern

## Idee: Neugestaltung auf SJ 25/26 (ab Februar 26)

Problematik:

* Thema für 1. LJ sehr komplex. Die Schüler kennen die Grundlagen noch nicht:
  * Netzwerk, TCP/IP, HTTP
  * Versionskontrolle, Git
  * generelles Shell-Handling, Bewegen auf der Kommandozeile
* die bestehende LB gibt es nicht mehr laut Modulbaukasten (https://www.modulbaukasten.ch/module/347/1/de-DE?title=Dienst-mit-Container-anwenden&lbv=2)
* die aktuellen Themen passen nicht alle zu den Kompetenzvorgaben (siehe https://www.modulbaukasten.ch/module/347/1/de-DE?title=Dienst-mit-Container-anwenden)

Neu- resp. Umgestaltung des Moduls vorsehen? Ideen?

Was fehlt:

* Fokus mehr auf Vorgaben im Modulbaukasten, bestehende LBV aussuchen, danach gestalten
* kein Auseinander nehmen eines in sich schon komplexen Monoliths, sondern Aufbau von einzelnen
  Teilen einer Applikation anhand einfacher Beispiel und Übungen
* mehr Fokus auf Überführen von Diensten in Container, z.B. selber Zusammenstellen von
  App-Server, DB-Server, ev. Frontend-/Proxy-Server
* Testing, Qualitätssicherung, Dokumentation
* Thema globale Cloud-Plattformen wie Azure, AWS etc.

LB 1: ähnlich erster Wissensprüfung, mit grösserem praktischem Teil:
  Erst Analysieren einer gewünschten Lösung, dann Implementieren:
  "Die erste LB setzt als Schwerpunkt das Containerisieren einer Applikation bestehend aus nur einem Service"
LB 2: "Bei der zweiten LB geht es um die Bestimmung und Umsetzung einer geeigneten Architektur bestehend aus mehreren Services."
  Erstellen eines Dienstes aus mehreren Containern, mit docker compose,
  selbständiges Erarbeiten der Architektur, Umstetzung, Funktionsfähigkeit mit Testkonzept definiert

Ablauf Semester:

1. Grundlagen schaffen:
   1. Linux
   2. Netzwerk: TCP/IP, TCP-Services (Ports), HTTP
   3. Docker-Grundlagen: Konzepte (images, container, Networks, volumes, )
      [1.1, 1.2, 2.1]
   4. bestehende Images anwenden, zusammenhängen (z.B. Web- und DB-Server ab Images, Web/Front-Proxy mit Load-Balancing (nginx))
      Beispiele: Wordpress, Nextcloud, Mediawiki, yourls (url shortener, https://hub.docker.com/_/yourls), moodle
      Image gallery: https://github.com/xemle/home-gallery
      [4.3]
   4. eigene Dienste mit Docker bauen (Dockerfiles, images)
      z.B. Entwicklungsumgebung node / PHP mit db-Anbindung, lokaler Mount
      docsify etc...
      [4.3]
   6. Docker-Dienst konfigurieren / in Betrieb nehmen, dokumentieren (plantuml-Diagramme)
      1. Configs / Env
      2. Netzwerke
      3. Volumes
      4. Containerisieren einer App
      [4.1, 4.2]
      --> Ziel LB 1
2. Docker-Orchestrierung
   1. docker compose
      - volumes: bind, mount
      - netzwerke, Abgrenzung, Sicherheit
   2. QS, Testing, Dokumentation:
      1. Build-Qualität:
         1. dockerfile linting (siehe unten: hadolint)
         2. layer-Optimierung: Image-Grösse-Reduzierung (Untersuchen mit dive),
            multi-stage-builds
         3. Sicherheitslücken (siehe trivy)
      2. QS, Testing: Runtime-Checks:
         1. Healthchecks, readiness probes, dependencies (depends_on)
         2. Resource limits (cpu, memory)
      3. Dokumentation (readme, docker-compose dokumentieren)
      Ein Dockerfile mit hadolint auf Best Practices prüfen (https://github.com/hadolint/hadolint)
      Ein Image mit Trivy auf Sicherheitslücken scannen (https://trivy.dev/, docker run --rm -ti -v /var/run/docker.sock:/var/run/docker.sock aquasec/trivy image biso-ask-dev-db)
      Checkliste für Schüler (als Lernhilfe):
        ✓ Dockerfile folgt Best Practices, ist dokumentiert
        ✓ Keine kritischen Sicherheitslücken im Image
        ✓ Healthchecks definiert
        ✓ Tests vorhanden und bestehen
        ✓ Dokumentation vorhanden und aktuell (README, docker-compose-Kommentare)
        ✓ Resource Limits gesetzt


   3. Preisunterschiede, was kostet es
3. Weiteres:
   1. Konfiguration, Secrets
   2. Wie macht man Datensicherung / persistente Volumes
   3. Einblick in Cloudlösungen wie fly.io, aws, google cloud, azure


Ideen für Compose-Projekte:

https://awesome-docker-compose.com/


## grobe Lektioneneinteilung

ca. 18 Lektionen (ev. nur 17?)

001: Einführung Modul, Setup Docker und erste Tests, ev. plantum-einführung?
002: Einführung Linux (bestehende Lektion übernehmen?)
003: Grundlagen Netzwerk: 
     TCP/IP, Übungen mit Netcat-Container (https://github.com/subfuzion/docker-netcat) (server: docker run --rm -ti --net host subfuzion/netcat -vl 1234, client: docker run --rm -ti --net host subfuzion/netcat 10.2.0.210 1234), hostname/dns --> ip
     Grundlagen PlantUML / Container-Diagramme
004: Docker-Grundlagen, was ist docker etc, docker hub / erste Kommandos / Images starten / interaktive Shell (z.b. anhand einfacher Webserver, php/python/node container) --> bestehende Lektion 003, Anpassen: erstes Beispiel, Inbetriebnahme einer simplen statischen webseite, z.B.
     Architektur mit plantuml aufzeichnen
005: Netzwerke, Verbinden von Containern
     am Beispiel Netcat, 2 http-container mit nginx-front-Proxy / Load-Balancing (schauen, was von den alten Lektionen passt), host lookup per name
     Aufzeichnen der Architektur mit PlantUML
006+007: Volumes, bind/managed volume mount, am Beispiel:
     - simpler debian-Container
     - simpler container mit Möglichkeiten für beide Arten von Volumes: https://github.com/bpatrik/pigallery2
     - MariaDB-Server, Adminer, 
     - mounten eines Demo-DB, Import
     - Backup / Restore mittels Helper-Container
008: Eigene Dockerfiles erstellen:
     - docsify für markdown-docs, lokaler mount
     - Entwicklungscontainer für PHP
     - fertige images mit reinkopieren der app/config, z.B. nginx proxy/webseite
     - Jellyfin (einfacher media server): https://jellyfin.org/docs/general/installation/container/
       Etwas komplexer: https://hub.docker.com/r/linuxserver/piwigo: photo gallerie mit externer mysql-db
     - Docker für Entwicklung Webseite M293
009: Übungen: Images mittels Dockerfile erstellen
      - siehe oben
      - bsp: Entwicklungscontainer für PHP
      - docsify mit lokalen Files
      - Docker für Entwicklung Webseite M293
      - jellyfin
10: LB 1
Aufbau einfacher dienst, z.B. 
https://novagallery.org/ --> eigene Bildergallerie, code in image, gallerie mit bind mount

011: Einführung Docker Compose
    - was ist es, wann wird es benutzt
    - file-format:
      - services
      - networks
      - volumes
      - secrets
012: Miniprojekt: Schüler suchen sich ein eigenes Mini-Projekt aus, in 2 Einheiten umsetzen:
Zusammengesetzt: komplexere setups wie z.B. 
Wordpress, Nextcloud, Mediawiki, yourls (url shortener, https://hub.docker.com/_/yourls), moodle
      Image gallery: https://github.com/xemle/home-gallery, ticket-system wie redmine, z.b.
      auch mit frontend-load-balancer
      - Planen einer Architektur
      - Aufzeichnen / Dokumentation der Architektur mittels PlantUML
      - bsp: Mini-Projekt:
        - docsify für Projektdoku, mit plantuml plugin
        - entwerfen / Dokumentieren mittels plantuml / docsify
        - implementieren eines services, siehe oben für beispiele
Es wird eine Dokumentation erwartet und BEWERTET (20%-Anteil an Modul)

013:
014: L1: Vorstellen/Zeigen Mini-Projekt, L2: 
015:
016: LB 2 (mehrere Dienste, docker compose. ev. frontend: form, backend: form-store + email)
        - z.b.: architektur entwerfen für: M293 mit Formular-Backend-Dienst (was, das einfach Formuladaten entgegennimmt)
          (z.B. Formodoro: <https://github.com/Trel725/formodoro>)
017: Bonusthemen, siehe letztes Jahr
018: Bonusthemen, siehe letztes Jahr


TODO:

+ Jahresplan fertigstellen
- alle Themen erarbeiten
- Lektion 006: Moodle-Übung zum Thema MySQL + PHPMyAdmin erstellen
- Lektion 007: Moodle-Übung zum Thema Mysql-Backup via Hilfscontainer erstellen
- Lektion 008, 009: Moodle-Übungen entwerfen (siehe letzte Folie Lektion 008)
- LB 1 erstellen
- LB 2 erstellen
+ Mini-Projekt (Moodle-Aufgabe 002_mini_compose_projekt): ausführliche Beschreibung und Bewertungsraster für die
  Dokumentation

Stand Unterlagen: Lektion 11 (ohne LBs)



## Anpassungen für nächstes Jahr
