pipeline {
    agent { label 'php-agent' }

    stages {
        stage('Checkout') {
            steps {
                checkout scm
            }
        }
        stage('Install Dependencies') {
            steps {
                echo 'Preparing project...'
                sh 'composer install'
            }
        }
        stage('Test') {
            steps {
                echo 'Running tests...'
                sh './vendor/bin/phpunit --configuration phpunit.xml'
            }
        }
    }

    post {
        always {
            echo 'Pipeline completed.'
        }
        success {
            echo 'All stages completed successfully!'
        }
        failure {
            echo 'Errors detected in the pipeline.'
        }
    }
}
