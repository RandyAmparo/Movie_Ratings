DROP DATABASE IF EXISTS movie_ratings;
CREATE DATABASE IF NOT EXISTS movie_ratings;
USE movie_ratings;

CREATE TABLE ratings(
  critic_id int(11) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  user_name VARCHAR(45) NOT NULL,
  movie_title VARCHAR(45) NOT NULL,
  rating_number DECIMAL(2,1) NOT NULL
);
    
INSERT INTO ratings (user_name, movie_title, rating_number) VALUES
('Alex Rivera', 'Interstellar', 4.8),
('Maya Chen', 'The Batman', 4.2),
('Jordan Lee', 'Inception', 5.0),
('Sofia Martinez', 'Barbie', 4.5),
('Chris Morgan', 'Jurassic Park', 5.0),
('Taylor Brooks', 'The Matrix', 4.7),
('Sam Patel', 'Tenet', 3.3),
('Avery Johnson', 'Avatar', 4.0),
('Jamie Cruz', 'Interstellar', 4.4),
('Casey Wilson', 'The Batman', 3.6);

SELECT * FROM ratings;