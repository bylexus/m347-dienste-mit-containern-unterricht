# Übung zu Runtime Probing / Health Checks

Um Dienste (Docker-Container) monitoren zu können, muss das System feststellen können, ob diese laufen und wann die Dienste bereit sind.
Ebenso sollen Dienste beim Hochfahren auf andere warten können.

**Beispiel:**

Ihre Web-Applikation macht Datenbank-Abfragen. Diese können aber erst ausgeführt werden, wenn der Datenbankserver bereit ist.

Docker kennt dazu das Konzept der **Health Checks** und **Dependencies** (Abhängigkeiten). Ebenso kann entschieden werden,
ob/wie ein Container neu gestartet wird, sollte er mal abstürzen (**Restart Policies**).

## 1. Unterlagen sichten

Machen Sie sich mit folgenden Konzepten / Einstellungen vertraut:

* Health Checks mit Docker Compose:
  * <https://docs.docker.com/compose/how-tos/startup-order/>
  * <https://docs.docker.com/reference/compose-file/services/#healthcheck>
* Restart Policies: <https://docs.docker.com/engine/containers/start-containers-automatically/>

## 2. Einbau in Ihr Mini-Projekt

Sie haben in Ihrem Mini-Projekt mind. 2 Container, wobei diese bestimmt voneinander abhängig sind.

1. **Finden Sie die Abhängigkeit zwischen Ihren Diensten heraus**<br>
   - Welcher Dienst muss auf welchen anderen Dienst warten?
   - Machen Sie eine Abhängigkeits-Liste oder -Baum (ein "Baum" entsteht dann, wenn ein Dienst auf mehrere andere warten muss, oder umgekehrt, wenn mehrere Dienste auf einen warten müssen)
2. **Konfigurieren Sie für Ihren Dienst:**
   - ein **Health Check Script** für all Ihre Dienste: Für die meisten Dienste gibt es eine Möglichkeit, herauszufinden, ob diese laufen.<br>
     Bsp:<br>
	 ein Web-Server können Sie mittels `curl http://adresse/` abfragen. Für Datenbank-Systeme gibt es meist eigene Kommandos.<br>
	 **Finden Sie heraus, wie Sie die "Gesundheit" Ihrer Dienste prüfen können!**
3. **Konfigurieren Sie die Abhängigkeiten** mittels `depends_on` in Ihrem Projekt!
4. Prüfen Sie nun die Abhängigkeiten und Health Checks - fahren die Container in der richtigen Reihenfolge hoch?

## 3. Prüfen der Restart Policy

Mittels der **Restart Policy** können Sie definieren, ob / wie ein Container neu gestartet wird, sollte er mal crashen.

1. **Konfigurieren Sie eine Restart Policy**, sodass Ihr Container im Fehlerfall neu gestartet wird
2. **Testen Sie dies**:<br>
   Sie können einen Container explizit "abschiessen": Senden Sie ein `kill`-Signal an den Hauptprozess:<br>
   `docker exec <containername> sh -c 'kill 1'`<br>
   Dies "tötet" den Hauptprozess des Containers. Ev müssen Sie etwas experimentieren, um Ihren Container wirklich "abzuschiessen"
3. Beobachten Sie, ob der Container wieder automatisch hochfährt. Sie können dazu das Log in einem separaten Terminal verfolgen:<br>
`docker compose logs -f`