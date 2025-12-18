# Übung - Echo Server

Für diese Übung müssen Sie sich einen Partner suchen, mit dem Sie zusammen eine TCP-Verbindung aufbauen können:

1. Ein Kandidat startet einen Container mit einem TCP-Server auf dem Host-Netzwerk
2. ein zweiter Kandidat startet einen Container und baut mittels `netcat` eine Verbindung als TCP-Client auf
3. Dadurch haben Sie einen kleinen "Echo-Server" oder "Chat-Server" gebaut!


## Anleitung für Server-Seite

1. Finden Sie Ihre lokale IP-Adresse heraus! (Windows: z.B. mittels `netstat /all`). Schalten Sie einen ev. laufenden lokalen Firewall ab!
2. Starten Sie einen Container mit den Network-Tools:

    `docker run --rm -ti -p 9999:9999 jonlabelle/network-tools bash`

	Wichtig ist hier vor allem der Schalter `-p 9999:0000`: Das exponiert den Container-Port 9999 auf Ihrem Host-Port 9999.

3. Starten Sie den TCP-Echo-Server mit Netcat:

    `nc -vl 9999`

	Das startet Netcat, öffnet einen TCP-Port auf 9999, und wartet auf einkommende Daten, welche der Dienst dann einfach wieder retourniert (= echo)

## Anleitung für Client-Seite

1. Finden Sie die IP-Adresse Ihres Kameraden heraus.
2. Starten Sie einen Container mit den Network-Tools:

    `docker run --rm -ti jonlabelle/network-tools bash`

3. Prüfen Sie mittels nmap, ob der gewünsche Port beim Kameraden geöffnet ist:

    `nmap -sT -p 9999 192.168.xxx.yyy`
	
4. Starten Sie Netcat als TCP-Client, und verbinden Sie die IP / den Port des Kameraden:

    `nc 192.168.xx.yy 9999`


Nun haben Sie einen kleinen Chat-/Echo-Server! Tippen Sie in die Konsole, und schauen Sie, was auf der Gegenseite passiert!



