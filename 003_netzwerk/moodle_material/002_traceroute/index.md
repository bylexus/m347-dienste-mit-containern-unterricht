# Übung zu IP-Routing

IP-Pakete werden über verschiedene Router durch ein Netzwerk, durch das Internet, geleitet ("geroutet"). Wir können dieses Routing lokal zumindest bedingt sichtbar machen.

## Starten des Netzwerk-Utils-Containers

Für diese Übungen benötigen wir DNS-Tools. Diese stellt das Docker-Image `jonlabelle/network-tools` zur Verfügung.

**Starten Sie einen Container dieses Images mit einer Linux-Shell (bash)**:

```
docker run --rm -ti jonlabelle/network-tools bash
```

Danach haben Sie die notwendigen Tools (`ping`, `traceroute`) zur Verfügung.

## Beantworten Sie folgende Fragen

Die folgenden Fragen können Sie mit den Tools `ping` und `traceroute` beantworten. Informieren Sie sich selbständig via Internet, wie die richtigen Kommandos dazu lauten.
Beantworten Sie die Fragen, und geben Sie als Lösung jeweils die Antwort UND das zugehörige Kommando in der Moodle-Abgabe ab!

1. Welche IP-Adresse hat `www.bztf.ch`? Verwenden Sie zum Beantworten (nur) das Tool `ping`. 

2. Wenn Sie nun eine TCP/IP-Verbindung zu `www.sbb.ch` aufbauen (z.B. die Webseite aufrufen), welche Router "passieren" Ihre IP-Pakete, bis sie am Ziel sind? (Hint: Versuchen Sie `traceroute`)

3. Wo (geographisch) liegen diese Zwischen-Router, welche Sie in Aufgabe 2 ermittelt haben, und zu welcher Firma gehören sie? Hinweis: Dazu müssen Sie das Internet befragen...

4. Wieviele "Hops" (Router-Pasagen) brauchen Sie, bis Sie bei `www.bztf` landen? Und: Wieviele Hops benötigen Sie, um den PC Ihres Nachbars zu erreichen?

### (Lösungen, nicht publizieren:)

1. Welche IP-Adresse hat `www.bztf.ch`? Verwenden Sie zum Beantworten (nur) das Tool `ping`. 
   * `ping www.google.ch`


2. Wenn Sie nun eine TCP/IP-Verbindung zu `www.sbb.ch` aufbauen (z.B. die Webseite aufrufen), welche Router "passieren" Ihre IP-Pakete, bis sie am Ziel sind? (Hint: Versuchen Sie `traceroute`)
    * `traceroute -n xxxxx -I`

3. Wo (geographisch) liegen diese Zwischen-Router, welche Sie in Aufgabe 2 ermittelt haben, und zu welcher Firma gehören sie? Hinweis: Dazu müssen Sie das Internet befragen...

--> Geo IP lookup, z.B. https://iplocation.com/

