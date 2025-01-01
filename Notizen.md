# Notizen M347 - Dienste mit Containern

## Anpassungen für nächstes Jahr

- Grundsätzlich: Thema ist sehr komplex, Schüler brauchen mehr Anleitung / Führung

- Frontend-Infrastruktur: 
  - Ohne Reverse-Proxy, sondern direkt Zugriff auf API via CORS
  - kein HTML Post, sondern ein htmx-Post für das Form / für die Kommentare?
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
