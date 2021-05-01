CREATE TABLE courses (
course_id char(6) NOT NULL,
name varchar(40),
PRIMARY KEY(course_id)); --wildan-51
nilai int(2),
FOREIGN KEY(npm) REFERENCES mahasiswa(npm),
FOREIGN KEY(kode) REFERENCES matkul(kode)); -- wildan-51

CREATE TABLE students (
student_id char(8) NOT NULL,
name varchar(30),
gender char(1),
address varchar(30),
PRIMARY KEY(student_id)); --wildan-51
FOREIGN KEY(NPM) REFERENCES mahasiswa(NPM),
FOREIGN KEY(noMK) REFERENCES matkul(noMK)); -- wildan-51

CREATE TABLE mahasiswa(
    npm varchar(12) primary key not null,
    nama varchar(30),
    jk tinyint(1),
    alamat varchar(100)
);

SELECT students.name as student_name, courses.name as course_name, ((grades.task*20)/100) + ((grades.mid*30)/100) + ((grades.project*50)/100) as final_grade FROM grades
NATURAL JOIN students NATURAL JOIN courses; --wildan-51

SELECT students.name, courses.name, ((grades.task*20)/100) + ((grades.mid*30)/100) + ((grades.project*50)/100) AS final_grade FROM grades
INNER JOIN students USING(student_id) INNER JOIN courses USING(course_id); --wildan-51

select students.name, courses.name from grades 
inner join students using(student_id) inner join courses using(course_id) 
where (((grades.task*20)/100) + ((grades.mid*30)/100) + ((grades.project*50)/100)) < 75 and grades.attendance_p < 80; --wildan-51

INSERT INTO grades VALUES 
('19549901', 'YYY001', 80, 60, 90, 75),
('19549901', 'YYY002', 70, 100, 88, 77),
('19549902', 'XXX001', 80, 80, 75, 75),
('19549902', 'YYY001', 80, 50, 100, 60),
('19549903', 'XXX002', 100, 100, 70, 70),
('19549903', 'YYY002', 90, 77, 69, 88),
('20551101', 'XXX001', 60, 90, 90, 50),
('20551101', 'XXX002', 80, 75, 60, 85),
('20551102', 'XXX001', 90, 60, 90, 75),
('20551102', 'XXX001', 100, 100, 100, 50); --wildan-51

CREATE TABLE grades(
student_id char(8),
course_id char(6),
attendance_p char(3),
task char(3),
mid char(3),
project char(3),
FOREIGN KEY(student_id) REFERENCES students(student_id),
FOREIGN KEY(course_id) REFERENCES courses(course_id)); --wildan-51

INSERT INTO mahasiswa VALUES
('A001', 'Adistia', 'Bandung'),
('A002', 'Bayu', 'Cirebon'),
('A003', 'Cahya', 'Depok'),
('A004', 'Dadang', 'Sukabumi'),
('A005', 'Eneng', 'Bogor'); --wildan-51

INSERT INTO nilai VALUES
('10296126', 'TI032', 70, 90),
('10296832', 'TI021', 80, 75),
('21196353', 'TI022', 75, 75),
('31296500', 'TI021', 55, 40),
('41296525', 'TI022', 90, 80),
('50096487', 'TI032', 86, 60); --wildan-51

INSERT INTO students VALUES 
('19549901', 'Charlie', 'M', 'New York'),
('19549902', 'Andi', 'M', 'New Mexico'),
('19549903', 'Erlin', 'F', 'Las Vegas'),
('20551101', 'Damian', 'M', 'Los Angeles'),
('20551102', 'Betty', 'F', 'New Orleans'); --wildan-51

INSERT INTO mahasiswa VALUES
('10296001', 'Gani', 'Jatinangor'),
('10296126', 'Eli', 'Jakarta'),
('10296832', 'Jaka', 'Garut'),
('21196353', 'Sisi', 'Majalengka'),
('21198002', 'Tito', 'Bandung'),
('31296500', 'Beni', 'Depok'),
('41296525', 'Putra', 'Bogor'),
('50096487', 'Yunita', 'Bekasi'); --wildan-51
('A004', 'A01', 80),
('A005', 'A02', 60),
('A005', 'A03', 60); --wildan-51

SELECT mahasiswa.nama, ambil.nilai FROM mahasiswa, ambil WHERE mahasiswa.npm = ambil.npm AND ambil.kode = 'A01'
AND ambil.nilai = (SELECT MAX(nilai) FROM ambil WHERE kode = 'A01'); --wildan-51

SELECT npm, nama FROM mahasiswa 
WHERE npm IN (SELECT npm FROM ambil WHERE kode = 'A03' AND nilai > (SELECT AVG(nilai) FROM ambil));

SELECT npm, nama FROM mahasiswa
WHERE npm IN (SELECT npm FROM ambil WHERE NOT kode = 'A01');

SELECT namaMhs, NPM FROM mahasiswa NATURAL JOIN nilai
WHERE UAS >  (SELECT avg(UAS) FROM nilai)

SELECT mahasiswa.namaMhs, mahasiswa.NPM FROM mahasiswa
NATURAL JOIN matkul NATURAL JOIN nilai
WHERE mahasiswa.NPM = nilai.NPM 
AND matkul.noMK = nilai.noMK 
AND matkul.namaMK = 'Etika Profesi'; --wildan-51

SELECT * FROM nilai INNER JOIN mahasiswa 
OM nilai.NPM = mahasiswa.NPM ORDER BY (UTS+UAS);