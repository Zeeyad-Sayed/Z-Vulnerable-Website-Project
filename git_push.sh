#!/bin/bash

echo "Adding any changes to git and pushing..."
git add .
git commit -m "New changes and improvement"
echo "Force pushing to main branch..."
git push -f origin main
