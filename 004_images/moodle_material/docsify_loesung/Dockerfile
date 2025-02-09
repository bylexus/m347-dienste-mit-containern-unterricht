# Wir nehmen das node-js-Docker-Image als Basis:
FROM node:22

# Erst mal aktualisieren wir das Linux-System:
RUN apt-get update && apt-get -y dist-upgrade

# nun installieren wir das Docsify CLI Tool, global:
RUN npm install -g docsify-cli

# Das Workdir ist das Dir, in welches der Container beim Start wechselt
WORKDIR /docs

# Dieses Kommando wird beim Container-Start ausgeführt:
CMD docsify serve --port=10000
