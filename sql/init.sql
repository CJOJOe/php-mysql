-- Create the database mybooks_db
CREATE DATABASE IF NOT EXISTS mybook;

-- Use the database mybooks_db
USE mybook;

-- Create the books table if it doesn't exist
CREATE TABLE IF NOT EXISTS books_info (
  book_id INT AUTO_INCREMENT PRIMARY KEY,
  book_name VARCHAR(255) NULL,
  book_author VARCHAR(255) NULL,
  book_year VARCHAR(255) NULL,
  book_page INT NULL
);