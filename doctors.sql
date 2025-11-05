USE if0_40339876_doctor_db;

CREATE TABLE doctors (
  id INT AUTO_INCREMENT PRIMARY KEY,
  name VARCHAR(100),
  specialization VARCHAR(100),
  city VARCHAR(100),
  contact VARCHAR(15)
);

INSERT INTO doctors (name, specialization, city, contact) VALUES
('Dr. Asha Patil', 'Cardiologist', 'Pune', '9876543210'),
('Dr. Suresh Shah', 'Dermatologist', 'Mumbai', '9765432109'),
('Dr. Neha Joshi', 'Pediatrician', 'Nashik', '9988776655'),
('Dr. Raj Kulkarni', 'Orthopedic', 'Pune', '9123456789');
