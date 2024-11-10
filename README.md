# AI Demo Project with Laravel and Redis

## Description

This project is a demo setup for an AI-powered application built with Laravel, integrating Redis and Python for efficient data handling and AI model management. The project includes basic functionalities for setting up an AI demo environment with Laravel, focusing on model interactions and storage.

## Features

AI Model Integration: Uses Python and Redis to manage and deploy AI models for demo purposes.
Redis Storage: Stores temporary data for efficient AI model processing and retrieval.
User Dashboard: Provides a basic interface for users to interact with the AI model and view results.
## Requirements

PHP 7.4 or higher
Laravel 8.x or 9.x
Redis
Python 3.11.9
CodeT5 or compatible AI model for text generation
## Installation

Clone the repository to your local machine: ```git clone <repository-url> ```

Navigate to the project directory: ``` cd <project-directory> ```

Install the required dependencies for Laravel: ```composer install ```

Install the required dependencies for Laravel: ```npm install ```

Set up your .env file with Redis and Python configuration settings: ```cp .env.example .env ```

Generate the application key: 
```bash 
php artisan key
```
Start Redis on your local machine.

Start the development server: 
```bash 
npm run dev
```
```bash 
php artisan serve
```
Access the project at http://localhost:8000

## Usage

User Dashboard: Allows interaction with the AI model, running on Python with Redis as the backend for data storage.
AI Interaction: Uses CodeT5 for language generation tasks, managed through Python integration.
## License

This project is licensed under the MIT License - see the LICENSE file for details.
