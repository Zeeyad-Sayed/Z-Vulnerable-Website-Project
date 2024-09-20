#!/bin/bash

echo "Stopping the running Docker container..."
docker stop $(docker ps -q --filter "ancestor=vulnerable-website")

echo "\n Building the Docker image..."
docker build -t vulnerable-website .

echo "\n Running the Docker container..."
docker run -d -p 8080:80 vulnerable-website

echo "\n Docker image built and running on http://localhost:8080"


