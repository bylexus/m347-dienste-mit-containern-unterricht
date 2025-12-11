# Übung Resource Limits

Container benötigen ebenfalls CPU- und Memory, um ihre Aufgabe zu erfüllen. Was aber, wenn diese "heiss" laufen?

Damit die Container nicht gleich das ganze Host-System lahmlegen, können Sie die zur Verfügung stehenden Ressourcen limitieren.

Dazu dienen die "**Resource Constraint"**-Einstellungen:

<https://docs.docker.com/engine/containers/resource_constraints/>

Diese können Sie ebenfalls im `docker compose`-File konfigurieren:

Siehe <https://docs.docker.com/reference/compose-file/deploy/>


## Setzen Sie Limiten und Reservationen!

### CPU-Limiten

1. Definieren Sie eine maximale Anzahl CPUs - z.B. 1, in einem Ihrer Container
2. Starten Sie die Container, und prüfen Sie dies:<br>
   Führen Sie `docker inspect <containername>` aus, und suchen Sie nach dem Wert `NanoCpus`: Das ist die maximale Anzahl Nano-CPU's (als 1/10^9 CPU-Anteile), die der Container nutzen darf (0 = keine Limite).
3. Setzen Sie den Wert mal auf etwas Kleines - z.B. `cpus: 0.1`, und schauen Sie, wie sich Ihr Container verhält!

### Memory-Limiten

Dasselbe können Sie mit dem zur Verfügung gestellten Hauptspeicher machen. Versuchen Sie, ob Ihr Container sich an die Memory-Limiten hält: Limitieren Sie das Memory eines Ihrer Container auf z.B. `20mb`, und schauen Sie, was passiert!

### Sinnvolle Reservationen und Limiten finden

Sie sollten auf jeden Fall sinnvolle Reservationen ( = soviel MUSS der Container unbedingt haben) und Limiten ( = diese Limite DARF der Container NICHT überschreiten) setzen.

Versuchen Sie, sinnvolle Werte für Ihre Applikationen zu finden! Schauen Sie, z.B. mittels `docker top`, wieviel Ressourcen Ihre Container im "Normalfall" benötigen, und setzen Sie die Limiten (nicht zu knapp!) entsprechend.
