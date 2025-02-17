# Development Dockerfile for Angular 18
FROM node:20-alpine

WORKDIR /app

# Install dependencies
COPY package.json package-lock.json ./
RUN npm ci

# Copy application source code
COPY . .

# Expose port 4200 for Angular development server
EXPOSE 4200

# Start Angular development server
CMD ["npm", "run", "start"]