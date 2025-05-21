pipeline {
    agent any

    environment {
        DOCKER_IMAGE = 'laravel-app'
    }

    stages {
        stage('Clone Repo') {
            steps {
                git branch: 'main', url: 'https://github.com/arifindzaki/LPK-NEW-ERA-.git'
            }
        }

        stage('Clean up existing containers') {
            steps {
                script {
                    bat '''
                    @echo off
                    echo Stopping running containers if any...
                    for /f "delims=" %%i in ('docker ps -q') do (
                        echo Stopping container %%i
                        docker stop %%i
                    )

                    echo Removing all containers if any...
                    for /f "delims=" %%i in ('docker ps -aq') do (
                        echo Removing container %%i
                        docker rm %%i
                    )
                    exit /b 0
                    '''
                }
            }
        }

        stage('Build Docker Image') {
            steps {
                bat 'docker build -t %DOCKER_IMAGE% .'
            }
        }

        stage('Run Docker Container') {
            steps {
                bat 'docker run -d -p 8000:8000 --name laravel-container %DOCKER_IMAGE%'
            }
        }
    }
}
