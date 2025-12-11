# Übung zu Best Practices, Linting, Security-Checks

Zu professionell entwickelten Containern gehört auch das Einhalten von "**Best Practices**" sowie das 
**Prüfen von Sicherheitslücken** in Ihren Images.

## Best Practices

Beim Entwickeln von Dockerfiles gibt es Vorgehensweisen und Dinge, die Sie beachten sollten, wenn Sie eigene Images mit Dockerfiles kreieren.

Docker hat dazu auch Guidelnes dokumentiert:

<https://docs.docker.com/build/building/best-practices/>

Ein Tool, welches diese Empfehlungen prüft, ist **hadolint**:

<https://github.com/hadolint/hadolint>

Unter **"Linting"** versteht man das Analysieren von Code zum Einhalten von Best Practices, Formatierungs-Vorgaben, etc.

1. Installieren Sie **hadolint**, wie auf der Projektseite beschrieben (oder laden Sie das Docker-Image)
2. Prüfen Sie das / die Dockerfile(s) Ihres Mini-Projektes, oder eines anderen Projektes mittels `hadolint`
3. Verstehen Sie den Output des Tools? Schlagen Sie gegebenenfalls im Netz nach, was gemeint ist!
4. Korrigieren Sie Ihr Dockerfile, wenn Sie sinnvolle Findings erhalten haben.


## Security Scans

**Trivy** ist ein Vulnerability Scanner für Code, Konfiguration, Container-Images und -Deployments. Es scannt Ihr Projekt nach bekannten Security-Lücken, offenen Geheimnissen (Passwörter, API-Keys etc.) oder Fehlkonfigurationen, und gibt dieses aus:

<https://trivy.dev/>


1. Installieren Sie **trivy**, wie auf der Projektseite beschrieben (oder laden Sie das Docker-Image)
2. Lassen Sie eines Ihrer Images durch den Scanner laufen, und prüfen Sie den Output
3. Verstehen Sie den Output des Tools? Schlagen Sie gegebenenfalls im Netz nach, was gemeint ist!
4. Gibt es Dinge, die Sie korrigieren / aktualisieren können? Gibt es Security-Findings, die Sie "flicken" können? Wenden Sie diese an!




