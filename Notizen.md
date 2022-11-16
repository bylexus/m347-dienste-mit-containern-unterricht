

# Ideen für M347 - Dienste mit Containern

## Grund-Idee

- Aufbau auf dem statischen Web-Projekt vom M293
  - Abgabe von:
    - mkdocs-Skeleton, aber ohne Dockerfile
    - monolithische Mini-App, bestehend aus:
      - statischem Build-System für Frontend
      - Mini-ExpressJS-Server-App für statische Files + Beispiel-API-Route für Formdaten, DB-Connect
- Ausbau zu monolitischer Demo-App (statische Frontend-Files mit Build, Mini-Express-App für Auslieferung, Demo für Form und Kommentare)
- Monolith nach und nach aufbrechen in Microsoervices:
  - Schritt 1: Docker nur für Frontend
  - Schritt 2: API-Service für Formulardaten (Mailversand)
  - Schritt 3: DB-Service für Formulardaten (Eintrag in DB)
  - Schritt 4: Service für Kommentare (API + Backend, Eintrag in DB, Umsetzung als Projektarbeit)
- Abgabe:
  - Applikation bestehend aus mehreren Diensten
  - alles im Repo, als docker-compose
  - prod-builds, also in container verpackte applikationen
  - Applikation mittels mkdocs dokumentiert:
    - Gesamtarchitektur
    - alle Dienste sind dokumentiert:
      - was machen sie? Wie ist die Architektur aufgebaut?
      - wie starten / installieren
      - Testen des Dienstes: Testprotokoll entwerfen und durchführen
  

# Ressourcen:

- From Compose to Kubernetes: https://github.com/kubernetes/kompose
- Docker Monitoring: https://github.com/icecrime/docker-mon
- Traefik Proxy: https://github.com/containous/traefik
- Portainer
- Kubernetes mit Mysql-Beispiel: https://kubernetes.io/docs/tasks/run-application/run-single-instance-stateful-application/
- Security: https://cheatsheetseries.owasp.org/cheatsheets/Docker_Security_Cheat_Sheet.html


## Provisorischer Jahresplan (16 Lektionen)

001: Willkommen, Setup
    - Setup VM / Docker-Setup, git classroom setup/checkout, Hello World docker 
    - Was machen wir?
    - Einführung / Aufgabe Projektarbeit
    - Aufzeigen, was erwartet wird (Abgabe: github, mkdocs, compose-file, db-init)
002: Linux-Schnellbleiche: Verzeichnisbaum, Bewegen im Verzeichnis, wichtige Kommandos, welche es für Docker braucht, Piping, Scripting
003: Grundlagen Container: 
  - Was sind Container? Was ist Docker?
  - Architektur-Übersicht
  - Konzepte: Container, Volumes, Networks, Ports
  - Docker-Hub, erste Images nutzen (docker run, Management-Kommandos), am Beispiel des abgegebenen Monoliths
004: Erstes Image bauen: mkdoks-Image + Container bauen: Dockerfile, COPY, RUN, Container erstellen + laufen lassen. Ziel: Doku-Seite läuft
005: Nochmals Übersicht über Ziel: vom Monolith zur Microservice-Architektur
     - Schritt 1 Umbau: Separieren des Frontends: Bauen des Frontend-Containers, für Dev (mounted volume) und Prod (express app mit gebuildetem HTML)
     - Ziel 1: die Schüler wissen, wie man ein Docker-Container für Entwicklung baut (Volume-Mount, Ports)
     - Aufzeigen der einzelnen Komponenten der Monolith-Architektur
     - Auseinandernehmen in einzelne Services
     - Docker für Frotend soweit umsetzen, dass damit die Frontend-Seite entwickelt und gestartet werden kann
     - Dodker Networks: Separiertes Frontend soll via NodeJS-Proxy mit dem (noch alten) Backend-Dienst kommunizieren können
006: API-Services für Formular-Mailversand:
      - Schüler können die Formulardaten an eine Formular-Micro-App (expressjs) senden (form post)
      - Proxy-Dienst in Frontend-Webserver für api-Zugriff / formpost aufbauen, Networking!
      - docker networks
      - API-Service nimmt Formulardaten entgegen, löst Email aus (nodemailer, mit ethermail)
    ( - In DB speichern: wir bauen den bestehenden Formular-Dienst aus, sodass die Daten in der DB gespeichert werden)
      - Ziel: Schüler wissen über Networks und Sicherheits-Aspekte diesbezüglich bescheid
      - Vorgehen:
        - jetziges Beispiel Form-Service in eigenen Container verpacken
        - Docker-File für Form-Service
        - API-Proxy für Frontend -> Form-Service
        - Front- und Form-Service starten, Port-Freigabe, damit Frontend Zugang erhält
