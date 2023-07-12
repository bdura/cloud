FROM python:3.11-alpine

WORKDIR /app

RUN pip install --no-cache-dir pypiserver

EXPOSE 80

ENTRYPOINT [ "pypi-server", "run", "-p", "80", "/app/packages", "-P", ".", "-a", ".", "--hash-algo", "sha256"]
