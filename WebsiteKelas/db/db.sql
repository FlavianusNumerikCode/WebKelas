-- Tabel Siswa
CREATE TABLE siswa (
  id INT PRIMARY KEY AUTO_INCREMENT,
  nama VARCHAR(64),
  foto VARCHAR(120),
  biodata TEXT,
  poin INT DEFAULT 0,
  level INT DEFAULT 1,
  funfact VARCHAR(120)
);

-- Tabel Soal Kuis
CREATE TABLE soal_kuis (
  id INT AUTO_INCREMENT PRIMARY KEY,
  pertanyaan TEXT,
  opsiA VARCHAR(255),
  opsiB VARCHAR(255),
  opsiC VARCHAR(255),
  opsiD VARCHAR(255),
  jawaban CHAR(1)
);

-- Tabel Hasil Kuis
CREATE TABLE hasil_kuis (
  id INT AUTO_INCREMENT PRIMARY KEY,
  siswa_id INT,
  soal_id INT,
  jawaban CHAR(1),
  benar TINYINT(1),
  tanggal DATETIME
);

-- Tabel Galeri
CREATE TABLE galeri (
  id INT PRIMARY KEY AUTO_INCREMENT,
  foto VARCHAR(120),
  keterangan VARCHAR(120)
);

-- Tabel Jadwal
CREATE TABLE jadwal (
  id INT PRIMARY KEY AUTO_INCREMENT,
  hari VARCHAR(16),
  jam VARCHAR(16),
  mapel VARCHAR(32)
);