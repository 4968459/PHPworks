CREATE TABLE `mydb`.`people`(
    `id` INT(10) NOT NULL AUTO_INCREMENT,
    `uid` INT(10) NOT NULL DEFAULT `0`,
    `regdate` DATE NOT NULL,
    `remark` TEXT NULL,
    PRIMARY KEY(`id`)
);

ALTER TABLE
    `people` CHANGE `uid` `uid` VARCHAR(10) NOT NULL DEFAULT '0';