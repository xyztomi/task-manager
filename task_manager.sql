-- Create database for Task Manager
CREATE DATABASE IF NOT EXISTS task_manager;
USE task_manager;

-- Table for Tasks
CREATE TABLE IF NOT EXISTS tasks (
    id INT AUTO_INCREMENT PRIMARY KEY,
    description TEXT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Sample data for Task Manager
INSERT INTO tasks (description) VALUES 
('Buy groceries'),
('Complete homework'),
('Call the plumber');
