
{% extends "../_base_template.html" %}
{% block title %}Lektion 2 - Linux-Basics{% endblock %}

{% block sections %}
<section data-markdown>
<textarea data-template>
# <i class="fas fa-graduation-cap"></i> M347 - Linux-Shell-Basics

## Heutiges Ziel


002: Linux-Schnellbleiche: Verzeichnisbaum, Bewegen im Verzeichnis, wichtige Kommandos, welche es für Docker braucht, Piping, Scripting

</textarea>
</section>

<section data-markdown>
<textarea data-template>
# <i class="fas fa-graduation-cap"></i>

Themen:

- Docker bash mit ubuntu
- Einführung Shell: Was ist das?
- gleich mit Beispiel einsteigen:
  - docker run --rm -ti ubuntu
  - apt update && apt install tree less
  - tree -d / | less
- Verzeichnisbaum:
  - Aufbau
  - Bewegen (cd)
  - Anlegen (mkdir / touch)
  - löschen (rm)
  - Kopieren / Verschieben (cp, mv)
- Paketmanager von debian-basierten Systemen
  - apt, apt update, apt search, apt upgrade, apt install (cowsay, figlet, sl (/usr/games/sl))
- Piping, Redirecting
  - Pipe-Operator
  - File-Redirects

</textarea>
</section>
</section>
{% endblock %}
