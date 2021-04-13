CREATE TABLE `employee_info` (
    id int NOT NULL AUTO_INCREMENT,
    name varchar(191) NOT NULL,
    salary int,
    PRIMARY KEY (id)
);
INSERT INTO `employee_info` (`id`, `name`, `salary`) VALUES (NULL, 'Alan', '60000');
INSERT INTO `employee_info` (`id`, `name`, `salary`) VALUES (NULL, 'Alex', '64000');
INSERT INTO `employee_info` (`id`, `name`, `salary`) VALUES (NULL, 'Charli', '23000');
INSERT INTO `employee_info` (`id`, `name`, `salary`) VALUES (NULL, 'Sarah', '78000');
