# Notizen M347 - Dienste mit Containern

Doppellektion am 3.3.2025 / abtausch mit Thomas Graber:

Umbau der Lektion:

- Frontend extrahieren, wie gehabt, aber ohne Reverse Proxy, sondern mittels direktem Zugriff client/dienst und cors()
- 2. Teil / 2. Lektion: Umbau externer Maildienst ethereal zu eigenem Container "smtp4dev". Docker Volume
  für `/smtp4dev`, 
  dann nächste Lektion Anbindung an Netzwerk, ev. noch in dieser Lektion, sonst nächste Lektion.
  smtp4dev: https://github.com/rnwood/smtp4dev/wiki/Installation#how-to-run-smtp4dev-in-docker
  docker run --rm -it -p 8888:80 -p 2525:25 rnwood/smtp4dev

## Anpassungen für nächstes Jahr

- Grundsätzlich: Thema ist sehr komplex, Schüler brauchen mehr Anleitung / Führung

- Frontend-Infrastruktur: 
  - Ohne Reverse-Proxy, sondern direkt Zugriff auf API via CORS
  - Form-Handling via javascript post
- mkdocs: Umbauen: Docsify verwenden ( keine neue Sprache einführen )

- Lektion 9 / Docker-compose:
  - mehr Zeit einplanen, 2 Lektionen, Schüler brauchen Anleitung / Debugging

- Projektarbeit:
  - Projektarbeit wurde von den Schülern als zu aufwändig eingestuft:
    - zu wenig Zeit
    - zu komplex / mit Doku zu viel Aufwand
  - Was man besser machen könnte für nächste API-Klasse:
    - Sicherheits- und Backup-Themen weglassen
    - eine Lektion mehr Zeit
    - bessere Beschreibung der Aufgabenstellung / Abgabevorstellungen
    - Überarbeitung Bewertungskriterien
    - Frontend-Container: feste Vorgabe:
      - nginx / httpd verwenden als Container
      - Webseite als statische Seite in den Container builden
