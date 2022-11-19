CREATE TABLE `kolesoup_recipe_book`.`recipes` (
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , 
    `title` VARCHAR(191) NULL , 
    `description` TEXT NULL , 
    `total_time` VARCHAR(191) NULL , 
    `difficulty` ENUM('Easy','Medium','Hard') NULL , 
    `user_id` INT(11) UNSIGNED NOT NULL , 
    `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    PRIMARY KEY (`id`), 
    INDEX `user_id` (`user_id`)
) 
ENGINE = InnoDB;