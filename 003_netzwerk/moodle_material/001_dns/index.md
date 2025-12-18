# Übung zu DNS

**DNS**, das **Domain Name System**, wandelt für uns lesbare Host-Namen (z.B. `www.bztf.ch`) in IP-Adressen um, sodass IP-Pakete auf den Weg geschickt werden können.

DNS ist ein weltweit verteiltes System aus DNS-Servern. Mit den entsprechenden Tools können wir dies auch "ausfragen".

## Starten des Netzwerk-Utils-Containers

Für diese Übungen benötigen wir DNS-Tools. Diese stellt das Docker-Image `jonlabelle/network-tools` zur Verfügung.

**Starten Sie einen Container dieses Images mit einer Linux-Shell (bash)**:

```
docker run --rm -ti jonlabelle/network-tools bash
```

Danach haben Sie die notwendigen Tools (`nslookup`, `dig`) zur Verfügung.


## Beantworten Sie folgende Fragen

Die folgenden Fragen können Sie mit den Tools `nslookup` und `dig` beantworten. Informieren Sie sich selbständig via Internet, wie die richtigen Kommandos dazu lauten.
Beantworten Sie die Fragen, und geben Sie als Lösung jeweils die Antwort UND das zugehörige Kommando in der Moodle-Abgabe ab!


1. Welche IP-Adresse hat der Host `www.bztf.ch`?

2. Von welchem DNS-Server erhalten Sie (direkt) die Information, welche IP-Adresse `www.bztf.ch` hat?

3. Achtung, Unterschied zu Frage 2:<br> 
   welcher DNS-Server hat diese Zuweisung (www.bztf.ch --> IP-Adresse) gespeichert?

4. Welcher Server (IP des Servers) empfängt Mails für die Domain `bztf.ch` (also z.B. `alexander.schenkel@bztf.ch`)

5. Wie heissen die 12 "höchsten" Root-DNS-Server?




### (Lösungen, nicht publizieren:)

1. Welche IP-Adresse hat der Host `www.bztf.ch`?
   * `nslookup www.bztf.ch`

2. Von welchem DNS-Server erhalten Sie die Information, welche IP-Adresse `www.bztf.ch` hat?
	* im Output von nslookup ist der lokale DNS-Server (docker dns) ersichtlich

3. Achtung, Unterschied zu Frage 2:<br> 
   welcher DNS-Server hat diese Zuweisung (www.bztf.ch --> IP-Adresse) gespeichert?
   * `dig +trace www.bztf.ch`

4. Welcher Server (IP des Servers) empfängt Mails für die Domain `bztf.ch` (also z.B. `alexander.schenkel@bztf.ch`)
   * `dig bztf.ch MX`

5. Wie heissen die 12 "höchsten" Root-DNS-Server?
   * `dig . NS +short`