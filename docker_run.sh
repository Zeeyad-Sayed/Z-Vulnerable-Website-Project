#!/bin/bash

echo "Stopping the running Docker container..."
docker stop $(docker ps -q --filter "ancestor=vulnerable-website")

echo "Building the Docker image..."
docker build -t vulnerable-website .

echo "Running the Docker container..."
docker run -d -p 8080:80 vulnerable-website

echo "Docker image built and running on http://localhost:8080"

echo "Adding any changes to git and pushing..."
git add .
git commit -m "New changes and improvement"
git push -f origin main
