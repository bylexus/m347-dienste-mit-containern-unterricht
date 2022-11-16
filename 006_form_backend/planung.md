# Lektion 6 - Networking, Frontend-Proxy, Form-Service extrahieren

## Themen

Wir extrahieren den Feedback-Service (Form-Endpoint) vom Monolithen in einen eigenen Container.
- Ausbau Form-Service, eigener Container bauen
- Frontend soll mit Form-Sevice via Reverse Proxy kommunizieren (node http proxy)
- Einführung Networking: Frontend-Proxy und Forms-Service sollen miteinander via Docker Network kommunizieren
- Ziel: Schüler wissen über Networks und Sicherheits-Aspekte diesbezüglich bescheid

## Ziele

- Sie kennen das **Networking**-Konzept in Docker
- Sie können Container-Dienste mittels Network miteinander verbinden
- Sie haben aus dem bestehenden Monolithen den Feedback-Formular-Dienst in einen
  eigenen Container extrahiert, welcher vom Frontend-Dienst via Reverse Proxy bedient wird.


## Material

- git-Repo https://github.com/bylexus/m347-dienste-mit-containern-code.git
  - Branch 005_frontend_service --> finale Version: 006_form_service

## Detailplan

Lektion: xx:xx - yy:yy
Dauer: 90min

| Dauer | Task                                                              | Sozform                     |
| ----- | ----------------------------------------------------------------- | --------------------------- |
| 10min | Folien zur gewünschten Ziel-Architektur erklären                  | Frontal, Erklärung          |
| 5min  | Schüleraufabe: Erklärung der Aufgabe                              | Frontal, Erklärung          |
| 60min | Schüleraufabe:                                                    | Einzelarbeit                |
|       | - Container für Feedback-Dienst, Dockerfile                       |                             |
|       | - Feedback-Dienst in eigenen Container extrahieren                |                             |
|       | - mittels Reverse-Proxy und Docker Network verbinden              |                             |
| 15min | Zusammenfassung, Hilfestellung, Durchführen der Schritte zusammen | falls notwendig, Vorführung |


Ablauf:
- Ziel-Architektur aufzeigen
- Frontend-Reverse-Proxy-Konzept zeigen
- Erstellen eigener Docker für Form-Service: server.js extrahieren, Dockerfile: Schülerarbeit
- Form-Container starten, mit Network verbinden: zusammen / nach Anleitung selbständig