007+008: DB-Service
      - Ziel: API-Service, Einträge in DB
      - Aufbau einer DB (z.b. mittels postgresql) + pgAdmin
      - Ausbau API für DB-Eintrag (pg-promise, mysql)
      - Ziel: docker volumes, docker networks
      - am Beispiel eines Demo-Services werden die Konzepte erklärt
      - wir speichern die Formulardaten in der DB
      - Schüler sollen am Beispiel des Demo-Services in der Lage sein:
        - Ausbau des DB-Teils des Monolith in eigene DB
        - Wechsel von sqlite in-memory nach postgresql
        - via JavaScript-API einen Eintrag zu erfassen und speichern
        - diese mittels 2. API-Call wieder lesen kann (javascript)
        - dies soll mit einem eigenen API-Service umgesetzt werden (Ausbau Micro-Service-Architektur)
        - am Ende sollen die Schüler in der Lage sein, dies selbständig im Rahmen der Projekt-Lektionen
          zu einem Kommentar-Service auzubauen
009: Prod-Build Frontend:
      - Ziel: die Schüler können eine Applikation builden und in den Container verpacken
      - Ziel: alles separiert im Repo, git commit/push, gitignore
      - Am Beispiel der statischen Webseite, mit Multi-Stage-Build:
        - dev-build für statische Files
        - dann diese in 2. stage in prod-image verpacken
      - Am Beispiel eines backend-Services, z.B. Form-Service, mit Multi-Stage-Build:
        - dev-build für Entwicklung
        - dann diese in 2. stage in prod-image verpacken (all-inclusive)
010: Orchestrierung: docker-compose
      - was ist docker-compose?
      - Aufbau compose-File für die Services (frontend, form-api, db)
      - .env-file
011: Wissensprüfung Docker
  - Linux-Basis-Wissen
  - Docker-Konzepte: container, images, networks, volumes
  - Dockerfile-Anweisungen
  - Docker-Compose
012-014: Projektarbeit, Kommentar-Service + Einbau selbständig, mkdocs
  - Doku-Erwartung:
    - System-Architektur aufgezeichnet und erklärt: Services, Zusammenhänge
    - Anleitung zum Starten / Installieren
    - Kurz-Dokumentation zu den einzelnen Service: Funktionsweise, eingesetzte Docker-Konzepte
    - Kurz-Doku zu wichtigen Container-Konzepten: images, container, volumes, networks
    - mkdocs, Teil des Repos
  - Abgabe:
    - github classroom repo
    - inkl. config + db-daten
    - doku
    - muss out-of-the-box lauffähig sein

Projektarbeit:
- Abgabe nach Lektion 14

015, 016: Zusatz:
  - Security:
    - config auslagern: env-vars, config files mounten
    - run as non-root
  - Management-Tools wie portainer, dive
  - am Beispiel eines Cloud-Providers?
  - kubernetes? oder Swarm?




ANDERE IDEE: Was bauen wir?

- MySQL-DB mit zeitbasierten Messwerten:
  - Wetterdaten von openweathermap api
  - Daten des Betriebssystems: CPU Usage, Memory
  - ...? Eigenes?
- PHP-Service, um Daten entgegenzunehmen: Trivial-API für JSON-Daten und/oder post-Daten
- Daten anliefern: simple shell-scripte:
    - cpu: `top -bn2 | grep '%Cpu' | tail -1 | grep -P '(....|...) id,'|awk '{print "CPU Usage: " 100-$8 "%"}'`
    - free mem: `free -m | grep "Mem" | awk '{print $4+$6}'`
    - load generieren: "'

 1: Willkommen, Setup VM / Docker-Setup, Hello World
 2: Linux-Schnellbleiche: wichtige Kommandos, Piping, Scripting
 3: Grundlagen Docker: Architektur, Docker-Hub, erste Images nutzen (docker run, Management-Kommandos)
 4: mkdoks-Image + Container bauen: Dockerfile, COPY, RUN, Container erstellen + laufen lassen
 5+6: Docker für Entwicklungsumgebung nutzen: PHP-Image konfigurieren, kleine App (DB-Connector) entwickeln,
    MySQL-Server erstellen / laufen lassen / mittels Dockerfile konfigurieren, Test mittels Postman
 7+8: Datenlieferanten für unsere Messert-DB-App: Senden von Daten z.B. von openweathermap, website ping time...
      als kleine Container-Apps entwickeln, laufen lassen
 9+10: Paketisieren der Dienste: Erstellen von Prod-Images für PHP-Apps (build, config via env etc.)
 11: Auswertungs-Client: Grafana
12: LB 1: Wissensprüfung? kleines Dockerfile?
13+14: Orchestrierung mit docker compose: Services zusammen konfigurieren, .env, was kommt ins Repo....
15: LB 2: Kleinen Dienst mit Docker compose erstellen. Abgabe: docker-compose + files
16: Docker Swarm: Experiment mit den Teilnehmern (ein Docker Swarm unter den Schülern konfigurieren)


17: 
18: 
19: 
20: 
