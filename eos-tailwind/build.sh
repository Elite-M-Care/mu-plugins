#!/bin/bash
#
# Build script for EOS Tailwind Design System
# Usage: ./build.sh [watch|prod]

cd "$(dirname "$0")"

if [ "$1" = "watch" ]; then
    echo "🔍 Starting Tailwind in watch mode..."
    echo "Press Ctrl+C to stop"
    npx tailwindcss -i ./src/tailwind.css -o ./dist/tailwind.css --watch
elif [ "$1" = "prod" ]; then
    echo "🚀 Building Tailwind for production..."
    npx tailwindcss -i ./src/tailwind.css -o ./dist/tailwind.css --minify
    echo "✅ Production build complete!"
else
    echo "🔨 Building Tailwind for development..."
    npx tailwindcss -i ./src/tailwind.css -o ./dist/tailwind.css
    echo "✅ Development build complete!"
fi
