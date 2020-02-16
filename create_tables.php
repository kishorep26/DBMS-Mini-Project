<?php
$user='root';
$pass='';
$db='Brick_DB';
$db=mysqli_connect('localhost',$user,$pass,$db);
if($db)
echo('Success');
else
echo('Failed');


$r='create table brick(brick_id int(10) primary key auto_increment,brick_type varchar(50),rate_per_1000 int(10))';
$p=mysqli_query($db,$r);
if($p)
echo('Success');
else
echo('Failed');
$r='insert into brick values(10000,"Concrete Bricks",10500)';
$p=mysqli_query($db,$r);
$r='insert into brick(brick_type,rate_per_1000) values("Fly ash Clay Bricks",12000)';
$p=mysqli_query($db,$r);
$r='insert into brick(brick_type,rate_per_1000) values("Burnt Clay Bricks",12500)';
$p=mysqli_query($db,$r);
$r='insert into brick(brick_type,rate_per_1000) values("Engineering Bricks",13000)';
$p=mysqli_query($db,$r);



$r='create table department(dept_id int(10) primary key auto_increment,dept_name varchar(20),no_of_workers int(5))';
$p=mysqli_query($db,$r);
$r='insert into department values(1000,"making",50)';
$p=mysqli_query($db,$r);
$r='insert into department(dept_name,no_of_workers) values("storage",70)';
$p=mysqli_query($db,$r);
 

$r='create table worker(worker_id int(10) primary key auto_increment,f_name varchar(20),l_name varchar(20),w_name varchar(20),age int(5),gender varchar(10),dept int(10),salary int(10),foreign key(dept) references department(dept_id) on delete cascade)';
$p=mysqli_query($db,$r);




$q='CREATE TRIGGER before_insert BEFORE INSERT ON worker
    FOR EACH ROW
    SET NEW.w_name = CONCAT(NEW.f_name," ",NEW.l_name)';
$sql=mysqli_query($db,$q);
if(!$sql)
{
    echo("Failed to create Trigger\n");
}
else
    echo('Trigger Created\n');



$r = 'create table users(user_id varchar(20), password varchar(20))';
$p = mysqli_query($db,$r);
$r = 'insert into users values("kishore","123")';
$p = mysqli_query($db,$r);

$r = 'create table production(p_date date,brick_id int(10), quantity int(10),brick_type varchar(30), foreign key(brick_id) references brick(brick_id), primary key(p_date,brick_id))';
$p = mysqli_query($db,$r);



$r = 'create table purchase(invoice int(10) primary key auto_increment, p_date date,brick_id int(10),p_name varchar(20), quantity int(10), total_cost int(10),foreign key(brick_id) references production(brick_id), foreign key(p_date) references production(p_date))';
$p = mysqli_query($db,$r);



$r='create table supplies(invoice int(10) unique key, location varchar(20), vehicle_no varchar(20), s_date date, foreign key(invoice) references purchase(invoice))';
$p = mysqli_query($db,$r);


$r='create table account(s_no int(5) primary key auto_increment, a_date date, description varchar(50), credit int(10), debit int(10), balance int(10))';
$p = mysqli_query($db,$r);

$q="CREATE PROCEDURE `get_account`(IN `p1_date` DATE, IN `id` INT(10), IN `p1_name` VARCHAR(20), IN `quantity1` INT(10)) NOT DETERMINISTIC NO SQL SQL SECURITY DEFINER INSERT INTO purchase(p_date,brick_id,p_name,quantity,total_cost) VALUES(p1_date,id,p1_name,qunatity1,(select rate_per_1000*quantity1 FROM brick WHERE brick_id=id)) ";
$p=mysqli_query($db,$q);
?>
