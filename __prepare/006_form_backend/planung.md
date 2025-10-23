# Lektion 6 - Networking, Frontend-Proxy, Form-Service extrahieren

## Themen

Wir extrahieren den Feedback-Service (Form-Endpoint) vom Monolithen in einen eigenen Container.
- Ausbau Form-Service, eigener Container bauen
- Frontend soll mit Form-Sevice direkt kommunizieren (cors, ohne Reverse Proxy)
- für Schüler, welche eine VueJS / Nuxt-App entwickeln:
  - Forms-service ebenfalls separat
  - Entweder ebenfalls direkt kommunizieren (via Client)
  - oder kleinen Server-Side-Dienst bauen, der mit dem Forms-Service kommuniziert
- Einführung Networking: Frontend-Proxy und Forms-Service sollen miteinander via Docker Network kommunizieren
- Dazu Aufbau des eigenen Mail-Dienstes (smtp4dev), und Feedback-Dienst damit verbinden
- Ziel: Schüler wissen über Networks und Sicherheits-Aspekte diesbezüglich bescheid

## Ziele

- Sie kennen das **Networking**-Konzept in Docker
- Sie können Container-Dienste mittels Network miteinander verbinden
- Sie haben aus dem bestehenden Monolithen den **Feedback-Formular-Dienst in einen
  eigenen Container extrahiert**, welcher von der Client-App aus (Browser) direkt angesprochen werden kann
- Sie haben einen **eigenen Mail-Dienst (anstatt ethereal) gebaut** und den Feedback-Dienst mit diesem verbunden


## Material

- git-Repo https://github.com/bylexus/m347-dienste-mit-containern-code.git
  - Branch 005_frontend_service --> finale Version: 006_form_service

## Detailplan

Lektion: xx:xx - yy:yy
Dauer: 90min

| Dauer | Task                                                                                      | Sozform                     |
| ----- | ----------------------------------------------------------------------------------------- | --------------------------- |
| 10min | Folien zur gewünschten Ziel-Architektur erklären                                          | Frontal, Erklärung          |
| 5min  | Erklärung der Schüler-Aufgabe                                                             | Frontal, Erklärung          |
| 60min | Schüleraufabe:                                                                            | Einzelarbeit                |
|       | - Container für Feedback-Dienst, Dockerfile                                               |                             |
|       | - Feedback-Dienst in eigenen Container extrahieren                                        |                             |
|       | - smtp4dev als Docker-Container bereitstellen, mit Network mit dem Forms-Dienst verbinden |                             |
|       | - forms/Feedback-Dienst umkonfigurieren, damit er den smtp4dev-Host benutzt               |                             |
| 15min | Zusammenfassung, Hilfestellung, Durchführen der Schritte zusammen                         | falls notwendig, Vorführung |


Ablauf:
- Ziel-Architektur aufzeigen
- Frontend-Reverse-Proxy-Konzept zeigen
- Gemeinsam: Reverse-Proxy http-proxy gemeinsam konfigurieren.
- Erstellen eigener Docker für Form-Service: server.js extrahieren, Dockerfile: Schülerarbeit
- Form-Container starten, mit Network verbinden: zusammen / nach Anleitung selbständig

Notizen: 

- für die meisten Schüler ist dies noch zu komplex - wir werden die nächste Lektion (DB mit Postgres)
vereinfachen / API-Dienst und Form-Dienst zusmamenfassen.


