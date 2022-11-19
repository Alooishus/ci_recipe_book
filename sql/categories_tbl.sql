CREATE TABLE `kolesoup_recipe_book`.`categories` (
    `id` INT(11) UNSIGNED NOT NULL AUTO_INCREMENT , 
    `category_name` VARCHAR(191) NOT NULL , 
    `updated_at` TIMESTAMP on update CURRENT_TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    `created_at` TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP , 
    PRIMARY KEY (`id`)
) 
ENGINE = InnoDB;