1. Select * FROM Teachers
2. SELECT * FROM Users
3. SELECT * FROM Courses

-- 4. 
SELECT courses.*

FROM classes ((((join course on course.course_id = classes.course_id)

			  join class_user on class_user.class_id  = classes.class_id)
			  
			  join users on users.user_id = class_user.user_id)
			  
			  join types on types.type_id = users.type_id)
			  
WHERE users.user_name LIKE 'Nguyen Van A'

-- 5.
SELECT user.*
FROM classes ((((
	join course on course.course_id = classes.course_id)

	join class_user on class_user.class_id  = classes.class_id)
		
	join users on users.user_id = class_user.user_id)
		
	join types on types.type_id = users.type_id)
			  
WHERE 
user.id = 1
	courses.course_name = 'Thuc Tap Doanh Nghiep' 
AND course_semester='course_semester' 
AND course_year='course_year'
-- 6
SELECT companies.* FROM courses
	join class on courses.course_id = class.course_id
	join class_users on class.class_id = class_users.class_id 
	-- join users on users.type_id = types.id
	join users on class_users.user_id = users.user_id
	join trainers on trainers.user_id = users.user_id
	join companies on companies.company_id = trainers.company_id
	WHERE 

	-- type_name LIK 'teacher' AND
	-- (users.name LIKE 'Nguyen Van A')
	AND (courses.course_name = 'Thuc Tap Doanh Nghiep')

-- 5.OLD
/* SELECT users.* FROM courses

join classes on courses.course_id = classes.course_id
join class_users on classes.class_id = class_users.class_id 
join users on class_users.user_id = users.user_id
join companies on companies.company_id = trainers.company_id

WHERE courses.course_name = 'Thuc Tap Doanh Nghiep' 
AND course_semester='course_semester' 
and course_year='course_year' */
	
-- join trainers on trainers.user_id = users.user_id
	
-- Liệt kê `sinh viên` học môn `Thực tập doanh nghiệp `
-- do Giảng viên `Nguyễn Văn A ` phụ trách 
-- trong `năm học 2020-2021` `Học kỳ 1`




-- cau 5
SELECT classes.* from users 
-- join types on users.type_id = types.type_id
join class_user on class_user.user_id =  users.user_id
join classes on classes.class_id = class_user.class_id 
join courses on courses.course_id = classes.course_id
WHERE users.user_id = 1
-- AND types.type_name LIKE 'hoc sinh'
AND course.course_semester = '...'
AND course.course_year = '...'

-- cau 4
SELECT courses.* from users 
-- join types on users.type_id = types.type_id
join class_user on class_user.user_id =  users.user_id
join classes on classes.class_id = class_user.class_id 
join courses on courses.course_id = classes.course_id
WHERE users.name like "NGUYEN VAN A"
-- AND types.type_name LIKE 'teacher'





-- f) Liệt kê thông tin công ty thực tập của sinh viên học môn Thực tập doanh nghiệp do Giảng viên Nguyễn Văn A phụ trách trong năm học 2020-2021 Học kỳ 1
Select * from companies 
join trainers on trainers.company_id = companies.company_id
join users on users.user_id = trainers,user_id
join types on users.type_id = types.type_id
join diary on users.user_id = diary.user_id
where types.type_name like "Nguyễn Văn A"

-- g) Liệt kê nhật ký thực tập của sinh viên Nguyễn Văn A /...
SELECT diary.* from diary 
(join users on users.user_id = diary.user_id)
where users.user_name like "Nguyễn Văn A"



-- h) Liệt kê chi tiết nhật ký thực tập của môn học Thực tập doanh nghiệp năm học 2020-2021 Học kỳ 1 /...
SELECT distinct * from diary 
join weeks on diary.diary_id = weeks.diary_id
join diarycontent on weeks.week_id = diarycontent.week_id
where diary.diary_name LIKE "Thực tập doanh nghiệp" AND diary.diary_semester = 1 AND diary.diary_year = "2020 - 2021"


-- i) Liệt kê nhận xét của Giảng viên hướng dẫn về sinh viên Nguyễn Văn B tham gia thực tập năm học 2020-2021 Học kỳ 1 *
SELECT distinct * from diary 
join weeks on diary.diary_id = weeks.diary_id
join diarycontent on weeks.week_id = diarycontent.week_id
where diary.diary_name LIKE "Thực tập doanh nghiệp" AND diary.diary_semester = 1 AND diary.diary_year = "2020 - 2021"

-- j) Liệt kê nhận xét của người hướng dẫn về sinh viên Nguyễn Văn B tham gia thực tập năm học 2020-2021 Học kỳ 1

