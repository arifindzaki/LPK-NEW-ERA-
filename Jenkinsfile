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
                    // Menggunakan bat untuk Windows
                    bat '''
                    for /f "tokens=*" %%i in ('docker ps -q') do docker stop %%i
                    for /f "tokens=*" %%i in ('docker ps -aq') do docker rm %%i
                    '''
                }
            }
        }

        stage('Build Docker Image') {
            steps {
                bat "docker build -t %DOCKER_IMAGE% ."
            }
        }

        stage('Run Docker Container') {
            steps {
                bat "docker run -d -p 8000:8000 --name laravel-container %DOCKER_IMAGE%"
            }
        }
    }
}
